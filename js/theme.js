let LogoBlanc = document.getElementById("logo-light");
let LogoNoir = document.getElementById("logo-dark");
let AjouteBlanc = document.getElementById("AjouteLight");
let AjouteNoir = document.getElementById("AjouteDark");

const ChangerTheme = () => {
    let darks = document.getElementsByClassName("theme_grp1");
    let lights = document.getElementsByClassName("theme_grp2");
    let sombre = darks;
    let clair = lights;
    if (themelight) {   
        for (let i = 0; i < sombre.length; i++) {
            darks[i].classList.add("theme_light");
            darks[i].classList.remove("theme_dark");
            
        } 
        for (let i = 0; i < clair.length; i++) {
            lights[i].classList.add("theme_dark"); 
            lights[i].classList.remove("theme_light");
            
        }   
        for (let i = 0; i < CorbeillesBlanches.length; i++) {
            CorbeillesBlanches[i].style.display = "none";
            CorbeillesBleues[i].style.display = "flex";
        }
        
        LogoBlanc.style.display = "none";
        LogoNoir.style.display = "block";
        if (AjouteNoir != null){
            AjouteNoir.style.display = "block";
            AjouteBlanc.style.display = "none";
        }

    }
    else {   
        for (let i = 0; i < darks.length; i++) {
            darks[i].classList.add("theme_dark");
            darks[i].classList.remove("theme_light");
            
            
        } 
        for (let i = 0; i < lights.length; i++) {
            lights[i].classList.add("theme_light");
            lights[i].classList.remove("theme_dark"); 
        }
        for (let i = 0; i < CorbeillesBlanches.length; i++) {
            CorbeillesBlanches[i].style.display = "flex";
            CorbeillesBleues[i].style.display = "none";
        }
        LogoNoir.style.display = "none";
        LogoBlanc.style.display = "block";
        if (AjouteBlanc != null){
            AjouteNoir.style.display = "none";
            AjouteBlanc.style.display = "block";
        }
    }
    themelight = !themelight;
}

let themelight = true;


let BouTonTheme = document.getElementsByClassName("BoutonTheme");

for (let i = 0; i < BouTonTheme.length; i++) {
    BouTonTheme[i].addEventListener("click", ChangerTheme);  
}