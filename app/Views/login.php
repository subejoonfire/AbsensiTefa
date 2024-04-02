<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/css/template.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/login.css') ?>">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="head-container">
            <h1>Login</h1>
        </div>
        <div class="body-container">
            <?php
            if (session('error')) {
                echo session('error');
            }
            ?>
            <form action="<?= base_url('/loginAction') ?>" method="post">   
                <div class="username">
                    <span>Username :</span>
                    <input name="username" type="text">
                </div>
                <div class="password">
                    <span>Password :</span>
                    <input type="password" name="password" type="text">
                </div>
                <div class="submit-button">
                    <button class="my-button" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>