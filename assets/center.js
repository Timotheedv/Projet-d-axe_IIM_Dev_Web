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



console.log(modalDelete[0]);
trash.forEach((e, i) => {
  e.addEventListener("click", function () {
    console.log("clique")
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

const tags = document.querySelectorAll(".tag");
const avatars = document.querySelectorAll(".avatar");
const clear = document.getElementById("clear");

actualite.addEventListener("click", function () {
  filterTag("Actualité Flash")
  // c'est comme si en php tu écrivais foreach($tags as $tag)
  tags.forEach(function(tag) {
    if (tag.style.color === "#ffd60a") {
      tag.style.color = "black";
    } else {
      tag.style.color = "#ffd60a";
    }
  })

  avatars.forEach( function(avatar) {
    if (avatar.style.borderColor === "#ffd60a") {
      avatar.style.borderColor = "white";
    } else {
      avatar.style.borderColor = "#ffd60a";
    }
  })

  

});

console.log(sport)
sport.addEventListener("click", function () {
  console.log('cc')
  filterTag("Sport")

  tags.forEach(function(tag) {
  if (tag.style.color === "red") {
    console.log('isred')
    tag.style.color = "black";
  } else {
    console.log('isnotred')
    tag.style.color = "red";
  }
  })
  
  avatars.forEach( function(avatar) {
  
  if (avatar.style.borderColor === "red") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "red";
  }
  })
});

console.log("apres")
politique.addEventListener("click", function () {
  filterTag("Politique")

  tags.forEach(function(tag) {

  if (tag.style.color === "#64b5f6") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#64b5f6";
  }
})

avatars.forEach( function(avatar) {

  if (avatar.style.borderColor === "#64b5f6") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#64b5f6";
  }
})
});

histoire.addEventListener("click", function () {
  filterTag("Histoire")

  tags.forEach(function(tag) {
    if (tag.style.color === "rgb(247, 127, 0)") {
      tag.style.color = "black";
    } else {
      tag.style.color = "rgb(247, 127, 0)";
    }
  })

  avatars.forEach(function(avatar){
    if (avatar.style.borderColor === "rgb(247, 127, 0)") {
      avatar.style.borderColor = "white";
    } else {
      avatar.style.borderColor = "rgb(247, 127, 0)";
    }
  })




});

cinema.addEventListener("click", function () {
  filterTag("Cinéma")

  tags.forEach(function(tag) {

  if (tag.style.color === "#b5838d") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#b5838d";
  }
})

avatars.forEach( function(avatar) {

  if (avatar.style.borderColor === "#b5838d") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#b5838d";
  }
})

});

evenements.addEventListener("click", function () {
  filterTag("Evenènements")

  tags.forEach(function(tag) {

  if (tag.style.color === "#bfd200") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#bfd200";
  }
  })

  avatars.forEach( function(avatar) {

  if (avatar.style.borderColor === "#bfd200") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#bfd200";
  }
  })
});

musique.addEventListener("click", function () {
  filterTag("Musique")
  tags.forEach(function(tag) {

  if (tag.style.color === "#ff1493") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#ff1493";
  }
  })
  
  avatars.forEach( function(avatar) {

  if (avatar.style.borderColor === "#ff1493") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#ff1493";
  }
  })
});

geopolitique.addEventListener("click", function () {
  filterTag("Géopolitique")

  tags.forEach(function(tag) {
  if (tag.style.color === "#d4a276") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#d4a276";
  }
})

avatars.forEach( function(avatar) {

  if (avatar.style.borderColor === "#d4a276") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#d4a276";
  }
})
});

sante.addEventListener("click", function () {
  filterTag("Santé")

  tags.forEach(function(tag) {

  if (tag.style.color === "white") {
    tag.style.color = "white";
  } else {
    tag.style.color = "white";
  }
})

avatars.forEach( function(avatar) {

  if (avatar.style.borderColor === "white") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "white";
  }
})
});

environnement.addEventListener("click", function () {
  filterTag("Environnement")

  tags.forEach(function(tag) {

  if (tag.style.color === "#adc178") {
    tag.style.color = "black";
  } else {
    tag.style.color = "#adc178";
  }

})

  avatars.forEach( function(avatar) {

  if (avatar.style.borderColor === "#adc178") {
    avatar.style.borderColor = "white";
  } else {
    avatar.style.borderColor = "#adc178";
  }
})
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

if(tagshot != null){
  tagshot.addEventListener("input", function (event) {
    localStorage.setItem("tagshot", event.target.value);
  });
}


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

if(selector != null){
  selector.addEventListener("input", function (event) {
    localStorage.setItem("selector", event.target.value);
  });
}


if(image != null){
  image.addEventListener("input", function (event) {
    localStorage.setItem("image", event.target.value);
  });
}





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

//Publication

const responsivePost = document.getElementById("responsive-btn");
const overlay = document.getElementById("overlay");
const closeModal = document.getElementById("close-modal");


if(responsivePost != null){
  responsivePost.addEventListener("click", function (){
    modalContainer.style.display ="block";
  });
}


if(overlay != null){
  overlay.addEventListener("click", function (){
    modalContainer.style.display ="none";
  
  });
}




if(overlay != null){
  closeModal.addEventListener("click", function (){
  modalContainer.style.display ="none";

});
}



//Liste tag responsive
const hashtagBtn = document.querySelector(".responsive-hashtag")
const respTags = document.querySelector(".responsive-tags")

if(hashtagBtn != null){
hashtagBtn.addEventListener("click", function() {
  if (respTags.style.display === "block") {
      respTags.style.display = "none"; 
  } else {
    respTags.style.display = "block"; 
  }
})};


if(respTags != null){
window.addEventListener('resize', function() {
  if(window.innerWidth >= 810) {
    respTags.style.display = "none"; 
  }
})}


//tags responsive


const actResp = document.getElementById("act-resp");
const spoResp = document.getElementById("spo-resp");
const polResp = document.getElementById("pol-resp");
const hisResp = document.getElementById("his-resp");
const cinResp = document.getElementById("cin-resp");
const eveResp = document.getElementById("eve-resp");
const musResp = document.getElementById("mus-resp");
const geoResp = document.getElementById("geo-resp");
const sanResp = document.getElementById("san-resp");
const envResp = document.getElementById("env-resp");

const resp = document.querySelectorAll("reponsive-tags")


actResp.addEventListener("click", function () {
  filterTag("Actualité Flash");

  tags.forEach(function(tag) {
    if (tag.style.color === "#ffd60a") {
      tag.style.color = "black";
    } else {
      tag.style.color = "#ffd60a";
    }
  });

  avatars.forEach(function(avatar) {
    if (avatar.style.borderColor === "#ffd60a") {
      avatar.style.borderColor = "white";
    } else {
      avatar.style.borderColor = "#ffd60a";
    }
  });
});

spoResp.addEventListener("click", function () {
  filterTag("Sport");

  tags.forEach(function(tag) {
    if (tag.style.color === "red") {
      tag.style.color = "black";
    } else {
      tag.style.color = "red";
    }
  });

  avatars.forEach(function(avatar) {
    if (avatar.style.borderColor === "red") {
      avatar.style.borderColor = "white";
    } else {
      avatar.style.borderColor = "red";
    }
  });
});

polResp.addEventListener("click", function () {
  filterTag("Politique");

  tags.forEach(function(tag) {
    if (tag.style.color === "#64b5f6") {
      tag.style.color = "black";
    } else {
      tag.style.color = "#64b5f6";
    }
  });

  avatars.forEach(function(avatar) {
    if (avatar.style.borderColor === "#64b5f6") {
      avatar.style.borderColor = "white";
    } else {
      avatar.style.borderColor = "#64b5f6";
    }
  });
});

hisResp.addEventListener("click", function () {
  filterTag("Histoire");

  tags.forEach(function(tag) {
    if (tag.style.color === "rgb(247, 127, 0)") {
      tag.style.color = "black";
    } else {
      tag.style.color = "rgb(247, 127, 0)";
    }
  });

  avatars.forEach(function(avatar) {
    if (avatar.style.borderColor === "rgb(247, 127, 0)") {
      avatar.style.borderColor = "white";
    } else {
      avatar.style.borderColor = "rgb(247, 127, 0)";
    }
  });
});

cinResp.addEventListener("click", function () {
  filterTag("Cinéma");

  tags.forEach(function(tag) {
    if (tag.style.color === "#b5838d") {
      tag.style.color = "black";
    } else {
      tag.style.color = "#b5838d";
    }
  });

  avatars.forEach(function(avatar) {
    if (avatar.style.borderColor === "#b5838d") {
      avatar.style.borderColor = "white";
    } else {
      avatar.style.borderColor = "#b5838d";
    }
  });
});

eveResp.addEventListener("click", function () {
  filterTag("Evenènements");

  tags.forEach(function(tag) {
    if (tag.style.color === "#bfd200") {
      tag.style.color = "black";
    } else {
      tag.style.color = "#bfd200";
    }
  });

  avatars.forEach(function(avatar) {
    if (avatar.style.borderColor === "#bfd200") {
      avatar.style.borderColor = "white";
    } else {
      avatar.style.borderColor = "#bfd200";
    }
  });
});

musResp.addEventListener("click", function () {
  filterTag("Musique");

  tags.forEach(function(tag) {
    if (tag.style.color === "#ff1493") {
      tag.style.color = "black";
    } else {
      tag.style.color = tag.style.color = "#ff1493";
    }
  });

  avatars.forEach(function(avatar) {
    if (avatar.style.borderColor === "#ff1493") {
      avatar.style.borderColor = "white";
    } else {
      avatar.style.borderColor = "#ff1493";
    }
  });
});

geoResp.addEventListener("click", function () {
  filterTag("Géopolitique");

  tags.forEach(function(tag) {
    if (tag.style.color === "#d4a276") {
      tag.style.color = "black";
    } else {
      tag.style.color = "#d4a276";
    }
  });

  avatars.forEach(function(avatar) {
    if (avatar.style.borderColor === "#d4a276") {
      avatar.style.borderColor = "white";
    } else {
      avatar.style.borderColor = "#d4a276";
    }
  });
});

sanResp.addEventListener("click", function () {
  filterTag("Santé");

  tags.forEach(function(tag) {
    if (tag.style.color === "white") {
      tag.style.color = "white";
    } else {
      tag.style.color = "white";
    }
  });

  avatars.forEach(function(avatar) {
    if (avatar.style.borderColor === "white") {
      avatar.style.borderColor = "white";
    } else {
      avatar.style.borderColor = "white";
    }
  });
});

envResp.addEventListener("click", function () {
  filterTag("Environnement");

  tags.forEach(function(tag) {
    if (tag.style.color === "#adc178") {
      tag.style.color = "black";
    } else {
      tag.style.color = "#adc178";
    }
  });

  avatars.forEach(function(avatar) {
    if (avatar.style.borderColor === "#adc178") {
      avatar.style.borderColor = "white";
    } else {
      avatar.style.borderColor = "#adc178";
    }
  });
});

//modal delete profil

const trashProfil = document.querySelectorAll(".trash-profil");
const modalDeleteProfil = document.querySelectorAll(".delete-container-profil");

console.log(modalDeleteProfil[0]);
trashProfil.forEach((e, i) => { //boucle qui se répète sur chaque élements de ma liste "trashProfil"
  e.addEventListener("click", function () {
    console.log("clique")
    if (modalDeleteProfil[i].classList.contains("delete-container-profil-active")) {
      modalDeleteProfil[i].classList.add("delete-container-profil-active");
      modalDeleteProfil[i].classList.remove("delete-container-profil-active");
    } else {
      modalDeleteProfil[i].classList.add("delete-container-profil-active");
    }
  });
});



