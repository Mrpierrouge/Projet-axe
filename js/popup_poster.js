const Poster = () => {
  PopUpPoster.style.display = "flex";
  PopUpPoster.style.opacity = 1;
};
const StopPoster = () => {
  PopUpPoster.style.display = "none";
  PopUpPoster.style.opacity = 0;
};

document.getElementById("bouton_poster").addEventListener("click", Poster);
