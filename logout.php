<?php
    session_start();
    unset($_SESSION['flag1']);
    header('location: login.php');
?>