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
            background-color: rgba(255, 216, 117, 0.60);
        }

        .form-signin {
            max-width: 430px;
            padding: 1rem;
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
            background-color: #f2c11f;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            border-color: black;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #f5cb40;
            border-color: black;
            color: #fff;
        }
    </style>
</head>
<body>
    <main class="form-signin w-100 m-auto">
        <form action="{{ url('/login') }}" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>
            
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

            <div class="register-button">
                <a href="register">Not yet registed? Register here!</a>
            </div>
        </form>
    </main>
</body>
</html>