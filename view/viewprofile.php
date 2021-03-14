<?php
$title = "View Profile";
include('header.php');

?>

<td>
    <fieldset>
        <legend><b>PROFILE</b></legend>
        <table width='100%'>
            <tr>
                <td>
                    Name:
                </td>
                <td>
                    <?php echo $_SESSION['name'] ?>
                </td>
                <td rowspan="8" align="center">
                    <img src='../asset/user.png' height="150px" />
                    <br><a href='changepic.php'>Change Picture</a>
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
                    <?php echo $_SESSION['email'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Gender:
                </td>
                <td>
                    <?php echo $_SESSION['gender'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Phone:
                </td>
                <td>
                    <?php echo $_SESSION['phone'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Date of Birth:
                </td>
                <td>
                    <?php echo $_SESSION['date'] ?>
                    <?php echo "/" ?>
                    <?php echo $_SESSION['month'] ?>
                    <?php echo "/" ?>
                    <?php echo $_SESSION['year'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">

                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                    <a href='updateinformation.php'>Update Information</a>
                </td>
            </tr>
        </table>
    </fieldset>
</td>
</tr>
</table>
<fieldset>
    <?php
    include('footer.php');
    ?>