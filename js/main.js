            //// appel du document


//// pour la popup en scrollant

let bouton_connecte = document.getElementById("connecte");
let popup_connexion = document.getElementById("popup_connexion");
let zone_postes = document.getElementById("zone_posts");
let popups = document.getElementsByClassName("popup");
let boutons_stop_popups = document.getElementsByClassName("StopPopUp");

//// pour menu déroulant

let MenuDeroulant = document.getElementById("menu-deroulant");
let ZoneTags = document.getElementById("zone_tags");
let zone_parametres = document.getElementById("zone_parametres");


//// appel des éléments de postes

let postes = document.getElementsByClassName("post");
let CorbeillesBlanches = document.getElementsByClassName("CorbeilleBlanc");
let CorbeillesBleues = document.getElementsByClassName("CorbeilleBleu");

let PopUpSupprime = document.getElementsByClassName("PopUpSupprime");



            ////appel des différentes fonctions




//// Stop popups


const StopPopUp = () => {
    for (let i = 0; i < popups.length; i++) {
        popups[i].style.display = "none";

    }
}




////Popup en scrollant

for (let i = 0; i < boutons_stop_popups.length; i++) {
    boutons_stop_popups[i].addEventListener("click",StopPopUp);
    
}



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
    PopUpSupprime[i].style.display = "flex";
}



for (let i = 0; i < CorbeillesBlanches.length; i++) {
    CorbeillesBlanches[i].addEventListener("click", function(){CorbeillePoste(i)});
    CorbeillesBleues[i].addEventListener("click", function(){CorbeillePoste(i)});
}
