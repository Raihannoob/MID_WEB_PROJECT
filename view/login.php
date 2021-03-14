<?php
session_start();
if (isset($_SESSION['flag'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Login</title>
    </head>

    <body>
        <fieldset>
            <table width='100%'>
                <tr>
                    <td>
                        <img src='../asset/logo.jpg' alt="Image unavailable" height='50px' />
                    </td>
                    <td align='right'>
                        <nav>
                            <a href='home.php'>Home</a> |
                            <a href='login.php'>Log In</a> |
                            <a href='registration.php'>Registration</a>
                        </nav>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>
                LOGIN
            </legend>
            <form action='../controller/checklogin.php' method='POST'>
                <table>
                    <tr>
                        <td>
                            User Name:
                        </td>
                        <td>
                            <input type="text" name='logusername'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name='logpassword'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type='checkbox'>Remember Me
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type='submit' name ='submit' value='Submit'>
                            <a href='forgetpassword.php'>Forgot Password?</a>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>

    </html>

<?php

} else {
    echo "Please do Registration before login in";
    header('location: registration.php');
}

?>