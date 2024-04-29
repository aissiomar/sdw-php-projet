<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overwatch</title>
    
</head>
<body>
<?php

include 'includes/header.php';
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';


$response = file_get_contents("https://overfast-api.tekrop.fr/maps");

$maps = json_decode($response, true);




$filteredmaps = array_filter($maps, function($map) use ($searchTerm) {
    return stripos($map['name'], $searchTerm) !== false ;
});



echo "<div id='map_container' class='heroes-container'>";
foreach ($filteredmaps as $map) {
    echo "<div id='result'>";
    echo "<div class='card'>";
    echo "<img class='map-img' src='{$map['screenshot']}' alt='Image of {$map['screenshot']}'>";
    echo "<div class='info'>";
    echo "<h3>{$map['name']}</h3>";
    echo "<p>{$map['location']}</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

}
echo "</div>";

?>

</body>
</html>
