<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    <link rel="stylesheet" href="components\style.css"/>       
    <link rel="stylesheet" href="assets\components\style.css"/> 

    <title>Document</title>
</head>
<body>

<?php require_once "connexion.php" ?>

<div class="sidebar">

<div class="sidebar-btn">
      <div class="sidebar-btn1">
            <a href="assets/profil.php">
                  <button class="sidebar-btn1">Profil
                  </button>
            </a>
      </div>
      <div class="sidebar-btn2">
            <a href="login.php">
                  <button class="sidebar-btn2">Se connecter
                  </button>
            </a>
      </div>
      <div class="sidebar-btn3">
            <a href="inscription.php">
                  <button class="sidebar-btn3">Création Compte
                  </button>
            </a>
      </div>
</div>

</div>
  <!--
 <div class="main-container1">
     <form>
      <div class="row align-items-center">
        <div class="row flex-column align-items-center">
             <div class="col col-sm-2">            
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
             <div class="col-sm-2">
                <label for="password">Mot de Passe</label>
                  <input type="text" class="form-control" placeholder="Mot de Passe">
              </div>
              <div class="btn">
                <button type="button" class="btn btn-primary btn-sm">Se connecter</button>
              </div>
              <div>
                <nav> <a class="creation-compte" href="">Création compte</a></nav>
              </div>
         </div>
       </div> 
     </form>
  </div>      
-->

<div class="inblock">
<div class="center-btn">
      <img class="tagshots" id="tagshot" src="assets\Images\TagShots (2).png" alt="">
</div>
<div class="insize" id="square">
<form action="login.php" method="POST">
  <div class="form-row align-items-center">
    <div class="col-sm-10 my-1">
      <label class="sr-only" for="inlineFormInputName">Pseudo</label>
      <input type="text" class="form-control" name="pseudo" id="pseudo"  placeholder="Jane Doe">
    </div>

    <div class="col-sm-10" >
      <label for="inputPassword6">Password</label>
      <input type="password" name="password" id="password" class="form-control mx-sm-0" aria-describedby="passwordHelpInline" placeholder="Password">

    <div class="col-auto my-1">
      <button type="submit" name="login-btn" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
 </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script></body>


  