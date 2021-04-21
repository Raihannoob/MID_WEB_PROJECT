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
                <script type="text/javascript" src="log.js"></script>
                <table>
                    <tr>
                        <td>
                            User Name:
                        </td>
                        <td>
                            <input type="text" name='logusername' value="<?php if (isset($_COOKIE['logusername'])) {
                                                                                echo $_COOKIE['logusername'];
                                                                            } ?>" id='username' onblur="usernamevalidation()" onkeyup="usernamevalidation()">
                            <span id="susername" style="color:red"> </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name='logpassword' value="<?php if (isset($_COOKIE['logpassword'])) {
                                                                                    echo $_COOKIE['logpassword'];
                                                                                } ?>" id='password' onblur="passwordvalidation()" onkeyup="passwordvalidation()">
                            <span id="spass" style="color:red"> </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type='checkbox' name="remember" <?php if (isset($_COOKIE['logusername'])) {
                                                                        echo "checked";
                                                                    } ?>> Remember Me
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type='submit' name='submit' value='Submit'>
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