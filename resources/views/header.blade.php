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
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 0;
            padding: 0;
        }

        #navbar {
            overflow: hidden;
            background-color: #FFFACD;
            padding: 30px 10px;
            transition: 0.4s;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 99;
        }

        /* Style the navbar links */
        #navbar a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 14px;
            line-height: 25px;
            border-radius: 4px;
        }

        /* Style the logo */
        #navbar #logo {
            font-size: 20px;
            font-family: 'Poetsen One', sans-serif;
            transition: 0.4s;
        }

        /* Links on mouse-over */
        #navbar a:hover {
            background-color: rgba(255, 216, 117, 0.60);
            color: black;
        }

        /* Display some links to the right */
        #navbar-right {
            float: right;
            font-family: 'Poetsen One', sans-serif;
        }
    </style>
</head>

<body>

    <div id="navbar">
        <a href="home" id="logo">SDIT AR RIDHO TANGERANG</a>
        <div id="navbar-right">
            <a href="home">HOME</a>
            <a href="kegiatan">KEGIATAN</a>
            <a href="fasilitas">FASILITAS</a>
            <a href="ppdb">PPDB</a>
            <a href="kontak">KONTAK</a>
            @auth
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
                <form id="logout-form" action="logout" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="login">LOGIN</a>
            @endauth
        </div>
    </div>
    
</body>

</html>