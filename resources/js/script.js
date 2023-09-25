// const btn = document.querySelector(".btn");
// function myFunction() {
//     btn.style.display = "Block" ;
//   }
// let iconsearch = document.querySelector(".iconsearch");
// iconsearch.addEventListener('click', ()=>{
//   generatebutton();
// });
// function generatebutton(){
  
//   let btn = document.createElement("btn");
//   btn.classList.add("btn btn-outline btnsearch");
//   btn.type.add("submit");
//   btn.innerHTML = "cerca";
//   document.getElementById("pulsante").appendChild(btn);
// };

const btn = document.querySelector("#btn");
const magnify = document.querySelector("#magnify");
const inputsearchbar = document.querySelector("#inputsearchbar");
 const searchbarcontainer = document.querySelector("#searchbarcontainer");

magnify.addEventListener('click', ()=>{
      searchbarcontainer.classList.toggle('active')
      btn.classList.toggle('d-none')
      setTimeout(function(){
        btn.classList.toggle('opacity-0')
      }, 500)
    });
