<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poetsen-one" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
    html,
    body {
        height: 100%;
        font-family: 'Poetsen One', sans-serif;
        background: linear-gradient(90deg, rgba(215, 197, 168, 1) 0%, rgba(250, 207, 149, 1) 25%, rgba(255, 227, 132, 0.4066001400560224) 100%);
        color: #1f1d1d;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 100vh;
    }

    .logo-container {
        flex: 1;
        text-align: center;
        margin-right: 20px;
    }

    .logo-container img {
        max-width: 100%;
        height: auto;
    }

    .form-signin {
        flex: 2;
        max-width: 500px;
        padding: 2rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        background-color: #F2BF6C;
    }

    .form-signin h1 {
        display: flex;
        justify-content: center;
        font-size: 36px;
        margin-bottom: 20px;
    }

    .form-signin p {
        font-size: 18px;
    }

    .form-signin form {
        margin: 0;
    }

    .form-signin .form-floating:focus-within {
        border-color: #ffa123;
    }

    .form-signin input[type="text"],
    .form-signin input[type="password"] {
        border-radius: 12px;
    }

    .back-button,
    .register-button {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
    }

    .back-button a,
    .register-button a {
        color: #1f1d1d;
        text-decoration: none;
        font-size: 18px;
    }

    .back-button a:hover,
    .register-button a:hover {
        color: red;
    }

    .btn-primary {
        background-color: #ffa123;
        color: #fff;
        padding: 15px 25px;
        border-radius: 12px;
        border-color: #ffa123;
        transition: background-color 0.3s ease-in-out;
        font-size: 20px;
    }

    .btn-primary:hover {
        background-color: #f5cb40;
        border-color: #f5cb40;
        color: #fff;
    }

    @media (max-width: 1010px) {
        .logo-container {
            display: none;
        }

        .container {
            justify-content: center;
        }

        .form-signin {
            max-width: 100%;
            flex: 1;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('images/home/logonav.png') }}" alt="Logo">
        </div>

        <main class="form-signin">
            <form action="{{ url('/login') }}" method="post">
                @csrf
                <h1 class="h2 mb-3 fw-normal">Login</h1>
                <p class="lead">Login Khusus Untuk Admin dan Pihak Sekolah. Jika Bukan Admin Atau Pihak Sekolah Harap
                    Kembali Ke Halaman Home</p>

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingUserName" name="username"
                        placeholder="Your Name">
                    <label for="floatingUserName">Username</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="password"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="back-button">
                    <a href="home"><i class="bi bi-house-door"></i> Back to Home</a>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>
        </main>
    </div>
</body>

</html>
