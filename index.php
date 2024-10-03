<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
</head>

<body>
    <main class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><strong>NOME HOTEL</strong></th>
                    <th scope="col"><strong>DESCRIZIONE</strong></th>
                    <th scope="col"><strong>PARKING</strong></th>
                    <th scope="col"><strong>VOTO</strong></th>
                    <th scope="col"><strong>DISTANZA DAL CENTRO</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) { ?>
                    <tr>
                        <th><?= $hotel["name"]; ?></th>
                        <td><?= $hotel["description"]; ?></td>
                        <td><?= $hotel["parking"]  ? "si" : "no"; ?></td>
                        <td><?= $hotel["vote"]; ?></td>
                        <td><?= $hotel["distance_to_center"]; ?> Km</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </main>
</body>

</html>