<?php
         $title = "view All product";
        include('header.php');

if (file_exists('../model/productinfo.json')) {
    $current_data = file_get_contents('../model/productinfo.json');
    $array_data = json_decode($current_data, true);
    $pname = $array_data[0]['ProductName'];
    $Quantity = $array_data[0]['Quantity'];
    $Buyprice = $array_data[0]['Buyprice'];
    $Sellprice = $array_data[0]['Sellprice'];
}


?>


            <td>
                <table border="1px solid black" width='80%' align='center'>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Buying Price</th>
                        <th>Selling Price</th>
                    </tr>
                    <tr>
                        <td><?php echo $pname; ?> </td>
                        <td><?php echo $Quantity; ?></td>
                        <td><?php echo $Buyprice; ?></td>
                        <td><?php echo $Sellprice; ?></td>

                    </tr>

                </table>

            </td>
        </tr>
    </table>
    <fieldset>
<?php
            include('footer.php');
?>       