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

function updateProduct($user)
{
    $conn = getConnection();
    $sql = "update product set Product_Name ='{$user['Product_Name']}', Quantity='{$user['Quantity']}', Buying_Price='{$user['Buying_Price']}', Selling_Price='{$user['Selling_Price']}', Comment='' where Product_ID={$user['id']}";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}


function getproductByID($id)
{
    $conn = getConnection();
    $sql = "select * from product where Product_ID ='{$id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
}

