const principal2 = document.querySelector("#big-image2");
const imgButton12 = document.querySelector("#item12");
const imgButton22 = document.querySelector("#item22");
const imgButton32 = document.querySelector("#item32");
const imgButton42 = document.querySelector("#item42");
const paybutton2 = document.querySelector("#play2");

let speed2 = 2000;
let cont2 = 0;
let move2 = true;


let imgUrl2 = [
  {url: "../../images/chart-1080-720.png"},
  {url: "../../images/gifPruebas.gif"},
  {url: "../../images/chart-1080-720.png"},
  {url: "../../images/gifPruebas.gif"},
];


imgButton12.addEventListener("click", () => {
  principal2.src = "../../images/chart-1080-720.png";
  move2 = false;
  paybutton2.classList.remove("hide");

});

imgButton22.addEventListener("click", () => {
  principal2.src = "../../images/gifPruebas.gif";
  move2 = false;
  paybutton2.classList.remove("hide");
});


paybutton2.addEventListener("click", () => {
  move2 = true;
  cont2=0;
  paybutton2.classList.add("hide");
  console.log("click");
});



move2slider2 = () => {
  if (move2) {
  principal2.src = imgUrl2[cont2].url;
  cont2++;

  if(cont2==2){
    cont2=0;
  }

}
  setTimeout(move2slider2, speed2);
};


move2slider2();

