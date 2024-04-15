<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overwatch Heroes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>OVERWATCH HEROES</h1>
    <div class="search-container">
        <form action="heroes.php" method="GET">
            <input type="text" name="search" placeholder="Search heroes...">
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="sort-container">
        <button id="sortAlphaButton">Sort by Name</button>
        <button id="sortRoleButton">Sort by Role</button>
    </div>
    <div id="heroesContainer" class="heroes-container"></div>
    <script src="js/script.js"></script>
</body>
</html>
