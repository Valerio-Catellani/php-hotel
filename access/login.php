<?php

include __DIR__ . "/../Controllers/auth.php"; //lo includo perchè ci serve per il login visto che l'action del log in richiama questa pagina dovremo andarci a richiamare la logica pe rla gestione dei dati
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . "/../Views/head/head.php"; ?>
    <link rel="stylesheet" href="../style/hype_utility.css">
    <link rel="stylesheet" href="../style/main.css">
    <title>Php Hotel: Login</title>
</head>

<body class=" p-5 text-white">
    <?php include __DIR__ . "/../Views/body/header.php"; ?>
    <main class="container d-flex flex-column-reverse align-items-center justify-content-center">
        <?php
        if (!empty($_GET['error'])) {
            echo '<div class="alert alert-danger" role="alert"> Email o Password errati </div>';
        }
        ?>
        <div class="d-flex justify-content-center align-items-center main-color-transparent w-50 p-4 border rounded-4 mb-4">
            <form id="loginform" action="login.php" method="POST">
                <div class="text-center">
                    <img class="mb-3" src="../src/img/Php-hotel-logo.png" alt="logo" width="100">
                </div>
                <h1 class="h3 mb-3 fw-normal fs-4">Please sign in</h1>

                <div class="form-floating mb-4">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    <label for="password">Password</label>
                </div>
                <button class="btn btn-warning w-100 py-2" type="submit">Sign in</button>

            </form>
        </div>
    </main>
</body>

<?php include __DIR__ . "/../Views/body/footer.php" ?>

</html>