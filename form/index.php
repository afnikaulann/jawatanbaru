<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Permohonan Bantuan MADANI</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: #e9edf5;

    display: flex;
    justify-content: center;
    align-items: center;

    min-height: 100vh;

    /* sebelumnya 20px → kita kecilkan */
    padding: 12px 14px;
}

/* CARD */
.card {
    background: #fff;
    width: 100%;
    max-width: 420px;

    border-radius: 22px;
    padding: 30px;

    /* SHADOW LEBIH HIDUP */
    box-shadow: 
        0 20px 40px rgba(0,0,0,0.08),
        0 5px 15px rgba(0,0,0,0.05);

    /* efek floating halus */
    transform: translateY(0);
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-3px);
}

/* TITLE */
.title {
    text-align: center;
    font-weight: 700;
    color: #2b4ea2;
    font-size: 22px;
}

.subtitle {
    text-align: center;
    font-size: 14px;
    color: #6c757d;
    margin-bottom: 20px;
}

/* ALERT BOX */
.alert-box {
    background: #d8edf0;
    padding: 12px;
    border-radius: 10px;
    font-size: 13px;
    text-align: center;
    margin-bottom: 20px;
}

/* LABEL */
.label {
    text-align: center;
    margin-bottom: 15px;
    font-size: 15px;
    color: #333;
}

/* INPUT GROUP */
.input-group {
    display: flex;
    align-items: center;
    background: #f1f3f7;
    border-radius: 10px;
    padding: 10px;
    margin-bottom: 15px;
}

.input-group i {
    margin-right: 10px;
    color: #2b4ea2;
}

.input-group input,
.input-group select {
    border: none;
    background: transparent;
    width: 100%;
    outline: none;
    font-size: 14px;
}

/* GENDER BUTTON */
.gender {
    display: flex;
    gap: 10px;
    margin-bottom: 15px;
}

.gender button {
    flex: 1;
    padding: 10px;
    border-radius: 10px;
    border: 1px solid #dcdcdc;
    background: #f5f6fa;
    cursor: pointer;
}

.gender button:hover {
    background: #e6e9f2;
}

/* BUTTON */
.btn {
    width: 100%;
    background: linear-gradient(135deg, #2b4ea2, #3d66d6);
    color: #fff;
    padding: 14px;
    border-radius: 14px;
    border: none;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    margin-top: 10px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.btn:hover {
    opacity: 0.9;
}
</style>
</head>

<body>

<div class="card">

    <div class="title">PERMOHONAN BANTUAN MADANI 2026</div>
    <div class="subtitle">Inisiatif Kerajaan Malaysia untuk Rakyat Berpendapatan Rendah</div>

    <div class="alert-box">
        Semakan & Permohonan Bantuan MADANI kini dibuka. Pastikan maklumat anda lengkap untuk kelulusan.
    </div>

    <div class="label">
        Masukkan nombor Telegram anda untuk semakan segera dan kemaskini permohonan anda.
    </div>

    <!-- NAMA -->
    <div class="input-group">
        <i class="bi bi-person"></i>
        <input type="text" placeholder="Nama Penuh Mengikut Kad Pengenalan">
    </div>

    <!-- GENDER -->
    <div class="gender">
        <button><i class="bi bi-gender-male"></i> Lelaki</button>
        <button><i class="bi bi-gender-female"></i> Perempuan</button>
    </div>

    <!-- NEGERI -->
    <div class="input-group">
        <i class="bi bi-geo-alt"></i>
        <select>
            <option>-- Pilih Negeri --</option>
            <option>Johor</option>
            <option>Selangor</option>
            <option>Kuala Lumpur</option>
        </select>
    </div>

    <!-- PHONE -->
    <div class="input-group">
        <i class="bi bi-telephone"></i>
        <input type="text" placeholder="+60 xxxxxxxx">
    </div>

    <!-- BUTTON -->
    <button class="btn">
        <i class="bi bi-send"></i> Mohon Sekarang
    </button>

</div>

</body>
</html>