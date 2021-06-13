<Body>
    <?php
    include_once('./layout/header.php');
    ?>
    <div id="start"></div>
    <a href="#start" class="scroll top"><i class="fas fa-arrow-circle-up"></i></a>
    <a href="#finish" class="scroll bottom"><i class="fas fa-arrow-circle-down"></i></a>
    <div class="header">
        <div class="navbar">
            <a href="/index.php"><img src="./image/mail.png" id="start" class="logo" alt="" srcset=""></a>
            <nav>
                <button class="hamburger" id="hamburger">
                    <i class="fas fa-bars"></i>
                </button>
                <ul>
                    <li><a href="#accueil">ACCUEIL</a></li>
                    <li><a href="#about" class="btn">QUI SOMMES-NOUS ?</a></li>
                    <li><a href="#service" class="btn2">NOS SERVICES</a></li>
                    <li><a href="/contact.php" class="btn3" target="_blank">CONTACT</a></li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col">
                <h1>Akeng Digital</h1>
                <p>
                    Choisissez la flexibilité avec notre agence web avec des meilleurs expert du Digital
                </p>
                <a href="/contact.php" target="_blank" rel="noopener noreferrer">
                    <button type="button">Contactez-nous</button></a>
            </div>
            <div class="col">
                <div class="card card1">
                    <h5>About Us</h5>
                    <p>Agence web expert dans le digital depuis plusieurs année. Notre agence web vous propose de
                        financer
                        votre site internet en plusieurs mensualités sans frais supplémentaire.
                        Résultat, vous financez votre site web facilement sans avoir à engager votre trésorerie.
                    </p>
                </div>
                <div class="card card2">
                    <h5>Service</h5>
                    <p>Aucune contrainte liée à un cadre prédéfini, nous adaptons votre site aux besoins de vos cibles
                        et
                        répondons à vos exigences techniques : intégration CRM, réservation, paiement en ligne.
                        Tout est mis en place dans la création de votre site web pour vous aider à atteindre vos
                        objectifs!
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div id="about">
        <?php include_once './about.php' ?>
    </div>
    <div class="service" id="service">
        <h2>Nos services</h2>
        <div class="Steps">
            <div class="box">
                <img src="/image/site-internet-1.png" />
                <h2>01</h2>
                <h3>Création de Sites web</h3>
                <p>Création de sites web d’entreprises, sites institutionnels, Sites WordPress, Sites de E-commerce,
                    Blog,
                    Sites perso en (Php, JQuery, javascript, etc).</p>
            </div>
            <div class="box">
                <img src="/image/applications-mobile.png" />
                <h2>02</h2>
                <h3>Développement Mobile</h3>
                <p>Développement d’Applications Android et IOS personnalisées ou conversion de votre site web en
                    application
                    mobile native ou hybride, sans bug et bien fonctionnelle.</p>
            </div>
            <div class="box">
                <img src="/image/designer-graphique.png" />
                <h2>03</h2>
                <h3>Design Graphique</h3>
                <p>Design de logos professionnels, cartes de visite, flyers, bannières, kit pour les réseaux sociaux,
                    Kakemono, et tout autre travail graphique.</p>
            </div>
        </div>
    </div>
    <section class="team">
        <h2>NOTRE TEAM</h2>
        <div class="team-our">

            <div class="team-c">
                <div class="block">
                    <img src="/image/hance.jpg" width="200px" height="250px" alt="" srcset="">
                    <div class="icon">
                        <ul>
                            <a href="">
                                <li><i class="fab fa-facebook"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-instagram"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-linkedin"></i></li>
                            </a>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>ABA ALLOGO HANCE LOIC</h3>
                        <h4>Chef de projet</h4>
                        <p>Développeur experimenté
                            en php, python, java, concepteur...
                        </p>
                    </div>
                </div>
                <div class="block">
                    <img src="/image/man.png" width="200px" height="250px" alt="" srcset="">
                    <div class="icon">
                        <ul>
                            <a href="">
                                <li><i class="fab fa-facebook"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-instagram"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-linkedin"></i></li>
                            </a>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>Ayman</h3>
                        <h4>Développeur</h4>
                        <p>Développeur experimenté
                            en php,javavascript,photoshop
                        </p>
                    </div>
                </div>
                <div class="block">
                    <img src="/image/Math.jpg" width="200px" height="250px" alt="" srcset="">
                    <div class="icon">
                        <ul>
                            <a href="">
                                <li><i class="fab fa-facebook"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-instagram"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-linkedin"></i></li>
                            </a>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>GENOL MATH</h3>
                        <h4>Chargé de la communication</h4>
                        <p>Technicien et marketrur experimenté
                            sur les réseaux sociaux, facebook,instagram...
                        </p>
                    </div>
                </div>
                <div class="block">
                    <img src="/image/hicham.jpeg" width="200px" height="250px" alt="" srcset="">
                    <div class="icon">
                        <ul>
                            <a href="">
                                <li><i class="fab fa-facebook"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-instagram"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-linkedin"></i></li>
                            </a>
                        </ul>
                    </div>
                    <div class="info">
                        <h3>HICHAM CHATIR</h3>
                        <h4>Infograh</h4>
                        <p>Infograh experimenté
                            en photoshop, XD, ADOBE, Canvas...
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="partner">
        <h2>Nos partenaires</h2>
        <div class="pat">
            <marquee direction="scroll">
                <div class="col">
                    <img src="./image/IFIAG.png" alt="" srcset="">

                    <img src="./image/socaf-maroc.png" alt="" srcset="">

                    <img src="./image/logo-vacar.png" alt="" srcset="">
                    <img src="./image/logo-voyageassur.png" alt="" srcset="">
                </div>
            </marquee>
        </div>
    </section>
    <section id="contact-us">
        <div class="wrapper">
            <h3>Contactez-Nous</h3>
            <p>Chez Akeng Digital nous savons que votre projet est une priorité mais également un engagement financier
                important pour vous. C'est pourquoi nous mettons un point d'honneur à prendre en compte chacune de vos
                attentes pour vous aider dans la préparation de votre projet d'entreprise.</p>
            <form>
                <label for="name">Nom</label>
                <input type="text" id="name" placeholder="Votre nom">
                <label for="name">Email</label>
                <input type="text" id="email" placeholder="Votre email">
                <input type="submit" value="OK" class="button-3">
            </form>
        </div>
    </section>

    <?php include_once('./layout/footer.php') ?>
</Body>