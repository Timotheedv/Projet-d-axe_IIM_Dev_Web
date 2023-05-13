<?php 
require_once "connexion.php";

$requete = $database->prepare("SELECT * FROM users ORDER BY id DESC LIMIT 1");
$requete->execute();

$users = $requete->fetch(PDO::FETCH_ASSOC);

echo json_encode($users)

?>