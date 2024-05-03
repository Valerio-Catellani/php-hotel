<?php
session_start(); //non serve solo per creare una sessione, ma anche se vogliamo accedere ai dati della sessione:
if (!isset($_SESSION['userId'])) {
    session_destroy();
    header('Location: login.php');
    die();
}

include __DIR__ . "/Views/header.php"; //ci fornisce tutti i dati presenti e le variabili tra cui $filteredHotels che ci serve in table
include __DIR__ . "/Models/hotel.php";
?>
<main class="container">

</main>
<?php
include __DIR__ . "/Views/footer.php"
?>