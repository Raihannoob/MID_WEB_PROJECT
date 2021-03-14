<?php
   		if (isset($_POST['submit'])) {
		    $name       =$_POST['ProductName'];
            $Quantity   =$_POST['Quantity'];
            $Buyprice   =$_POST['Buyprice'];
            $Sellprice  =$_POST['Sellprice'];
		
            
   		if($name != "" && $Quantity != "" && $Buyprice != "" && $Sellprice != "" )
		{
			if(file_exists('productinfo.json')){
   			$current_data = file_get_contents('productinfo.json');
			$array_data = json_decode($current_data,true);
			
  			$formdata = array(
	      					'ProductName'     => $_POST['ProductName'],
							'Quantity'    =>$_POST['Quantity'],
							'Buyprice' => $_POST['Buyprice'],
							'Sellprice' => $_POST['Sellprice']

			  				);
			$array_data	[] = $formdata;			  
						  
	   	
			$jsondata = json_encode($array_data,JSON_PRETTY_PRINT);
		   

		   if(file_put_contents('productinfo.json', $jsondata)) {
                
            echo "Product Insert Successfully";

		    }
		   else {
		        echo "Product Insert unsuccessfully";
		   }
          
	}
     
}else{
		echo "You can not fill something empty here!!!!";
}

}
?>