<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
    <header>
        <a id="title" href="index.php"><h1>OVERWATCH HEROES</h1></a>
        <div class="menu">
            <div class="search-container">
                <form action="heroes.php" method="GET">
                    <input type="text" name="search" placeholder="Search heroes or roles...">
                    <button type="submit">Search</button>
                </form>
            </div>
            <div id="nav">
               <strong> <a href="index.php">HEROES</a></strong>
                <strong><a href="maps.php">MAPS</a></strong>
            </div>
            <div class="sort-container">
                <button id="sortAlphaButton">Sort by Name A-Z</button>
                <button id="sortAlphaButton2">Sort by Name Z-A</button>
            </div>
        </div>
    </header>
</body>
</html>