<?php
$title = "Add New Employee";
include('header.php');
?>
<td>
    <h1 id="h1">Insert New Employee </h1>
    <fieldset>
        <form action='../controller/itnsertnewemployeecheck.php' method='post' onSubmit="validateform()">
            <script type="text/javascript" src="insertemployee.js"></script>
            <table>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input type="text" name='Name' id='ename' onkeyup="employeeNameValidation()">
                    </td>
                </tr>
                <tr>
                    <td>
                        Employee Post:
                    </td>
                    <td>
                        <input type="text" name='ePost' id='ePost' onblur="EmployeePostValidation()">
                    </td>
                </tr>
                <tr>
                    <td>
                        Branch:
                    </td>
                    <td>
                        <input type="text" name='Branch' id='branch' onblur="branchValidation()">
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