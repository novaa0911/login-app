<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    
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

        .error-message {
        color: red;
        margin-top: 10px;
        text-align: center;
        }
        
        .success-message {
            color: green;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
    <body>
        <div class="container">
            <h2>Lupa Password</h2>
            <?php if (isset($error)): ?>
            <p class="error-message"><?php echo $error; ?></p>
            <?php endif; ?>
            
            <?php if (isset($message)): ?>
                <p class="success-message"><?php echo $message; ?></p>
            <?php endif; ?>

            <form method="post" enctype="multipart/form-data" action="<?= site_url('forgot-password/process') ?>">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <input type="submit" value="Reset Password">
            </form>
        </div>
    </body>
</html>