<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poetsen-one" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            font-family: 'Poetsen One', sans-serif;
            background: linear-gradient(90deg, rgba(215, 197, 168, 1) 0%, rgba(250, 207, 149, 1) 25%, rgba(255, 227, 132, 0.4066001400560224) 100%);
        }

        .form-signin {
            max-width: 430px;
            padding: 1rem;
        }

        .form-signin h1 {
            display: flex;
            justify-content: center;
        }
        .form-signin p{
            font-size: 12px;
        }

        .form-signin form {
            margin: 0;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .back-button {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 10px;
        }
        
        .back-button a {
            color: #1f1d1d;
            text-decoration: none;
        }

        .back-button a:hover {
            color: #4d4949;
        }

        .register-button {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 10px;
        }

        .register-button a {
            color: #1f1d1d;
            text-decoration: none;
        }

        .register-button a:hover {
            color: #4d4949;
        }

        .btn-primary {
            background-color: #ffa123;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            border-color: #ffa123;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #f5cb40;
            border-color: #f5cb40;
            color: #fff;
        }
    </style>
</head>
<body>
    <main class="form-signin w-100 m-auto py-5">
        <form action="{{ url('/login') }}" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Login Admin</h1>
            <p>Login Khusus Untuk Admin dan Pihak Sekolah. Jika Bukan Admin Atau Pihak Sekolah Harap Kembali Ke Halaman Home</p>
            
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingUserName" name="username" placeholder="Your Name">
                <label for="floatingName">Username</label>
            </div>
        
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            
            <div class="back-button">
                <a href="home">Back to Home</a>
            </div>
    
            <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        </form>
    </main>
</body>
</html>
