<?php
$title = "View Employee Salary";
include('header.php');
require_once('../model/monitoringcellmodel.php');
$data = getAllempoloyeeSalary();
?>
<td>
    <table border="1px solid black" width='80%' align='center'>
        <tr>
            <th>Salary ID</th>
            <th>Name</th>
            <th>Branch</th>
            <th>Position</th>
            <th>Salary</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?= $data[$i]['ID'] ?></td>
                <td><?= $data[$i]['Name'] ?></td>
                <td><?= $data[$i]['Branch'] ?></td>
                <td><?= $data[$i]['Position'] ?></td>
                <td><?= $data[$i]['Salary'] ?></td>
            </tr>

        <?php } ?>

    </table>

</td>
</tr>
</table>
<fieldset>
    <?php
    include('footer.php');
    ?>