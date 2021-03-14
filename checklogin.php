<?php
    session_start();
    if(isset($_POST['logusername']) && isset($_POST['logpassword']))
    {
        $username = $_POST['logusername'];
        $password = $_POST['logpassword'];
        if ($username == "" || $password == "") {
        echo "Null submission \r\n";
        }  
        else {
        
                if($username == $_SESSION['username'] && $password == $_SESSION['password'])
                {
                        $_SESSION['flag1'] = true;
                        header('location: dashboard.php');
                }
                else
                {
                    echo "Please Enter Valid Username and password! \r\n";
                    header('location: login.php');
                }
                    
    }
    }
