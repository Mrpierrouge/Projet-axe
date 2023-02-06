let themelight = true;

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
        MenuDeroulant.classList.remove("theme_dark");
        MenuDeroulant.classList.add("theme_light");
        for (let i = 0; i < postes.length; i++) {
            postes[i].classList.add("theme_light");
            postes[i].classList.remove("theme_dark");
        }
        LogoBlanc.style.display = "none";
        LogoNoir.style.display = "block";
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
        MenuDeroulant.classList.add("theme_dark");
        MenuDeroulant.classList.remove("theme_light");
        for (let i = 0; i < postes.length; i++) {
            postes[i].classList.remove("theme_light");
            postes[i].classList.add("theme_dark");
        }
        LogoNoir.style.display = "none";
        LogoBlanc.style.display = "block";
    }
    themelight = !themelight;
}

let LogoBlanc = document.getElementById("logo-light");
let LogoNoir = document.getElementById("logo-dark");
let body = document.getElementById("body");
let bouton = document.getElementById("theme");
let bouton_poster = document.getElementById("bouton_poster");
let bande = document.getElementById("bande");
let liens = document.getElementById("liens");
let postes = document.getElementsByClassName("post");
// console.log(postes);
bouton.addEventListener("click", ChangerTheme);




let EstConnecté = false;
let AScroll = 0;

const ScrollConnexion = () => {
    if (!EstConnecté) {
        if (AScroll > 100) {
            popup_connexion.style.opacity = 1;
            popup_connexion.style.display = "flex";
            zone_postes.style.filter = "blur(15px)";
        }
        AScroll = AScroll + 1;
    }
    
}
const StopPopUp = () => {
    popup_connexion.style.opacity = 0;
    popup_connexion.style.display = "none";
    zone_postes.style.filter = "blur(0px)";
    AScroll = 0;
    EstConnecté = true;
}
let bouton_connecte = document.getElementById("connecte");
let popup_connexion = document.getElementById("popup_connexion");
let zone_postes = document.getElementById("zone_posts");
document.addEventListener("scroll",ScrollConnexion);
bouton_connecte.addEventListener("click",StopPopUp);

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


const DerouleMenu = () => {
    if (MenuEstOuvert) {
        zone_postes.style.filter = "blur(5px)";
        bande.style.filter = "blur(5px)";
        MenuDeroulant.style.transform = "translateX(0)";
       
    }
    else{
        zone_postes.style.filter = "blur(0px)";
        bande.style.filter = "blur(0px)";
        MenuDeroulant.style.transform = "translateX(-100vw)";
    }
    MenuEstOuvert = !MenuEstOuvert;
}

MenuEstOuvert = true;
MenuDeroulant = document.getElementById("menu-deroulant");
document.getElementById("menu-hamburger").addEventListener("click", DerouleMenu);
document.getElementById("StopMenu").addEventListener("click", DerouleMenu);