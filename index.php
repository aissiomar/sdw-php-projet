<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overwatch Heroes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="search-container">
        <form action="heroes.php" method="GET">
            <input type="text" name="search" placeholder="Search heroes...">
            <button type="submit">Search</button>
        </form>
    </div>
    <?php
    
        $response = file_get_contents("https://overfast-api.tekrop.fr/heroes");
        $heroes = json_decode($response, true);

        
        foreach ($heroes as $hero) {
            $name = $hero['name'];
            $role = $hero['role'];
            $image = $hero['portrait'];

            echo "<div class='hero'>";
            echo "<img src='$image' alt='$name'>";
            echo "<div class='hero-details'>";
            echo "<h2>$name</h2>";
            echo "<p>$role</p>";
            echo "</div>";
            echo "</div>";
        }
    ?>
    <script src="scripts.js"></script>
</body>
</html>
