<?php header("Content-type: text/css"); ?>
/************************************** GENERAL **************************************/
*
{
    margin:0;
    padding:0;
}

html, body
{
    --light : #f4f4f9;
    --purple : #59095b;
    --yellow : #E0DC53; 
    --pink : #F924FF;
    --orange : #FCA75D;
    --text-color : #161712;

    width: 100%;
    height: 100%;
    background-color: var(--light)
}

header
{
    background: rgb(244,244,249);
    background: linear-gradient(0deg, rgba(244,244,249,0) 0%, rgba(244,244,249,0.9108018207282913) 18%, rgba(244,244,249,1) 36%);   
    position: fixed;
    top: 0px;
    width: 100%;
    height: 70px;
    font-family: 'Tenor Sans', sans-serif;
    z-index :100;
}

#burger 
{
    display:none;
}

main 
{
    width:100%;
    min-height: calc(100vh - 70px);
    font-family: 'poppins', sans-serif;
} 

footer 
{
    display:flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 70px;
    color:var(--text-color);
    background-color: var(--light);
    font-family: 'Tenor sans', cursive;
    border-top: 1px solid var(--purple);
}

footer>p
{
    padding:20px;
    width:500px;
    text-align:center;
}

h2
{
    font-family: 'Tenor Sans', sans-serif;
    font-size :6em;
    font-weight:100;
    color:var(--text-color);  
}

h3
{
    font-family: 'Tenor sans' sans-serif;
    font-size:25px;
}

.fab, .fas
{
    width: 100px;
    margin: 10px 0;
}

.btn-purple 
{
    background-color: var(--light-green);
    color:var(--text-color);
    width: 100px;
    border-radius: 3px;
    margin:0 20px 20px 20px;
    text-align:center;
}

.btn-purple:hover 
{
    background-color: var(--purple);
    color:var(--light);
}

/************************************** NAVIGATION **************************************/

nav
{
    font-family: 'Tenor sans', cursive;
    width: 100%;
    font-size:21px;
}

nav>ul
{
    display: flex;
    align-items: center;
    justify-content:space-around;
    width: 70%;
    height: 70px;
    margin:auto; 
}

nav>ul>li
{
    list-style-type: none;
    margin:5px 50px;
    padding: 15px 0;
    opacity: 1;
    animation: 2s slideUp ease forwards .5s;
    position: relative;   
}

#menu>ul>li>a>img
{
    width:30px;
    height:30px;
    margin-right:10px;
}

#menu>ul>li>a:first-child
{
    display:flex;
    align-items:center;
}

nav>ul>li>a
{
    text-decoration: none;
    color:var(--text-color);  
}

#menu li::before 
{
    content: '';
    height: 5px;
    width: 0px;
    left: 0;
    bottom: 10px;
    background: var(--yellow); 
    color:var(--purple);
    transition: all .5s ease;
    position: absolute;
}

#menu li:hover:before 
{
    width: 100%;
}

#menu a:hover
{
    color:var(--purple);
    font-weight:600;
}

/************************************** NOM ET TITRE **************************************/

.logo-name
{
    margin-top: 85px;
    width: 100%;
    height: calc(100vh - 50px);
}

h1,#name1, #name2
{
    position: absolute;
    font-family: 'Cookie', cursive;
    font-size: 10em;
    font-weight:normal;
    top:calc(100vh - 43%);
    text-align:center;
    width:800px;
}

h1
{
    color: var(--purple); 
    font-size:10em; 
    left:calc((100% - 800px)/2);
    text-shadow: 4px 0px var(--orange);
}

h1:hover
{
    position: absolute;
    font-family: 'Cookie', cursive;
    font-weight:normal;
    text-align:center;
    width:800px;
    animation: slide-right 1s ;
}

@keyframes slide-right 
{
  0% { left:calc((100% - 800px)/2) }
  50% { left:calc((100% - 785px)/2) }
  100% { left:calc((100% - 800px)/2) }
}

#name2
{
    color: var(--yellow);
    left:calc((100% - 810px)/2);
}

#titre
{
    position:relative;
    font-family: 'Poppins', sans-serif;
    letter-spacing: 0.43em ;
    text-align: center;
    font-size: 3em;
    font-style:normal;
    font-weight:500;
    top:calc(100vh - 35%);
    
}

/************** LOGO ***************/

#full-logo
{
    position: absolute;
    width: 200px;
    height: 200px;
    top: calc(40% - 100px);
    left: calc(50% - 100px);
}

.logo
{
    position:absolute;
    background:no-repeat center center;
}

#back-triangle
{
    background-image: url("./img/logo/SVG/back-triangle.svg");
    width: 200px;
    height: 200px;
    top:calc(38% - 100px);
    left:calc(47% - 100px);
    transition: 1s all;
}

#middle-triangle
{
    background-image:url("./img/logo/SVG/middle-triangle.svg");
    width: 200px;
    height: 200px;
    top:calc(41.5% - 100px);
    left:calc(54% - 100px);
    transition: 1.1s all;
}

#front-triangle
{
    background-image:url("./img/logo/SVG/front-triangle.svg");
    width: 200px;
    height: 200px;
    top:calc(40% - 100px);
    left:calc(50% - 100px);
    transition: 1.2s all;
}

#drill
{
    background-image:url("./img/logo/SVG/drill.svg");
    width: 100px;
    height: 100px;
    top:calc(45% - 50px);
    left:calc(50% - 50px);
    transition: 1.3s all;
}

#little-drill
{
    background-image:url("./img/logo/SVG/little-drill.svg");
    width: 70px;
    height: 70px;
    top:calc(41% - 25px);
    left:calc(53.4% - 25px);
    transition: 1.4s all;
}

/******** PARCOURS SOFTS SKILLS ET TECHNOS **********/

#parcours
{
    width: 70%;
    height: 100vh;
    margin:auto;
    display:flex;
    justify-content: center;
    align-items:center;
}

#parcours>h2
{
    width:50%;
    z-index:1;
    color:var(--purple);
    text-shadow : -4px 0px var(--yellow);
}

#experiences
{
    width: 50%;
    height: 100vh;
    padding-left: 40px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    border-left: 1px solid var(--orange);
}

#experiences p
{
    display:block;
}

.company
{

    font-family: 'Tenor sans', sans-serif;
    font-size:1.2em;
    font-weight:bold;
    color:var(--purple);
}

.date
{
    font-weight: bold;
    margin: 5px 0 ;
}

/************ TECHNOS ************/

#soft-and-tech
{
    width: 70%;
    margin: auto;
}

#technos    
{
    display:flex;
    flex-direction:column;
    justify-content:flex-start;
    align-items: flex-end;
}

#technos>h2
{
    z-index:1;
    color:var(--purple);
    margin:50px 0px;
    text-shadow: -4px 0px var(--orange);
}

#img
{
    display:flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 50px;
}

#img>img
{
    width:60px;
    height:60px;
    margin:30px;
}

/************ SOFTS SKILLS ************/

#softskills
{
    display:flex;
    flex-direction:column;
    justify-content:flex-start;
    margin-bottom: 50px;
}

#softskills>h2
{
    z-index:1;
    color:var(--purple);
    margin:50px 0px;
    text-shadow : -4px 0px var(--pink);
}


/************  FLEUR SOFTS SKILLS ************/

#flowerSoftSkills
{
    margin:auto;   
 
}

#flower
{
    width:400px;
    height:400px;
    background-image: url(./img/softs-skills/fleur.svg);
}

.softs
{
    position: relative;
}

#curieuse
{
    top:80%;
    left:80%;
}

#adaptable
{
    top:25%;
    left:92%;
}

#rigoureuse
{
    top:-12%;
    left:38%;
}

#dynamique
{
    top:61.5%;
    left:-3%;
}

#organisee
{
    top:6.5%;
    left:-13%;
}

#avatar
{
    position: relative;
    top:5%;
    left:35%;
    width:120px;
    height:120px;
    background-image : url(./img/avatar-amanda2.jpg);
    background-size:cover;
    border-radius:100%;
}

#avatar:hover
{
    background-image : url(./img/amanda.png);
}


/************************************** PAGE PROJETS **************************************/

#projectcontent
{
    width: 70%;
    padding-top: 100px;
    margin:auto;
}

#projectcontent>h2
{
    color:var(--purple);
    text-shadow : 3px 2px var(--orange);
    margin: 50px 0px;
}

#container
{
    width:70%;
    margin: 0px auto 50px;
    line-height:100%;
    border: 10px solid var(--yellow);
}   

#gridcontent
{    
    width:100%;
    display: grid;                                                      /*mise en place du grid*/
    grid-template-rows: 100px 100px 100px 100px 100px 100px 100px 100px 100px 100px ;    /*hauteur des lignes*/
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;                     /*largeur des colonnes*/                           
    grid-gap: 10px;                                                     /*espaces entre les éléments*/
    background-color:var(--yellow);
}

.celgrid
{    
    background-size: cover;
    -webkit-filter: grayscale(100%);
	filter: grayscale(100%);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}

.celgrid:hover
{
    -webkit-filter: grayscale(0);
	filter: grayscale(0);   
}

#cel1
{
    background-image: url(./img/projets/hackcess-apercu.png);
    grid-column-start: 1; 
    grid-column-end: 3; 
    grid-row-start: 1; 
    grid-row-end: 3;
}

#cel2
{
    background-image: url(./img/projets/travel-apercu.png);
    grid-column-start: 3; 
    grid-column-end: 5; 
    grid-row-start: 1; 
    grid-row-end: 3;
}

#cel3
{
    background-image: url(./img/projets/illustration-apercu.png);
    grid-column-start: 1; 
    grid-column-end: 3; 
    grid-row-start: 3; 
    grid-row-end: 5;
}

#cel4
{
    background-image: url(./img/projets/portfolio1-apercu.png);
    grid-column-start:3; 
    grid-column-end:5; 
    grid-row-start:3; 
    grid-row-end: 5;
}

#cel5
{
    background-image: url(./img/projets/nevinator-apercu.png);
    grid-column-start: 2; 
    grid-column-end: 4; 
    grid-row-start: 9; 
    grid-row-end: 11;
}

#cel6
{
    background-image: url(./img/projets/lfmr-apercu.png);
    grid-column-start: 3; 
    grid-column-end: 5; 
    grid-row-start: 5; 
    grid-row-end: 7;
}

#cel7
{
    background-image: url(./img/projets/logo-apercu.png);
    grid-column-start: 1; 
    grid-column-end: 3; 
    grid-row-start: 7; 
    grid-row-end: 9;
}

#cel8
{
    background-image: url(./img/projets/dsm-apercu.png);
    grid-column-start: 3; 
    grid-column-end: 5; 
    grid-row-start: 7; 
    grid-row-end: 9;
}

#cel9
{
    background-image: url(./img/projets/casse-brique-apercu.png);
    grid-column-start: 5; 
    grid-column-end: 7; 
    grid-row-start: 7; 
    grid-row-end: 9;
}

#cel10
{
    background-image: url(./img/projets/logo-playstation-apercu.png);
    grid-column-start: 1; 
    grid-column-end: 3; 
    grid-row-start: 5; 
    grid-row-end: 7;
}

#cel11
{
    background-image: url(./img/projets/circus-apercu.png);
    grid-column-start: 5; 
    grid-column-end: 7; 
    grid-row-start: 5; 
    grid-row-end: 7;
}


#cel12
{
    background-image: url(./img/projets/portfolio2-apercu.png);
    grid-column-start: 4; 
    grid-column-end: 6; 
    grid-row-start: 9; 
    grid-row-end: 11;
}

#cel13
{
    background-image: url(./img/projets/chocolat-apercu.png);
    grid-column-start: 5; 
    grid-column-end: 7; 
    grid-row-start: 1; 
    grid-row-end: 3;
}

#cel14
{
    background-image: url(./img/projets/courriers-apercu.png);
    grid-column-start: 5; 
    grid-column-end: 7; 
    grid-row-start: 3; 
    grid-row-end: 5;
}

#overlay 
{	
    position:fixed;
    top: 50px; 
    left: 0;
    bottom:0;
    right:0;
    background-color: rgba(252, 167, 93, 0.5);
    z-index: 4;
    display:none;
}

.modal 
{
    width : 290px;
    padding:20px;
    text-align: center;
    color:var(--text-color);
    background-color:var(--light); 
    border:5px solid var(--light-green);
    position: fixed;
    top: 50%; 
    left: 50%;
    transform:translate(-50%,-50%);
    z-index: 5;
    display:none;
}

.modal h3
{
    margin:20px 0px;
}

.modal p
{
    margin:0;
    margin-bottom: 50px;
}

.close
{
    font-size: 20px;
    line-height: 30px;
    vertical-align: middle;
    text-align: center;
    color:var(--text-color);
    width: 30px;
    height: 30px;
    border:5px solid var(--light-green);
    background-color: var(--light);
    border-radius: 20px;
    position: absolute;
    right:-15px;
    top: -15px;
    margin: 0;
    cursor: pointer;
}

.close:hover
{
    background-color: var(--purple);
    color:var(--light);
}

/************************************** CONTACT **************************************/

#section-contact
{
    display: flex;
    justify-content: center;
    width: 100%;
    height:calc(100vh - 150px);
    color: var(--text-color); 
    background-repeat:no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    overflow-y : scroll;
    z-index:0;
}

form 
{
    width:500px;
    margin:auto;
}

form>button 
{
    margin:0 !important;
    padding:5px;
}

form input,textarea
{
    width:100%;
    padding: 10px;
    margin-bottom:20px;
} 


