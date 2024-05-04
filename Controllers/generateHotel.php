<?php

include_once __DIR__ . "/generateTable.php";

function generateHotelTemplate($hotel)
{
    $stars = getStars($hotel['vote']);
    $hasParking = $hotel['parking'] ? 'Disponibilità di parcheggio' : 'Parcheggio assente';
    $template = "
    <div class='main-color-transparent w-75 border border-warning rounded-4 px-5 py-3 hype-shadow-white d-flex flex-column align-items-center'>
    <h2 class='hype-text-shadow fs-1'>$hotel[name]</h2>
    <h5>Valutazione: $stars </h5>
    <div class='d-flex w-100 justify-content-between'>
        <h6>Distanza dal centro: $hotel[distance_to_center] km</h6>
        <h6> $hasParking </h6>
    </div>
    <div class='hotel-presentation-container w-75 my-3 rounded-circle overflow-hidden hype-shadow-white'>
        <img class='hotel-presentation' src='$hotel[img]' alt='hotel image'>
    </div>
    <h4 class='mt-3'>$hotel[description]</h4>
    <p class='hotel-description fs-5'>
            $hotel[desc]
    </p>
</div>
    ";
    return $template;
}
