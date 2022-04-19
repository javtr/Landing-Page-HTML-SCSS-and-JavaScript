const principal = document.querySelector("#big-image");
const imgButton1 = document.querySelector("#item1");
const imgButton2 = document.querySelector("#item2");
const imgButton3 = document.querySelector("#item3");
const imgButton4 = document.querySelector("#item4");
const paybutton = document.querySelector("#play");

let speed = 2000;
let cont = 0;
let move = true;


let imgUrl = [
  {url: "../../images/chart-1080-720.png"},
  {url: "../../images/gifPruebas.gif"},
  {url: "../../images/chart-1080-720.png"},
  {url: "../../images/gifPruebas.gif"},
];


imgButton1.addEventListener("click", () => {
  principal.src = "../../images/chart-1080-720.png";
  move = false;
  paybutton.classList.remove("hide");

});

imgButton2.addEventListener("click", () => {
  principal.src = "../../images/gifPruebas.gif";
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

