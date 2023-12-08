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
            background: linear-gradient(90deg, rgba(215, 197, 168, 1) 0%, rgba(250, 207, 149, 1) 25%, rgba(255, 227, 132, 0.4066001400560224) 100%);
        }

        .berita {
            display: flex;
            justify-content: center;
            margin-top: 200px;
        }

        .berita .title {
            font-family: 'Poetsen One', sans-serif;
            font-size: 24px;
            border-bottom: 5px solid #ffa123; 
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
    
    @include ('header')
    

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

    
        @include ('footer')
    
</body>

</html>
