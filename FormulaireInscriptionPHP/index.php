<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Inscription</title>
    </head>

    <body>

        <div class="box">
            <!--- S'INSCRIRE --->
            <form class="box box-inscription" action="inscription.php" method="post">
                <h1>S'inscrire</h1>
                
                <input class="champ up" type="text" name="nom" id="nom" required>
                <label class="labNom">Nom</label>
                <input class="champ middle" type="text" name="prenom" id="prenom"required>
                <label>Prénom</label>
                <input class="champ middle" type="text" name="pseudo" id="pseudo"required>
                <label>Pseudo</label>
                <input class="champ middle" type="number" name="age" id="age"required>
                <label>Age</label>
                <input class="champ middle" type="email" name="email" id="email"required>
                <label>Email</label>
                <input class="champ middle" type="tel" name="tel" id="tel"required>
                <label>Numéro de Téléphone</label>
                <input class="champ middle" type="password" name="password" id="password"required>
                <label>Mot de Passe</label>
                <input class="champ down" type="password" name="verifpassword" id="verifpassword"required>
                <label>Vérification Mot de Passe</label>
                <div class="container-btn">
                    <input type="submit" name="submit" value="S'inscrire">
                </div>
            </form>
            <!--- SE CONNECTER --->
            <form class="box box-connexion" action="connexion.php" method="post">
                <h1>Se connecter</h1>
                
                <input class="champ middle" type="text" name="pseudo" id="pseudo"required>
                <label>Pseudo</label>
                <input class="champ middle" type="email" name="email" id="email"required>
                <label>Email</label>
                <input class="champ middle" type="password" name="password" id="password"required>
                <label>Mot de Passe</label>
                <div class="container-btn">
                    <input type="submit" name="submit" value="Se connecter">
                </div>
        </div>
    </body>
</html>