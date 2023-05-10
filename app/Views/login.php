<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            align-content: center;
            max-width: 100%;
        }
        
        h2 {
            color: #333;
            text-align: center;
        }
        
        form {
            margin-top: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        input[type="email"],
        input[type="text"],
        input[type="password"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            font-weight: bold;
            text-transform: uppercase;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        
        .forgot-password a {
            color: #333;
            text-decoration: none;
        }
    </style>

</head>
<body>
    <div class="container">
        <h2>Halaman Login</h2>

            <form method="post" enctype="multipart/form-data" action="<?= site_url('login/process') ?>">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Kata Sandi:</label>
            <input type="password" name="password" id="password" required>
            
            <input type="submit" value="Masuk">
            
            <div class="forgot-password">
                <a href="<?= site_url('forgot-password') ?>">Lupa Password?</a>
            </div>
            

        </form>
    </div>
</body>
</html>