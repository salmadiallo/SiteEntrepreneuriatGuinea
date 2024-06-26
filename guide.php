<?php
    //Démarrage de la session
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Entrepreuneuriat feminin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

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
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                    <img class="img img-fluid" src="img/imgs/LOGOF.jpg" alt="" style="width: 60px; height: 60px; position: absolute; left: 10px; top: 15px;">
                </div> -->
            </div>
            <div class="col-lg-9 col-md-12 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                        
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    
                    <?php
                        if (!$_SESSION["mot_de_passe"]) header("Location:index.php");
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
           
            <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
                <h1 class="text-primary m-0">Entrepreuneuriat Feminin Guinea</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <a href="interface.php" class="nav-item nav-link ">Accueil</a>
                    <div class="dropdown nav-item">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Secteurs Dominés</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="commerce.php" class="dropdown-item ">Commerce</a>
                            <a href="Mode&Artisanat.php" class="dropdown-item">Mode & Artisanat</a>
                            <a href="Services.php" class="dropdown-item">Services</a>
                        </div>
                    </div> 
                    <a href="idole.php" class="nav-item nav-link ">Trouver votre idole</a>
                    <a href="conseil.php" class="nav-item nav-link">Conseils</a>
                    <a href="guide.php" class="nav-item nav-link">Guide</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Déconnexion
                    </button>

                    <!-- Boite modale bouton deconnexion -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Voulez-vous vous déconnecter ?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                       
                        <img src="img/imgs/branding-removebg-preview (3).png" alt="" class="img-fluid" style="max-width: 125px;">
                       
                    </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><i>BIENVENUE A VOUS !</i></h1>
        
        </div>
    </div>
    <!-- Page Header End -->


                <div class="px-5">
                    <h2 class="text-secondary text-uppercase h3 text-center ">Notre site entrepreneuriat féminin Guinea contient les onglets suivants :</h2>
                    <h1 class="text-secondary text-uppercase h4">   ONGLET ACCEUIL </h1> 
                      <p>    
                          
                          Nous avons cité quelques 
                          secteurs d'activités qui attirent
                         les femmes entrepreneures En Guinée <br>
                         •	Agroalimentaire <br>
                         •	Mode & Artisanat <br>
                         •	Santé <br>
                         •	Education <br>
                         •	Finances et microfinance <br>
                         •	Services <br>
                         ET image de quelques femmes qui représentent les trois secteurs d’activités
                         Qui est associé avec les liens de leur page facebook.
                         .</p> 
                         <h4 class="text-secondary text-uppercase">   ONGLET secteurs dominés </h4>  
                      <P> 
                        Une liste déroulante des trois secteurs qui sont : <br>
                       •	Commerce qui représente le secteur primaire <br>
                      •	Mode & Artisanat qui représente le secteur secondaire <br>
                      •	Service qui représente le secteur tertiaire <br>
                       </p>
                       <h4 class="text-secondary text-uppercase">   Sur la page de COMMERCE on a : </h4> 
                      <p>
                      Les informations A la une de quelques femmes entrepreneures dans le Commerce et l'Agroalimentaire. <br>
                      L’image de quelques femmes évoluant dans ce domaine et associé aux liens de leurs pages Facebook. <br>
                      Quelques explications détaillées sur le secteur commerce : <br>
                      •	DEFINITION <br>
                      •	IMPORTANCE <br>
                      •	AVANTAGES DU SECTEUR DU COMMERCE <br>
                      •	INCONVÉNIENTS DU SECTEUR DU COMMERCE <br>
                      •	CONSEILS AUX FEMMES GUINÉENNES QUI SOUHAITENT SE LANCER DANS LE COMMERCE. <br>
                                     ET Des ressources vidéos sur le commerce. 
                      </p>
                      <h4 class="text-secondary text-uppercase"> Sur la page  Mode & Artisanat on a : </h4> 
                          
                      <p>
                          
                          Les informations A la une de quelques femmes entrepreneures dans la Mode & l'Artisanat <br>
                          L’image de quelques femmes évoluant dans ce domaine et associé aux liens de leurs pages Facebook <br>
                          Quelques explications détaillées sur le secteur Mode & Artisanat : <br>
                          
                          •	DEFINITION <br>
                          •	IMPORTANCE <br>
                          •	AVANTAGES DU SECTEUR DE MODE & ARTISANAT <br>
                          •	INCONVÉNIENTS DU SECTEUR DE MODE & ARTISANAT <br>
                          •	CONSEILS AUX FEMMES GUINÉENNES QUI SOUHAITENT SE LANCER DANS LA MODE & ARTISANAT <br>
                          •	ET QUELQUES IMAGES QUI REFLETENT CE DOMAINE <br>
                          </p>
                      
                      <h4 class="text-secondary texte-uppercase"> Sur la page de SERVICE on a :</h4>
                      <p>
                          Les informations A la une de quelques femmes entrepreneures dans le service. <br>
                          L’image de quelques femmes évoluant dans ce domaine et associé aux liens de leurs pages Facebook. <br>
                          Quelques explications détaillées sur le secteur service : <br>
                          •	DEFINITION <br>
                          •	IMPORTANCE <br>
                          •	AVANTAGES DU SECTEUR DU SERVICE  <br>
                          •	INCONVÉNIENTS DU SECTEUR DU SERVICE
                          •	CONSEILS AUX FEMMES GUINÉENNES QUI SOUHAITENT SE LANCER  DANS LE SERVICE. <br>
                          •	ET QUELQUES IMAGES QUI REFLETENT CE DOMAINE <br>
                          </p>
                          <h4 class="text-secondary text-uppercase"> ONGLET TROUVER NOTRE IDOLE :</h4>
                      <p>
                      Dans cet onglet on a : <br>
                      Les informations sur quelques femmes entrepreneures en Guinée leurs biographes et leurs parcours 
                      </p>
                      <h4 class="text-secondary text-uppercase"> ONGLET CONSEIL on a :</h4>
                      <p>
                      Les informations nécessaires sur l'entrepreneuriat et autres conseils bénéfiques sur d'autres conceptions comme: <br> la confiance en soi ,    montage de projet. <br>
                      
                      <h4 class="text-secondary text-uppercase"> 	ONGLET GUIDE D’UTILISATION : </h4>
                    <p>  Contient les toutes informations nécessaires de notre site </p>
                    
                      <h4 class="text-secondary text-uppercase"> 	ONGLET A PROPOS :</h4>
                      <p>
                      Contient les informations sur les développeuses du site
                      </p>
                      <h4 class="text-secondary text-uppercase"> ONGLET CONTACT :</h4>
                      <p>C’est un espace pour nous joindre</p>
                  
                   

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
                    <p class="mb-4">09h 00  - 17h 30 </p>
                    <h6 class="text-light">Samedi - Dimanche:</h6>
                    <p class="mb-0">09h 00 - 12h 30 </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="#" id="for">Formation</a>
                    <script>
                        document.getElementById("for").onclick = ()=> swal("Attention", "Service non disponible pour le moment", "warning");
                    </script>
                    <a class="btn btn-link" href="conseil.php">Montage de projet</a>
                    <a class="btn btn-link" href="conseil.php">Conseils</a>
                
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Entrépreneuriat Feminin Guinee</a>,Tous droits réservés.
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
     <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
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