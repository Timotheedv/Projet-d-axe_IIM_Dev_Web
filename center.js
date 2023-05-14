const modalContainer = document.querySelector(".modal-container");
const modalTriggers = document.querySelectorAll(".modal-trigger");

modalTriggers.forEach((trigger) =>
  trigger.addEventListener("click", toggleModal)
);

function toggleModal() {
  modalContainer.classList.toggle("active");
}

/*modal-delete*/

const trash = document.querySelectorAll(".trash-btn");
const modalDelete = document.querySelectorAll(".delete-container");

// console.log(trash)
// console.log(trash.querySelector("trash-btn"))

console.log(modalDelete[0]);
trash.forEach((e, i) => {
  e.addEventListener("click", function () {
    if (modalDelete[i].classList.contains("delete-container-active")) {
      modalDelete[i].classList.add("delete-container-active");
      modalDelete[i].classList.remove("delete-container-active");
    } else {
      modalDelete[i].classList.add("delete-container-active");
    }
  });
});

const noBtn = document.querySelectorAll(".no-btn");
noBtn.forEach((x) => {
  x.addEventListener("click", () => {
    window.location.href = "index.php";
  });
});

/*Système de tags*/

// Sélectionnez les éléments
const actualite = document.getElementById("actualite-flash");
const sport = document.getElementById("sport");
const politique = document.getElementById("politique");
const histoire = document.getElementById("histoire");
const cinema = document.getElementById("cinema");
const evenements = document.getElementById("evenements");
const musique = document.getElementById("musique");
const geopolitique = document.getElementById("geopolitique");
const sante = document.getElementById("sante");
const environnement = document.getElementById("environnement");

const tag = document.querySelector(".tag");
const avatar = document.querySelector(".avatar");
const clear = document.getElementById("clear");

actualite.addEventListener("click", function () {
  filterTag("Actualité Flash")
  if (tag.style.color === "#ffd60a") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#ffd60a";
  }

  if (avatar.style.borderColor === "#ffd60a") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#ffd60a";
  }
});

sport.addEventListener("click", function () {
  filterTag("Sport")
   tag.style.color = "red";

   avatar.style.borderColor = "red"

});

politique.addEventListener("click", function () {
  filterTag("Politique")
  if (tag.style.color === "#64b5f6") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#64b5f6";
  }

  if (avatar.style.borderColor === "#64b5f6") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#64b5f6";
  }
});

histoire.addEventListener("click", function () {
  filterTag("Histoire")
  if (tag.style.color === "#f77f00") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#f77f00";
  }

  if (avatar.style.borderColor === "#f77f00") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#f77f00";
  }
});

cinema.addEventListener("click", function () {
  filterTag("Cinéma")
  if (tag.style.color === "#b5838d") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#b5838d";
  }

  if (avatar.style.borderColor === "#b5838d") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#b5838d";
  }
});

evenements.addEventListener("click", function () {
  filterTag("Evenènements")
  if (tag.style.color === "#bfd200") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#bfd200";
  }

  if (avatar.style.borderColor === "#bfd200") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#bfd200";
  }
});

musique.addEventListener("click", function () {
  filterTag("Musique")
  if (tag.style.color === "#ff1493") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#ff1493";
  }

  if (avatar.style.borderColor === "#ff1493") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#ff1493";
  }
});

geopolitique.addEventListener("click", function () {
  filterTag("Géopolitique")
  if (tag.style.color === "#d4a276") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#d4a276";
  }

  if (avatar.style.borderColor === "#d4a276") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#d4a276";
  }
});

sante.addEventListener("click", function () {
  filterTag("Santé")
  if (tag.style.color === "white") {
    tag.style.color = "white";
  } else {
    tag.style.color = "white";
  }

  if (avatar.style.borderColor === "white") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "white";
  }
});

environnement.addEventListener("click", function () {
  filterTag("Environnement")
  if (tag.style.color === "#adc178") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#adc178";
  }

  if (avatar.style.borderColor === "#adc178") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#adc178";
  }
});



/*modal inscris-toi !*/
const inscriptionContainer = document.querySelector(".inscription-container");

if (inscriptionContainer != null) {
  inscriptionContainer.style.display = "none";

  console.log(document.scrollTop);

  window.addEventListener(
    "scroll",
    function () {
      if (window.scrollY > 300) {
        inscriptionContainer.style.display = "block";
      } else {
        inscriptionContainer.style.display = "none";
      }
    },
    false
  );
}

const selector = document.getElementById("selector");
const tagshot = document.getElementById("tagshot");
const image = document.getElementById("image");

tagshot.addEventListener("input", function (event) {
  localStorage.setItem("tagshot", event.target.value);
});

window.addEventListener("load", function (event) {
  if (localStorage.getItem("tagshot")) {
    tagshot.value = localStorage.getItem("tagshot");
  }

  if (localStorage.getItem("selector")) {
    selector.value = localStorage.getItem("selector");
  }

  if (localStorage.getItem("image")) {
    image.value = localStorage.getItem("image");
  }
});

selector.addEventListener("input", function (event) {
  localStorage.setItem("selector", event.target.value);
});

image.addEventListener("input", function (event) {
  localStorage.setItem("image", event.target.value);
});

/*localStorage.setItem("tagshot", tagshot.value)*/
/*if(localStorage.getItem("tagshot")){


}else{
  setTagshot();
}});*/

/*selector = document.addEventListener("selector", function(){
localStorage.setItem("selector", selector.value)

});*/




/*Filtre*/

function filterTag(tag) {
  elements= document.getElementsByClassName("center-postcontent")
  for(var i = 0; i< elements.length; i++){
    if(elements.item(i).children[2].innerHTML.trim() !== tag){
          elements.item(i).style.display= "none"
    }else{
      elements.item(i).style.display= "block"
    }
    
  }

}

function resetfilter() {
  elements= document.getElementsByClassName("center-postcontent")
  for(var i = 0; i< elements.length; i++){

          elements.item(i).style.display= "block"

  }

}











//Responsive

/*const responsiveBtn = document.querySelectorAll(".responsive-post");

responsiveBtn.forEach((trigger) =>
  trigger.addEventListener("click", toggleModal)
);

function toggleModal() {
  modalContainer.classList.toggle("active");
}*/

const responsivePost = document.getElementById("responsive-btn");
const overlay = document.getElementById("overlay");
const closeModal = document.getElementById("close-modal");

responsivePost.addEventListener("click", function (){
  modalContainer.style.display ="block";

});

overlay.addEventListener("click", function (){
  modalContainer.style.display ="none";

});

closeModal.addEventListener("click", function (){
  modalContainer.style.display ="none";

});
  /*

  if
 (modalContainer.classList.contains("modal-container.active")) {
  modalContainer.classList.add("modal-container.active")
  modalContainer.classList.remove("modal-container.active")
  } else {
    modalContainer.classList.add("modal-container.active");
  }
})*/

