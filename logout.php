<?php
    session_destroy();
    header('Location:login.php');
    session_start();
?>