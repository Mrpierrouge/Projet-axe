let LogoBlanc = document.getElementById("logo-light");
let LogoNoir = document.getElementById("logo-dark");
let AjouteBlanc = document.getElementById("AjouteLight");
let AjouteNoir = document.getElementById("AjouteDark");

const Coucou = () =>{
    console.log
}
const updateColor = (themelight) => {
    console.log(themelight);
    let darks = document.getElementsByClassName("theme_grp1");
    let lights = document.getElementsByClassName("theme_grp2");
    if (themelight == "theme_dark") {
        console.log("testtrue");   
        for (let i = 0; i < darks.length; i++) {
            darks[i].classList.add("theme_light");
            darks[i].classList.remove("theme_dark");
            
        } 
        for (let i = 0; i < lights.length; i++) {
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
        console.log("testfalse");
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
    
    console.log(themestorage)
    
    console.log(localStorage)


}

let themestorage = localStorage.getItem("themestorage") ?? localStorage.setItem("themestorage", true);
updateColor(localStorage.getItem("themestorage"));
// updateColor(themelight)

const ChangerTheme = () => {
    themestorage = themestorage == "theme_dark" ? "theme_light" : "theme_dark";
    localStorage.setItem("themestorage", themestorage);
    console.log(localStorage.getItem("themestorage"));
    updateColor(localStorage.getItem("themestorage"));

}

let BouTonTheme = document.getElementsByClassName("BoutonTheme");

for (let i = 0; i < BouTonTheme.length; i++) {
    BouTonTheme[i].addEventListener("click", ChangerTheme);  
}