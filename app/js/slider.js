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
  {url: "../../images/of1.gif"},
  {url: "../../images/of2.gif"},
  {url: "../../images/of3.gif"},
  {url: "../../images/of4.gif"},
];


imgButton1.addEventListener("click", () => {
  principal.src = "../../images/of1.gif";
  move = false;
  paybutton.classList.remove("hide");

});

imgButton2.addEventListener("click", () => {
  principal.src = "../../images/of2.gif";
  move = false;
  paybutton.classList.remove("hide");
});

imgButton3.addEventListener("click", () => {
  principal.src = "../../images/of3.gif";
  move = false;
  paybutton.classList.remove("hide");
});

imgButton4.addEventListener("click", () => {
  principal.src = "../../images/of4.gif";
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

  if(cont==2){
    cont=0;
  }

}
  setTimeout(moveslider, speed);
};


moveslider();

