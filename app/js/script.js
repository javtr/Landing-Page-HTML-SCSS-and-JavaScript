const btnMenu = document.querySelector("#btnMenu");
const header = document.querySelector(".header");
const fadeElements = document.querySelectorAll(".has-fade");
const body = document.querySelector('body')
const btnLang = document.querySelector("#btnLang");





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


btnLang.addEventListener("click", function () {
  if (btnLang.classList.contains("header__lang-desktop-es")) {
    btnLang.classList.remove("header__lang-desktop-es");
    btnLang.classList.add("header__lang-desktop-en");

  } else {
    btnLang.classList.remove("header__lang-desktop-en");
    btnLang.classList.add("header__lang-desktop-es");
  }
});
