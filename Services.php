<?php
    //Démarrage de la session
    session_start();
    //Connexion à la base de données
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8","root","");
    } catch (PDOException $exception) {
        header("Location:404.php");
    }
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

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

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
            </div>
            <div class="col-lg-9 col-md-12 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                        <!-- <img src="img/imgs/LOGOF.jpg" alt="" class="img-fluid" style="max-width: 100px;" > -->
                        <!-- <a href="#" class="btn btn-primary">Mon Profil</a> -->
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
            <!-- <img src="img/imgs/LOGOFE.jpg" width="13%" alt="logo femmes entrepreneures"> -->
            <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
                <h1 class="text-primary m-0">Entrepreuneuriat Feminin Guinea</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <a href="interface.php" class="nav-item nav-link ">Accueil</a>
                    <div class="nav-item dropdown">
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
                       
                        <img src="img/imgs/branding.png" alt="" class="img-fluid" style="max-width: 100px;">
                        <!-- <h1 class="m-0 text-secondary">Blog</h1> -->
                    </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container-fluid">
            <h2 class="display-3 text-white mb-3 animated slideInDown " style="font-size: 40px; text-align: center;">Services(Restauration,Education,Hôtellerie,Santé)</h2>
            <nav aria-label="breadcrumb animated slideInDown">
               
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- partie du carousel d'images sur les informations de ces quelques femmes -->
    <h3 style="text-align: center; " class="my-5">Les informations A la une de quelques femmes entrepreneures dans le secteur des Services</h3>
    <div class="col-md-12 col-lg-18">
        <div class="ms-lg-3 ps-lg-3 ">
           
            <div class="owl-carousel service-carousel position-relative wow fadeInUp " data-wow-delay="0.1s" >
                    <?php
                        //Requête permettant d'afficher les données
                        $affichage = $pdo->query("SELECT id_elem, image_elem, titre_image_elem, lien_fb_img_elem,secteur.id_secteur, nom_secteur from element_secteur inner join secteur on element_secteur.id_secteur=secteur.id_secteur where secteur.id_secteur=3");
                        //Boucle de parcours d'enrégistrement
                        while($affichages = $affichage->fetch()):
                    ?>
                    <div>
                        <img class="img-fluid" src="img_e_secteur/<?php echo $affichages["image_elem"]; ?>" alt=""  style="height: 300px; " >
                        <div class="d-flex align-items-center justify-content-between bg-light p-4">
                            <h5 class="text-truncate me-3 mb-0"><?php echo $affichages["titre_image_elem"]; ?></h5>
                            <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href="<?php echo $affichages["lien_fb_img_elem"]; ?>"  target="_blank"><i class="fa fa-arrow-right"></i></a>
                        </div>

                    </div>
                    <?php endwhile; ?>
                
            
                    
               
            </div>
        </div>
    </div>



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class=" wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-secondary text-uppercase text-center" > Les Services </h2>
                    <h1 class="mb-4"></h1>
                    <p class="mb-4" >
                        Les services sont un autre secteur d'activité important en Guinée, et il représente environ 30 % du PIB du pays. Les femmes guinéennes sont actives dans de nombreux domaines des services, tels que la restauration, l'hôtellerie, la santé, l'éducation, et les services financiers. <br>
                        
                        Les femmes entrepreneures guinéennes qui évoluent dans le secteur des services sont généralement des femmes travailleuses autonomes qui dirigent leurs propres entreprises. <br>Elles offrent une variété de services, tels que la restauration, l'hébergement, les soins de santé, l'éducation, et les conseils financiers. Elles s'adressent généralement à des clients locaux ou étrangers. <br> </p>

                        <h2 class="text-secondary text-uppercase"> Définition</h2>
                        <p  class="mb-4" >
                            Le secteur des services est divisé en plusieurs sous-secteurs, notamment :

                            <ul><li>Les services marchands : ils comprennent la vente au détail, la vente en gros, les transports, les télécommunications, les services financiers, les services immobiliers, les services de restauration et d'hébergement, les services professionnels et personnels.</li>
                            <li>Les services non marchands : ils comprennent l'éducation, la santé, les services sociaux, les services gouvernementaux.</li></ul>
                         </p>
                           <h2 class="text-secondary text-uppercase"> Importance</h2> 
                        <p> Le secteur des services est important pour l'économie de la Guinée pour plusieurs       raisons 
                            <ul  class="mb-4" > <li> Il contribue à la croissance économique : le secteur des services stimule la production, la création d'emplois et l'investissement.</li>
                            <li> Il améliore le niveau de vie : le secteur des services permet aux consommateurs d'accéder à une plus grande variété de biens et de services à des prix plus abordables. </li>
                            <li>Il favorise l'intégration régionale : le secteur des services permet aux pays de se connecter entre eux et de développer des relations économiques mutuellement bénéfiques..</li></ul>
                            
                            
                        </p>

                            <h2 class="text-secondary text-uppercase">Avantages du secteur des Services </h2>
                            <p  class="mb-4" >
                                Les entreprises du secteur des services bénéficient de plusieurs avantages, notamment :
                               
                                <ul  class="mb-4" > <li>La possibilité de générer des revenus : les entreprises des services vendent des biens et des services, ce qui leur permet de générer des revenus.</li>
                                <li>La possibilité de créer de l'emploi : les entreprises des services embauchent des personnes pour travailler dans leurs magasins, leurs entrepôts et leurs bureaux. </li>
                                <li>La possibilité de se développer : les entreprises des services peuvent se développer en ouvrant de nouveaux magasins, en élargissant leur gamme de produits ou en se diversifiant dans de nouveaux secteurs.</li></ul>
                                
                                
                                </p>

                                <h2 class="text-secondary text-uppercase">Inconvénients du secteur des Services </h2>
                                <p  class="mb-4" >
                                    Les entreprises du secteur des services sont confrontées à plusieurs inconvénients, notamment :


                                   
                                    <ul  class="mb-4" > <li>La concurrence : le secteur des Services est un secteur concurrentiel, ce qui peut être difficile pour les petites entreprises.</li>
                                    <li>Les risques : le secteur des services est un secteur risqué, car les entreprises peuvent être confrontées à des changements de prix, des changements de réglementation ou des changements de demande. </li>
                                    <li>Les coûts : le secteur des services peut être coûteux, car les entreprises doivent investir dans des stocks, des équipements et du personnel..</li></ul>
                                    
                                    
                                </p>
                                    <p class="mb-4" >Les femmes guinéennes ont un rôle important à jouer dans le développement du secteur des services. Elles représentent environ la moitié de la population du pays, et elles sont de plus en plus actives dans l'économie.
                                    </p>

                                 <h5 class="text-secondary text-uppercase">Conseils aux femmes guinéennes qui souhaitent se lancer dans le secteur des Services </h5>
                                <p  class="mb-4" >
                                    Si vous êtes une femme guinéenne qui souhaite vous lancer dans le commerce, voici quelques conseils :
                                   
                                    <ul  class="mb-4" > <li>Réseautez. Tissez des liens avec d'autres femmes entrepreneurs et des professionnels des services. Cela vous aidera à obtenir des conseils, du soutien et des opportunités.</li>
                                    <li> Faites-vous connaître. Participez à des événements professionnels, publiez sur les réseaux sociaux et faites connaître votre entreprise.</li>
                                    <li>Soyez persévérante. N'ayez pas peur de faire des erreurs et de recommencer. La persévérance est la clé du succès.</li>
                                    </ul>
                                    <p  class="mb-4" > Les femmes guinéennes ont de nombreux atouts à apporter au secteur des services. Elles sont souvent décrites comme étant plus attentives aux détails, plus organisées et plus collaboratives que les hommes. Ces qualités sont essentielles pour la réussite dans les services.</p>
                                    
                                </p>


                                <div class="col-md-12 col-lg-18">
                                    <div class="ms-lg-3 ps-lg-3">
                                       
                                        <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s " >
                                           
                                                <img class="img-fluid" src="img/imgs/Djeli3.jpg" alt=""  style="height: 250px;" >
                                            
                                        
                                                <img class="img-fluid" src="img/imgs/paticiaAction.jpg" alt="" style="height: 250px;" >
            
                                                <img class="img-fluid" src="img/imgs/mimicheFood.jpg" alt="" style="height: 250px;" >
                                            
                                                
                                                <img class="img-fluid" src="img/imgs/hotellerie-1.png" alt="" style="height: 250px;">
                                                
                                                
                                           
                                         </div>
                                    </div>
                                </div>
                  
                   
                </div>
                
            </div>
        </div>
    </div>
    <!-- Inclusion du pied de page -->

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