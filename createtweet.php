<?php
session_start(); 
    require_once "connexion.php";

    if(isset($_POST["submit-btn"]))  {
        if (isset($_SESSION["id"])) {
            $data = [
                "tag" => $_POST["hashtag-name"],
                "tagshot" => $_POST["tagshot"],
                "image" => $_POST["image"],
                "date" => date("Y-m-d H:i:s"),
                "user" => $_SESSION["id"], /*faire en sorte de detecter la personne connectée*/
            ];

            $requete = $database->prepare("INSERT INTO publication (tag, tagshot, date, user, image) VALUES (:tag, :tagshot, :date, :user, :image)");
            $requete->execute($data);

            if($requete) {
                header("Location: index.php");

            } else {
                echo "Une erreur est survenue";
            }
         } else {
            echo "Veillez vous connecter";
         }  
    } else {
        echo "Veuillez remplir tous les champs";
    }

?>
