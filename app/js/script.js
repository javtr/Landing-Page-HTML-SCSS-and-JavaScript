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


// if (btnLangLogic) {
//   btnLangLogic.addEventListener("click", function () {


//     if (btnLangLogic.classList.contains("header__lang-desktop-es")) {
//       btnLangLogic.classList.remove("header__lang-desktop-es");
//       btnLangLogic.classList.add("header__lang-desktop-en");

//       location.href= "app/en/index.html";

//     } else {
//       btnLangLogic.classList.remove("header__lang-desktop-en");
//       btnLangLogic.classList.add("header__lang-desktop-es");

//       location.href= "/index.html";


//     }
//   });
// }

// if (btnLangInd) {
//   btnLangInd.addEventListener("click", function () {
//     console.log(location.href);

//     if (btnLangInd.classList.contains("header__lang-desktop-es")) {
//       btnLangInd.classList.remove("header__lang-desktop-es");
//       btnLangInd.classList.add("header__lang-desktop-en");
//     } else {
//       btnLangInd.classList.remove("header__lang-desktop-en");
//       btnLangInd.classList.add("header__lang-desktop-es");
//     }
//   });
// }
