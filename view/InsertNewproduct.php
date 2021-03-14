<?php
$title = "Insert New Product";
include('header.php');


?>

            <td>
                <fieldset>
                    <legend><b>Insert New Product Information</b></legend>
                    <form action='../controller/insertnewproductcheck.php' method='post'>
                        <table>
                            <tr>
                                <td>
                                    Product Name:
                                </td>
                                <td>
                                    <input type="text" name='ProductName'>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Quantity:
                                </td>
                                <td>
                                    <input type="text" name='Quantity'>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Buying Price:
                                </td>
                                <td>
                                    <input type="text" name='Buyprice'>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                            <tr>
                                <td>
                                    Selling Price:
                                </td>
                                <td>
                                    <input type="text" name='Sellprice'>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type='submit' name = 'submit' value='submit'>
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