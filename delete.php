<?php
    require_once "connexion.php";

    if(isset($_GET["id"])) {
        $data = [
         "id" => $_GET["id"],
        ];

        $requete = $database->prepare("DELETE FROM publication WHERE publi_id= :id");
        $requete->execute($data);

        if($requete) {
            header("Location: index.php");

        } else {
            echo "Une erreur est survenue";
        }
    } else {
        echo "ID NON DISPO";
    }

?>
