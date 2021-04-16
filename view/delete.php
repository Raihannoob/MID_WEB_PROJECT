<?php
require_once('../model/inventroymodel.php');
echo $_GET['id'];
$id = $_GET['id'];
$status = deleteProduct($id);
if ($status) {
    echo "Product Insert Successfully";
} else {
    echo "Db error";
}
