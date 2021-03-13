<!DOCTYPE html>
<html>

<head>
    <title>Update Information</title>
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
                        <label>Logged in as </label>|
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
                    <li><a href='MonitoringSell.php'>Monitoring Sell</a></li>
                    <li><a href='MedicineStock.php'>Medicine Stock</a></li>
                    <li><a href='ExpiredItems.php'>Expired Items</a></li>
                    <li><a href='contactwithadmin.php'>contact with admin</a></li>
                    <li><a href='Databasesystem.php'>Database system</a></li>
                    <li><a href='callforaMeeting.php'>call for a Meeting</a></li>
                    <li><a href='Invtentory.php'>Invtentory</a></li>
                    <li><a href='systemDetails.php'>system Details</a></li>
                    <li><a href='Connectwebsitewithsocialmedia.php'>Connect website with social media</a></li>
                </ul>
            </td>
            <td>
                <fieldset>
                    <legend><b>Update Information</b></legend>
                    <form action='' method=''>
                        <table width='100%'>
                            <tr>
                                <td>
                                    Name:
                                </td>
                                <td>
                                    <input type="text" name='name' value="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email:
                                </td>
                                <td>
                                    <input type="email" name='email' value="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <td>Gender:</td>
                            <td>
                                <input type='radio' name='gender' value='male'>Male
                                <input type='radio' name='gender' value='female'>Female
                                <input type='radio' name='gender' value='others'>Others
                            </td>
                            <tr>
                                <td>Date of Birth:</td>
                                <td colspan="2">
                                    <input type='number' name=date max=31 min=1 value="">/
                                    <input type='number' name=month max=12 min=1 value="">/
                                    <input type='number' name=year max=3000 min=1950 value="">
                                    <label><i>dd/mm/yyyy</i></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type='submit' value='Submit'>
                                    <input type='reset' value='Reset'>
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
                Copyright © 2017
            </label>
        </center>
    </fieldset>
</body>

</html>