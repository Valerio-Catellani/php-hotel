<?php

function generateTemplateTable($filteredHotels)
{
    $fullTemplate = '';
    foreach ($filteredHotels as $hotel) {
        $hasParking = $hotel['parking'] ? 'Yes' : 'No';
        $stars = getStars($hotel['vote']);
        $template = "
        <tr class='yellow-table-hover test'>
        <td ><a href='./details/pages.php?hotelId={$hotel['id']}' class='link-hotel'>{$hotel['name']}</a></td>
        <td><a href='./details/pages.php?hotelId={$hotel['id']}' class='link-hotel'>{$hotel['description']}</a></td>
        <td><a href='./details/pages.php?hotelId={$hotel['id']}' class='link-hotel'>$stars</a></td>
        <td><a href='./details/pages.php?hotelId={$hotel['id']}' class='link-hotel'>$hasParking</a></td>
        <td><a href='./details/pages.php?hotelId={$hotel['id']}' class='link-hotel'>{$hotel['distance_to_center']} km</a></td>
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
