<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overwatch - Roles</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php


$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';


$response = file_get_contents("https://overfast-api.tekrop.fr/heroes");
$heroes = json_decode($response, true);


$filteredHeroes = array_filter($heroes, function($hero) use ($searchTerm) {
    return stripos($hero['name'], $searchTerm) !== false;
});


foreach ($filteredHeroes as $hero) {
    echo "<div class='hero'>";
    echo "<img src='{$hero['portrait']}' alt='Portrait of {$hero['name']}'>";
    echo "<div class='info'>";
    echo "<h3>{$hero['name']}</h3>";
    echo "<p>{$hero['role']}</p>";
    echo "</div>";
    echo "</div>";
}

?>

</body>
</html>
