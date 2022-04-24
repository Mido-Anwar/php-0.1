<?php
require('../../config.php');

// connect to data base

require(BL.'function/db.php');

$table = $_GET['table'];
$feild = $_GET['feild'];
$item_id= $_GET['item_id'];

$sql = "DELETE FROM `$table` WHERE `$feild` = '$item_id'";

$result = deleterow($sql);

if($result){

    $data['message'] = "success";

}else{
    $data['message'] = "error";

}
echo json_encode($data);