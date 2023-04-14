let tags = document.getElementsByClassName("tag");


const filtre = (i) => {

}

for (let i = 0; i < tags.length; i++) {
    tags[i].addEventListener("click", function(){filtre(i)});  
}
