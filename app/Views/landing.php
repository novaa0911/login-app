<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                    <h2>Selamat Datang <?php echo $name; ?>!</h2>
                    
                    <p>Email: <?php echo $email; ?></p>
                    <p>Nama: <?php echo $name; ?></p>
                    
                    <?php if ($profilePic) : ?>
                        <img src="<?php echo base_url('uploads/' . $profilePic); ?>" alt="Profile Picture" class="img-fluid rounded">
                    <?php endif; ?>
                    
                    <a href="<?= site_url('login') ?>" class="btn btn-primary mt-4">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
