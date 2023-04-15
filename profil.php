<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\components\style.css" />


    <title>Document</title>
</head>

<body>
        <?php require_once "connexion.php"; 

        $requete = $database->prepare("SELECT publi_id, tagshot, tag, image, date, pseudo FROM `publication` INNER JOIN users on publication.user = users.id  ORDER BY date DESC");
        // prepare = preparer la demande de donnée//
        $requete->execute();
        //excecute = excuter requete et recuperer//
        
        $tweets = $requete->fetchAll(PDO::FETCH_ASSOC);
        //fetchAll = transforme la réponse en qq chose de comprehensible pour le code(tableaux)//

        $profil = $database->prepare("SELECT pseudo FROM `users` WHERE ");
        
        $profil->execute();

        $profil = $requete->fetchAll(PDO::FETCH_ASSOC);

        ?>



    <div class="profil-page">
        <div class="profil-block">
            <div>
                <img class="img-bannière" src="assets\Images\banniere-exemple.jpg" alt="bannière">
            </div>
            <div class="block-info">
                <div class="profil-info"></div>
                <div>
                    <img class="profil-avatar" src="assets\Images\profil.jpg" alt="avatar">
                </div>
                <div class="profil-pseudo"<?php echo $profil["pseudo"]?>>
                </div>
            </div>
            <br><br><br><br>
            <div class="profil-bio">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, quam possimus.
                Incidunt harum error minus aut, debitis nam modi architecto ipsam laboriosam alias porro nisi esse fugit
                dicta dolores rerum.
            </div>
        </div>
    

    <?php


    
    foreach ($tweets as $tweet) { ?>

        <div class="center-postcontent">
            <div class="profil">
                <div class="user-id">
                    <div class="avatar-square">
                        <img class="avatar" src="Images\profil.jpg" alt="logo">
                    </div>
                    <div class="username">
                        <?php echo $tweet["pseudo"] ?>
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
        </div>
        <div class="date">
            <?php echo $tweet["date"] ?>
        </div>
    <?php } ?>
            </div>
             </div>
        </div>
    </div>

</body>

</html>