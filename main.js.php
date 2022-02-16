<?php header("Content-type: text/javascript"); ?>


//=============================PAGE ACCUEIL===========================


//======================== ECLATEMENT DU LOGO ======================

function logoBurst()
{
    let t1 = document.getElementById("back-triangle");
    let t2 = document.getElementById("middle-triangle");
    let t3 = document.getElementById("front-triangle");
    let d1 = document.getElementById("drill");
    let d2 = document.getElementById("little-drill");

    t1.style.top = "calc(-20% - 100px)";
    t1.style.left = "calc(-250% - 100px)";
    t1.style.transform = "rotate(595deg)"; 

    t2.style.top = "calc( 210% - 100px)";
    t2.style.left = "calc(-150% - 100px)";
    t2.style.transform = "rotate(580deg)"; 

    t3.style.top = "calc(140% - 100px)";
    t3.style.left = "calc(350% - 100px)";
    t3.style.transform = "rotate(520deg)"; 

    d1.style.top = "calc(110% - 100px)";
    d1.style.left = "calc(-30% - 100px)";

    d2.style.top = "calc(-25% - 100px)";
    d2.style.left = "calc(120% - 100px)";
}


function logo()
{
    let t1 = document.getElementById("back-triangle");
    let t2 = document.getElementById("middle-triangle");
    let t3 = document.getElementById("front-triangle");
    let d1 = document.getElementById("drill");
    let d2 = document.getElementById("little-drill");

    t1.style.top = "calc(38% - 100px)";
    t1.style.left = "calc(47% - 100px)";
    t1.style.transform = "rotate(0deg)"; 

    t2.style.top = "calc(41.5% - 100px)";
    t2.style.left = "calc(54% - 100px)";
    t2.style.transform = "rotate(0deg)"; 

    t3.style.top = "calc(40% - 100px)";
    t3.style.left = "calc(50% - 100px)";
    t3.style.transform = "rotate(0deg)"; 

    d1.style.top = "calc(45% - 50px)";
    d1.style.left = "calc(50% - 50px)";
    d1.style.transform = "rotate(0deg)"; 

    d2.style.top = "calc(41% - 25px)";
    d2.style.left = "calc(53.4% - 25px)";
    d2.style.transform = "rotate(0deg)"; 
}



































/* if (window.matchMedia("(max-width: 768px)").matches) 
{
    function showSoftSkills()
    {
        let e = document.getElementById("softskills");

        if(e.style.height == "calc(100% - 80px)")
        {
            e.style.bottom = "0px";
            e.style.height = "40px";
        }
        else
        {
            e.style.bottom = "0px";
            e.style.height = "calc(100% - 80px)";
        }
    }

    function showTechnos()
    {
        let e = document.getElementById("technos");

        if(e.style.height == "calc(100% - 80px)")
        {
            e.style.bottom = "40px";
            e.style.height = "40px";
        }
        else
        {
            e.style.bottom = "40px";
            e.style.height = "calc(100% - 80px)";
        }
    }

    function showExperiences()
    {
        let e = document.getElementById("experiences");
        let p = document.getElementById("parcours");

        if(e.style.height == "calc(100% - 80px)")
        {
            e.style.bottom = "80px";
            e.style.height = "40px";
            p.style.height = "120px";
        }
        else
        {
            e.style.bottom = "80";
            e.style.height = "calc(100% - 80px)";
            p.style.height = "1000px";
        }
    }

    function showMenu()
    {
        let e = document.getElementById("menu");

        if(e.style.display == "block")
        {
            e.style.display = "none";
        }
        else
        {
            e.style.display = "block";
        }
    }
} 

else 
{
    function showSoftSkills()
    {
        let e = document.getElementById("softskills");

        if(e.style.transform == "rotate(0deg)")
        {
            e.style.transform = "rotate(45deg)";
            e.style.left = "-170px";
            e.style.bottom = "55px";
            e.style.height = "40px";
        }
        else
        {
            e.style.transform = "rotate(0deg)";
            e.style.left = "0px";
            e.style.bottom = "0px";
            e.style.height = "calc(100% - 50px)";
        }
    }

    function showTechnos()
    {
        let e = document.getElementById("technos");

        if(e.style.transform == "rotate(0deg)")
        {
            e.style.transform = "rotate(45deg)";
            e.style.left = "-150px";
            e.style.bottom = "90px";
            e.style.height = "40px";
        }
        else
        {
            e.style.transform = "rotate(0deg)";
            e.style.left = "500px";
            e.style.bottom = "0px";
            e.style.height = "calc(100% - 50px)";
        }
    }

} */



//============================PROJETS================================

function openModal(id)
{
    if(document.getElementById(id).style.display == "block")
    {

        document.getElementById(id).style.display = "none";
        document.getElementById('overlay').style.display = "none";
    }

    else
    {
        document.getElementById(id).style.display = "block";
        document.getElementById('overlay').style.display = "block";
    }
    
}

function closeModal(id)
{
    document.getElementById(id).style.display = "none";
    document.getElementById("overlay").style.display = "none";
}

//============================MOODBOARD==============================

function moodsCreate()
{
    console.log("moodsCreate();");

    <?php
    $dir = "./img/img-moodboard";
    $files = scandir($dir);

    $js = "let moods = [";
    foreach($files as $file)
    {
        $f = strtolower(explode('.',$file)[0]);
        $e = strtolower(explode('.',$file)[1]);

        // --- CSS ---
        if($file != '.' && $file !='..' && is_file("$dir/$file") && ($e == 'jpg' || $e == 'jpeg'))
        {
            
            $js .= "\"$file\",";
        }

        // --- FICHIERS ---
        if(!file_exists("$dir/$f.png"))
        {
            if($file != '.' && $file !='..' && is_file("$dir/$file") && ($e == 'jpg' || $e == 'jpeg'))
            {
        
                $src = imagecreatefromjpeg("$dir/$file");
                $dst = imagecreatetruecolor(250,250);

                $imgW = imagesx($src);
                $imgH = imagesy($src);

                imagecopyresampled($dst,$src,0,0,0,0,249,249,$imgW,$imgH);

                imagepng($dst,"$dir/$f.png");
            }
        }
    }

    $js = substr($js,0,strlen($js)-1).'];';


    print($js);
    
    ?>

    moods.forEach(f =>
    {
        let id = f.split('.')[0];
        let e = document.createElement("div");
        e.id = "mood-" + id;
        e.className="mood";
        e.style.backgroundImage = "url(./img-moodboard/"+id+".png)";
        document.getElementById("moods").appendChild(e);

    });
}

