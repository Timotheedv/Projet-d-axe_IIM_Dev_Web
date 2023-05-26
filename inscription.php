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




<div class="inblock">
<div class="center-btn">
      <img class="tagshots" id="tagshot" src="assets\Images\TagShots (2).png" alt="">
</div>
<div class="insize" id="square">
<form action="signup.php" method="POST">
  <div class="form-row align-items-center">
    <div class="col-sm-10 my-1">
      <label class="sr-only" for="inlineFormInputName">Pseudo</label>
      <input type="text" class="form-control" name="pseudo" id="pseudo"  placeholder="Jane Doe">
    </div>
    <div class="col-sm-10 my-1">
      <label class="sr-only" for="inlineFormInputGroupUsername">Mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="form-control"  name="mail" id="mail" placeholder="Username">
      </div>
    </div>
    <div class="col-sm-8 col-sm-10" >
      <label for="inputPassword6">Password</label>
      <input type="password" name="password" id="password" class="form-control mx-sm-0" aria-describedby="passwordHelpInline" placeholder="Password">
      
    </div>
    <div class="col-sm-10 my-1">
    <label for="image">Insérer image</label>   <br>  
          <input type="url" name="image" placeholder="Image Profil">
    </div>
    <div class="col-auto my-1">
      <button type="submit" name="signup-btn" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
 </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script></body>


  