<?php
session_start(); //non serve solo per creare una sessione, ma anche se vogliamo accedere ai dati della sessione:
if (!isset($_SESSION['userId'])) {
    session_destroy();
    header('Location: access/login.php');
    die();
}

//include __DIR__ . "/Views/header.php"; //ci fornisce tutti i dati presenti e le variabili tra cui $filteredHotels che ci serve in table

include_once __DIR__ . "/Models/hotel.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . "/Views/head/head.php"; ?>
    <link rel="stylesheet" href="style/hype_utility.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/media_query.css">
    <link rel="stylesheet" href="style/animation.css">
    <title>Php Hotel: Home</title>
</head>

<body class="py-5 text-white">
    <?php include __DIR__ . "/Views/body/header.php"; ?>
    <?php include __DIR__ . "/Views/body/search.php"; ?>
    <main class="container">
        <?php
        include __DIR__ . "/Views/body/table.php";
        ?>
    </main>
</body>

<?php include __DIR__ . "/Views/body/footer.php" ?>

</html>