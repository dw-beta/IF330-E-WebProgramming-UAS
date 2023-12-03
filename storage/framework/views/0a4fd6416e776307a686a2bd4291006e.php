<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDIT Ar Ridho Tangerang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poetsen-one" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <!-- Styles -->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .berita {
            display: flex;
            justify-content: center;
            margin-top: 200px;
        }

        .berita .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
        }

        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        .kartuberita {
            margin: 0;
            display: flex;
            justify-content: center;
            margin-top: 60px;
            
        }
        
        .card {
            padding: 30px;
            text-align: center;
            background-color: #FFFACD;
            margin-bottom: 80px;
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
    </style>
</head>

<body>
    
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <div class="berita">
        <div class="title">BERITA SEKOLAH</div>
    </div>
    <div class="kartuberita">
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

    
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>

</html><?php /**PATH C:\Users\user\Documents\KULIAH\SEMESTER 3\WebProg\UAS\webprog-uas\resources\views/berita.blade.php ENDPATH**/ ?>