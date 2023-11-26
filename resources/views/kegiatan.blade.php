<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDIT Ar Ridho Tangerang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poetsen-one" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link href="https://unpkg.com/swiper@8/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- Styles -->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .keagamaan{
            display: flex;
            justify-content: space-around;
            margin-top: 200px;
        }
        .keagamaan .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
        }

        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        .kartukegiatan {
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
        .card img{
            width: 40%;
            margin-left: 80px;
            margin-bottom: 40px;
            
        }
        .card h4{
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
        }

        .ekstra{
            display: flex;
            justify-content: space-around;
            margin-top: 100px;
        }
        .ekstra .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
        }
        .kartuekstra {
            margin: 0;
            display: flex;
            justify-content: center;
            margin-top: 60px;
        }
        .kartuekstra .card{
            padding: 50px 0 50px 0;
            text-align: center;
            background-color: #FFFACD;
        }
        .kartuekstra .card img{
            width: 40%;
            margin-left: 100px;
            margin-bottom: 40px;
        }

        .dokumentasi{
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }
        .dokumentasi .title{
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
            margin-bottom: 60px;
        }

        .swipe{
            display: flex;
            justify-content: center;
            align-items: center;
            overflow-x: hidden;
        }
        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 80px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }
        .swiper-slide p{
            padding: 20px;
            font-weight: bold;
            font-size: 20px;
            margin-top: 200px;
        }
    </style>
</head>

<body>
    
    @include ('header')
    
    <div class="keagamaan">
        <div class="title">KEGIATAN KEAGAMAAN</div>
    </div>
    <div class="kartukegiatan">
        <div class="column">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60);">
                <img src="{{ asset('images/keagamaan/sholat_1.png') }}">
                <h4>Rutinitas Sholat<br /><br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="{{ asset('images/keagamaan/sholat_2.png') }}">
                <h4>Rutinitas Sholat<br /><br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60);">
                <img src="{{ asset('images/keagamaan/sholat_1.png') }}">
                <h4>Rutinitas Sholat<br /><br /></h4>
            </div>
        </div>
    </div>
    <div class="kartukegiatan">
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="{{ asset('images/keagamaan/murojaah.png') }}">
                <h4>Murojaah Al-Quran<br /><br /></h4>
            </div>
        </div>
    </div>
    <div class="dokumentasi">
        <div class="title">DOKUMENTASI</div>
    </div>
    <div class="swipe">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(images/keagamaan/Rutinitas_Sholat.jpeg); border-radius: 30px;">
                    <p style="color: white;">Rutinitas Sholat</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/keagamaan/Rutinitas_Sholat_2.jpeg); border-radius: 30px;">
                    <p style="color: white;">Rutinitas Sholat</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/keagamaan/Rutinitas_Sholat_3.jpeg); border-radius: 30px;">
                    <p style="color: white;">Rutinitas Sholat</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/keagamaan/Murojaah_Al-Quran.jpeg); border-radius: 30px;">
                    <p style="color: white;">Murojaah Al-Quraan</p>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="ekstra">
        <div class="title">KEGIATAN EKSTRAKURIKULER</div>
    </div>
    <div class="kartuekstra">
        <div class="column">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60);">
                <br /><img src="{{ asset('images/ekskul/bahasajerman.png') }}">
                <h4><br />Bahasa Jerman<br /><br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="{{ asset('images/ekskul/kaligrafi.png') }}">
                <h4>Kaligrafi<br /><br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60);">
                <img src="{{ asset('images/ekskul/marawis.png') }}">
                <h4>Marawis<br /><br /></h4>
            </div>
        </div>
    </div>
    <div class="kartuekstra">
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="{{ asset('images/ekskul/literasi.png') }}">
                <h4>Pengembangan <br />Literasi<br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60);">
                <img src="{{ asset('images/ekskul/lukis.png') }}">
                <h4>Seni Lukis<br /><br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="{{ asset('images/ekskul/pramuka.png') }}">
                <h4>Pramuka<br /><br /></h4>
            </div>
        </div>
    </div>
    <div class="kartuekstra">
        <div class="column">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60);">
                <img src="{{ asset('images/ekskul/silat.png') }}">
                <h4>Pencak Silat<br /><br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="{{ asset('images/ekskul/taekwondo.png') }}">
                <h4>Taekwondo<br /><br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60);">
                <img src="{{ asset('images/ekskul/panahan.png') }}">
                <h4>Panahan<br /><br /></h4>
            </div>
        </div>
    </div>
    <div class="kartuekstra">
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="{{ asset('images/ekskul/renang.png') }}">
                <h4>Renang<br /><br /></h4>
            </div>
        </div>
    </div>

    <div class="dokumentasi">
        <div class="title">DOKUMENTASI</div>
    </div>
    <div class="swipe">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(images/ekskul/Bahasa_Jerman.jpeg); border-radius: 30px;">
                    <p style="color: white;">Bahasa Jerman</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/ekskul/Kaligrafi.jpeg); border-radius: 30px;">
                    <p style="color: white;">Kaligrafi</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/ekskul/Marawis_Hadroh.jpeg); border-radius: 30px;">
                    <p style="color: white;">Marawis Hadroh</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/ekskul/Pengembangan_Literasi.jpeg); border-radius: 30px;">
                    <p style="color: white;">Pengembangan Literasi</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/ekskul/Seni_Lukis.jpeg); border-radius: 30px;">
                    <p style="color: white;">Seni Lukis</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/ekskul/Pramuka.jpeg); border-radius: 30px;">
                    <p style="color: white;">Pramuka</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/ekskul/Pencak_Silat.jpeg); border-radius: 30px;">
                    <p style="color: white;">Pencak Silat</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/ekskul/Taekwondo.jpeg); border-radius: 30px;">
                    <p style="color: white;">Taekwondo</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/ekskul/Panahan.jpeg); border-radius: 30px;">
                    <p style="color: white;">Panahan</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/ekskul/Renang.jpeg); border-radius: 30px;">
                    <p style="color: white;">Renang</p>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

        @include ('footer')

<script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            effect: 'coverflow',
            grabCursor: true,
            slidesPerView: 'auto',
            coverflow: {
                rotate: 20,
                strecth: 0,
                depth: 200,
                modifier: 1,
                slideSadhows: true,
            },
            loop: true,
        })
    </script>
</body>

</html>