<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="assets\components\style.css" />
      <title>Document</title>
</head>



<body>

      <div class="main-container">

            <!--Main container-->

            <div class="container">

                  <!--Sidebar-->

                  <div class="sidebar">

                        <div class="sidebar-btn">
                              <?php if(isset($_SESSION['pseudo'])) {
                                    echo "Bienvenue " . $_SESSION['pseudo'];
                              }
                              
                              ?>
                              <div class="sidebar-btn1">
                                    <a href="profil.php">
                                          <button class="sidebar-btn1">Profil
                                          </button>
                                    </a>
                              </div>
                              <?php if(!isset($_SESSION['isConnected']) || $_SESSION['isConnected'] == false) { ?>
                              <div class="sidebar-btn1">
                                    <a href="compte.php">
                                          <button class="sidebar-btn1">Se connecter
                                          </button>
                                    </a>
                              </div>
                              <div class="sidebar-btn1">
                                    <a href="inscription.php">
                                          <button class="sidebar-btn1">Création Compte
                                          </button>
                                    </a>
                              </div>
                              <?php } else { ?>
                              <div class="sidebar-btn1">
                                    <a href="deconnected.php">
                                          <button class="sidebar-btn1">Se déconnecter
                                          </button>
                                    </a>
                              </div>
                              <?php } ?>
                        </div>

                  </div>

                  <!--Fin Sidebar-->
                  <!--Center-->

                  <div class="center">

                        <div class="centertags">
                              <div id="actualite-flash">
                                          <p>Actualité Flash</p>
                              </div>
                              
                              <div id="sport">
                                          <p>Sport</p>
                              </div>
                              <div id="politique">
                                          <p>Politique</p>
                              </div>
                              <div id="histoire">
                                    <p>Histoire</p>
                              </div>
                              <div id="cinema">
                                    <p>Cinéma</p>
                              </div>
                              <div id="evenements">
                                    <p>Evenènements</p>
                              </div>
                              <div id="musique">
                                    <p>Musique</p>
                              </div>
                              <div id="geopolitique">
                                    <p>Géopolitique</p>
                              </div>
                              <div id="sante">
                                    <p>Santé</p>
                              </div>
                              <div id="environnement">
                                    <p>Environnement</p>
                              </div>

                              <div id="clear">
                                    <a href="index.php">
                                          <p>Clear</p>
                                     </a>
                              </div>
                        </div>

                        <!--Zone de post début-->
                        <div class="centerblock-post">
                              <div>
                                    <div class="center-btn">
                                          <img class="tagshots" src="assets\Images\TagShots (2).png" alt="">
                                    </div>
                              </div>

                              <div class="center-post">
                                    <?php
                                    require_once 'connexion.php';



                                    $requete = $database->prepare("SELECT publication.publi_id, tagshot, tag, image, date, pseudo, avatar FROM `publication` INNER JOIN users on publication.user = users.id ORDER BY date DESC");
                                          // prepare = preparer la demande de donnée//
                                    $requete->execute();
                                          //excecute = excuter requete et recuperer//
                                
                                    $tweets = $requete->fetchAll(PDO::FETCH_ASSOC);
                                    //fetchAll = transforme la réponse en qq chose de comprehensible pour le code(tableaux)//
                                    

                                    foreach ($tweets as $tweet) {?>


                                          <div class="center-postcontent">
                                                <div class="profil">
                                                      <div class="user-id">
                                                            <div class="avatar-square">
                                                                  <img class="avatar" src="<?php echo $tweet["avatar"] ?>" alt="logo">
                                                            </div>
                                                            <div class="username">
                                                                  <?php echo $tweet["pseudo"] ?>
                                                                  <?php echo $tweet["publi_id"] ?>
                                                            </div>
                                                            <div class="trash"> 
                                                                  <div class="trash-btn">
                                                                        <p><i class="fa-solid fa-trash-can fa-2x"></i>
                                                                        </p>
                                                                        </a>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="text">
                                                      <a href="delete.php?id=<?php echo $tweet["publi_id"]?>"></a>
                                                      <?php echo $tweet["tagshot"] ?>
                                                </div>
                                                <div class="tag">
                                                      <?php echo $tweet["tag"] ?>
                                                </div>

                                                <?php if (isset($tweet["image"])) {

                                                      ?>
                                                      <div class="image">
                                                            <img src="<?php echo $tweet["image"] ?>" style="width: 350px;height:200px;">
                                                      </div>
                                                <?php } ?>

                                                      <div class="date">
                                                            <?php echo $tweet["date"] ?>        
                                                      </div>
                                                </div>

                           <!--Bouton de suppression-->

                  <?php  if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] == true) {?>
                        <div class="delete-container">
                              <div class="delete-adjusment">
                                    <div class="delete-txt">Voulez-vous vraiment supprimer le post ?
                                    </div>
                                    <div class="delete-btn">
                                          <div class="yes">
                                                <a href="delete.php?id=<?php echo $tweet["publi_id"]?>"><!--on supprime la publication
                                                                         ayant cet id -->   _   
                                          <button class="yes-btn">Oui</button>
                                                </a>
                                          </div>
                                          <div class="no"> 
                                                <button class="no-btn">Non</button>
                                          </a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  <?php } };?>
                              </div>
                        </div>
                        
                        <!--Fin bouton de suppression-->



                        <!--Zone de post Fin-->








                        <!--Modal Début-->
                        <div class="modal-container">
                              <div class="overlay modal-trigger">
                              </div>
                              <div class="modal">
                                    <button class="close-modal modal-trigger">X</button>


                                    <form action="createtweet.php" method="POST">
                                          <div class="selector">
                                                <select name="hashtag-name" id="selector">
                                                      <option selected disabled>TAGS</option>
                                                      <option value="Actualité Flash">Actualité Flash</option>
                                                      <option value="Sport">Sport</option>
                                                      <option value="Politique">Politique</option>
                                                      <option value="Histoire">Histoire</option>
                                                      <option value="Cinéma">Cinéma</option>
                                                      <option value="Evenènements">Evenènements</option>
                                                      <option value="Musique">Musique</option>
                                                      <option value="Géopolitique">Géopolitique</option>
                                                      <option value="Santé">Santé</option>
                                                      <option value="Environnement">Environnement</option>
                                                </select>
                                          </div>
                                          <div class="post-text">
                                                <label for="tagshot"> Tagshot</label>     
                                                <input type="text" name="tagshot" id="tagshot" cols="60" rows="10"/>
                                    
                                                <label for="image">Insérer image</label>     
                                                <input type="url" name="image" id="image">
                                          </div>
                                          <div class="btn-post">
                                                <div class="cancel">
                                                      <button class="cancel-btn">Supprimer</button>
                                                </div>
                                                <div class="publish">
                                                      <button class="publish-btn" type="submit"
                                                            name="submit-btn">Publier</button>
                                                </div>
                                          </div>
                                    </form>
                              </div>

                        </div>
                        <!--Modal Fin-->


                        <!--Inscris-toi ! -->
                        <?php 
                        if(!isset($_SESSION["isConnected"]) || $_SESSION["isConnected"] == false ) {
                        ?>
                           

                        <div class="inscription-container"> 
                              <div class="inscription-overlay">
                              </div>
                              <div class="inscription-block">
                                    <div class="inscription-txt">Pour continuer :
                                    </div>
                                    <div class="container-btn">
                                          <div class="connexion">
                                                <a href="compte.php">      
                                                      <button class="modalconnexion-btn">Me Connecter</button>
                                                </a>
                                          </div>
                                          <div class="inscription">
                                                <a href="inscription.php">      
                                                      <button class="modalconnexion-btn">Je m'inscris</button>
                                                </a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                         <?php
                        }
                        ?>

                        <!--Inscris-toi Fin -->

                        <button class="modal-btn modal-trigger fa-4x" id="modal-btn">+</button>
                  </div>
                 
                  <div class="responsive-btn">
                        <div class="burger">
                              <p>
                                    <i class="fa-solid fa-bars"></i>
                              </p>
                        </div>
                        <div class="responsive-post">  
                              <p>
                                     <i class="fa-solid fa-plus" id="responsive-btn"></i>
                              </p> 
                        </div>
                        <div class="responsive-tags">
                              <p>
                                     <i class="fa-regular fa-hashtag"></i>
                              </p>
                        </div>
                  </div>
            
            </div>
            <!--Fin Center-->

            <!--Right

    <div class="right">
       <div class="right-top">
             <div class="right-logo">
                  <img src="Images\T.png" alt="image logo"  height="60px" width="60px">
             </div>
             <div class="right-profil">
                 <a href="inscription.html">
                    <button class="right-profilbtn">
                          <p><i class="fa-regular fa-user fa-2x"></i></p>  
                   </button>
                 </a>                         
             </div>
       </div>
       <div class="right-btn">
            <p class="right-txt">Bienvenue sut Tagshots !</p>
             <div>  
               <button class="rightbtn-1">Se connecter</button>            
             </div>
             <div>
               <button class="rightbtn-2">S'inscrire</button>                 
             </div>
             <div>  
               <button class="rightbtn-3">Nous Contacter</button>               
             </div>
       </div>


   </div> -->

            <!--Fin Right-->

      </div>

      <script src="https://kit.fontawesome.com/0b4d105291.js" crossorigin="anonymous"></script>
      <script src="assets\sidebar.js"></script>
      <script src="assets\center.js"></script>
</body>

</html>