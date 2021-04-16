<?php

require_once('db.php');


function insertProduct($user)
{
    $conn = getConnection();
    $sql = "insert into product values('', '{$user['ProductName']}', '{$user['Quantity']}', '{$user['Buyprice']}', '{$user['Sellprice']}','')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllproduct()
{
    $conn = getConnection();
    $sql = "select * from product";
    $result = mysqli_query($conn, $sql);
    $data1 = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($data1, $row);
    }
    return $data1;
}

function deleteProduct($id)
{
    $conn = getConnection();
    $sql = "delete from product where Product_ID ='{$id}'";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
