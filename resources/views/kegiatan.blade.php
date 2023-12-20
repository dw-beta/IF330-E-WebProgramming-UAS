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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Styles -->
    <style>
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background-color: #f1f1f1;
        }

        /* warna handle (bagian yang dapat di-drag) scrollbar */
        ::-webkit-scrollbar-thumb {
            background-color: #ffa123;
            border-radius: 6px;
        }


        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background: linear-gradient(90deg, rgba(215, 197, 168, 1) 0%, rgba(250, 207, 149, 1) 25%, rgba(255, 227, 132, 0.4066001400560224) 100%);
        }

        .keagamaan {
            display: flex;
            justify-content: space-around;
            margin-top: 200px;
        }

        .keagamaan .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
            margin-bottom: 60px;
            border-bottom: 5px solid #ffa123; 
            padding-bottom: 5px; 
            display: inline-block;
        }

        .kegiatan {
            display: flex;
            justify-content: space-around;
            padding: 30px;
        }

        .kegiatan .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .card-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            display: flex;
            justify-content: center;
        }

        .container {
            max-width: 1200px;
            width: 95%;
        }

        .ekstra {
            display: flex;
            justify-content: space-around;
            margin-top: 100px;
        }

        .ekstra .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
            margin-bottom: 60px;
            border-bottom: 5px solid #ffa123; 
            padding-bottom: 5px; 
            display: inline-block;
        }


        /* RESPONSIVE HANDPHONE */
        @media (max-width: 767px) and (min-width: 320px) {
            .keagamaan {
                margin-top: 100px; /* Reduce top margin */
            }

            .kegiatan {
                padding: 15px; /* Decrease padding */
            }

            .card-title {
                font-size: 16px; /* Adjust font size for card titles */
            }
        }

        /* RESPONSIVE TABLET */
        @media (max-width: 1024px) and (min-width: 768px) {
            .keagamaan {
                margin-top: 150px; /* Adjust top margin */
            }

            .kegiatan {
                padding: 30px; /* Increase padding for better spacing */
            }

            .card-title {
                font-size: 20px; /* Slightly increase font size for card titles */
            }
        }
    </style>
</head>

<body>

    @include ('header')

    <div class="keagamaan" data-aos="zoom-in-up">
        <div class="title">KEGIATAN KEAGAMAAN</div>
    </div>
    <div class="kegiatan" data-aos="zoom-in-up">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/keagamaan/Rutinitas_Sholat.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Rutinitas Sholat</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/keagamaan/Rutinitas_Sholat_2.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Rutinitas Sholat</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/keagamaan/Rutinitas_Sholat_3.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Rutinitas Sholat</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/keagamaan/Murojaah_Al-Quran.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Murojaah Al-Quraan</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ekstra" data-aos="zoom-in-up">
        <div class="title">KEGIATAN EKSTRAKURIKULER</div>
    </div>
    <div class="kegiatan" data-aos="zoom-in-up">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/ekskul/Bahasa_Jerman.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Bahasa Jerman</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/ekskul/Kaligrafi.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Kaligrafi</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/ekskul/Marawis_Hadroh.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Marawis Hadroh</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/ekskul/Pengembangan_Literasi.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Pengembangan Literasi</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kegiatan" data-aos="zoom-in-up">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/ekskul/Seni_Lukis.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Seni Lukis</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/ekskul/Pramuka.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Pramuka</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/ekskul/Pencak_Silat.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Pencak Silat</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/ekskul/Taekwondo.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Taekwondo</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kegiatan" data-aos="zoom-in-up">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/ekskul/Panahan.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Panahan</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/ekskul/Renang.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Renang</h5>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    <br>
    @include ('footer')

    <script>
        AOS.init();
    </script>
</body>

</html>
