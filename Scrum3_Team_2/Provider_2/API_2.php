<?php
header("Content-type: application/json");
include("classes/ScrumDB.php");
include("classes/Customer.php");
include("classes/Order.php");
include("classes/Product.php");

$tableName = $_POST['tableName'];
$method = $_POST['method'];

$db = new ScrumDB();

if($method == 'getOne'){
  $ID = $_POST('ID');
  $data = $db->getOneRecord($tableName, $ID);
  
}
elseif ($method == 'getAll') {
  // code...
}
elseif ($method == 'update') {
  // code...
}
elseif ($method == 'insert') {
  // code...
}
elseif ($method == 'update') {
  // code...
}
elseif ($method == 'delete') {
  // code...
}

 ?>
