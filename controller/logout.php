<?php
    session_start();
    unset($_SESSION['flag1']);
    header('location: ../view/login.php');
?>