const modalContainer = document.querySelector(".modal-container");
const modalTriggers = document.querySelectorAll(".modal-trigger");

modalTriggers.forEach(trigger => trigger.addEventListener("click", toggleModal))

function toggleModal(){
    modalContainer.classList.toggle("active")
}

/*modal-delete*/

const trash = document.querySelector(".trash-btn");
const modalDelete = document.querySelector(".delete-container");

console.log(trash)
console.log(trash.querySelector("trash-btn"))

trash.addEventListener("click", function (){


if
(modalDelete.classList.contains("delete-container-active")) {
 modalDelete.classList.add("delete-container-active")
 modalDelete.classList.remove("delete-container-active")
 } else {
    modalDelete.classList.add("delete-container-active");
 }


});


const noBtn = document.querySelector(".no-btn")

noBtn.addEventListener("click", function (){

    if
   (modalDelete.classList.contains("delete-container")) {
    modalDelete.classList.remove("delete-container-active")
    modalDelete.classList.add("delete-container")
    
   }else{
    modalContainer.classList.add("delete-container")
   }

})






/*modal inscris-toi !*/
const inscriptionContainer = document.querySelector(".inscription-container")


/*window.addEventListener("scroll", function(){
 inscriptionContainer.classList.add("inscription-container-active")
console.log("active")
})*/


 
inscriptionContainer.style.display = "none";
 
 console.log(document.scrollTop)
 
// Visibility set to "block" when scrolling
 
window.addEventListener("scroll", function(){
 
	if(window.scrollY > 300){
 
		inscriptionContainer.style.display = "block";
	}
	else{
 
		inscriptionContainer.style.display = "none";
	}
}, false);


