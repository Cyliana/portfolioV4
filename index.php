<?php
include("head.php");
include("header.php");
?>

<body>
    <main>
        <div class="logo-name">
            <div id="full-logo" onmouseover="logoBurst()" onmouseout="logo()">
                <div id="back-triangle" class=logo></div>
                <div id="middle-triangle" class=logo></div>
                <div id="front-triangle" class=logo></div>
                <div id="drill" class=logo></div>
                <div id="little-drill" class=logo></div>
            </div>
            <div id="amanda">
                <div id="name1">Amanda Taddei</div>
                <h1>Amanda Taddei</h1>
                <h2 id=titre>développeuse web</h2>
            </div>
        </div>


        <div id="accueil">
            <h2>PARCOURS</h2>
            <div id="parcours">
                <div id="road">
                    <div id="drill1" class=logo></div>
                    <div id="drill2" class=logo></div>
                    <div id="drill3" class=logo></div>
                    <div id="drill4" class=logo></div>
                </div>
                <div id="experiences">
                    <div class="steps">
                        <p class="company">OnlineFormaPro - Stagiaire</p>
                        <p class="date">2020 / aujourd'hui</p>
                        <p>Formation développement Web et Web mobile.<br>Apprendre les langages de balisage tel que html, css et les langages de programations tel que javascript, php, mysql ainsi que des framework symfony, librairie reactjs, bootstrap et le CMS Wordpress.</p>
                    </div>
                    <div class="steps">
                        <p class="company">Renault Trucks - Opératrice</p>
                        <p class="date">2019/2020</p>
                        <p>Assemblage de pièces devant êtres destinées à la ligne moteur puis a la ligne de montage principale des camions.<br>
                        </p>
                    </div>
                    <div class="steps">
                        <p class="company">L'instant Bar Restaurant - Gérante</p>
                        <p class="date">2017/2019</p>
                        <p>Mise en place, serveuse, gestion administrative, gestion des stocks, entretien journalier des locaux , respect des normes liées au métier.</p>
                    </div>
                    <div class="steps">
                        <p class="company">CAF de l'Ain - Conseillère offre de services</p>
                        <p class="date">2013/2016</p>
                        <p>Accueillir l'allocataire, identifier ses besoins ou sa demande, le conseiller, l'orienter et l'accompagner sur les services du site CAF.FR.</p>
                    </div>
                    <div class="steps">
                        <p class="company">Int'air Medical - Opératrice</p>
                        <p class="date">2008/2011</p>
                        <p>Assemblage d'équipement médical en salle stérile destiné aux hopitaux et à l'hospitalisation à domicile.</p>
                    </div>
                    <div class="steps">
                        <p class="company"> BEP Vente Action Marchande</p>
                        <p class="date">2007</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="soft-and-tech">
            <div id="technos">
                <h2>TECHNOLOGIES</h2>
                <div id="img">
                    <img src="./assets/icones/html.png"></img>
                    <img src="./assets/icones/css-3.png"></img>
                    <img src="./assets/icones/js.png"></img>
                    <img src="./assets/icones/php.png"></img>
                    <img src="./assets/icones/mysql.png"></img>
                    <img src="./assets/icones/powerpoint.png"></img>
                    <img src="./assets/icones/github.png"></img>
                    <img src="./assets/icones/photoshop.png"></img>
                    <img src="./assets/icones/illustrator.png"></img>
                    <img src="./assets/icones/xd.png"></img>
                </div>
            </div>
            <div id="softskills">
                <h2>SOFTS SKILLS</h2>
                <div id="flowerSoftSkills">
                    <div id="flower">
                        <div class="softs" id="curieuse">Curieuse</div>
                        <div class="softs" id="adaptable">Adaptable</div>
                        <div class="softs" id="rigoureuse">Rigoureuse</div>
                        <div class="softs" id="dynamique">Dynamique</div>
                        <div class="softs" id="organisee">Organisée</div>
                        <div id="avatar"></div>
                    </div>

                </div>
            </div>
        </div>
      
    </main>
    <?php include("footer.php"); ?>
    <script src="main.js"></script>
</body>

</html>