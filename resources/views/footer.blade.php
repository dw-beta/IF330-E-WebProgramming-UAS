<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDIT Ar Ridho Tangerang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poetsen-one" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Styles -->
    <style>
    .footer-clean {
        margin-top: 10%;
        padding: 50px 0;
        background-color: #e2c386;
        color: black;
    }

    .footer-clean h3 {
        margin-top: 0;
        margin-bottom: 20px;
        font-weight: bold;
        font-family: 'Poetsen One', sans-serif;
        font-size: 20px;
    }

    .footer-clean ul {
        padding: 0;
        list-style: none;
        line-height: 1.6;
        font-size: 14px;
        margin-bottom: 0;
    }

    .footer-clean ul .alamat {
        display: flex;
        margin-bottom: 10px;
    }

    .footer-clean ul .alamat img {
        width: 30px;
        height: 30px;
        margin-right: 20px;
    }

    .footer-clean ul .alamat p {
        font-weight: 500;
        font-family: 'Poppins', sans-serif;
    }

    .footer-clean ul .phone {
        display: flex;
        margin-bottom: 10px;
    }

    .footer-clean ul .phone p {
        font-weight: 500;
        font-family: 'Poppins', sans-serif;
    }

    .footer-clean ul .phone img {
        width: 30px;
        height: 30px;
        margin-right: 20px;
    }

    .footer-clean ul .email {
        display: flex;
        margin-bottom: 10px;
    }

    .footer-clean ul .email img {
        width: 30px;
        height: 30px;
        margin-right: 20px;
    }

    .footer-clean ul .email p {
        font-weight: 500;
        font-family: 'Poppins', sans-serif;
    }

    .footer-clean ul p {
        font-weight: 500;
        font-family: 'Poppins', sans-serif;
    }

    .footer-clean .item.social {
        text-align: right;
    }

    @media (max-width:767px) {
        .footer-clean .item {
            text-align: center;
            padding-bottom: 20px;
        }
    }

    @media (max-width: 768px) {
        .footer-clean .item.social {
            text-align: center;
        }
    }

    .footer-clean .item.social>a {
        font-size: 24px;
        width: 40px;
        height: 40px;
        line-height: 40px;
        display: inline-block;
        text-align: center;
        border-radius: 50%;
        margin-left: 10px;
        margin-top: 20px;
        color: inherit;
        opacity: 0.75;
    }

    .footer-clean .item.social>a:hover {
        opacity: 0.9;
    }

    @media (max-width:991px) {
        .footer-clean .item.social>a {
            margin-top: 40px;
        }
    }

    @media (max-width:767px) {
        .footer-clean .item.social>a {
            margin-top: 10px;
        }
    }

    .copyright {
        display: flex;
        justify-content: center;
        background-color: #c2a56d;
    }

    .copyright p {
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 15px;
        font-weight: 500;
        font-family: 'Poppins', sans-serif;
        color: black;
    }

    @media (max-width: 767px) and (min-width: 320px) {

        .footer-clean ul .alamat,
        .footer-clean ul .phone,
        .footer-clean ul .email,
        h3,
        p {
            flex-direction: column;
            align-items: flex-start;
            text-align: start;
        }

        .footer-clean ul .alamat,
        .footer-clean ul .phone,
        .footer-clean ul .email,
        p {
            font-size: 12px;
        }

        .footer-clean ul .alamat,
        .footer-clean ul .phone,
        .footer-clean ul .email,
        h3 {
            font-size: 16px;
        }

        .footer-clean ul .alamat img,
        .footer-clean ul .phone img,
        .footer-clean ul .email img {
            margin-right: 0;
            margin-bottom: 10px;
        }

        .footer-clean .item.social>a {
            margin-top: 20px;
        }

        .copyright p {
            font-size: 12px;
        }
    }
    </style>
</head>

<!-- body -->

<body>
    <div class="footer-clean" data-aos="fade-up">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>SDIT Ar Ridho Tangerang</h3>
                        <ul>
                            <div class="alamat">
                                <img src="{{ asset('images/footer/home.png') }}">
                                <p>Jl. Raya Swadaya RT 04 RW 03, Kp.Cijengir, Curug, Binong, Kc.Tangerang, Kabupaten
                                    Tangerang, Banten , 15810 </p>
                            </div>
                            <div class="phone">
                                <img src="{{ asset('images/footer/phone.png') }}">
                                <p>(021) 59891852</p>
                            </div>
                            <div class="email">
                                <img src="{{ asset('images/footer/email.png') }}">
                                <p>arridho15@gmail.com</p>
                            </div>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Dibawah Naungan</h3>
                        <ul>
                            <p>Yayasan Pendidikan Ar Ridho Tangerang</p>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social">
                        <h3>Media Sosial</h3>
                        <a href="https://instagram.com/ypiarridhotangerang?igshid=MzMyNGUyNmU2YQ=="><i class="icon ion-social-instagram"></i></a><a href="https://m.facebook.com/people/Sdit-Ar-Ridho-Tangerang/100086316860334/"><i
                                class="icon ion-social-facebook"></i></a><a href="https://www.youtube.com/@ypiarridhotangerang8959"><i
                                class="icon ion-social-youtube"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="copyright">
        <p>Copyright © 2023 SDIT Ar Ridho Tangerang</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>

<script>
AOS.init();
</script>

</html>
