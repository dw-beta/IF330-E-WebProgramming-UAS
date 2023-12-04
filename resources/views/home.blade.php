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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Styles -->
    <style>
    body {
        margin: 0;
        padding: 0;
    }

    .container {
        margin: 0;
        padding: 0;
    }

    .judul {
        display: flex;
        justify-content: center;
        margin-top: 300px;
    }

    .about {
        display: flex;
        justify-content: center;
    }

    .about .title {
        font-family: 'Poetsen One', sans-serif;
        font-size: 24px;
        margin-top: 200px;
    }

    .isiabout {
        display: flex;
        justify-content: space-between;
        padding: 60px;
    }

    .isiabout .penjelasan {
        width: 50%;
        text-align: justify;
        font-size: 16px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
    }

    .isiabout img {
        width: 40%;
        height: 200px;
        border-radius: 10px;
    }

    .visi-misi {
        display: flex;
        justify-content: center;
        margin-top: 100px;
    }

    .visi-misi .title {
        font-family: 'Poetsen One', sans-serif;
        font-size: 24px;
    }

    .isivisi {
        display: flex;
        justify-content: space-around;
    }

    .visi {
        padding: 60px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        background-color: rgba(255, 216, 117, 0.60);
        box-shadow: 0px 10px 4px rgba(0, 0, 0, 0.25);
        text-align: justify;
        margin-top: 40px;
        border-radius: 15px;
    }

    .visi h1 {
        font-size: 20px;
        font-family: 'Poetsen One', sans-serif;
    }

    .isimisi {
        display: flex;
        justify-content: space-around;
    }

    .misi {
        padding: 60px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        background-color: #FFFACD;
        box-shadow: 0px 10px 4px rgba(0, 0, 0, 0.25);
        text-align: justify;
        margin-top: 40px;
        border-radius: 15px;
        float: right;
    }

    .misi h1 {
        font-size: 20px;
        font-family: 'Poetsen One', sans-serif;
        float: right;
    }

    .program {
        display: flex;
        justify-content: center;
        margin-top: 100px;
    }

    .program .title {
        font-family: 'Poetsen One', sans-serif;
        font-size: 24px;
    }

    .programunggulan {
        margin: 0;
        display: flex;
        justify-content: center;
        margin-top: 60px;
    }

    .column {
        text-align: center;
        width: 25%;
        padding: 0 10px;
    }

    .card {
        padding: 30px;
        text-align: center;
        border-radius: 120px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card img {
        width: 40%;
        padding-top: 10px;
        margin-bottom: 20px;
    }

    .card h4 {
        font-weight: bold;
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        margin-bottom: 20px;
    }


    .berita {
        display: flex;
        justify-content: center;
        margin-top: 100px;
    }

    .berita .title {
        font-family: 'Poetsen One', sans-serif;
        font-size: 24px;
    }

    .kartuberita {
        margin: 0;
        display: flex;
        justify-content: center;
        margin-top: 60px;

    }

    .beritalainnya {
        display: flex;
        justify-content: center;
        margin-top: 80px;
    }

    .beritalainnya a {
        padding: 20px 15px;
        border: none;
        border-radius: 15px;
        background-color: #FFD875;
        color: black;
        text-decoration: none;
        font-family: 'Poetsen One', sans-serif;
        font-size: 16px;
    }

    .beritalainnya a:hover {
        background-color: rgba(98, 139, 76, 0.75);
        color: white;
        text-decoration: none;
    }

    .testimoni {
        display: flex;
        justify-content: center;
        margin-top: 100px;
    }

    .testimoni .title {
        font-family: 'Poetsen One', sans-serif;
        font-size: 24px;
    }

    /* RESPONSIVE HANDPHONE */

    @media (max-width: 767px) and (min-width: 320px) {


        .about {
            display: flex;
            justify-content: center;
        }

        .about .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 16px;
            margin-top: 200px;
        }

        .isiabout {
            flex-direction: column;
            place-items: center;
            padding: 20px;
        }

        .isiabout .penjelasan {
            width: 100%;
            text-align: justify;
            font-size: 12px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .isiabout img {
            width: 100%;
            height: 200px;
            border-radius: 10px;
        }

        .visi-misi .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 16px;
        }

        .isivisi {
            display: flex;
            place-items: center;
            width: 100%;
            padding: 20px;
        }

        .visi {
            padding: 50px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            background-color: rgba(255, 216, 117, 0.60);
            box-shadow: 0px 10px 4px rgba(0, 0, 0, 0.25);
            text-align: justify;
            margin-top: 40px;
            border-radius: 15px;
            font-size: 12px;
        }

        .visi h1 {
            font-size: 14px;
            font-family: 'Poetsen One', sans-serif;
        }

        .isimisi {
            display: flex;
            place-items: center;
            width: 100%;
            padding: 20px;
        }

        .misi {
            padding: 50px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            background-color: #FFFACD;
            box-shadow: 0px 10px 4px rgba(0, 0, 0, 0.25);
            text-align: justify;
            margin-top: 40px;
            border-radius: 15px;
            float: right;
            font-size: 12px;
        }

        .misi h1 {
            font-size: 14px;
            font-family: 'Poetsen One', sans-serif;
            float: right;
        }

        .program .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 16px;
        }

        .column {
            text-align: center;
            width: 60%;
            height: 40%;
            padding: 20px;
        }

        .programunggulan {
            margin: 0;
            display: flex;
            place-items: center;
            margin-top: 60px;

        }

        .card {
            padding: 30px;
            text-align: center;
            background-color: #FFFACD;
            box-shadow: 0px 10px 4px rgba(0, 0, 0, 0.25);
            border-radius: 60px;
        }

        .card img {
            width: 50%;
            margin-left: 25px;
            margin-bottom: 10px;

        }

        .card h4 {
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
        }

        .berita .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 16px;
        }

        .kartuberita {
            margin: 0;
            display: grid;
            place-items: center;
            margin-top: 60px;

        }

        .kartuberita .column {
            width: 100%;
        }

        .beritalainnya {
            display: flex;
            justify-content: center;
            margin-top: 80px;
        }

        .beritalainnya a {
            padding: 15px 10px;
            border: none;
            border-radius: 15px;
            background-color: #FFD875;
            color: black;
            text-decoration: none;
            font-family: 'Poetsen One', sans-serif;
            font-size: 12px;
        }

        .beritalainnya a:hover {
            background-color: rgba(98, 139, 76, 0.75);
            color: white;
            text-decoration: none;
        }

        .testimoni .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 16px;
        }
    }

    /* RESPONSIVE TABLET */
    @media (max-width: 1270px) and (min-width: 601px) {
        .isiabout img {
            width: 40%;
            height: 220px;
            border-radius: 10px;
        }

        .card h4 {
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
        }

        .card img {
            width: 50%;
            margin-left: 45px;
            margin-bottom: 10px;

        }
    }

    @media (max-width: 820px) and (min-width: 601px) {
        .isiabout {
            display: flex;
            justify-content: space-between;
            padding: 60px;
        }

        .isiabout .penjelasan {
            width: 50%;
            text-align: justify;
            font-size: 12px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }

        .isiabout img {
            width: 40%;
            height: 180px;
            border-radius: 10px;
        }

        .isivisi {
            display: flex;
            place-items: center;
            width: 100%;
            padding: 20px;
        }

        .isimisi {
            display: flex;
            place-items: center;
            width: 100%;
            padding: 20px;
        }

        .column {
            text-align: center;
            width: 60%;
            height: 60%;
            padding: 20px;
        }

        .programunggulan {
            margin: 0;
            display: flex;
            place-items: center;
            margin-top: 60px;

        }

        .card {
            padding: 30px;
            text-align: center;
            background-color: #FFFACD;
            box-shadow: 0px 10px 4px rgba(0, 0, 0, 0.25);
            border-radius: 60px;
        }

        .card img {
            width: 20%;
            margin-left: 125px;
            margin-bottom: 10px;

        }

        .card h4 {
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
        }
    }

    @media (max-width: 768px) and (min-width: 601px) {
        .isiabout {
            flex-direction: column;
            place-items: center;
            padding: 60px;
        }

        .isiabout .penjelasan {
            width: 100%;
            text-align: justify;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .isiabout img {
            width: 100%;
            height: 240px;
            border-radius: 10px;
        }

        .isivisi {
            display: flex;
            place-items: center;
            width: 100%;
            padding: 20px;
        }

        .visi {
            padding: 50px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            background-color: rgba(255, 216, 117, 0.60);
            box-shadow: 0px 10px 4px rgba(0, 0, 0, 0.25);
            text-align: justify;
            margin-top: 40px;
            border-radius: 15px;
            font-size: 12px;
        }

        .visi h1 {
            font-size: 14px;
            font-family: 'Poetsen One', sans-serif;
        }

        .isimisi {
            display: flex;
            place-items: center;
            width: 100%;
            padding: 20px;
        }

        .misi {
            padding: 50px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            background-color: #FFFACD;
            box-shadow: 0px 10px 4px rgba(0, 0, 0, 0.25);
            text-align: justify;
            margin-top: 40px;
            border-radius: 15px;
            float: right;
            font-size: 12px;
        }

        .misi h1 {
            font-size: 14px;
            font-family: 'Poetsen One', sans-serif;
            float: right;
        }

        .column {
            text-align: center;
            width: 60%;
            height: 60%;
            padding: 20px;
        }

        .programunggulan {
            margin: 0;
            display: flex;
            place-items: center;
            margin-top: 60px;

        }

        .card {
            padding: 30px;
            text-align: center;
            background-color: #FFFACD;
            box-shadow: 0px 10px 4px rgba(0, 0, 0, 0.25);
            border-radius: 60px;
        }

        .card img {
            width: 20%;
            margin-left: 110px;
            margin-bottom: 10px;

        }

        .card h4 {
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
        }
    }
    </style>
</head>

<body>

    @include ('header')
    <div class="judul">
        <img style="width: 50%" data-aos="zoom-in-up" src="{{ asset('images/home/logosdit.png') }}">
    </div>
    <div class="container">
        <div class="about">
            <div class="title">TENTANG SEKOLAH KAMI</div>
        </div>
        <div class="isiabout">
            <div class="penjelasan">
                SDIT Ar-Ridho Tangerang berada dibawah naungan Yayasan Pendidikan Islam Ar Ridho (YPI Ar Ridho). YPI Ar
                Ridho
                merupakan organisasi yang bergerak dibidang pendidikan yang dibentuk oleh Hj. Robiatul Adawiyah,M.Pd
                sebagai
                Ketua Yayasan YPI Ar Ridho Tangerang. YPI Ar Ridho Tangerang memiliki komitmen untuk memberikan
                pendidikan
                yang
                berkualitas bagi peserta didik dan unggul dalam bidang keagamaan sehingga dapat mewujudkan generasi yang
                berkarakter positif dan berakhlak mulia.
            </div>
            <img src="{{ asset('images/home/about.jpg') }}">
        </div>
    </div>
    <div class="visi-misi">
        <div class="title">VISI & MISI</div>
    </div>
    <div class="isivisi" data-aos="zoom-in-up">
        <div class="visi">
            <h1>VISI</h1><br />
            Menjadi sekolah yang mampu melahirkan generasi yang islami, berkarakter, berbakat dan menguasai IPTEK
        </div>
    </div>
    <div class="isimisi" data-aos="zoom-in-up">
        <div class="misi">
            <h1>MISI</h1><br />
            1. Menyelenggarakan pendidikan yang berbasis islami.<br />
            2. Menyelenggarakan pendidikan yang mengembangkan karakter/18 sikap melalui pembelajaran berbasis
            <br />sentra.<br />
            3. Membina peserta didik sesuai minat dan bakat.<br />4. Menyelenggarakan pendidikan yang mengembangkan
            bakat.<br />
            5. Menyelenggarakan pendidikan yang mengembangkan IPTEK.
        </div>
    </div>
    <div class="program">
        <div class="title">PROGRAM UNGGULAN</div>
    </div>
    <div class="programunggulan">
        <div class="column" data-aos="flip-left">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60); border-radius: 120px;">
                <img src="{{ asset('images/home/kurikulum.png') }}">
                <h4>KURIKULUM<br /><br /><br /></h4>
            </div>
        </div>
        <div class="column" data-aos="flip-right">
            <div class="card" style="background-color: #FFFACD; border-radius: 120px;">
                <img src="{{ asset('images/home/fasilitas.png') }}">
                <h4>FASILITAS<br /><br /><br /></h4>
            </div>
        </div>
    </div>
    <div class="programunggulan">
        <div class="column" data-aos="flip-left">
            <div class="card" style="background-color: #FFFACD; border-radius: 120px;">
                <img src="{{ asset('images/home/metode.png') }}">
                <h4>METODE <br />PEMBELAJARAN<br /><br /></h4>
            </div>
        </div>
        <div class="column" data-aos="flip-right">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60); border-radius: 120px;">
                <img src="{{ asset('images/home/guru.png') }}">
                <h4>GURU <br />TERSERTIFIKASI<br /><br /></h4>
            </div>
        </div>
    </div>
    <div class="berita">
        <div class="title">BERITA SEKOLAH</div>
    </div>
    <div class="kartuberita" data-aos="zoom-in-down">
        <div class="column">
            <div class="card" style="background-color: rgba(98, 139, 76, 0.75); color: white;">
                <img src="">
                <h4></h4>
                <p><br /><br /><br /><br /><br /></p>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: rgba(98, 139, 76, 0.75); color: white;">
                <img src="">
                <h4></h4>
                <p><br /><br /><br /><br /><br /></p>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: rgba(98, 139, 76, 0.75); color: white;">
                <img src="">
                <h4></h4>
                <p><br /><br /><br /><br /><br /></p>
            </div>
        </div>
    </div>
    <div class="beritalainnya">
        <a href="berita" type="submit">Berita Lainnya</a>
    </div>
    <div class="testimoni">
        <div class="title">TESTIMONI</div>
    </div>
    @include ('footer')

</body>
<script>
AOS.init();
</script>

</html>
