<?php

include_once  __DIR__ . "/../../Models/hotel.php";
$filteredHotels = getHotels($hotels);

include __DIR__ . "/../../Controllers/generateTable.php";
$template = generateTemplateTable($filteredHotels);



?>

<table class="table table-striped table-hover table-dark border hype-shadow-white rounded">
    <thead>
        <tr>
            <th scope="col">Hotel Name</th>
            <th scope="col">Description</th>
            <th scope="col">Vote</th>
            <th scope="col">Parking</th>
            <th scope="col">Distance to Center</th>
        </tr>
    </thead>
    <tbody>
        <?php echo $template ?>
    </tbody>
</table>