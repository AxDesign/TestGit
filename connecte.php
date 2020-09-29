<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="index.css">
        <title>Connecté</title>
    </head>

    <body>
        <div class="box">
            <h1>Connecté</h1>
            <?php
                if(isset($_POST['submit'])){
                    $pseudo = $_POST['pseudo'];
                    $password = $_POST['password'];

                    if($pseudo == 'Alex' && $password == "1234"){
                        echo "<p>Vous êtes connecté " . $pseudo . "</p>";
                        echo "<p>Mot de passe : " . $password . "</p>";
                    }
                    else{
                        echo "<p>Connexion echouée..</p>";
                    }

                }
            ?>
            <a href="index.php">
                <button class="btn">Retour</button>
            </a>
        </div>    
    </body>
</html>
