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

botonUp.innerHTML=
  `<a href="#"></a>`;

document.body.appendChild(botonUp);


window.addEventListener("scroll", (event) => {
  let scroll = this.scrollY;

  if (scroll > 500) {
    botonUp.classList.remove("hide-for-all");
    botonUp.classList.remove("fade-out-scrollUp");
    botonUp.classList.add("fade-in-scrollUp");

  }else{
    botonUp.classList.remove("fade-in-scrollUp");
    botonUp.classList.add("fade-out-scrollUp");
  }
});



