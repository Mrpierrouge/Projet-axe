const heure = document.querySelector("#heure");
const secondesElement = document.querySelector("#aiguille_seconde");
const heuresElement = document.querySelector("#petite_aiguille");
const minutesElement = document.querySelector("#grande_aiguille");

const heure2 = document.querySelector("#heure2");
const secondesElement2 = document.querySelector("#aiguille_seconde2");
const heuresElement2 = document.querySelector("#petite_aiguille2");
const minutesElement2 = document.querySelector("#grande_aiguille2");

setInterval(() => {
  const date = new Date();
  if (date.getHours() == 0 && date.getMinutes() == 0 && date.getSeconds() == 0) { //affiche Bonne ANNÉE a minuit pile
    body.insertAdjacentHTML("beforeend", "BONNE ANNÉE !")
  }
  heure.innerHTML =
    (date.getHours() < 10 ? `0${date.getHours()}` : date.getHours()) +
    ":" +
    (date.getMinutes() < 10 ? `0${date.getMinutes()}` : date.getMinutes()) +
    ":" +
    (date.getSeconds() < 10 ? `0${date.getSeconds()}` : date.getSeconds());

    heure2.innerHTML =
    (date.getHours() < 10 ? `0${date.getHours()}` : date.getHours()) +
    ":" +
    (date.getMinutes() < 10 ? `0${date.getMinutes()}` : date.getMinutes()) +
    ":" +
    (date.getSeconds() < 10 ? `0${date.getSeconds()}` : date.getSeconds());

  setAngle(date.getHours(), date.getMinutes(), date.getSeconds())
}, 1 * 1000);

const setAngle = (hours, minutes, seconds) => {
    let hourAngle = (hours/12) * 360
    hourAngle+= (minutes/60)*30

    heuresElement.style.transform = `rotate(${hourAngle}deg)`
    heuresElement2.style.transform = `rotate(${hourAngle}deg)`

    let minuteAngle = (minutes/60) * 360
    minutesElement.style.transform = `rotate(${minuteAngle}deg)`
    minutesElement2.style.transform = `rotate(${minuteAngle}deg)`

    let secondsAngle = (seconds * 6)
    secondesElement.style.transform = `rotate(${secondsAngle}deg)`
    secondesElement2.style.transform = `rotate(${secondsAngle}deg)`
}