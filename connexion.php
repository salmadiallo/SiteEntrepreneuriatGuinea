<?php
//Démarrage de la session
session_start();
//Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8", "root", "");
} catch (PDOException $excepption) {
    header("Location:404.php");
}

$erreur = "";
//Vérifier si on reçoit une requête de type post
if (isset($_POST["connexion"])) {
    $email = htmlspecialchars($_POST["email"]);
    $mot_de_passe = htmlspecialchars($_POST["mot_de_passe"]);
    //Protection de l'adresse mail contre les injections sql 
    $email = addslashes($email);
    //Vérifier si les champs ne sont pas vides
    if (!empty($email) and !empty($mot_de_passe)) {
        //Préparation de la requête de selection
        $requette = $pdo->prepare("SELECT *  FROM utilisateur WHERE email_user=?");
        //Exécution de la requête de selection
        $requette->execute(array($email));
        //Vérifier de l'authenticité
        if ($requette->rowCount() > 0) {
            $user = $requette->fetch();
            //Vérificication du mot de passe
            if (password_verify($mot_de_passe, $user["mot_de_passe"])) {
                //Mettre les informations de l'utilisateur dans la session
                $_SESSION["email"] = $email;
                $_SESSION["id_unique"] = $user["id_user"];
                $_SESSION["mot_de_passe"] = $mot_de_passe;
                $_SESSION["status"] = "Connecté";
                //Rédirection sur la page interface user
                header("Location:interface.php");
                //Destruction de la session de message succes
                unset($_SESSION["message"]);
            } else {//Sinon on affiche un message d'erreur
                $erreur = "<span id='erreur'>Email  incorrecte</span>";
            }
        } else { //Sinon on affiche un message d'erreur

        }
    } else { //Sinon on affiche message d'erreur
        $erreur = "<span id='erreur'>Champs obligatores !</span>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        * {
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

        #erreur {
            color: red;
        }

        #succes {
            color: green;
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

        form a {
            padding: 10px;
        }

        #account {
            color: black;
        }
    </style>
</head>

<body>

    <div id="login-form">
        <h2>Connectez-vous</h2> <a href="index.php"
            style="background-color: #3368da; padding:4px; color:#fff; border-radius: 5px; float:right">Retour</a>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <?php if (isset($erreur))
                echo $erreur; ?>
            <?php if (isset($_SESSION["message"])): ?>
                <span id="succes"><?= $_SESSION["message"] ?></span>
            <?php endif; ?>
            <label for="username">Email *</label>
            <input type="email" id="email" name="email">
            <label for="">Mot de passe *</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe">
            <input type="submit" value="Se connecter" name="connexion">
            <a href="mot_passe_oublie.php">Mot de passe oublié ?</a><a href="inscription.php" id="account">Créer un
                compte !</a>
        </form>
    </div>

</body>

</html>