<?php
//Démarrage de la session
session_start();
//Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8", "root", "");
} catch (PDOException $excepption) {
    header("Location:404.php");
}
$em = $_SESSION["email"]; 
$statut = "Connecté";
//Préparation de la requête de mise à jour
$req = $pdo->prepare("UPDATE utilisateur SET id_unique=? WHERE email_user=?");
//Exécution de la requête de mise à jour
$req->execute([$statut, $em]);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Entrepreuneuriat feminin/InterfaceUser</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row align-items-center top-bar">
            <div class="col-lg-3 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
                    <h3 class="text-primary m-0">Entrepreuneuriat Feminin Guinea (EFG)</h3>
                </a>
                <!-- <div>
                    <img class="img img-fluid" src="img/imgs/LOGOF.jpg" alt="" style="width: 70px; height: 60px; position: absolute; left: 10px; top: 15px;">
                </div> -->
            </div>
            <div class="col-lg-9 col-md-12 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <!-- <img src="img/imgs/LOGOF.jpg" alt="" class="img-fluid" style="max-width: 100px;" > -->
                    <a href="profil.php?mail=<?= $_SESSION["email"] ?>" class="btn btn-primary">Mon Profil</a>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <?php
                    if (!$_SESSION["mot_de_passe"])
                        header("Location:index.php");
                    ?>
                    <p class="m-0 "><?= $_SESSION["email"]; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
            <!-- <img src="img/imgs/LOGOFE.jpg" width="13%" alt="logo femmes entrepreneures"> -->
            <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
                <h1 class="text-primary m-0">Entrepreuneuriat Feminin Guinea</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <div class="dropdown nav-item">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Secteurs Dominés</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="commerce.php" class="dropdown-item ">Commerce</a>
                            <a href="Mode&Artisanat.php" class="dropdown-item">Mode & Artisanat</a>
                            <a href="Services.php" class="dropdown-item">Services</a>
                            <!--<a href="autres.html" class="dropdown-item">Autres</a> -->
                        </div>
                    </div>
                    <a href="idole.php" class="nav-item nav-link ">Trouver votre idole</a>
                    <a href="conseil.php" class="nav-item nav-link">Conseils</a>
                    <a href="guide.php" class="nav-item nav-link">Guide</a>
                    <a href="espace.php" class="nav-item nav-link">Espace discussion</a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Déconnexion
                    </button>

                    <!-- Boite modale bouton deconnexion -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Voulez-vous vous déconnecter ?
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Cliquez sur le bouton oui ou non</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">Non</a>
                                    <a  href="deconnexion.php?email_util=<?= $_SESSION["email"] ?>" class="btn btn-primary">Oui</a>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
                <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-light ">

                    <div class="ms-4">

                        <img src="img/imgs/branding-removebg-preview (3).png" alt="" class="img-fluid"
                            style="max-width: 125px;">
                        <!-- <h1 class="m-0 text-secondary">Blog</h1> -->
                    </div>
                </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/imgs/filleAgri2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h4 class="text-white text-uppercase mb-3 animated slideInDown">L'entrépreneuriat
                                    féminin en Guinée éclaire le chemin vers l'autonomisation économique, une initiative
                                    guidée par la détermination des femmes.</h4>
                                <h2 class="display-3 text-white animated slideInDown mb-4">C'est quoi l'entrépreneuriat
                                    ?</h2>
                                <p class="fs-5 fw-medium text-white mb-7 pb-2 ">L’entrepreneuriat désigne l’action
                                    d’entreprendre,<br> de mener à bien un projet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" class="imgGuinee">
                <img class="img-fluid" src="img/imgs/carteGuinee.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h4 class="text-white text-uppercase mb-3 animated slideInDown">Les femmes Guinéennes au
                                    coeur de la croissance et du developpement via l'entrépreneuriat !</h4>
                                <h1 class="display-3 text-white animated slideInDown mb-4">OSEZ ENTREPRENDRE</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2 text-uppercase">la peur, la conscience du
                                    risque vous bloque ?
                                    Vous trouvez pas quelles traces suivres ? Vous êtes au bon endroit !</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->





    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-secondary text-uppercase text-center">Femmes entrépreneures</h2>
                    <h4 class="mb-4 text-center ">Femmes guinéennes en action</h4>
                    <p class="mb-4">Nombreuses sont celles qui veulent franchir le pas pour vivre de leur passion et
                        retrouver un meilleur équilibre entre une vie privée et une vie professionnelle.</p>
                    <h4 class="text-center text-secondary">Les secteurs d'activités qui attirent <br> les femmes
                        entrepreneures En Guinée</h4>
                    <div>
                        <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Agroalimentaire
                        </p>
                        <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Mode & Artisanat
                        </p>
                        <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Santé</p>
                        <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Education </p>
                        <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Services
                            Financiers</p>
                        <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Hôtellerie</p>
                        <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Restauration</p>


                    </div>

                </div>
                <div class="col-lg-7 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/imgs/jeunne fille.jpg" alt="">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                            src="img/imgs/tailleur.png" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100" src="img/imgs/fatouAcceuil.jpg" alt="" style="height:450px ;">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h4 class="text-truncate me-3 mb-0 text-secondary">Commerce </h4>

                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0"
                            href="commerce.php"><i class="fa fa-arrow-right"></i></a>

                    </div>
                    <p>Madame Fatoumata Camara </p>


                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 " src="img/imgs/Mon Idole.jpg" alt="" style="height: 450px;">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h4 class="text-truncate me-3 mb-0 text-secondary">Services</h4>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0"
                            href="Services.php"><i class="fa fa-arrow-right"></i></a>

                    </div>
                    <p>Dr Diaka Sidibe</p>


                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 " src="img/imgs/Binta5.jpg" alt="" style="height: 450px;">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h4 class="text-truncate me-3 mb-0 text-secondary">Mode & Artisanat</h4>

                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0"
                            href="Mode&Artisanat.php"><i class="fa fa-arrow-right"></i></a>

                    </div>
                    <p>Madame Binta Diallo </p>

                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- En commentaire pour le monde -->


    <!-- Service Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
        <div class="row g-0">
            <div class="col-lg-3 ">
                <div class="text-center bg-primary w-100 h-100">

                    <h1 style="color: white; font-weight: 600;">Découvrez la force entrepreneuriale des femmes
                        guinéennes, pionnières de changement et bâtisseuses d'avenirs prospères.</h1>


                </div>
            </div>

            <div class="col-md-12 col-lg-9">
                <div class="ms-lg-5 ps-lg-5">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="text-secondary text-uppercase">Nous avons mis en place différents services pour vous
                            !!!</h3>
                        <h1 class="mb-5">Explorez nos Services</h1>

                    </div>
                    <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                                style="width: 75px; height: 75px;">
                                <i class="bi bi-stack fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Conseil</h4>
                            <p>Nous donnons des conseils bénéfiques</p>
                            <a href="conseil.php" class="btn bg-white text-primary w-100 mt-2">Lire plus<i
                                    class="bi bi-arrow-right text-secondary ms-2"></i> </a>
                        </div>

                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                                style="width: 75px; height: 75px;">
                                <i class="bi bi-grid-1x2-fill fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Montage Projet</h4>
                            <p>Nous assistons aux différents besoins.</p>
                            <a href="conseil.php" class="btn bg-white text-primary w-100 mt-2">Lire plus<i
                                    class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Addresse</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Rue RN5 , Labe, Guinee</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+224 612 250 304 </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> +224 661 766 204</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>efg@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Horaire</h4>
                    <h6 class="text-light">Lundi - Vendredi:</h6>
                    <p class="mb-4">09h 00 - 17h 30 </p>
                    <h6 class="text-light">Samedi - Dimanche:</h6>
                    <p class="mb-0">09h 00 - 12h 30 </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="#" id="for">Formation</a>
                    <script>
                        document.getElementById("for").onclick = () => swal("Attention", "Service non disponible pour le moment", "warning");
                    </script>
                    <a class="btn btn-link" href="conseil.php">Montage de projet</a>
                    <a class="btn btn-link" href="conseil.php">Conseils</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Entrépreneuriat Feminin Guinee</a>,Tous droits
                        réservés.
                    </div>
                    <div class="col-md-6 text-center text-md-end">


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>