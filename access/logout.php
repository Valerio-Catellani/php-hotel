<?php
session_start();
if (isset($_SESSION['userId'])) {
    $name = $_SESSION['name'];
    session_destroy();
} else {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . "/../Views/head/head.php"; ?>
    <link rel="stylesheet" href="../style/hype_utility.css">
    <link rel="stylesheet" href="../style/main.css">
    <title>Php Hotel: Logout</title>
</head>

<body class=" p-5 text-white">
    <?php include __DIR__ . "/../Views/body/header.php"; ?>
    <div class="filter vw-100 vh-100">
    </div>
    <div class="container main-color-transparent d-flex justify-content-center align-items-center main-logout border rounded-4">
        <h3>Arrivederci <?php echo $name ?></h3>
    </div>
</body>
<script>
    setTimeout(() => {
        window.location.href = 'login.php';
    }, 2000)
</script>

<?php include __DIR__ . "/../Views/body/footer.php" ?>

</html>