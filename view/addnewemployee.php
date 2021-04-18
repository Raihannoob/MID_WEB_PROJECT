<?php
$title = "Add New Employee";
include('header.php');
?>
<td>
    <fieldset>
        <legend><b>Add New Employee</b></legend>
        <form action='../controller/itnsertnewemployeecheck.php' method='post'>
            <table>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input type="text" name='Name'>
                    </td>
                </tr>
                <tr>
                    <td>
                        Employee Post:
                    </td>
                    <td>
                        <input type="text" name='ePost'>
                    </td>
                </tr>
                <tr>
                    <td>
                        Branch:
                    </td>
                    <td>
                        <input type="text" name='Branch'>
                    </td>
                </tr>
                <tr>

                    <td colspan="2">
                        <input type='submit' name='submit' value='submit'>
                        <input type='Reset' value='Reset'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</td>
</tr>
</table>
<fieldset>
    <?php
    include('footer.php');
    ?>