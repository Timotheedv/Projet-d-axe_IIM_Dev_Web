<?php require_once "connexion.php";

if(isset($_POST["login-btn"])) {
    $data = [
        "pseudo" => $_POST["pseudo"]
    ];
    
    /*
    1/
    selectionner dans la base là où le pseudo=
    il me troiuve une ligne ou non, 

    ->prepare
    ->execute
    ->fetch
    
    password_verify($_POST['password'], $resultDb['password'])
    */

// Je veux récupérer en BDD le pseudo et le mdp qui sont dans users, là où le pseudo correspond à celui entré dans le formulaire
$requete = $database->prepare("SELECT pseudo, id, password FROM users WHERE pseudo = :pseudo");
//$requete = $database->prepare("SELECT FROM users (pseudo, password) VALUES (:pseudo, :password)");
$requete->execute($data);

$user = $requete->fetch(PDO::FETCH_ASSOC);

if($user != false) {
    var_dump($user);

    if(password_verify($_POST["password"], $user["password"])){
    
    echo "Mot de passe valide";
    session_start();
    $_SESSION['isConnected'] = true;
    $_SESSION['pseudo'] = $user['pseudo'];
    $_SESSION["id"] = $user["id"];
    header('Location: index.php');
    
    } else {
        echo "Une erreur de connexion est servenue";
    }
} else {
    echo 'aucun utilisateur existant en base de données';
}

}
?>