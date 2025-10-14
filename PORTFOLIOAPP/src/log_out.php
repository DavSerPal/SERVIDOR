<?php
    session_start();
    session_destroy();
    setcookie("user_email","");
    header("Location: index.php");
    $_SESSION = [];
?>