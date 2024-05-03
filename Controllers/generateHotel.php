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
    <div class='w-75 my-3 rounded-circle overflow-hidden hype-shadow-white'>
        <img class='img-fluid' src='$hotel[img]' alt='hotel image'>
    </div>
    <h5>$hotel[description]</h5>
    <p class='hotel-description'>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores similique asperiores cumque, nihil labore debitis tempora tempore! Facilis dolore, iusto non ex obcaecati repellendus veritatis sunt quaerat doloribus praesentium, suscipit et magni quasi! Deleniti numquam, illo aliquam quae aspernatur amet velit quas. Quos officia officiis, autem temporibus sapiente dolore ad quaerat et, incidunt aut optio praesentium. Incidunt voluptatibus sit nesciunt vero similique mollitia ipsum, facere assumenda aliquam a sed placeat deserunt labore. Consequuntur tempore quidem incidunt rem ullam id provident hic velit, placeat, minus quisquam autem nulla enim ut vitae vel exercitationem. Quaerat, vel quidem magni delectus laudantium ducimus quibusdam!
    </p>
</div>
    ";
    return $template;
}
