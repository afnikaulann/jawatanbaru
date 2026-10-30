<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Status Diterima</title>
<style>
  html,body{
    height:100%;
    margin:0;
    font-family: system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial;
    color:#fff;
    background:#111;
    overflow:hidden;
    animation: fadeIn 1.5s ease forwards;
    opacity:0;
  }
  @keyframes fadeIn {
    from { opacity:0; transform: scale(1.02); }
    to { opacity:1; transform: scale(1); }
  }

  .bg{
    position:fixed; inset:0;
    background-image: url('images/jawatan.jpg');
    background-size: cover;
    background-position: right;
    background-repeat:no-repeat;
    z-index:-2;
    filter: brightness(0.8);
    opacity:0;
    animation: fadeBg 1.8s ease forwards;
  }
  @keyframes fadeBg {
    to { opacity:1; }
  }

  .overlay{
    position:fixed; inset:0;
    background: rgba(0,0,0,.45);
    z-index:-1;
  }

  .wrap{
    display:grid;
    place-items:center;
    min-height:100dvh;
    text-align:center;
    padding:24px;
  }

  .card{
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    background: rgba(0,0,0,.25);
    border:1px solid rgba(255,255,255,.2);
    border-radius:16px;
    padding:28px 24px;
    box-shadow:0 10px 30px rgba(0,0,0,.35);
    max-width:680px;
    width:100%;
    transform: translateY(10px);
    opacity:0;
    animation: popIn 1.8s ease forwards 0.3s;
  }
  @keyframes popIn {
    to { opacity:1; transform: translateY(0); }
  }

  .spinner{
    width:64px; height:64px;
    border:6px solid rgba(255,255,255,.35);
    border-top-color:#fff;
    border-radius:50%;
    animation:spin 1s linear infinite;
    margin:8px auto 14px;
  }
  @keyframes spin { to { transform: rotate(360deg); } }

  .title{
    font-size:clamp(18px,3.5vw,28px);
    font-weight:700;
    margin:10px 0 6px;
  }

  .desc{
    font-size:clamp(14px,2.5vw,18px);
    opacity:.95;
    line-height:1.55;
    margin:0 0 2px;
  }
</style>
</head>
<body>
  <div class="bg"></div>
  <div class="overlay"></div>

  <main class="wrap">
    <section class="card">
      <div class="spinner"></div>
      <h1 class="title">DATA ANDA TELAH DITERIMA</h1>
      <p class="desc">Permohonan atau penyertaan anda sedang diproses.</p>
      <p class="desc">Kemas kini status akan dihantar melalui pemberitahuan ke akaun Telegram yang anda daftarkan.</p>
    </section>
  </main>
</body>
</html>