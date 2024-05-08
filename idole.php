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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

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
            </div>
            <div class="col-lg-9 col-md-12 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <!-- <img src="img/imgs/LOGOF.jpg" alt="" class="img-fluid" style="max-width: 100px;" > -->
                    <!-- <a href="#" class="btn btn-primary">Mon Profil</a> -->
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
                                    <a href="deconnexion.php?email_util=<?= $_SESSION["email"] ?>"class="btn btn-primary">Oui</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-light ">

                    <div class="ms-4">

                        <img src="img/imgs/branding-removebg-preview (3).png" alt="" class="img-fluid"
                            style="max-width: 100px;">
                        <!-- <h1 class="m-0 text-secondary">Blog</h1> -->
                    </div>
                </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container-fluid">
            <h2 class=" text-white mb-3 animated slideInDown text-center">De leur histoire inspirez-vous
                et écrivez votre propre histoire !!</h2>
            <h5 class=" text-white mb-3 animated slideInDown text-center">Il ne s'agit pas de vivre exactement la vie
                d'une autre personne mais essayez de trouver sa voie en s'inspirant de cette dernière!</h5>
        </div>
    </div>


    <center>
        <h2>Dr Djaka Sidibe</h2>
    </center>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <img class="img-fluid w-100 h-25 " src="img/imgs/diaka2.webp" alt="Dr Diaka Sidibe">
                </div> <br>


                <div>
                    <iframe src="https://www.youtube.com/embed/MFnZOY5MzGo " frameborder="0" width="416"
                        height="300"
                        allowfullscreen></iframe>
                    <h3>Visualiser le parcours de cette Femme guerrière</h3>
                </div>

            </div>

            <div class="col-lg-8 ">
                <p style="font-size: 16px; color: black; font-weight: 100px;">
                    Née à Boké en 1976, Dr Diaka Sidibé est une femme d'exception qui a marqué le paysage éducatif
                    guinéen. Géologue de formation, elle a gravi les échelons de l'enseignement supérieur avec une
                    rigueur et une passion exemplaires. <br> <br>

                    De son doctorat en Géologie appliquée à sa brillante carrière d'enseignante-chercheure à l'Institut
                    Supérieur des Mines et de la Géologie de Boké, Dr Diaka Sidibé s'est imposée comme une experte
                    incontournable dans son domaine. Son leadership et sa vision novatrice lui ont valu la direction de
                    l'ISMGB de 2019 à 2021, où elle a insufflé un dynamisme nouveau à l'institution. <br> <br>

                    Depuis octobre 2021, Dr Diaka Sidibé occupe le poste de Ministre de l'Enseignement Supérieur, de la
                    Recherche Scientifique et de l'Innovation. Sa mission : faire de l'enseignement supérieur guinéen un
                    pôle d'excellence et d'innovation. <br> <br>

                    Promouvoir l'accès à l'éducation pour tous, améliorer la qualité de l'enseignement, encourager la
                    recherche scientifique et tisser des liens solides entre les universités guinéennes et
                    internationales, tels sont les chantiers ambitieux que Dr Diaka Sidibé a entrepris avec une
                    détermination sans faille. <br> <br>

                    Femme de conviction et d'action, Dr Diaka Sidibé est une inspiration pour la jeune génération
                    guinéenne. Son parcours exemplaire et son engagement sans bornes font d'elle un symbole de l'espoir
                    et du progrès pour l'avenir de l'enseignement supérieur en Guinée.
                </p>

                <!-- Pour les boutons likez et commentez -->
                <div>
                    <button class="btn btn-primary" onclick="incrementLikes()" id="buttonLikez"><i
                            class="bi bi-heart"></i> Likez</button>
                    <span id="likeCount">0</span>
                    <button class="btn btn-primary"><i class="bi bi-chat-left" id="commentez"></i> Commentez</button>

                </div>


            </div>

        </div>


    </div>
    <hr>

    <center>
        <h2>Mme Fatoumata Camara</h2>
    </center>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <img class="img-fluid w-100 h-50" src="img/imgs/FatouNouvel.jpeg" alt="">
                </div> <br>

                <div>
                    <iframe src="https://www.youtube.com/embed/JTAFNKJ6c6s " frameborder="0" width="416"
                        height="300"
                        allowfullscreen></iframe>
                </div>
                <h3>Visualiser le parcours de cette Femme guerrière</h3>


            </div>
            <div class="col-lg-8 ">
                <p style="font-size: 16px; color: black; font-weight: 100px;">FATOUMATAMATA CAMARA, une femme engagée
                    pour le développement de la Guinée.

                    Altruiste et mère de 4 enfants, elle a choisi de se battre pour l'amélioration des conditions de vie
                    des femmes en milieu rural.

                    Son amour pour la terre lui a valu le respect d'une génération d'agriculteurs et d'entrepreneurs.
                    <br> <br>

                    Elle dispose aujourd'hui de champs à perte de vue de riz, d'ananas et de maïs.

                    Fatoumata Camara promeut également le textile guinéen à travers ses plateformes de communication
                    digitale.

                    Convaincue que la jeunesse est la locomotive du développement de la Guinée, elle s'investit dans
                    l'accompagnement des jeunes entrepreneurs. <br> <br>

                    Elle estime que l'âge ne devrait pas être une marchandise politique, mais plutôt les compétences et
                    le patriotisme.

                    Le développement de la Guinée ne passera que par le dialogue, la tolérance et l'engagement des
                    femmes en politique. <br> <br>

                    Fatoumata Camara est convaincue que cette transition est une occasion pour opérer un véritable
                    changement.

                    Durant l'année écoulée, elle a multiplié les initiatives envers les jeunes et femmes pour répondre
                    ensemble aux besoins de développement du pays.
                </p>

                <!-- Pour les boutons likez et commentez -->
                <div>
                    <button class="btn btn-primary"><i class="bi bi-heart"></i> Likez</button>
                    <button class="btn btn-primary"><i class="bi bi-chat-left"></i> Commentez</button>

                </div>
            </div>

        </div>


    </div>

    <!--3eme Femme-->
    <hr>

    <center>
        <h2>Mme Fatoumata Cissoko</h2>
    </center>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <img class="img-fluid w-100 h-50" src="img/imgs/Fatoumata-Cissoko-transformation-ananas.jpg" alt="">
                </div> <br>




                <div>
                    <iframe src="https://www.youtube.com/embed/35D72NuXBEg " frameborder="0" width="416"
                        height="300"
                        allowfullscreen></iframe>
                </div>
                <h3>Visualiser le parcours de cette Femme guerrière</h3>


            </div>
            <div class="col-lg-8 ">
                <p style="font-size: 16px; color: black; font-weight: 100px;">FATOUMATA CISSOKO,
                    Fatoumata Cissoko dirige une entreprise agroalimentaire à Conakry, en Guinée, avec un séchoir
                    solaire moderne qui réduit les pertes post-récoltes. Bénéficiant du soutien du Programme italien de
                    sécurité alimentaire et du Programme de productivité agricole en Afrique de l’Ouest, elle a
                    développé son entreprise, augmentant sa capacité de production d'ananas séchés. <br> <br>

                    La Guinée enregistre plus de 40% de pertes post-récoltes annuelles, mais le secteur de la
                    transformation des fruits reste peu exploité. Fatoumata a créé son entreprise en 2011 pour
                    contribuer au développement agroindustriel local, employant désormais une dizaine de femmes et
                    plusieurs jeunes. <br><br>

                    Elle distribue ses produits dans divers points de vente à Conakry et dans les villes voisines, et a
                    établi un partenariat d'exportation avec le Maroc pour l'ananas séché. Malgré les défis de
                    l'entreprenariat, comme le financement et la qualification des jeunes, elle croit en
                    l'entrepreneuriat agricole en Guinée. <br> <br>

                    Fatoumata affirme que l'agriculture et l'entrepreneuriat ne sont pas réservés aux hommes ; son
                    entreprise fournit du travail à plus d'une centaine de femmes et valorise les produits guinéens de
                    qualité. Son ambition est d'inspirer d'autres jeunes à contribuer au développement de la nation par
                    l'entreprenariat. <br><br>


                    On m’a toujours dit que l’agriculture et l’entreprenariat sont réservés aux hommes. Aujourd’hui, je
                    peux fièrement dire que ce n’est pas le cas. Mon entreprise permet de fournir un emploi à plus d’une
                    centaine de femmes organisées en coopératives, je valorise et vends des produits guinéens de qualité
                    au niveau régional. Ce n’est que le début et j’espère pouvoir inspirer d’autres jeunes à se lancer
                    dans l’entreprenariat afin de contribuer au développement de notre nation.



                </p>

                <!-- Pour les boutons likez et commentez -->
                <div>
                    <button class="btn btn-primary"><i class="bi bi-heart"></i> Likez</button>
                    <button class="btn btn-primary"><i class="bi bi-chat-left"></i> Commentez</button>

                </div>
            </div>

        </div>


    </div>
    <!-- Pour la 4ème femme-->
    <hr>
    <center>
        <h2>Mme Djenabou Diallo</h2>
    </center>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <img class="img-fluid w-100 h-50" src="img/imgs/NABE1.jpg" alt="">
                </div> <br>

                <div>
                    <iframe src="https://www.youtube.com/embed/SzXS9lZefmg " frameborder="0"width="416"
                        height="300"
                        allowfullscreen></iframe>
                </div>
                <h3>Visualiser le parcours de cette Femme guerrière</h3>


            </div>
            <div class="col-lg-8 ">
                <p style="font-size: 16px; color: black; font-weight: 100px;">

                    À 33 ans, Djenab Diallo refuse les stéréotypes et aspire à une carrière dans la recherche, défiant
                    ainsi les normes de sa communauté. Ingénieure en vulgarisation agricole, elle coordonne désormais un
                    projet de recherche sur la culture du cacaoyer en Guinée et conseille également des entreprises
                    agricoles. Son professionnalisme et son dynamisme lui ont valu des recommandations de la part de ses
                    supérieurs, la propulsant vers des opportunités de stage auprès d'organisations renommées. <br> <br>

                    Avec un parcours académique impressionnant, elle a choisi de se spécialiser dans la culture du cacao
                    à son retour en Guinée, désireuse de mettre à profit ses expériences acquises à l'étranger.
                    Initiante d'un projet de recherche ambitieux, elle dirige désormais une petite entreprise de
                    transformation de fèves de cacao, lui assurant autonomie financière et sérénité. <br> <br>

                    Djenabou Diallo incarne la nouvelle génération d'entrepreneurs guinéens, prêts à relever les défis
                    et à contribuer au développement de leur pays. En misant sur le cacao, encore peu exploité
                    localement, elle aspire à promouvoir un cacao purement guinéen et à stimuler sa consommation
                    nationale. <br> <br>

                    Son entreprise, Zeyna Cacao, a déjà remporté le prix Coup de cœur du jury au dernier Salon des
                    entrepreneurs de Guinée, attestant de son succès naissant. Son prochain défi : imposer le chocolat
                    guinéen sur le marché et créer des emplois dans l'industrie cacaoyère locale.




                </p>

                <!-- Pour les boutons likez et commentez -->
                <div>
                    <button class="btn btn-primary"><i class="bi bi-heart"></i> Likez</button>
                    <button class="btn btn-primary"><i class="bi bi-chat-left"></i> Commentez</button>

                </div>
            </div>
        </div>

    </div>

    <!-- pour la 5ème femme-->
    <hr>

    <center>
        <h2>Mme Patricia Lamah</h2>
    </center>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <img class="img-fluid w-100 h-50" src="img/imgs/PATRICIA-COVER-f-683x1024.jpg" alt="">
                </div> <br>

                <div>
                    <iframe src="https://www.youtube.com/embed/EuUhq5ltlak" frameborder="0" width="416"
                        height="300"></iframe>
                </div>
                <h3>Visualiser le parcours de cette Femme guerrière</h3>


            </div>
            <div class="col-lg-8 ">
                <p style="font-size: 16px; color: black; font-weight: 100px;">
                    Patricia Lamah, une coiffeuse guinéenne qui inspire le monde ! <br> <br>

                    Patricia Lamah, née à Conakry en 1987, est une coiffeuse professionnelle passionnée, bien que
                    diplômée en droit privé. Dès l'adolescence, elle s'immerge dans l'apprentissage autodidacte de la
                    coiffure, révélant un talent inné. En 2017, elle concrétise son rêve en ouvrant son salon, Pat's
                    Natural Beauty, spécialisé dans les coiffures valorisant les cheveux naturels des femmes africaines.
                    <br> <br>

                    Sa consécration intervient en 2018 lorsqu'elle remporte le concours de coiffure Koiffure Kitoko, lui
                    conférant une renommée internationale. Patricia Lamah devient alors une icône de la beauté naturelle
                    et une source d'inspiration pour de nombreuses jeunes femmes africaines. <br> <br>

                    Défenseuse de la beauté naturelle, elle encourage fièrement les femmes africaines à embrasser leurs
                    cheveux naturels, prônant la beauté authentique. À travers ses conférences, ateliers, et
                    publications sur les réseaux sociaux, elle promeut activement cet idéal. <br> <br>

                    Mariée et mère de deux enfants, elle excelle également en tant qu'artiste peintre et a fondé une
                    organisation à but non lucratif pour aider les jeunes femmes africaines à développer leurs
                    compétences en coiffure. <br> <br>

                    Patricia Lamah incarne la réussite et l'inspiration pour les femmes africaines, et son influence
                    perdurera, marquant positivement l'industrie de la coiffure et la perception de la beauté naturelle.

                </p>

                <!-- Pour les boutons likez et commentez -->
                <div>
                    <button class="btn btn-primary"><i class="bi bi-heart"></i> Likez</button>
                    <button class="btn btn-primary"><i class="bi bi-chat-left"></i> Commentez</button>

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
    <script>
        // Ce script permet de masquer et d'afficher un contenu
        // $(document).ready(function(){
        //     $('#btn').click(function(){
        //         $('#hr').fadeOut()
        //     })
        //     $('#bt').click(function(){
        //         $('#hr').fadeIn()
        //     })
        // })
    </script>


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
    <script src="js/main.js"></script> <!-- Spinner Start -->
</body>

</html>