let themelight = true;

const ChangerTheme = () => {
    if (themelight) {     
        body.classList.add("theme_dark");
        body.classList.remove("theme_light");
        bande.classList.add("theme_light");
        bande.classList.remove("theme_dark");
        bandeau.classList.add("theme_light");
        bandeau.classList.remove("theme_dark");
        liens.classList.add("theme_light");
        liens.classList.remove("theme_dark");
    }
    else {   
        body.classList.add("theme_light");
        body.classList.remove("theme_dark");
        bande.classList.remove("theme_light");
        bande.classList.add("theme_dark");
        bandeau.classList.remove("theme_light");
        bandeau.classList.add("theme_dark");
        liens.classList.remove("theme_light");
        liens.classList.add("theme_dark");
    }
    themelight = !themelight
}


let body = document.getElementById("body");
let bouton = document.getElementById("theme");
let bandeau = document.getElementById("bandeau");
let bande = document.getElementById("bande");
let liens = document.getElementById("liens");
bouton.addEventListener("click", ChangerTheme);