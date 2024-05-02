<?php
include __DIR__ . "/Models/hotel.php";
$filteredHotels = $hotels;


if ((isset($_GET['parking'])) && (isset($_GET['stars']))) {
    $parking = $_GET['parking'];
    $stars = $_GET['stars'];
    $filteredHotels = array_filter($hotels, function ($element) use ($parking, $stars) {
        if ($parking !== 'all' && $stars !== 'all') {
            return ($element['parking'] ? 'true' : 'false') === $parking && $element['vote'] >= $stars;
        } else if ($parking === 'all' && $stars !== 'all') {
            return $element['vote'] >= $stars;
        } else if ($parking !== 'all' && $stars === 'all') {
            return $parking === ($element['parking'] ? 'true' : 'false');
        } else {
            return true;
        }
    });
} else {
    $filteredHotels = $hotels;
}

include __DIR__ . "/Views/header.php";
?>
<main class="container">
    <?php
    include __DIR__ . "/Views/table.php";
    ?>
</main>
<?php
include __DIR__ . "/Views/footer.php"
?>