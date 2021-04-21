<?php
$title = "Update Product";
include('header.php');
require_once('../model/inventroymodel.php');
$id = $_GET["id"];
$data =  getproductByID($id);




?>
<td>
    <h1 id="h1">Update Product Information </h1>
    <fieldset>
        <form action='../controller/updateproductcheck.php' method='post'>
            <script type="text/javascript" src="../view/insertproduct.js"></script>
            <table width='100%'>
                <form action='' method=''>
                    <table>

                        <tr>
                            <td>
                                ID:
                            </td>
                            <td>
                                <input type="text" name='ProductID' value=" <?php echo $data['Product_ID'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Product Name:
                            </td>
                            <td>
                                <input type="text" name='ProductName' value=" <?php echo $data['Product_Name'] ?> " id='pname' onblur="productNameValidation()">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Quantity:
                            </td>
                            <td>
                                <input type="text" name='Quantity' value="<?php echo $data['Quantity'] ?> " id="Quantity" onblur=" QuantityValidate()">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Buying Price:
                            </td>
                            <td>
                                <input type="text" name='Buyprice' value="<?php echo $data['Buying_Price'] ?>" id='bprice' onblur="BuypriceValidate()">
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>
                                Selling Price:
                            </td>
                            <td>
                                <input type="text" name='Sellprice' value="<?php echo $data['Selling_Price'] ?> " id='sprice' onblur="SellpriceValidate()">
                            </td>

                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type='submit' name='submit ' value='submit' onclick="productNameValidation();QuantityValidate();BuypriceValidate();SellpriceValidate();">
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