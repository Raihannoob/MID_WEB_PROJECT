<?php
require_once('../model/inventroymodel.php');

if (isset($_POST['submit'])) {
	$name       = $_POST['ProductName'];
	$Quantity   = $_POST['Quantity'];
	$Buyprice   = $_POST['Buyprice'];
	$Sellprice  = $_POST['Sellprice'];


	if ($name != "" && $Quantity != "" && $Buyprice != "" && $Sellprice != "") {
		$user = [
			'ProductName'	=> $name,
			'Quantity'		=> $Quantity,
			'Buyprice'		=> $Buyprice,
			'Sellprice'		=> $Sellprice
		];
		$status = insertProduct($user);
		if ($status) {
			echo "Product Insert Successfully";
		} else {
			echo "Db error";
		}
	} else {
		echo "Please Insert All Information";
	}
}
