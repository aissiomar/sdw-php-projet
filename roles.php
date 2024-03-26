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


$response = file_get_contents('https://overfast-api.tekrop.fr/roles');
$data = json_decode($response, true);


echo "🎮 Roles\n";
echo "Overwatch heroes roles\n\n";
foreach ($data as $role) {
    echo "Name: {$role['name']}\n";
    echo "Description: {$role['description']}\n";
    echo "<img src='{$role['icon']}' alt='{$role['name']} Icon'>\n";
    echo "\n";
}

?>
</body>
</html>
