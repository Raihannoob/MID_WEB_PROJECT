<?php
$title = "Update Product";
include('header.php');
require_once('../model/inventroymodel.php');
$id = $_GET["id"];
$data = getUserByID($id);




?>
<td>
    <fieldset>
        <legend><b>Update Product Information</b></legend>
        <form action='../controller/updateproductcheck.php' method='post'>
            <table width='100%'>
                <form action='' method=''>
                    <table>

                        <tr>
                            <td>
                                ID:
                            </td>
                            <td>
                                <input type="text" name='ProductID' value=" <?php echo $data['Product_ID'] ?> ">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Product Name:
                            </td>
                            <td>
                                <input type="text" name='ProductName' value=" <?php echo $data['Product_Name'] ?> ">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Quantity:
                            </td>
                            <td>
                                <input type="text" name='Quantity' value="<?php echo $data['Quantity'] ?> ">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Buying Price:
                            </td>
                            <td>
                                <input type="text" name='Buyprice' value="<?php echo $data['Buying_Price'] ?> ">
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>
                                Selling Price:
                            </td>
                            <td>
                                <input type="text" name='Sellprice' value="<?php echo $data['Selling_Price'] ?> ">
                            </td>

                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type='submit' name='submit ' value='submit'>
                                <input type='Reset' value='Reset'>
                            </td>
                        </tr>
                    </table>
                </form>
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