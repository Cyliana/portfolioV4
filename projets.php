<?php
include("head.php");
include("header.php");
?>

<body id="body">
    <main id="main">
        <div id="overlay"></div>
        <div id="projectcontent">
            <h2>PROJETS</h2>
        </div>
        <div id="container">
            <div id="gridcontent">
                <div class="celgrid" id="cel1" onclick="openModal('modal1');">
                </div>
                <div class="modal" id="modal1">
                    <button class="close" onclick="closeModal('modal1');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Hack'cess</h3>
                    <img src="./assets/projets/hackcess-apercu.png" alt="aperçu du site sur l'accessibilité numérique.">
                    <p>Réalisation d'un site sur l'accessibilité numérique<br>Réalisé principalement à l'aide de bootstrap et intégration de fonctionnalités en Javascript.<br>
                    La principale difficulté dans cette réalisation a été de prendre en compte tout l'aspect d'accessibilité dans le choix des couleurs , des polices de caractères, de la possibilité de pouvoir naviguer entièrement au clavier et que les lecteurs d'écrans puissent interpréter tous les éléments présents sur la page.
                    </p>
                    <a href="https://amandat.promo-73.codeur.online/hackcess/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Bourg-en-Stress/accessibility" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel2" onclick="openModal('modal2');"></div>
                <div class="modal" id="modal2">
                    <button class="close" onclick="closeModal('modal2');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Site Agence de voyage</h3>
                    <img src="./assets/projets/travel-apercu.png" alt="aperçu du site travel.">
                    <p>Site 'one page' réalisée en html et css pas à pas avec une formation udemy.</p>
                    <a href="https://amandat.promo-73.codeur.online/travel/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/travel/" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel3" onclick="openModal('modal3');"></div>
                <div class="modal" id="modal3">
                    <button class="close" onclick="closeModal('modal3');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Une jungle</h3>
                    <img src="./assets/projets/presentation-illustration-nevinator.jpg" alt="aperçu d'un montage photoshop.">
                    <p>Réalisation d'une illustration pour le site nevinator avec le logiciel photoshop.</p>
                    <a href="assets/projets/presentation-illustration-nevinator.jpg" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                </div>

                <div class="celgrid" id="cel4" onclick="openModal('modal4');"></div>
                <div class="modal" id="modal4">
                    <button class="close" onclick="closeModal('modal4');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Mon Portfolio V1</h3>
                    <img src="./assets/projets/portfolio1-apercu.png" alt="aperçu de mon premier portfolio.">
                    <p>Première version de mon portfolio réalisé en formation pré-qualifiante développement web en html et css principalement.<br>Du javascript a été intégrer pour la responsivité du menu burger en format mobile avec l'aide du formateur.</p>
                    <a href="https://amandat.promo-73.codeur.online/portfolioV1/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/PortfolioV1" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel5" onclick="openModal('modal5');"></div>
                <div class="modal" id="modal5">
                    <button class="close" onclick="closeModal('modal5');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Nevinator</h3>
                    <img src="./assets/projets/nevinator-apercu.png" alt="aperçu du site nevinator.">
                    <p>Réalisation d'un site pour l'association Nevers Libre dans le cadre de mon stage de deux semaines à l'issu de ma formation pré-qualifiante.<br>
                    Il a été développé en html/css et à l'aide de la librairie bootstrap.
                    Il y a eu pour se projet un gros travail de recherche concernant les licences Open Source.
                    </p>
                    <a href="https://amandat.promo-73.codeur.online/nevinator/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Bourg-en-Stress/nevinator" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel6" onclick="openModal('modal6');"></div>
                <div class="modal" id="modal6">
                    <button class="close" onclick="closeModal('modal6');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Site L'FMR</h3>
                    <img src="./assets/projets/lfmr-apercu.png" alt="aperçu du site Les fées mères.">
                    <p>Projet réalisé bénévolement en autodidacte pour une conaissance.<br>Mise en pratique des connaissances en
                        html et css acquises avec une formation udemy.<br></p>
                    <a href="https://amandat.promo-73.codeur.online/FMR/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/FMR" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel7" onclick="openModal('modal7');"></div>
                <div class="modal" id="modal7">
                    <button class="close" onclick="closeModal('modal7');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Logo nevinator</h3>
                    <img src="./assets/projets/presentation-logo-nevinator.jpg" alt="aperçu du logo réalisé pour le site nevinator.">
                    <p>Réalisation d'un logo pour le site nevinator de l'association Nevers Libre.</p>
                    <a href="img/presentation-logo-nevinator.jpg" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                </div>

                <div class="celgrid" id="cel8" onclick="openModal('modal8');"></div>
                <div class="modal" id="modal8">
                    <button class="close" onclick="closeModal('modal8');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Dance School Manager</h3>
                    <img src="./assets/projets/dsm-apercu.png" alt="aperçu du site Danse school manager.">
                    <p>Réalisation d'une application de gestion d'école de danse.
                        Technologies utilisées : css, php, mysql, javascript(génération des éléments à la volée).<br>
                        Afin de tester l'application et ses fonctionnalitées voici  des id/mdp :<br>
                        Identifiant : rloze<br>
                        mot de passe : 1234<br>
                    </p>
                    <a href="https://amandat.promo-73.codeur.online/dsm/app/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/dsm" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel9" onclick="openModal('modal9');"></div>
                <div class="modal" id="modal9">
                    <button class="close" onclick="closeModal('modal9');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Casse brique</h3>
                    <img src="./assets/projets/casse-brique-apercu.png" alt="aperçu du jeu de casse-brique">
                    <p>Réalisation d'un casse brique en javascript objet avec génération des éléments à la volée.
                        Premier projet réalisé en formation qualifiante développement web afin d'acquérir les concepts de base.
                    </p>
                    <a href="https://amandat.promo-73.codeur.online/cassebrique/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/cassebrique/" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel10" onclick="openModal('modal10');"></div>
                <div class="modal" id="modal10">
                    <button class="close" onclick="closeModal('modal10');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Logo Playstation</h3>
                    <img src="./assets/projets/logo-playstation-apercu.png" alt="aperçu logo playstation.">
                    <p>Reproduction du logo playstation en html et css.</p>
                    <a href="https://amandat.promo-73.codeur.online/challenge-play/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/challenge-play/" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel11" onclick="openModal('modal11');"></div>
                <div class="modal" id="modal11">
                    <button class="close" onclick="closeModal('modal11');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Wild circus</h3>
                    <img src="./assets/projets/circus-apercu.png" alt="aperçu de la page wild circus.">
                    <p>Réalisation d'une page responsive pour les selections d'entrée à la Wild Code school.</p>
                    <a href="https://amandat.promo-73.codeur.online/wild-circus/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/wild-circus/" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel12" onclick="openModal('modal12');"></div>
                <div class="modal" id="modal12">
                    <button class="close" onclick="closeModal('modal12');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Mon Portfolio V2</h3>
                    <img src="./assets/projets/portfolio2-apercu.png" alt="aperçu de mon portfolio 2ème version.">
                    <p>Réalisation de mon portfolio version 2 en formation pré-qualifiante développement web avec bootstrap.</p>
                    <a href="https://amandat.promo-73.codeur.online/portfolioV2/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/portfolioV2/" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel13" onclick="openModal('modal13');"></div>
                <div class="modal" id="modal13">
                    <button class="close" onclick="closeModal('modal13');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Le Chocolat</h3>
                    <img src="./assets/projets/chocolat-apercu.png" alt="aperçu du site le chocolat.">
                    <p>Réalisation d'une page wordpress sur un thème libre afin d'en apréhender le fonctionnement.</p>
                    <a href="https://amandat.promo-73.codeur.online/wordpress/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                </div>

                <div class="celgrid" id="cel14" onclick="openModal('modal14');"></div>
                <div class="modal" id="modal14">
                    <button class="close" onclick="closeModal('modal14');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Courriers</h3>
                    <img src="./assets/projets/courriers-apercu.png" alt="aperçu du site courriers.">
                    <p>Réalisation d'une application de génération de courriers<br>Technologies utilisées : ReactJS , php, mysql, tcpdf pour la génération du document et l'impression.<br>
                    Afin de tester l'application et ses fonctionnalitées voici  des id/mdp :<br>
                        Identifiant : amanda<br>
                        mot de passe : 12345<br>
                    </p>
                    <a href="https://amandat.promo-73.codeur.online/courriers/server2/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/courriers" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel15" onclick="openModal('modal15');"></div>
                <div class="modal" id="modal15">
                    <button class="close" onclick="closeModal('modal15');"><img src="./assets/icones/close.svg"></img></button>
                    <h3>Portfolio V3</h3>
                    <img src="./assets/projets/portfolioV3-apercu.png" alt="aperçu de mon portfolio 3ème version">
                    <p>Refonte du portfolio suite au conseils d'un coach en design web.
                        Technologies utilisées :  html, css, php, JS.
                    </p>
                    <a href="https://amandat.promo-73.codeur.online/portfolio" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/portfolioV3-natif" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                <div>

            </div>
        </div>
    </main>
    <?php include("footer.php"); ?>
    <script src="main.js"></script>
</body>

</html>