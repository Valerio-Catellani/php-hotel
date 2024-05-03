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
    <main class="container">
        <?php
        if (!empty($_GET['error'])) {
            echo '<div class="alert alert-danger" role="alert"> Email o Password errati </div>';
        }
        ?>
        <div class="d-flex justify-content-center align-items-center">
            <form id="loginform" action="login.php" method="POST">
                <img class="mb-4" src="./images/mobile-logo.png" alt="logo" width="100">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating mb-4">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    <label for="password">Password</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

            </form>
        </div>
    </main>
</body>

<?php include __DIR__ . "/../Views/body/footer.php" ?>

</html>