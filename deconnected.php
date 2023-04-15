<?php
    session_start();
    $_SESSION['isConnected'] = false;
    unset($_SESSION["id"]);
    unset($_SESSION["pseudo"]);

    header("location: index.php");
?>