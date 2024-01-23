<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Link Css  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Link BootStrap  -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <form action="">
        <label for="search">Cerca gli Hotel per Valutazione (1-5)</label>
        <input type="search" name="vote" id="vote">
        <input type="submit" name="invia ricerca" id="invia"> 
    </form>

    

<body>

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

// Stampo tutti gli hotel 
// foreach ($hotels as $hotel) {
//     echo "<h2>" . $hotel['name'] . "</h2>";
//     echo "<p>Description: " . $hotel['description'] . "</p>";
//     echo "<p>Parking: " . ($hotel['parking'] ? 'Yes' : 'No') . "</p>";
//     echo "<p>Vote: " . $hotel['vote'] . "</p>";
//     echo "<p>Distance to Center: " . $hotel['distance_to_center'] . " km</p>";
//     echo "<hr>"; 
// }

// Li inserisco in una tabella: 
foreach ($hotels as $hotel) {
    echo  
    "<table class="table">"
    "<thead>"
        "<tr>"
        "<th scope="col">"."#"."</th>"
        "<th scope="col">"."Name Hotel"."</th>"
        "<th scope="col">"."Description"."</th>"
        "<th scope="col">"."Parcheggio"."</th>"
        "<th scope="col">"."Voto"."</th>"
        "<th scope="col">"."Distanza dal centro"."</th>"
    "</thead>"
    "<tbody>"
        "<tr>"
        "<th scope="row">"."1"."</th>"
        "<td>"."$Hotel['name']"."</td>"
        "<td>"."$Hotel['description'].""</td>"
        "<td>"."$hotel['parking']"."</td>"
        "<td>"."$hotel['vote']"."</td>"
        "<td>"."$hotel['distance_to_center']"."</td>"
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
    </table>

}

$vote = $_GET['vote'];

if (
    $vote <=5 
    && strpose ($hotels[vote])== true
){
    echo "ecco gli hotel con questa valutazione:" . $hotels
}



?>

</body>
</html>