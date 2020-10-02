<?php
    include_once('bdd/connexion-db.php');

    if(!empty($_POST));{
        extract($_POST);
        $valid = (boolean) true;

        if(isset($_POST['inscription'])){
            $nom = (String) trim($nom);
            $prenom = (String) trim($prenom);
            $pseudo = (String) trim($pseudo);
            $age = (int) $age;
            $email = (String) trim($email);
            $tel = (int) $tel;
            $password = (String) trim($password);
            $verifpassword = (String) trim($verifpassword);


            
            if($age > 99 || $age < 10){
                $valid = false;
                $err_age = "Veuillez renseigner votre vrai âge !";
            }
            /*if(strlen($tel) != 10){
                $valid = false;
                $err_tel = "Veuillez renseigner une vrai numéro de téléphone !"   ;             
            }*/
            if($verifpassword != $password){
                $valid = false;
                $err_verifpassword = "Vos mots de passes ne correspondent pas !";
            }
            if($valid){
                $date_inscription = date("Y-m-d");
                $date_connexion = date("Y-m-d");

                $req = $BDD->prepare("INSERT INTO utilisateur (nom, prenom, pseudo, age, email, motdepasse, tel, date_inscription, date_connexion)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $req->execute(array($nom, $prenom, $pseudo, $age, $email, $password, $tel, $date_inscription, $date_connexion));
            }
        }
    }
?>
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
            <form class="box box-inscription" method="post">
                <h1>S'inscrire</h1>
                
                <input class="champ up" type="text" name="nom" id="nom" required>
                <label class="labNom">Nom</label>
                <input class="champ middle" type="text" name="prenom" id="prenom"required>
                <label>Prénom</label>
                <input class="champ middle" type="text" name="pseudo" id="pseudo"required>
                <label>Pseudo</label>
                <input class="champ middle" type="number" name="age" id="age"required>
                <label>Age</label>
                <?php
                    if(isset($err_age)){
                        echo "<div class='erreur'>". $err_age . "</div>";
                    }
                ?>
                <input class="champ middle" type="email" name="email" id="email"required>
                <label>Email</label>
                <input class="champ middle" type="tel" name="tel" id="tel"required>
                <label>Numéro de Téléphone</label>
                <?php
                    /*if(isset($err_tel)){
                        echo "<div class='erreur'>". $err_tel . "</div>";
                    }*/
                ?>
                <input class="champ middle" type="password" name="password" id="password"required>
                <label>Mot de Passe</label>
                <input class="champ down" type="password" name="verifpassword" id="verifpassword"required>
                <label>Vérification Mot de Passe</label>
                <?php
                    if(isset($err_verifpassword)){
                        echo "<div class='erreur'>". $err_verifpassword . "</div>";
                    }
                ?>
                <div class="container-btn">
                    <input type="submit" name="inscription" value="S'inscrire">
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
            </form>
        </div>
    </body>
</html>