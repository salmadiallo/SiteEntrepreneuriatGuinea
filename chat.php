<?php
//Démarrage de la session
session_start();
//Connexion à la base de données
try {
	$pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8", "root", "");
} catch (PDOException $excepption) {
	die("Erreur du chargement....");
}

$id_des = $_GET["id"];
$_SESSION["destintaire"] = $id_des;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="chat.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary-subtle">

	<nav class="navbar navbar-expand-lg bg-light position-relaive">
		<div class="container-fluid bg-info-primary position">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
				aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="espace.php">Espace de discussion</a>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="interface.php">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link bg-primary text-white btn btn-primary"  href="deconnexion.php?email_util=<?= $_SESSION["email"] ?>">Déconnexion</a>
					</li>
				</ul>
				<?php
				if (!$_SESSION["mot_de_passe"])
					header("Location:index.php");
				?>
				<?php
				if (!$_SESSION["id_unique"])
					header("Location:index.php");
				?>
				<span><?= $_SESSION["email"]; ?></span>
			</div>
		</div>
	</nav>




	<div class="container p-0 mt-5">


		<div class="col-12 col-lg-7 col-xl-9 p-2 border border-light">

			<div class="position-relative bg-secondary-subtle border border-ligth">
				<div class="chat-messages p-4">

					<p id="chargement">Chargement...</p>


				</div>
			</div>

			<?php
			$id_destinataire = $_GET["id"];
			$id_auteur = $_SESSION["id_unique"];
			//Si on reçoit une requête de type POST
			if (isset($_POST["envoyer"])) {
				$message = htmlspecialchars($_POST["message"]);
				//Préparation de la requête d'insertion
				$insertion = $pdo->prepare("INSERT INTO message(contenu,id_destintaire,id_auteur,date_envoi) VALUES(?,?,?,?)");
				$date_envoi = date("Y-m-d");
				//Exécution de la requête
				$insertion->execute(
					array(
						$message,
						$id_destinataire,
						$id_auteur,
						$date_envoi
					)
				);
			}
			?>

			<form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
				<div class="flex-grow-0 py-3 px-4 border-top w-100">
					<div class="input-group">
						<input type="text" name="message" class="form-control"
							placeholder="Ecrivez votre message ici...">
						<button class="btn btn-primary" name="envoyer" type="submit">Envoyer</button>

					</div>
				</div>
			</form>

		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<script>
		let chargement = document.getElementById("chargement")

		setInterval(function () {
			let xhr = new XMLHttpRequest()

			xhr.onreadystatechange = function () {
				if (xhr.readyState == 4 && xhr.status == 200) {
					chargement.innerHTML = this.responseText
				}
			}
			xhr.open("GET", "post_message.php", true)
			xhr.send()
		}, 500)
	</script>
</body>

</html>