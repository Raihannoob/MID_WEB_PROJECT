<?php
$title = "Connect With Admin";
include('header.php');
require_once('../model/ContactWithadminmodel.php');
$data = getAlladmin();
?>
<td>
    <table border="1px solid black" width='80%' align='center'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Post</th>
            <th>Branch</th>
            <th>Call</th>

        </tr>

        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?= $data[$i]['ID'] ?></td>
                <td><?= $data[$i]['Name'] ?></td>
                <td><?= $data[$i]['Phone'] ?></td>
                <td><?= $data[$i]['Post'] ?></td>
                <td><?= $data[$i]['Branch'] ?></td>
                <td>
                    <a href=''>Call</a></li>
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