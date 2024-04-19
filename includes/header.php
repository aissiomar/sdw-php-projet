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
        <a href="index.php"><h1>OVERWATCH HEROES</h1></a>
        <div class="menu">
            <div class="search-container">
                <form action="heroes.php" method="GET">
                    <input type="text" name="search" placeholder="Search heroes or roles...">
                    <button type="submit">Search</button>
                </form>
            </div>
            <div class="sort-container">
                <button id="sortAlphaButton">Sort by Name</button>
                <button id="sortRoleButton">Sort by Role</button>
            </div>
        </div>
    </header>
</body>
</html>