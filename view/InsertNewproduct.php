<?php
$title = "Insert New Product";
include('header.php');


?>

<td>
    <h1 id="h1">Insert New Product </h1>
    <fieldset>

        <form action='../controller/insertnewproductcheck.php' method='post' onsubmit="return validateform()">
            <script type="text/javascript" src="insertproduct.js"></script>
            <table>
                <tr>
                    <td>
                        Product Name:
                    </td>
                    <td>
                        <input type="text" name='ProductName' id='pname' onkeyup="productNameValidation()">
                        <span id="spname" style="color:red"> </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Quantity:
                    </td>
                    <td>
                        <input type="text" name='Quantity' id="Quantity" onblur=" QuantityValidate()">
                        <span id="spquantity" style="color:red"> </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Buying Price:
                    </td>
                    <td>
                        <input type="text" name='Buyprice' id='bprice' onblur="BuypriceValidate()">
                        <span id="spbprice" style="color:red"> </span>
                    </td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td>
                        Selling Price:
                    </td>
                    <td>
                        <input type="text" name='Sellprice' id='sprice' onblur="SellpriceValidate()">
                        <span id="spsellprice" style="color:red"> </span>
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