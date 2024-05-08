<?php
    //Connexion à la base de données
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8","root","");
    } catch (PDOException $excepption) {
       die("Erreur du chargement....");
    }
    
    $erreur = "";
    $succes = "Compte crée avec succè";


    //Vérifier si on reçout une reuquête de type post
    if (isset($_POST["ajouter"])){
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $mot_de_passe = htmlspecialchars($_POST["mot_de_passe"]);
        $email = htmlspecialchars($_POST["email"]);
        //Vérifier si les champs ne sont vides
        if (!empty($nom) and !empty($prenom) and !empty($mot_de_passe) and !empty($email)){
            //Préparation de la requête qui vérifie si une adresse mail existe déjà
            $requette = $pdo->prepare("SELECT email_user FROM utilisateur WHERE email_user=?");
            //Exécution de la requêtte de selection
            $requette->execute(array($email));
            //Vérifier l'existence de l'adresse mail
            if ($requette->rowCount() == 1){
                    $erreur = "<span id='erreur'>Cet email existe déjà</span>";
            }else{//Sinon on passe à l'insertion des données
                //Générer id unique pour la chat
                $id_unique = "@".$nom[0].$nom[1].$prenom[0].$prenom[1];
                //Préparation de la requête d'insertion
                $insertion = $pdo->prepare("INSERT INTO utilisateur(nom_user,prenom_user,mot_de_passe,email_user,id_unique) VALUES(?,?,?,?,?)");
                //Cryptage du mot de passe
                $cryptage = password_hash($mot_de_passe,PASSWORD_DEFAULT);
                //Exécution de la requête d'insertion
                $insertion->execute(array(
                    $nom,
                    $prenom,
                    $cryptage,
                    $email,
                    $id_unique
                ));
                //Rédirection sur la page de connexion
                header("Location:connexion.php");
                //Démarrage de la session
                session_start();
                $_SESSION["message"] = "Compte a été créé avec succès !";
          }
        }else{ //Sinon on affiche un message d'erreur
            $erreur = "<span id='erreur'>Veuillez compléter ces informations</span>";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inscription</title>
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
    #id{
        background-color: #4c82af;
    }
    #id:hover{
        background-color: #3368da;
    }
    input[type="submit"]:hover {
        background-color: #3368da;
    }
    #account{
        color: black;
    }
</style>
</head>
<body>

    <div id="login-form">
        <h2>Nouveau compte</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <?php if (isset($erreur)) echo $erreur; ?>
            <label for="nom">Nom *</label>
            <input type="text"  name="nom" id="nom">
            <label for="prenom">Prenom *</label>
            <input type="text" name="prenom" id="prenom">
            <label for="mot_de_passe">Mot de passe *</label>
            <input type="password" name="mot_de_passe" id="mot_de_passe">
            <label for="email">Adresse E-mail *</label>
            <input type="email" name="email" id="email">
            <input type="submit" value="Créer" id="ajouter" name="ajouter">
            <a href="connexion" id="account">Retour connexion</a>
        </form>
    </div>

</body>
</html>
