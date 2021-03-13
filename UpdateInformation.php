<?php
session_start();
if ($_SESSION['flag1'] != true) {
    header('location: login.php');
}

?>


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
                        <label>Logged in as <?php echo $_SESSION['username'] ?> </label>|
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
                    <form action='' method='post'>
                        <table width='100%'>
                            <tr>
                                <td>
                                    Name:
                                </td>
                                <td>
                                    <input type="text" name='name' value="<?php echo $_SESSION['name'] ?>" <?php  if(isset($_POST['name'])) { $_SESSION['name'] = $_POST['name'];} ?> >
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Phone Number:
                                </td>
                                <td>
                                    <input type="text" name='phonenumber' value="<?php echo $_SESSION['phone'] ?>" <?php  if(isset($_POST['phonenumber'])) { $_SESSION['phone'] = $_POST['phonenumber'];} ?> >
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
                                    <input type="email" name='email' value="<?php echo $_SESSION['email'] ?>"  <?php  if(isset($_POST['email'])) { $_SESSION['email'] = $_POST['email']; } ?> >
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <td>Gender:</td>
                            <td>
                                <input type='radio' name='gender' value='male' <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] === "Male") {echo "checked"; } ?><?php if (isset($_POST['gender'])) {$_SESSION['gender'] = $_POST['gender']; } ?>>Male
                                <input type="radio" name="gender" value="Female" <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] === "Female") { echo "checked";} ?> <?php if (isset($_POST['gender'])) { $_SESSION['gender'] = $_POST['gender'];} ?>>Female
                                <input type="radio" name="gender" value="Others" <?php if (isset($_SESSION['gender']) && $_SESSION['gender'] === "Others"){echo "checked"; } ?> <?php if (isset($_POST['gender'])) {$_SESSION['gender'] = $_POST['gender'];} ?>> Others
                            </td>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Date of Birth:</td>
                                <td colspan="2">
                                    <input type='number' name=date max=31 min=1 value="<?php print_r($_SESSION['date']); ?>"   <?php  if(isset($_POST['date'])) { $_SESSION['date'] = $_POST['date']; } ?>>/
                                    <input type='number' name=month max=12 min=1 value="<?php print_r($_SESSION['month']); ?>" <?php  if(isset($_POST['month'])) { $_SESSION['month'] = $_POST['month']; } ?>   >/
                                    <input type='number' name=year max=3000 min=1950 value="<?php print_r($_SESSION['year']); ?>"<?php if(isset($_POST['year'])) { $_SESSION['year'] = $_POST['year']; } ?>     >
                                    <label><i>dd/mm/yyyy</i></label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type='submit' value='Submit'>
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