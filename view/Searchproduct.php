<?php
$name = $_REQUEST['name'];
$conn = mysqli_connect('localhost', 'root', '', 'webtech');
$sql = "select * from product where Product_Name like '%{$name}%'";
$result = mysqli_query($conn, $sql);

$response = "<table border=1>
					<tr>
						<td>Product_ID</td>
						<td>Product_Name</td>
						<td>Quantity</td>
						<td>Buying_Price</td>
					</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    $response .= "	<tr>
							<td>{$row['Product_ID']}</td>
							<td>{$row['Product_Name']}</td>
							<td>{$row['Quantity']}</td>
							<td>{$row['Buying_Price']}</td>
						</tr>";
}

$response .= "</table>";

echo $response;
