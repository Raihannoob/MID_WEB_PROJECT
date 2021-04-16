<?php
require_once('../model/inventroymodel.php');
$Product_Name   = $_POST['ProductName'];
$Quantity = $_POST['Quantity'];
$Buying_Price = $_POST['Buyprice'];
$Selling_Price = $_POST['Sellprice'];
$id = $_POST['ProductID'];

$user = [
    'id'              => $id,
    'Product_Name'    => $Product_Name,
    'Quantity'        => $Quantity,
    'Buying_Price'    => $Buying_Price,
    'Selling_Price'   => $Selling_Price
];
$status = updateProduct($user);
if ($status) {
    echo "Update Successfully";
} else {
    echo "Update unsuccessful";
}
