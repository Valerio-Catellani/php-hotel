<?php
session_start(); //non serve solo per creare una sessione, ma anche se vogliamo accedere ai dati della sessione:
if (!isset($_SESSION['userId'])) {
    session_destroy();
    header('Location: login.php');
    die();
}

include_once __DIR__ . "/../Models/hotel.php";
$findedHotel = getHotels_by_id($hotels);

include __DIR__ . "/../Controllers/generateHotel.php";
$template = generateHotelTemplate($findedHotel);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . "/../Views/head/head.php"; ?>
    <link rel="stylesheet" href="../style/hype_utility.css">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/media_query.css">
    <title>Php Hotel: <?php echo $findedHotel['name'] ?></title>
</head>

<body class="py-5 text-white">
    <?php include __DIR__ . "/../Views/body/header.php"; ?>
    <main class="container d-flex flex-column align-items-center justify-content-center ">
        <?php echo $template; ?>
        <a href="../index.php" class="text-decoration-none">
            <button href="index.php" class="btn btn-warning w-100 py-2 w-25 border border-black mt-3">Torna alla Home</button>
        </a>
    </main>
</body>

<?php include __DIR__ . "/../Views/body/footer.php" ?>

</html>