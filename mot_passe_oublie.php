<?php       
    //Démarrage de la session
    session_start();
    //Connexion à la base de données
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8","root","");
    } catch (PDOException $excepption) {
        header("Location:404.php");
    }

    $erreur = "";

    //Si on reçoit une requête de type post
    if (isset($_POST["envoyer"])){
        $email = htmlspecialchars($_POST["email"]);
        //Vérifier si le champ n'est pas vide
        if (!empty($email)){
            //Préparation de la requête de selection
            $requette = $pdo->prepare("SELECT email_user FROM utilisateur WHERE email_user=? ");
            //Exécution de la requête
            $requette->execute(array($email));
            //Vérifier si l'information est vrai
            if ($requette->rowCount()>0){
                //Enrégistrer l'email dans la session
                $_SESSION["email_user"] = $email;
                //Redirection sur la page de mot de passe valide
                header("Location:mot_passe_valide.php");
            }else{ //Sinon on affiche un message d'erreur
                $erreur = "<span id='erreur'>Email incorrecte</span>";
            }
        }else{//Sinon on affiche un message d'erreur
            $erreur = "<span id='erreur'>Champs obligatores !</span>";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mot de passe oublé</title>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
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
        <h2>Mot de passe Oublié</h2>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <?php if (isset($erreur)) echo $erreur; ?>
            <label for="username">Email *</label>
            <input type="email" id="email" name="email">
            <input type="submit" value="Envoyer" name="envoyer">
            <a href="connexion.php">Retour Connexion</a>
        </form>
    </div>

</body>
</html>
