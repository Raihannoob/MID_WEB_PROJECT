<?php

require_once('db.php');

function getAllemployee()
{
    $conn = getConnection();
    $sql = "select * from employee_list";
    $result = mysqli_query($conn, $sql);
    $data1 = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($data1, $row);
    }
    return $data1;
}

function deleteEmployee($id)
{
    $conn = getConnection();
    $sql = "delete from employee_list where Employee_ID ='{$id}'";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
