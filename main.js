console.log("page js");
//=============================PAGE ACCUEIL===========================


//======================== ECLATEMENT DU LOGO ======================

function logoBurst()
{
    let t1 = document.getElementById("back-triangle");
    let t2 = document.getElementById("middle-triangle");
    let t3 = document.getElementById("front-triangle");
    let d1 = document.getElementById("drill");
    let d2 = document.getElementById("little-drill");

    t1.style.top = "100px";
    t1.style.left = "150px";
    t1.style.transform = "rotate(595deg)"; 

    t2.style.top = "550px";
    t2.style.left = "450px";
    t2.style.transform = "rotate(580deg)"; 

    t3.style.top = "370px";
    t3.style.left = "1400px";
    t3.style.transform = "rotate(520deg)"; 

    d1.style.top = "330px";
    d1.style.left = "550px";

    d2.style.top = "50px";
    d2.style.left = "1000px";
}


function logo()
{
    let t1 = document.getElementById("back-triangle");
    let t2 = document.getElementById("middle-triangle");
    let t3 = document.getElementById("front-triangle");
    let d1 = document.getElementById("drill");
    let d2 = document.getElementById("little-drill");

    t1.style.top = "calc(31% - 100px)";
    t1.style.left = "calc(49.5% - 100px)";
    t1.style.transform = "rotate(0deg)"; 

    t2.style.top = "calc(32% - 100px)";
    t2.style.left = "calc(50.5% - 100px)";
    t2.style.transform = "rotate(0deg)"; 

    t3.style.top = "calc(31.5% - 100px)";
    t3.style.left = "calc(50% - 100px)";
    t3.style.transform = "rotate(0deg)"; 

    d1.style.top = "calc(33% - 50px)";
    d1.style.left = "calc(50% - 50px)";
    d1.style.transform = "rotate(0deg)"; 

    d2.style.top = "calc(32% - 25px)";
    d2.style.left = "calc(50.4% - 25px)";
    d2.style.transform = "rotate(0deg)"; 
}

//============================PROJETS================================

function openModal(id)
{
    document.getElementById(id).style.display = "block";
    document.getElementById('overlay').style.display = "block";
    document.getElementById("body").style.overflow = "hidden";
    console.log("2");  
}

function closeModal(id)
{
    document.getElementById(id).style.display = "none";
    document.getElementById("overlay").style.display = "none";
    document.getElementById("body").style = "";     
}
