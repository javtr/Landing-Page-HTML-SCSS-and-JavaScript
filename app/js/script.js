const btnMenu = document.querySelector("#btnMenu");
const header = document.querySelector(".header");
const fadeElements = document.querySelectorAll(".has-fade");
const body = document.querySelector("body");

const btnLangLogic = document.querySelector("#btnLang-logic");
const btnLangInd = document.querySelector("#btnLang-ind");
const btnLangBuy = document.querySelector("#btnLang-buy");
const btnLangCont = document.querySelector("#btnLang-cont");

if (btnMenu) {
  btnMenu.addEventListener("click", function () {
    if (header.classList.contains("open")) {
      header.classList.remove("open");

      body.classList.remove("noscroll");

      fadeElements.forEach((element) => {
        element.classList.remove("fade-in");
        element.classList.add("fade-out");
      });
    } else {
      header.classList.add("open");

      body.classList.add("noscroll");

      fadeElements.forEach((element) => {
        element.classList.remove("fade-out");
        element.classList.add("fade-in");
      });
    }
  });
}

//boton volver arriba
var botonUp = document.createElement("div");
botonUp.classList.add("scrollUp");
botonUp.classList.add("hide-for-all");

botonUp.innerHTML = `<a href="#">
  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50">
      <path
        fill="#FFF"
        d="M16 14.5a1 1 0 0 1-.71-.29L12 10.9l-3.3 3.18a1 1 0 0 1-1.41 0 1 1 0 0 1 0-1.42l4-3.86a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.42 1 1 0 0 1-.69.28z"
      />
    </svg>
  </a>`;

document.body.appendChild(botonUp);

window.addEventListener("scroll", (event) => {
  let scroll = this.scrollY;

  if (scroll > 500) {
    botonUp.classList.remove("hide-for-all");
    botonUp.classList.remove("fade-out-scrollUp");
    botonUp.classList.add("fade-in-scrollUp");
  } else {
    botonUp.classList.remove("fade-in-scrollUp");
    botonUp.classList.add("fade-out-scrollUp");
  }
});

//payment datetime

date = document.querySelector("#date");

if (date) {
  var d = new Date();
  date.innerHTML =  d.toLocaleDateString(); 
}