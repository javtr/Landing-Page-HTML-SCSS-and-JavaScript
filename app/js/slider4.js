const principal4 = document.querySelector("#big-image4");
const imgButton14 = document.querySelector("#item14");
const imgButton24 = document.querySelector("#item24");
const imgButton34 = document.querySelector("#item34");
const imgButton44 = document.querySelector("#item44");
const paybutton4 = document.querySelector("#play4");

let speed4 = 10000;
let cont4 = 0;
let move4 = true;


let imgUrl4 = [
  {url: "../../images/vp1.png"},
  {url: "../../images/vp2.png"},
  {url: "../../images/vp3.png"},
  {url: "../../images/vp4.png"},
];


imgButton14.addEventListener("click", () => {
  principal4.src = "../../images/vp1.png";
  move4 = false;
  paybutton4.classList.remove("hide");

});

imgButton24.addEventListener("click", () => {
  principal4.src = "../../images/vp2.png";
  move4 = false;
  paybutton4.classList.remove("hide");
});

imgButton34.addEventListener("click", () => {
  principal4.src = "../../images/vp3.png";
  move4 = false;
  paybutton4.classList.remove("hide");

});

imgButton44.addEventListener("click", () => {
  principal4.src = "../../images/vp4.png";
  move4 = false;
  paybutton4.classList.remove("hide");
});






paybutton4.addEventListener("click", () => {
  move4 = true;
  cont4=0;
  paybutton4.classList.add("hide");
  console.log("click");
});



moveslider4 = () => {
  if (move4) {
  principal4.src = imgUrl4[cont4].url;
  cont4++;

  if(cont4==4){
    cont4=0;
  }

}
  setTimeout(moveslider4, speed4);
};


moveslider4();

