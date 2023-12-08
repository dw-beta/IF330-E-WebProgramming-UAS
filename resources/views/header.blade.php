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

    <!-- Styles -->
    <style>
    #navbar {
        overflow: hidden;
        background-color: #e2c386 !important;
        padding: 15px 10px;
        transition: 0.4s;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 99;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        font-family: 'Poetsen One', sans-serif;

    }

    #navbar a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 14px;
        line-height: 25px;
        border-radius: 4px;
        transition: 0.4s;
        font-family: 'Poetsen One', sans-serif;
    }

    .navbar-nav{
        margin-right: 350px;
    }

    #navbar #logo {
        font-size: 20px;
        font-family: 'Poetsen One', sans-serif;
        transition: 0.4s;
        color: #333;
        margin-left: 400px;
    }

    #navbar a:hover {
        background-color: rgba(255, 216, 117, 0.60);
        color: black;
    }

    #navbar-right {
        float: right;
        font-family: 'Poetsen One', sans-serif;
    }

    @media (max-width: 768px) {
        #navbar {
            padding: 10px 10px;
        }

        #navbar a {
            color: #333;
        }

        #navbar #logo {
            color: #333;
        }
    }
    </style>
</head>

<body>

    <div id="navbar" class="navbar navbar-expand-lg navbar-light bg-light ">
        <img src="{{ asset('images/home/logonav.png') }}" style="width: 5%" class="navbar-brand" id="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kegiatan">KEGIATAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fasilitas">FASILITAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ppdb">PPDB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak">KONTAK</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
                    <form id="logout-form" action="logout" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="login">LOGIN</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha384-oqVuUtoTfz7LzCB2Ll6H6AyMoej5xdZ9H/8+uNfBsf4+UHJ6p8EkYl5+8Fwnf1bC" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-e4HbhfggYrnP6qLcgFlkUrJeA7ErvgG5RAJRHd2FU5gPDvF+9W6bQC3VEtR8jh4P" crossorigin="anonymous">
    </script>

</body>

</html>
