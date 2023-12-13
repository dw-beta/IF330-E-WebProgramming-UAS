<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poetsen-one" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(90deg, rgba(215, 197, 168, 1) 0%, rgba(250, 207, 149, 1) 25%, rgba(255, 227, 132, 0.4066001400560224) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Poetsen One', sans-serif;
            background-color: #FFFACD;
        }

        .confirmation-box {
            width: 400px;
            padding: 40px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .confirmation-box h1 {
            font-family: 'Poetsen One', sans-serif;
            margin-bottom: 30px;
        }

        .back-button {
            margin-top: 20px;
        }

        .back-button a {
            border: none;
            background-color: #22c933;
        }

        .back-button a:hover {
            background-color: #056302;
        }
    </style>
</head>
<body>
    <div class="confirmation-box">
        <h1>Daftar Berhasil!</h1>
        <div class="back-button">
            <a href="/home" class="btn btn-primary">Back</a>
        </div>
    </div>
</body>
</html>
