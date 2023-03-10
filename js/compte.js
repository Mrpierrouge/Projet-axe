////theme de couleur



const ChangerTheme = () => {
    if (themelight) {     
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
            CorbeillesBlanches[i].style.display = "none";
            CorbeillesBleues[i].style.display = "flex";
        }
        LogoBlanc.style.display = "none";
        LogoNoir.style.display = "block";
        AjouteNoir.style.display = "block";
        AjouteBlanc.style.display = "none";
    }
    else {   
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

let LiensMenu = document.getElementById("liens_menu");
let LogoBlanc = document.getElementById("logo-light");
let LogoNoir = document.getElementById("logo-dark");
let AjouteBlanc = document.getElementById("AjouteLight");
let AjouteNoir = document.getElementById("AjouteDark");
let body = document.getElementById("body");
let bouton_poster = document.getElementById("bouton_poster");
let bande = document.getElementById("bande");
let liens = document.getElementById("liens");
let postes = document.getElementsByClassName("post");


let BouTonTheme = document.getElementsByClassName("BoutonTheme");
for (let i = 0; i < BouTonTheme.length; i++) {
    BouTonTheme[i].addEventListener("click", ChangerTheme);  
}



////Popup en scrollant




const ScrollConnexion = () => {
    if (!EstConnect??) {
        if (AScroll > 100) {
            popup_connexion.style.opacity = 1;
            popup_connexion.style.display = "flex";
            zone_postes.style.filter = "blur(15px)";
            ZoneTags.style.filter = "blur(15px)";
        }
        AScroll = AScroll + 1;
    }
    
}
const StopPopUp = () => {
    popup_connexion.style.opacity = 0;
    popup_connexion.style.display = "none";
    zone_postes.style.filter = "blur(0px)";
    ZoneTags.style.filter = "blur(0px)";
    AScroll = 0;
    EstConnect?? = true;
}

let EstConnect?? = false;
let AScroll = 0;

let bouton_connecte = document.getElementById("connecte");
let popup_connexion = document.getElementById("popup_connexion");
let zone_postes = document.getElementById("zone_posts");

document.addEventListener("scroll",ScrollConnexion);
bouton_connecte.addEventListener("click",StopPopUp);




///// Popup en Appuyant sur le bouton flottant





const Poster = () =>{
    PopUpPoster.style.display = "flex";
    PopUpPoster.style.opacity = 1;
}
const StopPoster = () =>{
    PopUpPoster.style.display = "none";
    PopUpPoster.style.opacity = 0;
}

document.getElementById("bouton_poster").addEventListener("click", Poster);
document.getElementById("StopPoster").addEventListener("click", StopPoster);



///////Menus d??roulants apparaissant sur les cot??s





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

MenuDeroulant = document.getElementById("menu-deroulant");

let ZoneTags = document.getElementById("zone_tags");
let zone_parametres = document.getElementById("zone_parametres");

document.getElementById("menu-hamburger").addEventListener("click", DerouleMenu);
document.getElementById("StopMenu").addEventListener("click", DerouleMenu);
document.getElementById("LienParametres").addEventListener("click", DerouleParametres);




///// Supression de posts



const CorbeillePoste = (i) => {
    PopUpSupprime.style.display = "flex";
    document.getElementById("BoutonSupprime").addEventListener("click", function(){SupprimePoste(i)});
    
}
const SupprimePoste = (i) => {
    PopUpSupprime.style.display = "none";
    postes[i].style.display = "none";
}

let PopUpSupprime = document.getElementById("PopUpSupprime");
let CorbeillesBlanches = document.getElementsByClassName("CorbeilleBlanc");
let CorbeillesBleues = document.getElementsByClassName("CorbeilleBleu");

for (let i = 0; i < postes.length; i++) {
    CorbeillesBlanches[i].addEventListener("click", function(){CorbeillePoste(i)});
    CorbeillesBleues[i].addEventListener("click", function(){CorbeillePoste(i)});
}
