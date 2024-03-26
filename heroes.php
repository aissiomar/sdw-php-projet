<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overwatch - Roles</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php

// Récupérer le nom du héros à afficher
$hero_key = "cassidy"; // Remplacez ceci par le nom du héros souhaité

// Récupérer les détails du héros Overwatch depuis l'API
$response = file_get_contents("https://overfast-api.tekrop.fr/heroes/{$hero_key}");
$data = json_decode($response, true);

// Afficher les détails du héros
echo "Name: {$data['name']}\n";
echo "Description: {$data['description']}\n";
echo "Role: {$data['role']}\n";
echo "Location: {$data['location']}\n";
echo "<img src='{$data['portrait']}' alt='Portrait of {$data['name']}'>\n";
echo "\n";

?>
</body>
</html>
