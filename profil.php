<?php
    //Démarrage de la session
    session_start();
    //Connexion à la base de données
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8","root","");
    } catch (PDOException $excepption) {
        header("Location:404.php");
    }
    //Récupérateur de l'email de l'utilisateur par la méthode get
    $email = $_GET["mail"];
    //Préparation de la requête de selection
    $requette = $pdo->prepare("SELECT id_user, nom_user, prenom_user, id_unique, email_user FROM utilisateur WHERE email_user=?");
    //Exécution de la requête
    $requette->execute(array($email));
    //Récupération d'un enrégistrement unique
    $valeur = $requette->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil utilisateur</title>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%; 
        height: 100vh;
        font-family: Arial, sans-serif;
    }
    #erreur{
        color: red;
    }
    #login-form {
        width: 400px;
        margin: 0 auto;
        border: 2px solid #ccc;
        padding: 20px;
        border-radius: 10px;
    }
    h2 {
        text-align: center;
    }
    label {
        display: block;
        margin-bottom: 10px;
    }
    input[type="text"],
    input[type="password"],
    input[type="email"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        width: 100%;
        background-color: #4c82af;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #3368da;
    }
    #retour{
        background-color: #4c82af;
        padding: 8px;
        color: white;
        border-radius: 6px;
    }
    #retour:hover{
        background-color: #3368da;
    }
</style>
</head>
<body>

    <div id="login-form">
        <h2>Mon profil</h2>
        <a href="interface.php" style="float:left; text-decoration:none; font-size:13px" id="retour">Retour</a>
        <?php
            //Si on reçoit une requête de type post
            if (isset($_POST["modifier"])){
                $nom = htmlspecialchars($_POST["nom"]);
                $prenom = htmlspecialchars($_POST["prenom"]);
                $mdp = htmlspecialchars($_POST["mdp"]);
                $mail = htmlspecialchars($_POST["email"]);
                $id = htmlspecialchars($_POST["id"]);

                $id_unique = "@".$mdp;
                //Préparation de la requêtte de mise à jour des informations de l'utilisateur
                $modification = $pdo->prepare("UPDATE utilisateur SET nom_user=?, prenom_user=?, email_user=?, id_unique=? WHERE id_user=? LIMIT 1");
                //Cryptage du mot de passe
                $crypter = password_hash($mdp,PASSWORD_DEFAULT);
                //Exécution de la requête
                $modification->execute(array(
                    $nom,
                    $prenom,
                    $mail,
                    $id_unique,
                    $id
                ));
                //Redirection sur la page interface.php
                header("Location:interface.php");
            }
        ?>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            <center style="padding: 10px;">
                <img src="icone/icone_user.png" alt="" srcset="" width="50px">
            </center>
            <input type="hidden" id="id" name="id" value="<?= $valeur["id_user"] ?>">
            <label for="nom">Nom *</label>
            <input type="text" id="nom" name="nom" value="<?= $valeur["nom_user"] ?>">
            <label for="prenom">Prenom *</label>
            <input type="text" id="prenom" name="prenom" value="<?= $valeur["prenom_user"] ?>">
            <label for="">Pseudo Unique *</label>
            <input type="text" id="mdp" name="mdp" value="<?= $valeur["id_unique"] ?>">
            <label for="email">Adresse E-mail *</label>
            <input type="email" name="email" id="email" value="<?= $valeur["email_user"] ?>">
            <input type="submit" value="Modifier" name="modifier">
        </form>
    </div>

</body>
</html>
