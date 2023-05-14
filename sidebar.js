
/*Sidebar pour mobile*/

const hamburgerButton= document.querySelector (".burger")
const buttons = document.querySelector (".sidebar")

 
console.log("buttons");

hamburgerButton.addEventListener("click", function (){

   if
  (buttons.classList.contains("sidebar-active")) {
   buttons.classList.add("sidebar-active")
   buttons.classList.remove("sidebar-active")
   } else {
      buttons.classList.add("sidebar-active");
   }

})




  
