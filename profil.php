<?php session_start();
?>
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
    <div class="sidebar" id="sidebar-profil">

        <div class="sidebar-btn">
            <?php if (isset($_SESSION['pseudo'])) {
                echo "Bienvenue " . $_SESSION['pseudo'];
            }

            ?>
            <div class="sidebar-btn1">
                <a href="index.php">
                    <button class="sidebar-btn1">Accueil
                    </button>
                </a>
            </div>
            <?php if (!isset($_SESSION['isConnected']) || $_SESSION['isConnected'] == false) { ?>
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

    <!--Fin Sidebar-->
    <?php require_once "connexion.php";

    if (isset($_SESSION['id'])) {
        $data = [
            "id" => $_SESSION["id"],
        ];
        $query = $database->prepare("SELECT publi_id, pseudo, tagshot, tag, image, date  FROM `publication` INNER JOIN users ON publication.user = users.id WHERE users.id= :id ORDER BY date DESC;");

        $query->execute($data);

        $tweets = $query->fetchAll(PDO::FETCH_ASSOC);

        $query = $database->prepare("SELECT avatar FROM `users` WHERE users.id= :id");

        $query->execute($data);

        $profil = $query->fetchAll(PDO::FETCH_ASSOC);

    }



    ?>



    <div class="profil-page">
        <div class="profil-block">
            <div>
                <img class="img-banniere" src="assets\Images\banniere-exemple.jpg" alt="bannière">
            </div>
            <div class="block-info">
                <div class="profil-info"></div>
                <div>
                    <img class="profil-avatar" src="<?php echo $profil[0]["avatar"] ?>"
                        alt="avatar"><!-- [0]pour afficher la première ligne du tableau-->
                </div>
                <div class="profil-pseudo">
                    <?php echo $_SESSION["pseudo"] ?>
                </div>
            </div>
            <br><br><br><br>
            
        </div>


        <?php



        foreach ($tweets as $tweet) { ?>

            <div class="profil-postcontent" id="post-profil">
                <div class="profil">
                    <div class="user-id">
                        <div class="avatar-square">
                            <img class="avatar" src="<?php echo $profil[0]["avatar"] ?>" alt="logo">
                        </div>
                        <div class="username">
                            <?php echo $tweet["pseudo"] ?>
                        </div>
                        <div class="trash">
                            <div class="trash-profil" id="trash-profil">
                                <p><i class="fa-solid fa-trash-can fa-2x"></i>
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text">
                    <?php echo $tweet["tagshot"] ?>
                </div>
                <div class="tag">
                    <?php echo $tweet["tag"] ?>
                </div>

                <?php if (isset($tweet["image"])) {

                    ?>
                    <div class="image" id ="img-profil">
                        <img src="<?php echo $tweet["image"] ?>" id="imgprofil">
                    </div>
                <?php } ?>

                <div class="date">
                            <?php echo $tweet["date"] ?>
                </div>
            </div>
                <?php } ?>
        </div>

            <?php  if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] == true) {?>
                                    <div class="delete-container-profil">
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
                              <?php } ?>

                <div class="responsive-btn" id="profil-btn">
                        <div class="burger" id="burger-profil">
                              <p>
                                    <i class="fa-solid fa-bars"></i>
                              </p>
                        </div>
                        
                </div>
        </div>
    </div>

                         
<script src="assets\center.js"></script>
<script src="assets\sidebar.js"></script>

<script src="https://kit.fontawesome.com/0b4d105291.js" crossorigin="anonymous"></script>

</body>

</html>