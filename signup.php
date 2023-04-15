<?php
    require_once "connexion.php";

    if(isset($_POST["signup-btn"])) {
        $data = [
            "pseudo" => $_POST["pseudo"],
            "mail" => $_POST["mail"],
            "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
        ];

        $requete = $database->prepare("INSERT INTO users (pseudo, mail, password) VALUES (:pseudo, :mail, :password)");
        $requete->execute($data); 

        if($requete) {
            header("Location: index.php");

        } else {
            echo "Une erreur est survenue";
        }
    } else {
        echo "Veuillez remplir tous les champs";
    }

?>


















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script></body>    
</body>
</html>