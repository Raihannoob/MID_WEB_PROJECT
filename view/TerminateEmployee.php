<?php
$title = "Terminate Employee";
include('header.php');

require_once('../model/TerminateEmployeemodel.php');
$data = getAllemployee();

?>
<td>
    <table border="1px solid black" width='80%' align='center'>
        <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Post</th>
            <th>Branch</th>
            <th>Action</th>

        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?= $data[$i]['Employee_ID'] ?></td>
                <td><?= $data[$i]['Name'] ?></td>
                <td><?= $data[$i]['Post'] ?></td>
                <td><?= $data[$i]['Branch'] ?></td>
                <td>
                    <a href="../controller/terminateempcheck.php?id=<?= $data[$i]['Employee_ID'] ?>"> Terminate </a>

                </td>
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