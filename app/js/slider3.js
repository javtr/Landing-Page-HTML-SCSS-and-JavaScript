const principal3 = document.querySelector("#big-image3");
const imgButton13 = document.querySelector("#item13");
const imgButton23 = document.querySelector("#item23");
const imgButton33 = document.querySelector("#item33");
const imgButton43 = document.querySelector("#item43");
const paybutton3 = document.querySelector("#play3");

let speed3 = 2000;
let cont3 = 0;
let move3 = true;


let imgUrl3 = [
  {url: "../../images/chart-1080-720.png"},
  {url: "../../images/gifPruebas.gif"},
  {url: "../../images/chart-1080-720.png"},
  {url: "../../images/gifPruebas.gif"},
];


imgButton13.addEventListener("click", () => {
  principal3.src = "../../images/chart-1080-720.png";
  move3 = false;
  paybutton3.classList.remove("hide");

});

imgButton23.addEventListener("click", () => {
  principal3.src = "../../images/gifPruebas.gif";
  move3 = false;
  paybutton3.classList.remove("hide");
});


paybutton3.addEventListener("click", () => {
  move3 = true;
  cont3=0;
  paybutton3.classList.add("hide");
  console.log("click");
});



moveslider3 = () => {
  if (move3) {
  principal3.src = imgUrl3[cont3].url;
  cont3++;

  if(cont3==2){
    cont3=0;
  }

}
  setTimeout(moveslider3, speed3);
};


moveslider3();

