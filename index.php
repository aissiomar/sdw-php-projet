<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Overwatch</title>
</head>
<body>
    <h1>Overwatch </h1>
    
    <?php

$response = file_get_contents('https://overfast-api.tekrop.fr/heroes');
$heroes = json_decode($response, true);

$search = isset($_GET['search']) ? $_GET['search'] : '';

if (!empty($search)) {
    $filtered_heroes = array_filter($heroes, function ($hero) use ($search) {
        return stripos($hero['name'], $search) !== false;
    });
} else {
    $filtered_heroes = $heroes;
}

echo "<form action='index.php' method='GET'>"; 
echo "<input type='text' name='search' placeholder='Search heroes...' value='{$search}'>";
echo "<button type='submit'>Search</button>";
echo "</form>";
foreach ($filtered_heroes as $hero) {
    echo "Name: {$hero['name']}\n";
    echo "Role: {$hero['role']}\n";
    echo "<img src='{$hero['portrait']}' alt='Portrait of {$hero['name']}'>\n";
    echo "\n";
}

?>




</body>
</html>
