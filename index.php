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

$filteredHotels;

if (isset($_GET["isParking"]) && $_GET["isParking"] === "on") {
    // var_dump("hotel con parcheggio selezionati");
    $filteredHotels = [];
    foreach ($hotels as $hotel) {
        if ($hotel["parking"] == true) {
            $filteredHotels[] = $hotel;
        }
    }
} else {
    // var_dump("selezionati tutti gli hotel");
    $filteredHotels = $hotels;
}

if (isset($_GET["vote"]) && ($_GET["vote"] >= 1 && $_GET["vote"] <= 5)) {
    $currentArray = [];

    foreach ($filteredHotels as $hotel) {
        if ($hotel["vote"] >= $_GET["vote"]) {
            $currentArray[] = $hotel;
        }
    }

    $filteredHotels = $currentArray;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HOTEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
</head>

<body>
    <header class="text-center mb-5">
        <h1><strong>HOTELS</strong></h1>
    </header>
    <main>
        <div class="container">
            <form action="index.php" method="GET">
                <div>
                    <input class="form-check-input" type="checkbox" id="parking" name="isParking">
                    <label for="parking" class="form-check-label">Mostrare solo gli hotel con i parcheggi</label>
                </div>
                <div>
                    <label for="vote">Vote</label>
                    <input type="number" id="vote" name="vote" min="0" max="5" value="<?= $_GET["vote"] ?>">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">CERCA</button>
                    <button type="reset" class="btn btn-danger">RESET</button>
                </div>
            </form>

        </div>
        <div class="container">
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
                    <?php foreach ($filteredHotels as $hotel) { ?>
                    <tr>
                        <th><?= $hotel["name"]; ?></th>
                        <td><?= $hotel["description"]; ?></td>
                        <td><?= $hotel["parking"]  ? "si" : "no"; ?></td>
                        <td><?= $hotel["vote"]; ?>/5</td>
                        <td><?= $hotel["distance_to_center"]; ?> Km</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>