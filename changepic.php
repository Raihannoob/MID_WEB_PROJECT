<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CHOOSE PROFILE PICTURE</title>
</head>

<body>
    <fieldset>
        <table width='100%'>
            <tr>
                <td>
                    <img src='logo.jpg' height='100px' />
                </td>
                <td align='right'>
                    <nav>
                        <label>Logged in as <a href='home.php'></a> </label>|
                        <a href='logout.php'>Log Out</a>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <table border="1px solid black" width='100%'>
        <tr>
            <td width='30%'>
                <label>Account</label>
                <br>
                <hr>
                <ul>
                    <li><a href='dashboard.php'>Dashboard</a></li>
                    <li><a href='viewprofile.php'>View Profile</a></li>
                    <li><a href='changepic.php'>Change Profile Picture</a></li>
                    <li><a href='changepass.php'>Change Password</a></li>
                    <li><a href='UpdateInformation.php'>Update Information</a></li>
                    <li><a href=''>Monitoring Sell</a></li>
                    <li><a href=''>Medicine Stock</a></li>
                    <li><a href=''>Destruction of Expired Items</a></li>
                    <li><a href=''>Return of Items which are Nearing Expire</a></li>
                    <li><a href=''>contact with admin</a></li>
                    <li><a href=''>Database system</a></li>
                    <li><a href=''>call for a Meeting</a></li>
                    <li><a href=''>Monitoring Invtentory</a></li>
                    <li><a href=''>Maintenance the system</a></li>
                    <li><a href=''>....</a></li>
                    <li><a href=''>Connect website with social media</a></li>
                </ul>
            </td>
            <td>
                <fieldset>
                    <legend><b>CHOOSE PROFILE PICTURE</b></legend>
                    <form action='' method=''>
                        <table width='100%'>
                            <tr>
                                <td>
                                    <img src='user.png'  height='150px'>
                                    <br>
                                    <input type='file' name='filepic' />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value='Submit'>
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </td>
        </tr>
    </table>
    <fieldset>
        <center>
            <label>
                Copyright © 2021
            </label>
        </center>
    </fieldset>
</body>

</html>