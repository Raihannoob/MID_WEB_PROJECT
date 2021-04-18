<?php
require_once('../model/inventroymodel.php');
if (isset($_POST['submit'])) {
	$name       = $_POST['ProductName'];
	$Quantity   = $_POST['Quantity'];
	$Buyprice   = $_POST['Buyprice'];
	$Sellprice  = $_POST['Sellprice'];


	/*if($name != "" && $Quantity != "" && $Buyprice != "" && $Sellprice != "" )
		{
			if(file_exists('../model/productinfo.json')){
   			$current_data = file_get_contents('../model/productinfo.json');
			$array_data = json_decode($current_data,true);
			
  			$formdata = array(
	      					'ProductName'     => $_POST['ProductName'],
							'Quantity'    =>$_POST['Quantity'],
							'Buyprice' => $_POST['Buyprice'],
							'Sellprice' => $_POST['Sellprice']

			  				);
			$array_data	[] = $formdata;			  
						  
	   	
			$jsondata = json_encode($array_data,JSON_PRETTY_PRINT);
		   

		   if(file_put_contents('../model/productinfo.json', $jsondata)) {
                
            echo "Product Insert Successfully";

		    }
		   else {
		        echo "Product Insert unsuccessfully";
		   }
          
	}
     
}else{
		echo "You can not fill something empty here!!!!";
}
*/
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
