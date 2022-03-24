carousel = document.querySelector(".buy__carousel-conten");
carouselImages = document.querySelectorAll(".buy__carousel-conten img");

img1 = document.querySelector(".buy__carousel--item1");
img2 = document.querySelector(".buy__carousel--item2");

let counter = 0;
let speed = 5000;
let move = true;

img1.addEventListener("click", () => {
  const size = carouselImages[0].clientWidth + 5;

  carousel.style.transition = "transform 0.4s ease-in-out";
  carousel.style.transform = "translateX(" + -size * 1 + "px)";
  counter = 1;
  move = false;
});

img2.addEventListener("click", () => {
    console.log("true");
    move = true;
    moveslider();

  });

moveslider = () => {
  if (move) {
    const size = carouselImages[0].clientWidth + 5;
    //   speed = 1000;

    carousel.style.transition = "transform 0.4s ease-in-out";
    counter++;
    carousel.style.transform = "translateX(" + -size * counter + "px)";

    setTimeout(moveslider, speed);
  }
};

carousel.addEventListener("transitionend", () => {
  const size = carouselImages[0].clientWidth + 5;
  //   speed = 1000;

  if (counter > 3) {
    counter = carouselImages.length - 4;
    carousel.style.transition = "transform 0.4s ease-in-out";
    carousel.style.transform = "translateX(" + -size * counter + "px)";
  }
});

if (move) {
  moveslider();
}
