const principal3 = document.querySelector("#big-image3");
const imgButton13 = document.querySelector("#item13");
const imgButton23 = document.querySelector("#item23");
const imgButton33 = document.querySelector("#item33");
const imgButton43 = document.querySelector("#item43");
const paybutton3 = document.querySelector("#play3");

let speed3 = 10000;
let cont3 = 0;
let move3 = true;


let imgUrl3 = [
  {url: "../../images/landing_analitycsNew.gif"},
  {url: "../../images/an2.jpg"},
  {url: "../../images/an3.gif"},
  {url: "../../images/an4.jpg"},
];


imgButton13.addEventListener("click", () => {
  principal3.src = "../../images/landing_analitycsNew.gif";
  move3 = false;
  paybutton3.classList.remove("hide");

});

imgButton23.addEventListener("click", () => {
  principal3.src = "../../images/an2.jpg";
  move3 = false;
  paybutton3.classList.remove("hide");
});

imgButton33.addEventListener("click", () => {
  principal3.src = "../../images/an3.gif";
  move3 = false;
  paybutton3.classList.remove("hide");

});

imgButton43.addEventListener("click", () => {
  principal3.src = "../../images/an4.jpg";
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

  if(cont3==4){
    cont3=0;
  }

}
  setTimeout(moveslider3, speed3);
};


moveslider3();

