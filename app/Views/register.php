<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulir Pendaftaran</h2>

        <form method="post" enctype="multipart/form-data" action="<?= site_url('register/process') ?>">
        
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" required>
        
            <label for="password">Kata Sandi:</label>
            <input type="password" name="password" id="password" required>
        
            <label for="profile_pic">Unggah Foto Profil:</label>
            <input type="file" name="profile_pic" id="profile_pic" accept="image/*" required>
        
            <input type="submit" value="Daftar">
        
        </form>
    </div>
</body>
</html>
