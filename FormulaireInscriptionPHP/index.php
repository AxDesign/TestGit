<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Inscription</title>
    </head>

    <body>
        <form class="box" action="" method="post">
            <h1>S'inscrire</h1>
            <!-- nom
            prénom
            pseudo
            age
            date de naissance
            email
            telephone
            mot de passe 
            vérification mot de passe -->
            
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
                <button>S'inscrire</button>
            </div>

        </form>
    </body>
</html>