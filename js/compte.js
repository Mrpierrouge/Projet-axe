            //// appel du document

//// pour theme de couleur

let LiensMenu = document.getElementById("liens_menu");
let LogoBlanc = document.getElementById("logo-light");
let LogoNoir = document.getElementById("logo-dark");
let AjouteBlanc = document.getElementById("AjouteLight");
let AjouteNoir = document.getElementById("AjouteDark");
let body = document.getElementById("body");
let bouton_poster = document.getElementById("bouton_poster");
let bande = document.getElementById("bande");
let liens = document.getElementById("liens");


//// pour la popup en scrollant


let zone_postes = document.getElementById("zone_posts");
let popups = document.getElementsByClassName("popup");
let boutons_stop_popups = document.getElementsByClassName("StopPopUp");

//// pour menu déroulant

let MenuDeroulant = document.getElementById("menu-deroulant");

let zone_parametres = document.getElementById("zone_parametres");


//// appel des éléments de postes

let postes = document.getElementsByClassName("post");
let CorbeillesBlanches = document.getElementsByClassName("CorbeilleBlanc");
let CorbeillesBleues = document.getElementsByClassName("CorbeilleBleu");

let PopUpSupprime = document.getElementById("PopUpSupprime");



            ////appel des différentes fonctions

////theme de couleur




const ChangerTheme = () => {
    // let darks = document.getElementsByClassName("theme_dark");
    // let lights = document.getElementsByClassName("theme_light");
    // let sombre = darks;
    // let clair = lights;
    if (themelight) {   
    //     for (let i = 0; i < sombre.length; i++) {
    //         sombre[i].classList.add("theme_light");
    //         sombre[i].classList.remove("theme_dark");
            
    //     } 
    //     for (let i = 0; i < clair.length; i++) {
    //         clair[i].classList.remove("theme_light");
    //         clair[i].classList.add("theme_dark"); 
    //     }   
        // darks.classList.add("theme_light");
        // darks.classList.remove("theme_dark");
        // lights.classList.remove("theme_light");
        // lights.classList.add("theme_dark");
        body.classList.add("theme_dark");
        body.classList.remove("theme_light");
        bande.classList.add("theme_light");
        bande.classList.remove("theme_dark");
        bouton_poster.classList.add("theme_light");
        bouton_poster.classList.remove("theme_dark");
        liens.classList.add("theme_light");
        liens.classList.remove("theme_dark");
        LiensMenu.classList.add("theme_light");
        LiensMenu.classList.remove("theme_dark");
        MenuDeroulant.classList.remove("theme_dark");
        MenuDeroulant.classList.add("theme_light");
        zone_parametres.classList.add("theme_light");
        zone_parametres.classList.remove("theme_dark");
        for (let i = 0; i < postes.length; i++) {
            postes[i].classList.add("theme_light");
            postes[i].classList.remove("theme_dark");
        }
        for (let i = 0; i < CorbeillesBlanches.length; i++) {
            CorbeillesBlanches[i].style.display = "none";
            CorbeillesBleues[i].style.display = "flex";
        }
        
        LogoBlanc.style.display = "none";
        LogoNoir.style.display = "block";
        AjouteNoir.style.display = "block";
        AjouteBlanc.style.display = "none";
    }
    else {   
        // for (let i = 0; i < darks.length; i++) {
        //     darks[i].classList.remove("theme_light");
        //     darks[i].classList.add("theme_dark");
            
        // } 
        // for (let i = 0; i < lights.length; i++) {
        //     lights[i].classList.add("theme_light");
        //     lights[i].classList.remove("theme_dark"); 
        // }
        body.classList.add("theme_light");
        body.classList.remove("theme_dark");
        bande.classList.remove("theme_light");
        bande.classList.add("theme_dark");
        bouton_poster.classList.remove("theme_light");
        bouton_poster.classList.add("theme_dark");
        liens.classList.remove("theme_light");
        liens.classList.add("theme_dark");
        LiensMenu.classList.remove("theme_light");
        LiensMenu.classList.add("theme_dark");
        MenuDeroulant.classList.add("theme_dark");
        MenuDeroulant.classList.remove("theme_light");
        zone_parametres.classList.remove("theme_light");
        zone_parametres.classList.add("theme_dark");
        for (let i = 0; i < postes.length; i++) {
            postes[i].classList.remove("theme_light");
            postes[i].classList.add("theme_dark");

        }
        for (let i = 0; i < CorbeillesBlanches.length; i++) {
            CorbeillesBlanches[i].style.display = "flex";
            CorbeillesBleues[i].style.display = "none";
        }
        LogoNoir.style.display = "none";
        LogoBlanc.style.display = "block";
        AjouteNoir.style.display = "none";
        AjouteBlanc.style.display = "block";
    }
    themelight = !themelight;
}

let themelight = true;


let BouTonTheme = document.getElementsByClassName("BoutonTheme");
for (let i = 0; i < BouTonTheme.length; i++) {
    BouTonTheme[i].addEventListener("click", ChangerTheme);  
}


//// Stop popups


const StopPopUp = () => {
    for (let i = 0; i < popups.length; i++) {
        popups[i].style.display = "none";

    }
}

for (let i = 0; i < boutons_stop_popups.length; i++) {
    boutons_stop_popups[i].addEventListener("click",StopPopUp);
}



///// Popup en Appuyant sur le bouton flottant






///////Menus déroulants apparaissant sur les cotés




const DerouleMenu = () => {
    if (MenuEstOuvert) {
        zone_postes.style.filter = "blur(5px)";
        bande.style.filter = "blur(5px)";
        ZoneTags.style.filter = "blur(5px)";
        MenuDeroulant.style.transform = "translateX(0)";
       
    }
    else{
        zone_postes.style.filter = "blur(0px)";
        bande.style.filter = "blur(0px)";
        ZoneTags.style.filter = "blur(0px)";
        MenuDeroulant.style.transform = "translateX(-100vw)";
    }
    MenuEstOuvert = !MenuEstOuvert;
}
const DerouleParametres = () => {
    if (ParametresEstOuvert) {
        zone_parametres.style.transform = "translateX(0)";
    }
    else{
        zone_parametres.style.transform = "translateX(100vw)";
    }
    ParametresEstOuvert = !ParametresEstOuvert;
}

ParametresEstOuvert = true;
MenuEstOuvert = true;



document.getElementById("menu-hamburger").addEventListener("click", DerouleMenu);
document.getElementById("StopMenu").addEventListener("click", DerouleMenu);
document.getElementById("LienParametres").addEventListener("click", DerouleParametres);



///// Supression de posts



const CorbeillePoste = (i) => {
    PopUpSupprime.style.display = "flex";
}



for (let i = 0; i < CorbeillesBlanches.length; i++) {
    CorbeillesBlanches[i].addEventListener("click", function(){CorbeillePoste(i)});
    CorbeillesBleues[i].addEventListener("click", function(){CorbeillePoste(i)});
}
