<?php
function generateGames($filteredHotels)
{
    $fullTemplate = '';
    foreach ($filteredHotels as $hotel) {
        $hasParking = $hotel['parking'] ? 'Yes' : 'No';
        $stars = getStars($hotel['vote']);
        $template = "
        <tr>
        <td>{$hotel['name']}</td>
        <td>{$hotel['description']}</td>
        <td>$stars</td>
        <td>$hasParking</td>
        <td>{$hotel['distance_to_center']} km</td>
        </tr>
        ";
        $fullTemplate .= $template;
    };
    if (count($filteredHotels) === 0) {
        $fullTemplate = '<tr>
        <td class="text-center fst-italic ">Non ci sono Hotel disponibili. Effettua una nuova ricerca cambiando i parametri</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>';
    }
    return $fullTemplate;
};

function getStars($value)
{
    $fullTemplate = '';
    for ($i = 0; $i < 5; $i++) {
        if ($i < $value) {
            $fullTemplate .= '<i class="fa-solid fa-star text-warning"></i>';
        } else {
            $fullTemplate .= '<i class="fa-regular fa-star"></i>';
        }
    }
    return $fullTemplate;
}

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
        <?php echo generateGames($filteredHotels) ?>
    </tbody>
</table>