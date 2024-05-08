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
                    <a href="interface.php" class="nav-item nav-link active">Acceuil</a>
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
        <div class="container">
            <h2 style="font-size: 25px; color: white; margin-left: 5%;">Faites un tour pour tomber sur des conseils qui
                vous seront bénéfiques !!</h2>


        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <h2 style="text-align: center;">Des ressources vidéos à votre portée</h2>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <!-- <img class="img-fluid w-100 h-100" src="img/service-1.jpg" alt="">  -->
                        <iframe src="https://www.youtube.com/embed/d-U259jHux8" frameborder="0" width="420"
                            height="360"></iframe>
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">L’entrepreneuriat <br>se conjugue au féminin !!!</h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <!--  <img class="img-fluid w-100 h-100" src="img/service-2.jpg" alt=""> -->
                        <iframe src="https://www.youtube.com/embed/Ho1_0CUPqLQ" frameborder="0" width="420"
                            height="360"></iframe>
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">Qu’est ce qui caractérise <br>l’entreprenariat féminin ?
                        </h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden">
                        <iframe src="https://www.youtube.com/embed/6jV8zDiTBGA" frameborder="0" width="420"
                            height="360"></iframe>
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">Comment Avoir Confiance en Soi <br> - 7 Techniques
                            infaillibles 🔥</h5>
                        <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class=" wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-secondary text-uppercase">L'entrépreneuriat c'est quoi ?</h2>

                    <p class="mb-4 ecritureP" style="font-weight: 100; ">
                        L’entrepreneuriat désigne l’action d’entreprendre, de mener à bien un projet.
                        Souvent utilisé dans le secteur des affaires, le terme entreprendre signifie créer une activité
                        (économique) pour atteindre un objectif, répondre à un besoin. <br>Le créateur représente
                        l’entrepreneur, soit le porteur du projet. <br> <br>
                        L’objet de l’entrepreneuriat correspond donc à votre projet : ouvrir un restaurant, ouvrir un
                        commerce, ouvrir une entreprise d'aide à domicile…
                    </p>

                    <!-- pour faire contourner l'image de mimiche-->
                    <img src="img/imgs/mimiche.jpg" alt="" style="width: 20rem;float: right;">


                    <h2 class="text-secondary text-uppercase">Qui peut entreprendre ?</h2>
                    <p class="ecritureP" style="font-weight: 100; line-height: 25px;">L’entrepreneuriat est-il réservé à
                        certaines personnes ? Qui peut entreprendre ? Faut-il avoir des compétences particulières ? <br>
                        <br>

                        Dans les faits, tout le monde a la possibilité de se lancer dans l’entrepreneuriat. Cependant,
                        certaines qualités permettent d’être un bon entrepreneur: <br> <br>
                        • La créativité : un entrepreneur doit trouver des idées innovantes pour se démarquer et se
                        renouveler sans cesse. <br>
                        • La volonté : un entrepreneur doit être dynamique et ambitieux pour mener à bien son projet.
                        <br>
                        • La rigueur, l’organisation : un entrepreneur doit être structuré pour réussir son entreprise.
                        <br>
                        • L’humilité : un entrepreneur doit savoir se remettre constamment en question, prendre du recul
                        et accepter les critiques pour pouvoir s’améliorer.
                    </p>
                    <h2 class="text-secondary text-uppercase">Entrepreneuriat : quels avantages ?</h2>
                    <p class="ecritureP" style="font-weight: 100; line-height: 25px;">Les entrepreneurs.es recherchent
                        un environnement de travail différent d’un travail dit normal. Ils(elles) apprécient notamment :
                        <br>
                        • L’absence totale de routine: Les journées d’un entrepreneur se suivent, mais ne se ressemblent
                        pas : recherche d’idées, comptabilité, développement des produits/services, marketing… Un chef
                        d’entreprise doit savoir (Presque) tout faire ! <br>
                        • La liberté: Un entrepreneur travaille pour lui et pour personne d’autre. Plus besoin de subir
                        l’autorité et les ordres d’un supérieur. Oui, le boss, c’est vous ! En plus, vous pouvez très
                        bien décider de vous lever à 10h le mardi ou de faire de longues pauses… <br>
                        • Le goût du challenge: Un entrepreneur a la possibilité de stimuler l’économie et de créer de
                        l’emploi. Ainsi, le chef d’entreprise a généralement le goût de l’aventure, l’envie de se
                        surpasser et de se prouver des choses.
                    </p> <br>



                </div>

            </div>
        </div>
    </div>

    <!-- About End -->


    <!--Partie la confiance en soi-->
    <hr>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class=" wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-secondary text-uppercase">C'est quoi la confiance en soi ?</h2>

                    <p class="mb-4 ecritureP" style="font-weight: 100; line-height: 25px;">
                        La confiance en soi c’est avoir la conviction d’avoir les ressources en soi pour faire face à ce
                        qui va arriver. C’est donc la capacité à se jeter dans l’action malgré les doutes
                        Beaucoup de grands leaders disent souvent les mots " si tu veux avoir confiance en toi, il faut
                        être sûr de toi ".

                        C’est tout le contraire, et dès lors que vous l’aurez compris, cela changera votre vie. La
                        confiance en soi, c’est aller de l’avant quoi qu’il arrive, sans certitude du résultat. <br>

                        Dans quel domaine est-on sûr du résultat ? Aucun, sauf dans votre zone de confort. La société
                        nous incite à tout contrôler, que cela soit en couple, au travail, cela rassure. Le peureux par
                        exemple attend d’être prêt, de tout maitriser avant de se lancer, donc il n’y va jamais. Il ne
                        prend pas la parole dans une réunion et le regrette, il cherche des excuses pour aborder une
                        personne qu’il apprécie. <br>

                        La confiance c’est accepter de surmonter ses peurs et ses doutes et y aller quand même. La
                        confiance en soi est différente de l’estime de soi. L’estime de soi est la valeur que l’on se
                        porte, le degré d’amour que l’on a pour soi. C’est un autre sujet. Comment donner envie de vous
                        aimer si l’on ne s’aime pas ? On peut avoir confiance en soi sans estime de soi ou inversement..
                        <br> <br>

                    <h2 class="text-secondary text-uppercase">Comment avoir confiance en soi ?</h2>

                    <h4 class="text-secondary text-uppercase">1. À l’intérieur de soi</h4>

                    Le meilleur de soi se révèle quand on fonctionne de façon alignée avec ses valeurs, ses passions et
                    non celles des autres. C’est là que l’on est à plein potentiel.

                    Il faut accepter ses doutes, accueillir ses peurs car on ne peut pas tout contrôler. Si vous
                    réfléchissez de quoi vous inquiétez vous dans la vie ? D’être en retard ? De payer votre loyer ? Si
                    vous lisez cet article c’est que vous vivez dans le luxe, il ne vous manque rien.

                    Le premier moyen est donc d’accepter d’avoir des doutes et d’arrêter de vouloir être prêt, que tout
                    soit parfait pour passer à l’action. Faîtes vous confiance, à vous, à votre intuition qui ne vous a
                    que très peu souvent trompée, dîtes-vous j’y vais peu importe le résultat.

                    Il n’y a pas d’échec, que des expériences.
                    <h4 class="text-secondary text-uppercase">2-La confiance vient des autres</h4>

                    Quel est le niveau de confiance d’un enfant aimé, bien entouré et félicité ? Et celui d’un enfant
                    critiqué ? Le niveau de confiance en soi dépend aussi de son entourage.

                    Adulte, c’est pareil, C’est pourquoi il y a une dimension extérieure pour développer la confiance en
                    soi. Savoir bien s’entourer, de vrais amis, qui vous veulent du bien de façon désintéressée. Vous
                    devez fuir les personnes toxiques, et vous ouvrir aux autres, aux bienveillants. Car vous apprendrez
                    auprès d’eux, ils vous donneront confiance avant de vous faire confiance, " je vais t’apprendre à
                    sauter à la corde, et après tu le fais toi-même. ".

                    Pour savoir si les personnes que vous fréquentez sont toxiques ou bienveillants, posez-vous
                    simplement la question. Comment je me sens quand je suis avec eux, et après les avoir vu. Si vous ne
                    vous sentez pas bien à chaque fois, vous savez ce que vous devez faire.


                    <h4 class="text-secondary text-uppercase">3. La clarté des objectifs</h4>

                    Quand vous savez exactement où vous allez, je suis sûr que vous ne vous laissez pas influencer par
                    ce qui se passe autour de vous et ce que les gens pensent. Vous vous faîtes confiance. Plus vos
                    objectifs sont clairs, plus vite vous les atteindrez et plus votre niveau de confiance est élevé. Un
                    objectif clair signifie précis. Si la plupart des personnes n’obtiennent pas ce qu’elles veulent, il
                    y a deux raisons : elles ne savent pas ce qu’elles veulent. Ou,elles ne savent pas pourquoi elles le
                    veulent. Sans objectif clair, et sans raison de l’obtenir puissante, on abandonne au premier
                    obstacle, comme les résolutions non tenues du début d’année que l’on répète chaque année.


                    <h4 class="text-secondary text-uppercase">4. Le savoir faire – la compétence – la répétition</h4>

                    Quel est votre niveau de confiance en vous si je vous interroge sur un sujet que vous maitrisez
                    parfaitement ? Élevé, très probablement.

                    La compétence qui bien sûr apporte de la confiance. Pour réussir un examen, un entretien, vous devez
                    avoir de la préparation.
                    Pour augmenter votre niveau de compétence, investissez dans ce qui vous permet de progresser (livre,
                    formation, s’inspirer des modèles de réussite pour vous) plutôt que dans ce que le philosophe
                    Spinoza appelle " le plaisir ", qui lui est fugace. Derrière le sentiment d’avoir appris, il y a
                    pour Nietzsche une " augmentation de la force vitale ".

                    Plus vous répétez un exercice, plus vous développerez votre compétence.

                    <h4 class="text-secondary text-uppercase">5. L’action</h4>
                    <!-- pour faire contourner la video de la confiance-->
                    <iframe src="https://www.youtube.com/embed/dWfVYP7QUG8" frameborder="0" width="420"
                            height="360"
                        style="float: right; height: 300px;  margin: 20px;"></iframe>
                    Sans action, il y a stagnation, sans mouvement dans la mer, vous coulez. L’action en dehors de votre
                    zone de confort, c’est-à-dire ce que vous savez déjà faire, vous permettra de développer votre
                    confiance en vous. Plus vite vous échouez, plus vite vous apprendrez. Et le temps est compté. On
                    attend souvent d’être motivé, inspiré pour agir.

                    Agissez maintenant, l’inspiration et la motivation suivront, comme l’appétit vient en mangeant.

                    <h4 class="text-secondary text-uppercase">6. La confiance en soi est fille de joie</h4>

                    Quel est votre niveau d’audace quand vous vous sentez bien ? Votre niveau de confiance en vous ?
                    Tout vous semble alors possible. Au contraire quand vous vous sentez mal, fatigué, stressé, le
                    niveau de confiance et d’audace chute.

                    Plus vous découvrez ce qui provoque chez vous ce sentiment de bien être (différent du bonheur), plus
                    vous aurez confiance en vous. Pour y arriver, rappelez-vous avec précision les moments où vous vous
                    sentiez bien, et trouvez ce que vous faisiez, qui était avec vous, en clair, le pourquoi vous vous
                    sentiez bien.



                    </p>



                    <!-- <div class=" pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        
                    </div>
                </div> -->

                </div>

            </div>
        </div>
    </div>

    <!-- About End -->





    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h2 id="coucou" class="text-secondary text-uppercase">Montage de projets</h2>
                <h1 class="mb-5">Une vue d'ensemble sur le montage de projets !</h1>
            </div>
            <!--Partie la confiance en soi-->
            <hr>
            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class=" wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class=" text-uppercase"> Définitions de projets </h2>

                            <p class="mb-4  " style="font-weight: 100; line-height: 25px;">
                                c’est une démarche spécifique qui permet de structurer méthodiquement et progressivement
                                une réalité à venir. C’est une œuvre, innovante et complexe, un ensemble d’opérations
                                destinées à atteindre un objectif précis. Un projet a un début et une fin. </p>

                            <h2 class=" text-uppercase"> Caractéristiques d’un projet : </h2>

                            <h4 class="text-primary text-uppercase h6">1. Les projets ont un objectif :</h4>

                            les projets ont des buts et objectifs clairement définis et exposés pour produire des
                            résultats clairement définis. Leur but est de résoudre un problème(un manque), ce qui
                            implique une analyse préalable des besoins. Suggérant une ou plusieurs solutions, ils visent
                            un changement durable.
                            <h4 class="text-primary text-uppercase h6">2- Un plan de projet bien établi </h4>

                            – Un plan conçu avec minutie est utile pour deux raisons. D’abord, il permet à chaque
                            participant de comprendre et de contribuer au projet. Il précise les responsabilités de
                            chacun et évalue combien d’argent, de personnes, de matériel et de temps sont nécessaires à
                            l’achèvement du projet. Ensuite, il sert d’outil de suivi et vous permet d’adopter des
                            mesures correctives tôt dans le processus si les choses tournent mal.


                            <h4 class="text-primary text-uppercase h6">3. Une envergure maîtrisée </h4>

                            – Tout au long du projet, vous ferez face à plusieurs situations qui ne contribuent pas
                            toutes à vos objectifs. Il importe que vous portiez attention à vos priorités, avec une
                            perte minimale de temps et de concentration. 4

                            <h4 class="text-primary text-uppercase h6">4. Le soutien des intervenants</h4>

                            –D’ordinaire, les projets sont le fait de plusieurs parties prenantes. Il importe que
                            celles-ci vous accordent leur soutien pour toute la durée du projet de façon à ce que
                            l’équipe atteigne ses objectifs

                            <h4 class="text-primary text-uppercase h6">5. Les projets sont réalistes :</h4>


                            leurs objectifs doivent être réalisables, ce qui implique la prise en compte non seulement
                            des exigences techniques, mais aussi des ressources financières et humaines disponibles.

                            <h4 class="text-primary text-uppercase h6">6. Les projets sont limités dans le temps et dans
                                l’espace :</h4>

                            ils possèdent un début et une fin et se déroulent dans un lieu et un contexte spécifiques.

                            <h4 class="text-primary text-uppercase h6">7. Les projets sont complexes :</h4>

                            les projets peuvent faire appel à diverses compétences en matière de montage et de conduite,
                            et impliquer divers partenaires et acteurs.

                            <h4 class="text-primary text-uppercase h6">8. Les projets sont uniques :</h4>

                            les projets naissent d’une idée nouvelle. Ils apportent une réponse spécifique à un besoin
                            (problème) dans un contexte spécifique. Ils sont innovants.
                            <h4 class="text-primary text-uppercase h6">9. Les projets sont une aventure en soi :</h4>

                            chaque projet est différent et novateur ; il implique forcément une certaine incertitude et
                            des risques.

                            <h4 class="text-primary text-uppercase h6">10.Les projets peuvent être évalués :</h4>

                            les projets sont planifiés et organisés selon des objectifs mesurables qui doivent pouvoir
                            être évalués.

                            <h4 class="text-primary text-uppercase h6">11.Les projets peuvent être évalués :</h4>

                            les projets sont planifiés et organisés selon des objectifs mesurables qui doivent pouvoir
                            être évalués.

                            <h4 class="text-primary text-uppercase h6">12.Les projets sont constitués de plusieurs
                                phases :</h4>

                            les projets se composent de phases distinctes et identifiables.


                            <h4 class=" text-uppercase h4"> Une des raisons qui fait que nous n'osons pas toujours se
                                lancer, vient de plusieurs facteurs : </h4>
                            - Ne vais-je pas me tromper ? - Si j'échoue, les autres vont se moquer de moi… - Est-ce le
                            bon projet ? Il s'agit en effet de trouver le vrai projet, celui qui est fait pour vous,
                            parce qu'il y en a qu'un seul en ce moment. Cela veut dire que les autres ne le sont pas.
                            Alors, testez, testez, testez et persistez. Vous pourrez ainsi vérifiez s'il s'agit bien de
                            celui-là. Comment savoir ? Comment commencer ? Et bien… commencez ! Pas à pas, étape par
                            étape, tout en gardant vos yeux fixés sur votre vision. En avançant ainsi, vous verrez, soit
                            des confirmations, soit des corrections à faire, tout en s'assurant que vous êtes toujours
                            en paix et que vous n'êtes pas en train d'écraser ou dominer votre entourage. C'est aussi
                            par ce moyen que vous pourrez constater assez facilement s'il s'agit de la bonne vision.
                            C'est comme un ami me disait un jour « si tu n'arrives pas à déplacer d'un coup cette
                            montagne qui est devant toi… commence à la petite cuillère ».

                            <ul>
                                Pour clarifier sa vision, commencez à répondre à ces 5 questions simples:
                                <li> Quelle est ma plus grande idée ?</li>
                                <li> Qu'est-ce que je laisserai comme héritage ?</li>
                                <li>A quel(s) besoin(s) je réponds, et à qui ?</li>
                                <li>Pourquoi j'ai cette vision ? </li>

                            </ul>

                            </p>





                        </div>

                    </div>
                </div>
            </div>




        </div>
    </div>

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