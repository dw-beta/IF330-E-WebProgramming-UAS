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


        .fasilitas {
            display: flex;
            justify-content: center;
            margin-top: 200px;
        }

        .fasilitas .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
            margin-bottom: 60px;
            border-bottom: 5px solid #ffa123; 
            padding-bottom: 5px; 
            display: inline-block;
        }

        .fasilitascard .card:hover {
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
            margin-bottom: 60px;
        }

        

        /* RESPONSIVE PHONE */
        @media (max-width: 767px) {
            .fasilitas .title {
                margin-top: 100px; /* Adjust title margin on smaller screens */
            }

            
        }

        /* RESPONSIVE TABLET */
        @media (min-width: 768px) and (max-width: 1024px) {
            .fasilitas {
                margin-top: 150px; /* Adjust top margin for tablets */
            }

            
        }


    </style>
</head>

<body>

    @include ('header')


        <div class="fasilitas" data-aos="zoom-in-up">
            <div class="title">FASILITAS</div>
        </div>
        <div class="fasilitascard p-5" data-aos="zoom-in-up">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/fasilitas/Ruang_Kelas_1.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Ruang Kelas</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/fasilitas/Ridho_Mart.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Ridho Mart</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/fasilitas/Perpustakaan.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Perpustakaan</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/fasilitas/Lapangan.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Lapangan</h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <div class="fasilitascard p-5" data-aos="zoom-in-up">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/fasilitas/Ruang_Komputer.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Ruang Komputer</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/fasilitas/Musholla.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Musholla</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/fasilitas/UKS.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">UKS</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/fasilitas/Tata_Usaha.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Tata Usaha</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fasilitascard p-5" data-aos="zoom-in-up">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/fasilitas/Gudang_Penyimpanan.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Gudang Penyimpanan</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/fasilitas/Aula_2.jpeg') }}" class="card-img-top" style="height: 75%" alt="...">
                    <div class="card-body" style="background-color: #e2c386">
                        <h5 class="card-title">Aula</h5>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>

@include ('footer')


    <script>
        AOS.init();
    </script>
</body>

</html>
