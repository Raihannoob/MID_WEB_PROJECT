<?php
$title = "DashBoard";
include('header.php');
require_once('../model/inventroymodel.php');
$data = getAllproduct();
?>
<td>
    <table border="1px solid black" width='80%' align='center'>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Buying Price</th>
            <th>Selling Price</th>
            <th>Comment About stock</th>
            <td>ACTION</td>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?= $data[$i]['Product_ID'] ?></td>
                <td><?= $data[$i]['Product_Name'] ?></td>
                <td><?= $data[$i]['Quantity'] ?></td>
                <td><?= $data[$i]['Buying_Price'] ?></td>
                <td><?= $data[$i]['Selling_Price'] ?></td>
                <td><?= $data[$i]['Comment'] ?></td>
                <td>
                    <a href="updateproduct.php?id=<?= $data[$i]['Product_ID'] ?>"> EDIT </a> |
                    <a href="delete.php?id=<?= $data[$i]['Product_ID'] ?>"> DELETE </a>
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