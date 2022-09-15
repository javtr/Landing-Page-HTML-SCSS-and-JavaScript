const principal = document.querySelector("#big-image");
const imgButton1 = document.querySelector("#item1");
const imgButton2 = document.querySelector("#item2");
const imgButton3 = document.querySelector("#item3");
const imgButton4 = document.querySelector("#item4");
const paybutton = document.querySelector("#play");

let speed = 10000;
let cont = 0;
let move = true;


let imgUrl = [
  {url: "../../images/pa1.gif"},
  {url: "../../images/pa2.gif"},
  {url: "../../images/landing_analitycsNew.gif"},
  {url: "../../images/pa4.jpg"},
];


imgButton1.addEventListener("click", () => {
  principal.src = "../../images/pa1.gif";
  move = false;
  paybutton.classList.remove("hide");

});

imgButton2.addEventListener("click", () => {
  principal.src = "../../images/pa2.gif";
  move = false;
  paybutton.classList.remove("hide");
});

imgButton3.addEventListener("click", () => {
  principal.src = "../../images/landing_analitycsNew.gif";
  move = false;
  paybutton.classList.remove("hide");
});

imgButton4.addEventListener("click", () => {
  principal.src = "../../images/pa4.jpg";
  move = false;
  paybutton.classList.remove("hide");
});




paybutton.addEventListener("click", () => {
  move = true;
  cont=0;
  paybutton.classList.add("hide");
  console.log("click");
});



moveslider = () => {
  if (move) {
  principal.src = imgUrl[cont].url;
  cont++;

  if(cont==4){
    cont=0;
  }

}
  setTimeout(moveslider, speed);
};


moveslider();

