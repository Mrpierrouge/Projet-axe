let tags = document.getElementsByClassName("tag");
let darks = document.getElementsByClassName("theme_grp1");
let lights = document.getElementsByClassName("theme_grp2");
let test = document.querySelector(".theme_dark");

const filtre = (i) => {
  test.style.backgroundColor = "red";
  alert(test);
};

for (let i = 0; i < tags.length; i++) {
  tags[i].addEventListener("click", function () {
    filtre(i);
  });
}
