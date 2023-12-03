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
        .card img{
            width: 25%;
            margin-left: 95px;
            margin-bottom: 40px;
            
        }
        .card p{
            font-family: 'Poppins', sans-serif;   
            font-weight: 500;
        }
        .card h4{
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

        .social-icon a{
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
    </style>
</head>

<body>
    
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <div class="kontak">
        <div class="hubungikami">HUBUNGI KAMI</div>
    </div>
    <div class="kartukontak">
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="<?php echo e(asset('images/kontak/lokasikontak.png')); ?>">
                <h4>ALAMAT</h4>
                <p><br />Jl. Raya Swadaya RT 04 RW 03, Kp.Cijengir, Curug, Binong, Kc.Tangerang, Kabupaten <br />Tangerang, Banten , 15810 </p>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="<?php echo e(asset('images/kontak/teleponkontak.png')); ?>">
                <h4>TELEPON</h4>
                <p><br /><br />(021) 59891852<br /><br /><br /></p>
            </div>
        </div>
        <div class="column">
            <div class="card" style="background-color: #FFFACD;">
                <img src="<?php echo e(asset('images/kontak/emailkontak.png')); ?>">
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

    
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>

</html><?php /**PATH C:\Users\user\Documents\KULIAH\SEMESTER 3\WebProg\UAS\webprog-uas\resources\views/kontak.blade.php ENDPATH**/ ?>