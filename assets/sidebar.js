
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





const burgerProfil= document.getElementById ("burger-profil")
const sidebarProfil = document.getElementById ("sidebar-profil")

console.log("buttons");

burgerProfil.addEventListener("click", function (){

   if
  (sidebarProfil.classList.contains("sidebar-profil-active")) {
   sidebarProfil.classList.add("sidebar-profil-active")
   sidebarProfil.classList.remove("sidebar-profil-active")
   } else {
      sidebarProfil.classList.add("sidebar-profil-active");
   }

})




  
