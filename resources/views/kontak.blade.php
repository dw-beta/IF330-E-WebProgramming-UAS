<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDIT Ar Ridho Tangerang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poetsen-one" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Styles -->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .kontak {
            display: flex;
            justify-content: center;
            margin-top: 200px;
        }

        .kontak .hubungikami {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
        }

        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        .kartukontak {
            margin: 0;
            display: flex;
            justify-content: center;
            margin-top: 60px;

        }

        .card {
            padding: 30px;
            text-align: center;
            background-color: #FFFACD;
        }

        .card img {
            width: 25%;
            margin-left: 95px;
            margin-bottom: 40px;

        }

        .card p {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }

        .card h4 {
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
        }

        .follow {
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }

        .follow .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
        }

        .social-icon {
            display: flex;
            justify-content: center;
            margin-bottom: 100px;
        }

        .social-icon a {
            font-size: 50px;
            width: 80px;
            height: 80px;
            line-height: 40px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            margin-left: 10px;
            margin-top: 20px;
            color: black;
            opacity: 0.75;
        }

        .social-icon>a:hover {
            opacity: 0.9;
            color: #FFD875;
        }

        /* responsive hp*/

        @media (max-width: 767px) and (min-width: 320px) {
            body {
                overflow-x: hidden;
            }

            .kontak {
                display: flex;
                justify-content: center;
                margin-top: 200px;
            }

            .kontak .hubungikami {
                font-family: 'Poetsen One', sans-serif;
                font-size: 20px;
            }

            .column {
                text-align: center;
                width: 60%;
                height: 40%;
                padding: 0 10px;
            }

            .kartukontak {
                margin: 0;
                display: grid;
                place-items: center;
                margin-top: 60px;

            }

            .card {
                padding: 30px;
                text-align: center;
                background-color: #FFFACD;
                height: 50%;
                margin-bottom: 40px;
            }

            .card img {
                width: 20%;
                margin-left: 60px;
                margin-bottom: 40px;

            }

            .card p {
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
                font-size: 12px;
            }

            .card h4 {
                font-weight: bold;
                font-family: 'Poppins', sans-serif;
                font-size: 16px;
            }

            .follow {
                display: flex;
                justify-content: center;
                margin-top: 100px;
                margin-bottom: 40px;
            }

            .follow .title {
                font-family: 'Poetsen One', sans-serif;
                font-size: 20px;
            }

            .social-icon {
                display: flex;
                justify-content: center;
                margin-bottom: 100px;
            }

            .social-icon a {
                font-size: 40px;
                width: 50px;
                height: 50px;
                line-height: 20px;
                display: inline-block;
                text-align: center;
                border-radius: 50%;
                margin-top: 20px;
                color: black;
                opacity: 0.75;
            }

            .social-icon>a:hover {
                opacity: 0.9;
                color: #FFD875;
            }

        }

        @media (max-width: 412px) and (min-width: 391px){
            .card {
                padding: 30px;
                text-align: center;
                background-color: #FFFACD;
                height: 50%;
                margin-bottom: 40px;
            }

            .card img {
                width: 20%;
                margin-left: 68px;
                margin-bottom: 40px;

            }

            .card p {
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
                font-size: 12px;
                text-align: center;
            }

            .card h4 {
                font-weight: bold;
                font-family: 'Poppins', sans-serif;
                font-size: 16px;
            }
        }

        @media (max-width: 390px) and (min-width: 376px){
            .card img {
                width: 20%;
                margin-left: 60px;
                margin-bottom: 40px;

            }

            .card p {
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
                font-size: 12px;
                text-align: center;
            }
        }

        @media (max-width: 360px) and (min-width: 321px){
            .card img {
                width: 20%;
                margin-left: 55px;
                margin-bottom: 40px;

            }

            .card p {
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
                font-size: 12px;
                text-align: center;
            }
        }

        @media (max-width: 430px) and (min-width: 415px){
            .card img {
                width: 20%;
                margin-left: 70px;
                margin-bottom: 40px;

            }

            .card p {
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
                font-size: 12px;
                text-align: center;
            }
        }

        @media (max-width: 414px) and (min-width: 413px){
            .card img {
                width: 20%;
                margin-left: 70px;
                margin-bottom: 40px;

            }

            .card p {
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
                font-size: 12px;
                text-align: center;
            }
        }

        @media (max-width: 375px) and (min-width: 361px){
            .card img {
                width: 20%;
                margin-left: 60px;
                margin-bottom: 40px;

            }

            .card p {
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
                font-size: 12px;
                text-align: center;
            }
        }

        /* RESPONSIVE TABLET */
        @media (max-width: 1270px) and (min-width: 601px) {
            .column {
                text-align: center;
                width: 60%;
                height: 40%;
                padding: 0 10px;
            }

            .kartukontak {
                display: flex;
                justify-content: space-around;
                margin-top: 60px;

            }

            .card {
                padding: 30px;
                text-align: center;
                background-color: #FFFACD;
                height: 50%;
                margin-bottom: 40px;
            }

            .card img {
                width: 20%;
                margin-left: 105px;
                margin-bottom: 40px;

            }

            .card p {
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
                font-size: 12px;
            }

            .card h4 {
                font-weight: bold;
                font-family: 'Poppins', sans-serif;
                font-size: 14px;
            }
        }

        @media (max-width: 820px) and (min-width: 601px){
            .card img {
                width: 20%;
                margin-left: 75px;
                margin-bottom: 40px;

            }
        }

        @media (max-width: 768px) and (min-width: 601px){
            .card img {
                width: 20%;
                margin-left: 70px;
                margin-bottom: 40px;

            }
        }
    </style>
</head>

<body>

    @include ('header')


    <div class="kontak" data-aos="flip-down">
        <div class="hubungikami">HUBUNGI KAMI</div>
    </div>
    <div class="kartukontak">
        <div class="column" data-aos="flip-left">
            <div class="card" style="background-color: #FFFACD;">
                <img src="{{ asset('images/kontak/lokasikontak.png') }}">
                <h4>ALAMAT</h4>
                <p><br />Jl. Raya Swadaya RT 04 RW 03, Kp.Cijengir, Curug, Binong, Kc.Tangerang, Kabupaten <br />Tangerang, Banten , 15810 </p>
            </div>
        </div>
        <div class="column" data-aos="flip-up">
            <div class="card" style="background-color: #FFFACD;">
                <img src="{{ asset('images/kontak/teleponkontak.png') }}">
                <h4>TELEPON</h4>
                <p><br /><br />(021) 59891852<br /><br /><br /></p>
            </div>
        </div>
        <div class="column" data-aos="flip-right">
            <div class="card" style="background-color: #FFFACD;">
                <img src="{{ asset('images/kontak/emailkontak.png') }}">
                <h4>EMAIL</h4>
                <p><br /><br />arridho15@gmail.com<br /><br /><br /></p>
            </div>
        </div>
    </div>

    <div class="follow">
        <div class="title">IKUTI KAMI</div>
    </div>
    <div class="social-icon">
        <a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-youtube"></i></a>
    </div>

    <div class="maps">

    </div>


    @include ('footer')

</body>
<script>
    AOS.init();
</script>

</html>
