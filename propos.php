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
                    <!-- <p class="m-0">LOGO</p> -->
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    
                    <!-- <p class="m-0">entrepreneuriatfemme@gmail.com</p> -->
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
                    <a href="index.php" class="nav-item nav-link active">Acceuil</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="secteur">Secteurs Dominés</a>
                        
                    </div> 
                    <script>
                            const secteur = document.getElementById("secteur").onclick = ()=>{
                                swal("Attention", "Veuillez créer un compte ou vous connecter pour accéder à cet onglet", "warning");
                            }
                        </script>
                    <a href="#" class="nav-item nav-link " id="idole">Trouver votre idole</a>
                    <script>
                            const idole = document.getElementById("idole").onclick = ()=>{
                                swal("Attention", "Veuillez créer un compte ou vous connecter pour accéder à cet onglet", "warning");
                            }
                        </script>
                    <a href="#" class="nav-item nav-link" id="conseils">Conseils</a>
                    <script>
                            const conseils = document.getElementById("conseils").onclick = ()=>{
                                swal("Attention", "Veuillez créer un compte ou vous connecter pour accéder à cet onglet", "warning");
                            }
                        </script>
                    <a href="guide.php" class="nav-item nav-link">Guide</a>
                    

                    <a href="propos.php" class="nav-item nav-link">Propos</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="connexion.php" class="nav-item nav-link">Connexion</a>
                </div>
                <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-light ">
                   
                    <div class="ms-8">
                       
                        <img src="img/imgs/branding-removebg-preview (3).png" alt="" class="img-fluid" style="max-width: 100px;">
                        <!-- <h1 class="m-0 text-secondary">Blog</h1> -->
                    </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class=" text-white mb-3 animated slideInDown h2 text-center">Qui nous sommes ? Vous vous posez certainement la question ! Alors découvrez le !</h1>

        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1  class="text-secondary text-uppercase">Notre Equipe</h1>
                <h1 class="mb-5">Jeunes filles à la quête du savoir !</h1>
                <p style="color: black;">Nous sommes des jeunes étudiantes à l'université de Labé(2023-2024) au programme informatique, le fait n'est donc pas au hasard car nous sommes des étudiantes passionnées de l'informatique et de tout ce que régorge ce domaine ! Faire promouvoir la valeur des filles et femmes étant notre objectif donc se servir de notre passion qui est l'informatique y'a pas mieux pour matérialiser cela d'où la naissance de ce site conçu avec tant d'amour pour promouvoir l'Entrepreuneuriat feminin En Guinée. </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden"  style="height: 400px;">
                            <img class="img-fluid" src="img/imgs/saleImage.jpeg" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Salamata DIALLO</h5>
                                <small style="text-align: center;">Licence 3 </small>
                                <small>Passion: Developpement web </small>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden"  style="height: 400px;">
                            <img class="img-fluid" src="img/imgs/imageBAYO.jpeg" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Fatoumata BAYO</h5>
                                <small style="text-align: center;">Licence 3 </small>
                                <small>Passion: infographe design</small>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden"  style="height: 400px;">
                            <img class="img-fluid" src="img/imgs/imageMARA.jpg" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Mawa MARA</h5>
                                <small style="text-align: center;">Licence 3 </small>
                                <small>Passion: Réseau informatique</small>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden"  style="height: 400px;">
                            <img class="img-fluid" src="img/imgs/imageMabinty.jpeg" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Mabinty CONTE</h5>
                                <small style="text-align: center;">Licence 3 </small>
                                <small>Passion: Base de données & Réseau informatique</small>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="height: 400px;">
                            <img class="img-fluid" src="img/imgs/imageRama.jpg"  alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Ramatoulaye DIALLO</h5>
                                <small style="text-align: center;">Licence 2 </small>
                                <small>Passion: Réseau informatique</small>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden"  style="height: 400px;">
                            <img class="img-fluid" src="img/imgs/Assi.JPG" alt="">
                        </div>
                        <div class="team-text">
                            <div class="bg-light">
                                <h5 class="fw-bold mb-0">Assiatou DIALLO</h5>
                                <small style="text-align: center;">Licence 3 </small>
                                <small>Passion: Réseau Informatique</small>
                            </div>
                            <div class="bg-primary">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
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
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
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
                    <a class="btn btn-link" href="#" id="m">Montage de projet</a>
                    <script>
                        document.getElementById("m").onclick = ()=> swal("Attention", "Veuillez-vous connecter pour accéder à ce service", "warning");
                    </script>
                    <a class="btn btn-link" href="#" id="co">Conseils</a>
                    <script>
                        document.getElementById("co").onclick = ()=> swal("Attention", "Veuillez-vous connecter pour accéder à ce service", "warning");
                    </script>

                            
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