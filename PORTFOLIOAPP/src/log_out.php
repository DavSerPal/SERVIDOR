<?php
    session_start();
    session_unset();
    session_destroy();
    setcookie("user_email","");
    header("Location: index.php");
?>