<?php
//Démarrage de la session
session_start();
//Connexion à la base de données
try {
        $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8", "root", "");
} catch (PDOException $excepption) {
        die("Erreur du chargement....");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="chat.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                crossorigin="anonymous">
</head>

<body class="bg-secondary-subtle">

        <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid bg-info-primary">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand" href="espace.php">Espace de discussion</a>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                                <a class="nav-link active" aria-current="page"
                                                        href="interface.php">Accueil</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link bg-primary text-white btn btn-primary"
                                                        href="deconnexion.php?email_util=<?= $_SESSION["email"] ?>">Déconnexion</a>
                                        </li>
                                </ul>
                                <?php
                                if (!$_SESSION["mot_de_passe"])
                                        header("Location:index.php");
                                ?>
                                <?php
                                if (!$_SESSION["id_unique"])
                                        header("Location:index.php");

                                if (!$_SESSION["status"])
                                        header("Location:index.php");
                                ?>
                                <span><?= $_SESSION["email"]; ?></span>
                        </div>
                </div>
        </nav>

        <main class="content">
                <div class="container p-0">
                        <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Rechercher un utilisateur"
                                        aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Rechercher</button>
                        </form>
                        <div class="list-group mt-5">
                                <?php
                                $unique = $_SESSION["id_unique"];
                                //Requête de selection
                                $req = $pdo->query("SELECT * FROM utilisateur");

                                if ($req->rowCount() == 1) {
                                        echo "Aucun utilisateur connecté";
                                } else if ($req->rowCount() > 0) {
                                        while ($aff = $req->fetch()):
                                                if ($aff["id_unique"] == $_SESSION["status"]):
                                                        ?>
                                                                <a href="chat.php?id=<?= $aff["id_user"] ?>"
                                                                        class="list-group-item list-group-item-action " aria-current="true">
                                                                        <div class="d-flex w-100 justify-content-between">
                                                                                <h5 class="mb-1"><?= $aff["email_user"] ?></h5>
                                                                                <small><?= $aff["id_unique"] ?></small>
                                                                        </div>
                                                                </a>
                                                        <?php
                                                endif;
                                        endwhile;

                                }
                                ?>
                        </div>
        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
</body>

</html>