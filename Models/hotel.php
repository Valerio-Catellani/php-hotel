<?php
$hotels = [
    [
        'id' => 1,
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
        'img' => '../src/img/hotel/hotel1.jpg',
    ],
    [
        'id' => 2,
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'id' => 3,
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'id' => 4,
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'id' => 5,
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
    [
        'id' => 6,
        'name' => 'Hotel Splendido',
        'description' => 'Hotel Splendido Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 8.2
    ],
    [
        'id' => 7,
        'name' => 'Hotel Vista Mare',
        'description' => 'Hotel Vista Mare Descrizione',
        'parking' => false,
        'vote' => 3,
        'distance_to_center' => 3.7
    ],
    [
        'id' => 8,
        'name' => 'Hotel Panorama',
        'description' => 'Hotel Panorama Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 2.8
    ],
    [
        'id' => 9,
        'name' => 'Hotel Sole',
        'description' => 'Hotel Sole Descrizione',
        'parking' => false,
        'vote' => 4,
        'distance_to_center' => 6.5
    ],
    [
        'id' => 10,
        'name' => 'Hotel Luna',
        'description' => 'Hotel Luna Descrizione',
        'parking' => true,
        'vote' => 3,
        'distance_to_center' => 12.1
    ],
    [
        'id' => 11,
        'name' => 'Hotel Mare e Monti',
        'description' => 'Hotel Mare e Monti Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 9.8
    ],
    [
        'id' => 12,
        'name' => 'Hotel Le Palme',
        'description' => 'Hotel Le Palme Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 6.9
    ],
    [
        'id' => 13,
        'name' => 'Hotel La Pineta',
        'description' => 'Hotel La Pineta Descrizione',
        'parking' => false,
        'vote' => 2,
        'distance_to_center' => 3.2
    ],
    [
        'id' => 14,
        'name' => 'Hotel I Tigli',
        'description' => 'Hotel I Tigli Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 4.5
    ],
    [
        'id' => 15,
        'name' => 'Hotel Rosa',
        'description' => 'Hotel Rosa Descrizione',
        'parking' => false,
        'vote' => 3,
        'distance_to_center' => 7.7
    ],
    [
        'id' => 16,
        'name' => 'Hotel Mediterraneo',
        'description' => 'Hotel Mediterraneo Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 11.3
    ],
    [
        'id' => 17,
        'name' => 'Hotel Gardenia',
        'description' => 'Hotel Gardenia Descrizione',
        'parking' => true,
        'vote' => 3,
        'distance_to_center' => 4.8
    ],
    [
        'id' => 18,
        'name' => 'Hotel Stella',
        'description' => 'Hotel Stella Descrizione',
        'parking' => false,
        'vote' => 2,
        'distance_to_center' => 8.9
    ],
    [
        'id' => 19,
        'name' => 'Hotel Lido',
        'description' => 'Hotel Lido Descrizione',
        'parking' => false,
        'vote' => 4,
        'distance_to_center' => 3.6
    ],
    [
        'id' => 20,
        'name' => 'Hotel Panettone',
        'description' => 'Hotel Panettone Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 6.2
    ]
];


function getHotels($db)
{
    $filteredHotels = $db;
    if ((isset($_GET['parking'])) && (isset($_GET['stars']))) {
        $parking = $_GET['parking'];
        $stars = $_GET['stars'];
        $filteredHotels = array_filter($db, function ($element) use ($parking, $stars) {
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
    };
    return $filteredHotels;
}

function getHotels_by_id($db)
{
    $findHotelbyId = array_filter($db, function ($element) {
        return $element['id'] == $_GET['hotelId'];
    });
    $findedHotel = array_shift($findHotelbyId);
    return $findedHotel;
}
