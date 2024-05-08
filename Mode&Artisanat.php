<?php
//Démarrage de la session
session_start();
//Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=localhost;dbname=entrepreneuriat;charset=utf8", "root", "");
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
                                    <a href="deconnexion.php?email_util=<?= $_SESSION["email"] ?>"
                                        class="btn btn-primary">Oui</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


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
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Mode & Artisanat</h1>
            <nav aria-label="breadcrumb animated slideInDown">

            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->

    <h3 style="text-align: center;">Les informations A la une de quelques femmes entrepreneures dans la mode et
        l'artisanat</h3>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <?php
                //Requête permettant d'afficher les données
                $affichage = $pdo->query("SELECT id_elem, image_elem, titre_image_elem, lien_fb_img_elem,secteur.id_secteur, nom_secteur from element_secteur inner join secteur on element_secteur.id_secteur=secteur.id_secteur where secteur.id_secteur=2");
                //Boucle de parcours d'enrégistrement
                while ($affichages = $affichage->fetch()):
                    ?>
                    <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                        <div class="overflow-hidden">
                            <img src="img_e_secteur/<?php echo $affichages["image_elem"]; ?>" alt=""
                                style="height: 310px; width: 420px;">
                        </div>
                        <div class="d-flex align-items-center justify-content-between bg-light p-4">
                            <h5 class="text-truncate me-3 mb-0"><?php echo $affichages["titre_image_elem"]; ?></h5>
                            <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0"
                                href="<?php echo $affichages["lien_fb_img_elem"]; ?>" target="_blank"><i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class=" wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-secondary text-uppercase text-center">Mode & Artisanat</h2>
                    <!-- <h1 class="mb-4">L’agriculture est un processus par lequel les êtres humains aménagent leurs écosystèmes et contrôlent le cycle biologique d'espèces domestiquées, dans le but de produire des aliments et d'autres ressources utiles à leurs sociétés</h1>-->
                    <p class="mb-4">La mode et l'artisanat sont souvent liés. Les artisans sont souvent impliqués dans
                        la création de vêtements et d'accessoires de mode, et ils peuvent utiliser leurs compétences et
                        leur savoir-faire pour créer des pièces uniques et élégantes.
                    </p>
                    <h5 class="mb-4 text-secondary text-uppercase">Définition de la mode</h5>
                    <p class="mb-4">
                        La mode est un phénomène social qui concerne l'apparence vestimentaire des individus. Elle est
                        influencée par de nombreux facteurs, tels que la culture, la religion, l'économie et la
                        technologie. La mode est en constante évolution, et les styles peuvent changer rapidement.

                    </p>

                    <h5 class="mb-4 text-secondary text-uppercase">Définition de l'artisanat</h5>
                    <p class="mb-4">
                        L'artisanat est l'ensemble des métiers et des activités qui impliquent la création, la
                        transformation ou la réparation d'objets à la main, en utilisant des techniques et des
                        savoir-faire spécifiques. L'artisanat est souvent associé à la tradition et au patrimoine, et il
                        peut être utilisé pour produire des objets uniques et précieux.

                    </p>
                    <h5 class="mb-4 text-secondary text-uppercase">Voici quelques exemples de la façon dont la mode et
                        l'artisanat peuvent se combiner :</h5>
                    <p class="mb-4">
                    <ul>
                        <li>
                            Les vêtements de haute couture sont souvent fabriqués à la main par des artisans qualifiés.
                            Les designers de haute couture utilisent des techniques et des matériaux de haute qualité
                            pour créer des pièces uniques et luxueuses.

                        </li>
                        <li>
                            Les bijoux de fantaisie sont souvent fabriqués à la main par des artisans spécialisés dans
                            le travail des métaux, des pierres précieuses et des perles. Les bijoutiers de fantaisie
                            peuvent créer des pièces uniques et personnalisées qui reflètent le style et la personnalité
                            du porteur.

                        </li>
                        <li>
                            Les accessoires de mode, tels que les sacs, les chaussures et les chapeaux, peuvent
                            également être fabriqués à la main par des artisans. Les fabricants d'accessoires de mode
                            peuvent utiliser une variété de matériaux et de techniques pour créer des pièces à la fois
                            fonctionnelles et élégantes.
                        </li>
                    </ul>
                    L'artisanat est une composante importante de la mode. Les artisans contribuent à créer des vêtements
                    et des accessoires uniques et précieux qui reflètent l'individualité et le style du porteur.

                    </p>

                    <h5 class="mb-4 text-secondary text-uppercase">Avantages de la mode</h5>
                    <p class="mb-4">
                    <ul>
                        <li>
                            Expression de soi : La mode est un moyen pour les individus de s'exprimer et de se
                            différencier des autres. Elle permet de mettre en valeur la personnalité, les goûts et les
                            valeurs de chacun.

                        </li>
                        <li>
                            Créativité : La mode est un domaine qui encourage la créativité et l'innovation. Elle permet
                            aux designers de développer de nouvelles idées et de créer des vêtements et des accessoires
                            uniques et originaux.

                        </li>
                        <li>
                            Diversité : La mode est un domaine diversifié qui reflète la diversité des cultures et des
                            sociétés. Elle permet de découvrir de nouvelles tendances et de nouveaux styles.
                        </li>
                        <li>
                            Economie : La mode est un secteur économique important qui emploie des millions de personnes
                            dans le monde. Elle contribue à la croissance économique et au développement des pays.
                        </li>
                    </ul>

                    </p>

                    <h5 class="mb-4 text-secondary text-uppercase">Inconvenients de la mode</h5>
                    <p class="mb-4">
                    <ul>
                        <li>
                            Coût : La mode peut être coûteuse, en particulier pour les vêtements et les accessoires de
                            créateurs.

                        </li>
                        <li>
                            Impact environnemental : L'industrie de la mode a un impact environnemental important, en
                            raison de la production de vêtements et d'accessoires en grande quantité.

                        </li>
                        <li>
                            Normes sociales : La mode peut être un vecteur de normes sociales qui peuvent être
                            oppressives ou discriminatoires.
                        </li>
                    </ul>


                </div>
            </div>


            L'artisanat est une composante importante de la mode. Les artisans contribuent à créer des vêtements et des
            accessoires uniques et précieux qui reflètent l'individualité et le style du porteur.

            </p>



            <h5 class="mb-4 text-secondary text-uppercase">Avantages de l'artisanat</h5>
            <p class="mb-4">
            <ul>
                <li>
                    Qualité : L'artisanat est souvent associé à la qualité et à la durabilité. Les objets artisanaux
                    sont fabriqués à la main, avec des techniques et des matériaux de qualité, ce qui leur confère une
                    valeur et une longévité supérieures aux objets manufacturés.
                </li>
                <li>
                    Unicité : Les objets artisanaux sont souvent uniques et personnalisés. Ils sont créés par des
                    artisans qualifiés qui utilisent leurs compétences et leur savoir-faire pour créer des objets qui
                    sont à la fois beaux et fonctionnels.
                </li>
                <li>
                    Expression de soi : L'artisanat est un moyen pour les artisans d'exprimer leur créativité et leur
                    personnalité. Ils peuvent utiliser leurs compétences pour créer des objets qui reflètent leurs
                    valeurs et leurs intérêts.
                </li>
                <li>
                    Diversité : L'artisanat est un domaine diversifié qui reflète la diversité des cultures et des
                    sociétés. Il permet de découvrir de nouvelles techniques et de nouveaux motifs.
                </li>
            </ul>

            </p>

            <h5 class="mb-4 text-secondary text-uppercase">Inconvenients de l'artisanant </h5>
            <p class="mb-4">
            <ul>
                <li>
                    Coût : L'artisanat peut être plus coûteux que les produits manufacturés, en raison du temps et du
                    travail nécessaire à la fabrication des objets artisanaux.

                </li>
                <li>
                    Disponibilité : Les objets artisanaux peuvent être plus difficiles à trouver que les produits
                    manufacturés, en raison de la taille plus réduite du marché de l'artisanat.

                </li>
                <li>
                    Impact environnemental : L'artisanat peut avoir un impact environnemental, en particulier lorsque
                    les matériaux utilisés sont non durables.
                </li>
            </ul>



            <div class="col-md-12 col-lg-18">
                <div class="ms-lg-3 ps-lg-3">

                    <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">

                        <img class="img-fluid" src="img/imgs/artisanat1.jpeg" alt="" style="height: 250px;">


                        <img class="img-fluid" src="img/imgs/artisanat6.jpg" alt="" style="height: 250px;">

                        <img class="img-fluid" src="img/imgs/DjeliModify.jpg" alt="" style="height: 250px;">


                        <img class="img-fluid" src="img/imgs/artisanat4.jpg" alt="" style="height: 250px;">


                        <img class="img-fluid" src="img/imgs/artisanat2.jpg" alt="" style="height: 250px;">

                        <img class="img-fluid" src="img/imgs/mimiche1.jpeg" alt="" style="height: 250px;">

                        <img class="img-fluid" src="img/imgs/femMode.jpg" alt="" style="height: 250px;">


                    </div>
                </div>
            </div>
            La mode et l'artisanat sont deux domaines importants qui ont des avantages et des inconvénients. La mode est
            un moyen d'expression de soi et de créativité, mais elle peut être coûteuse et avoir un impact
            environnemental négatif. L'artisanat est une forme d'expression de soi et de créativité qui est souvent
            associée à la qualité et à la durabilité, mais elle peut être plus coûteuse et difficile à trouver que les
            produits manufacturés.

            </p>

            <h5 class="text-secondary text-uppercase">
                Conseils pour les femmes guinéennes qui veulent se lancer dans la mode et l'artisanat</h5>
            <p class="mb-4">
                La Guinée est un pays riche en culture et en tradition. La mode et l'artisanat sont des domaines
                importants de l'économie guinéenne, et ils offrent de nombreuses opportunités aux femmes guinéennes.

            <ul>
                <li>
                    ** ** Déterminez votre passion.** Qu'aimez-vous dans la mode ou l'artisanat ? Voulez-vous créer des
                    vêtements, des accessoires, des bijoux, des objets décoratifs ou autre chose ? Une fois que vous
                    savez ce que vous aimez, vous pouvez commencer à développer vos compétences et votre expertise dans
                    ce domaine.
                </li>
                <li>
                    ** ** Renseignez-vous sur les tendances actuelles. La mode et l'artisanat sont des domaines en
                    constante évolution. Il est important de se tenir au courant des dernières tendances pour créer des
                    produits qui seront appréciés par les consommateurs. Vous pouvez le faire en lisant des magazines de
                    mode, en visitant des sites Web de mode et en assistant à des événements de mode.
                </li>
                <li>
                    ** ** Développez vos compétences. Il existe de nombreuses ressources disponibles pour vous aider à
                    développer vos compétences en mode ou en artisanat. Vous pouvez prendre des cours, suivre des
                    tutoriels en ligne ou vous joindre à un club ou une association de mode ou d'artisanat.
                </li>
                <li>
                    ** ** Construisez votre réseau. Réseauter avec d'autres personnes dans l'industrie de la mode ou de
                    l'artisanat est un excellent moyen d'apprendre, de trouver des opportunités et de promouvoir votre
                    travail. Vous pouvez participer à des événements de mode, rejoindre des groupes en ligne ou
                    contacter des professionnels de l'industrie.
                </li>
                <li>
                    ** ** Mettez en valeur votre culture. La Guinée a une riche culture et une histoire, et cela peut
                    être une source d'inspiration pour votre travail. Utilisez des motifs et des couleurs traditionnels
                    dans vos créations, ou incorporez des éléments de la culture guinéenne dans votre travail.
                </li>

                <li>
                    ** ** Soutenez les artisans locaux. La Guinée a une longue tradition d'artisanat. Soutenez les
                    artisans locaux en achetant leurs produits et en les promouvant.
                </li>
            </ul>

            La Guinée est un pays en plein essor, et la mode et l'artisanat ont un rôle important à jouer dans le
            développement du pays. Les femmes guinéennes ont de grandes opportunités dans ces domaines, et elles peuvent
            contribuer à faire connaître la culture guinéenne au monde entier.



            </p>



            <div class="container-xxl py-3 ">
                <h2 style="text-align: center;">La mode et l'artisanat au coeur de l'Entrépreneuriat Féminin !!!</h2>
                <div class="container ">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">

                            <div class="overflow-hidden">
                                <iframe src="https://www.youtube.com/embed/5SLhQQkyA4g" frameborder="0" width="560"
                                    height="315" allowfullscreen></iframe>
                            </div>
                            <div class="d-flex align-items-center justify-content-between bg-light p-4">
                                <h6 class="text-truncate me-3 mb-0">Fondatrice de Habiba Holding</h6>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                            <div class="overflow-hidden">

                                <iframe src="https://www.youtube.com/embed/mATyoBWnmIM" frameborder="0" width="560"
                                    height="315" allowfullscreen></iframe>
                            </div>
                            <div class="d-flex align-items-center justify-content-between bg-light p-4">
                                <h6 class="text-truncate me-3 mb-0">Fondatrice de Guinee Fashion Fest</h6>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                            <div class="overflow-hidden">
                                <iframe src="https://www.youtube.com/embed/5SLhQQkyA4g" frameborder="0" width="560"
                                    height="315" allowfullscreen></iframe>
                            </div>
                            <div class="d-flex align-items-center justify-content-between bg-light p-4">
                                <h6 class="text-truncate me-3 mb-0">Fondatrice de Nankei production</h6>

                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Team End -->

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
                            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
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
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
                class="bi bi-arrow-up"></i></a>


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