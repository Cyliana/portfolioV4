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
                <div id="name2">Amanda Taddei</div>
                <h1>Amanda Taddei</h1>
                <h2 id=titre>développeuse web</h2>
            </div>    
        </div>
        
        <div id="parcours">
            <h2>Parcours</h2>
            <div id="experiences">
                <div class="steps">
                    <p class="company">OnlineFormaPro - Stagiaire de la formation professionnelle</p> 
                    <p class="date">2020 / aujourd'hui</p>
                    <p>Formation pré-qualifiante et qualifiante Developpement Web et Web mobile.</p>
                </div>
                <div>
                    <p class="company">Renault Trucks - Opératrice</p>
                    <p class="date">2019/2020</p>
                    <p>Assemblage de divers ensemble destiné aux lignes moteurs.</p>
                </div>
                <div>
                    <p class="company">L'instant Bar Restaurant - Gérante</p>
                    <p class="date">2017/2019</p>
                    <p>Mise en place, serveuse, gestion administrative, gestion des stocks, entretien journalier des locaux.</p>
                </div>
                <div>
                    <p class="company">CAF de l'Ain - Conseillère offres de services</p>
                    <p class="date">2013/2016</p>
                    <p>Accueillir l'allocataire, le conseiller et l'orienter vers le CAF.FR.</p>
                </div>
                <div>
                    <p class="company">Int'air Medical - Opératrice</p>
                    <p class="date">2008/2011</p>
                    <p>Assemblage d'équipement médical destiné aux hopitaux et à l'hospitalisation à domicile.</p>
                </div>
                <div>
                    <p class="company"> BEP Vente Action Marchande</p>
                    <p class="date">2007</p>                    
                </div>
            </div>
        </div>

        <div id="soft-and-tech">
            <div id="technos">
                <h2>Technologies</h2>
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
                <h2>Softs Skills</h2>
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
        <!-- <div class="bloc-cv">
            <p>Version téléchargeable :</p>
            <a href="./doc/CV amanda taddei.pdf"><img src="./doc/cv-amanda-taddei .jpg"></img></a>
        </div>
         -->
    </main>
    <?php
    include("footer.php");
    ?>
</body>

</html>