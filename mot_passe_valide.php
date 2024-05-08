<?php
    //Démarrage de la session
     session_start();
    //Connexion à la base de données
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8","root","");
    } catch (PDOException $excepption) {
        header("Location:404.php");
    }

    $email = $_SESSION["email_user"]; //Récupération de l'email de l'utilisateur par la méthode get

    $erreur = "";
    
    //Vérifier si on reçoit une requête de type post
    if (isset($_POST["modifier"])){
        $nouveau = htmlspecialchars($_POST["mdp_nouveau"]);
        $confirmation = htmlspecialchars($_POST["mdp_confirmer"]);
        //Vérifier si les deux champs ne sont pas vides
        if (!empty($nouveau) and !empty($confirmation)){
            //Vérifier si les deux mots de passes sont identifiques
            if ($nouveau == $confirmation){
                //Préparation de la requête de mise à jour
                $requete = $pdo->prepare("UPDATE utilisateur SET mot_de_passe=? WHERE email_user=? LIMIT 1");
                //Exécution de la requête
                $requete->execute(array(
                    $confirmation,
                    $email
                ));
                //Redirection sur la page de connexion
                header("Location:connexion.php");
            }else{//Sinon affiche un message d'erreur
                $erreur = "<span id='erreur'>Les deux mots de passes sont différentes</span>";
            }
        }else{ //Sinon on affiche un message d'erreur
            $erreur = "<span id='erreur'>Champs obligatores !</span>";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nouveau mot de passe</title>
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
        background-color: rgb(107, 147, 107);
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: green;
    }
    form a{
        padding: 10px;
    }
    #account{
        color: black;
    }
</style>
</head>
<body>

    <div id="login-form">
        <h2>Modifier votre Mot de passe </h2>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <?php
                if (isset($erreur)) echo $erreur;
            ?>
            <label for="mdp_nouveau">Nouveau</label>
            <input type="password" id="mdp_nouveau" name="mdp_nouveau" placeholder="Votre nouveau mot de passe">
            <label for="mdp_confirmer">Confirmer</label>
            <input type="password" id="mdp_confirmer" name="mdp_confirmer" placeholder="Confirmer votre nouveau mot de passe">
            <input type="submit" value="Modifier" id="modifier" name="modifier">
        </form>
    </div>

</body>
</html>
