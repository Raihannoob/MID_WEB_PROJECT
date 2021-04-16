<?php
$title = "view Expanse";
include('header.php');
require_once('../model/monitoringcellmodel.php');
$data = getAllexpences();
?>
<td>
    <table border="1px solid black" width='80%' align='center'>
        <tr>
            <th>Expense ID</th>
            <th>Expense Title</th>
            <th>Date</th>
            <th>Branch</th>
            <th>Expense</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?= $data[$i]['ID'] ?></td>
                <td><?= $data[$i]['Expense_Title'] ?></td>
                <td><?= $data[$i]['Date'] ?></td>
                <td><?= $data[$i]['Branch'] ?></td>
                <td><?= $data[$i]['Expense'] ?></td>
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