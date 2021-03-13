<?php
    session_start();
    if(isset($_POST['logusername']) && isset($_POST['logpassword']))
    {
        $username = $_POST['logusername'];
        $password = $_POST['logpassword'];
        if ($username == "") {
        echo "UserName field is empty! \r\n";
        $flag = false;
        } 
        elseif ($password == "") {
        echo "Password field is empty! \r\n";
        $f = false;
        } else {
        $f = true;
        }
        if($f){
                if($username == $_SESSION['username'] && $password == $_SESSION['password'])
                {
                        
                        header('location: dashboard.php');
                }
                else
                {
                    header('location: login.php');
                }
    }
    }
