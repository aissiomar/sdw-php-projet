<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des personnages de Dragon Ball</title>
</head>
<body>
    <h1>Liste des personnages de Dragon Ball</h1>
    <?php
    include 'dragonball_api.php'; // Inclure le fichier pour gérer les appels à l'API
    
    try {
        $characters = fetchDragonBallCharacters('https://www.dragonball-api.com/api');
        
        // Afficher les personnages récupérés
        if (!empty($characters)) {
            echo '<ul>';
            foreach ($characters as $character) {
                echo '<li>' . $character['name'] . '</li>';
            }
            echo '</ul>';
        } else {
            echo 'Aucun personnage trouvé.';
        }
    } catch (Exception $e) {
        echo 'Erreur lors de la récupération des données : ' . $e->getMessage();
    }
    ?>
</body>
</html>
