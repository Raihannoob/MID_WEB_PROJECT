<?php
$title = "Update Product";
include('header.php');
?>
<td>
    <fieldset>
        <legend><b>Update Product Information</b></legend>
        <form action='updateproductcheck.php' method='post'>
            <table width='100%'>
                <form action='' method=''>
                    <table>
                        <tr>
                            <td>
                                Product Name:
                            </td>
                            <td>
                                <input type="text" name='ProductName' value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Quantity:
                            </td>
                            <td>
                                <input type="text" name='Quantity' value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Buying Price:
                            </td>
                            <td>
                                <input type="text" name='Buyprice' value="">
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>
                                Selling Price:
                            </td>
                            <td>
                                <input type="text" name='Sellprice' value="">
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