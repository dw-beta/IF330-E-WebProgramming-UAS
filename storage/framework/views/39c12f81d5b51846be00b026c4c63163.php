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

        .fasilitas {
            display: flex;
            justify-content: center;
            margin-top: 200px;
        }

        .fasilitas .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
        }

        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        .kartufasilitas {
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
            width: 50%;
            margin-left: 50px;
            margin-bottom: 40px;

        }

        .card h4 {
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
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
    
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <div class="fasilitas">
        <div class="title">FASILITAS</div>
    </div>
    <div class="kartufasilitas">
        <div class="column">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60);">
                <img src="<?php echo e(asset('images/fasilitas/ruangkelas.png')); ?>">
                <h4>RUANG KELAS<br /><br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="<?php echo e(asset('images/fasilitas/kantin.png')); ?>">
                <h4>KANTIN<br /><br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60);">
                <img src="<?php echo e(asset('images/fasilitas/perpustakaan.png')); ?>">
                <h4>PERPUSTAKAAN<br /><br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="<?php echo e(asset('images/fasilitas/lapangan.png')); ?>">
                <h4>LAPANGAN<br /><br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60);">
                <img src="<?php echo e(asset('images/fasilitas/ruangkomputer.png')); ?>">
                <h4>RUANG KOMPUTER</h4>
            </div>
        </div>
    </div>
    <div class="kartufasilitas">
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="<?php echo e(asset('images/fasilitas/mushola.png')); ?>">
                <h4>MUSHOLA<br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60);">
                <img src="<?php echo e(asset('images/fasilitas/uks.png')); ?>">
                <h4>UKS<br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="<?php echo e(asset('images/fasilitas/tatausaha.png')); ?>">
                <h4>TATA USAHA<br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: rgba(255, 216, 117, 0.60);">
                <img src="<?php echo e(asset('images/fasilitas/gudang.png')); ?>">
                <h4>GUDANG<br /></h4>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="<?php echo e(asset('images/fasilitas/aula.png')); ?>">
                <h4>AULA<br /></h4>
            </div>
        </div>
    </div>
    <div class="dokumentasi">
        <div class="title">DOKUMENTASI</div>
    </div>
    <div class="swipe">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(images/fasilitas/Ruang_Kelas_1.jpeg); border-radius: 30px;">
                    <p style="color: white;">Ruang Kelas</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/fasilitas/Ridho_Mart.jpeg); border-radius: 30px;">
                    <p style="color: white;">Kantin</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/fasilitas/Perpustakaan.jpeg); border-radius: 30px;">
                    <p style="color: white;">Perpustakaan</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/fasilitas/Lapangan.jpeg); border-radius: 30px;">
                    <p style="color: white;">Lapangan</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/fasilitas/Ruang_Komputer.jpeg); border-radius: 30px;">
                    <p style="color: white;">Ruang Komputer</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/fasilitas/Musholla.jpeg); border-radius: 30px;">
                    <p style="color: white;">Mushola</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/fasilitas/UKS.jpeg); border-radius: 30px;">
                    <p style="color: white;">UKS</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/fasilitas/Tata_Usaha.jpeg); border-radius: 30px;">
                    <p style="color: white;">Tata Usaha</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/fasilitas/Gudang_Penyimpanan.jpeg); border-radius: 30px;">
                    <p style="color: white;">Gudang</p>
                </div>
                <div class="swiper-slide" style="background-image: url(images/fasilitas/Aula_2.jpeg); border-radius: 30px;">
                    <p style="color: white;">Aula</p>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

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

</html><?php /**PATH C:\Users\user\Documents\KULIAH\SEMESTER 3\WebProg\UAS\webprog-uas\resources\views/fasilitas.blade.php ENDPATH**/ ?>