<?php
//Démarrage de la session
session_start();
//Connexion à la base de données
try {
	$pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8", "root", "");
} catch (PDOException $excepption) {
	header("Location:404.php");
}
//Récupération de l'email de utilisateur par la méthode GET
$email = $_GET["email_util"];
$statut = "Déconnecté";
//Préparation de la requête de mise à jour
$req = $pdo->prepare("UPDATE utilisateur SET id_unique=? WHERE email_user=?");
//Exécution de la requête de mise à jour
$req->execute([$statut, $email]);
//Initilisation de la session à 0
session_unset();
//Destruction de la session
session_destroy();
//Redirection sur la page d'acceuil
header("Location:index.php");