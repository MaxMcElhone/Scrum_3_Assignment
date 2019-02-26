<?php
header("Content-type: application/json");
include("classes/ScrumDB.php");
include("classes/Customer.php");
include("classes/Order.php");
include("classes/Product.php");

$tableName = $_REQUEST['tableName'];
$method = $_REQUEST['method'];

$db = new ScrumDB();
$result;

if($method == 'getOne'){
  $ID = $_REQUEST('ID');
  $result = $db->getOneRecord($tableName, $ID);

}
elseif ($method == 'getAll') {
  $result = $db->getRecords($tableName);
}
elseif ($method == 'update') {
    $ID = $_REQUEST('ID');

     $params = array();
     if ($tableName == "customers") {
         $params['firstName'] = $_REQUEST["firstName"];
         $params['lastName'] = $_REQUEST["lastName"];
         $params['email'] = $_REQUEST['email'];
         $params['phone'] = $_REQUEST['phone'];
     }
     else if ($tableName == "orders") {
         $params['ShippingAddress'] = $_REQUEST["shippingAddress"];
         $params['orderDate'] = $_REQUEST["orderDate"];
         $params['ExpectedArivalDate'] = $_REQUEST['expectedArivalDate'];
         $params['Price'] = $_REQUEST['price'];
     }
     else if ($tableName == "products") {
         $params['name'] = $_REQUEST["name"];
         $params['color'] = $_REQUEST["color"];
         $params['description'] = $_REQUEST['description'];
         $params['price'] = $_REQUEST['price'];
     }

     $db->updateRecord($tableName, $ID, $params);
     $result->getOneRecord($tableName, $ID);
}
elseif ($method == 'insert') {
    $params = array();
    if ($tableName == "customers") {
        $params['firstName'] = $_REQUEST["firstName"];
        $params['lastName'] = $_REQUEST["lastName"];
        $params['email'] = $_REQUEST['email'];
        $params['phone'] = $_REQUEST['phone'];
    }
    else if ($tableName == "orders") {
        $params['ShippingAddress'] = $_REQUEST["shippingAddress"];
        $params['orderDate'] = $_REQUEST["orderDate"];
        $params['ExpectedArivalDate'] = $_REQUEST['expectedArivalDate'];
        $params['Price'] = $_REQUEST['price'];
    }
    else if ($tableName == "products") {
        $params['name'] = $_REQUEST["name"];
        $params['color'] = $_REQUEST["color"];
        $params['description'] = $_REQUEST['description'];
        $params['price'] = $_REQUEST['price'];
    }

    $result = $db->insertRecord($tableName, $params);
}
elseif ($method == 'delete') {
    $ID = $_REQUEST('ID');
    $db->deleteRecord($tableName, $ID);
}

$data = array();
// customers
if ( $tableName == "customers"){
  while ($row = $result->fetch_assoc()){
    $c = new Customer();
    $c->setID($row['ID']);
    $c->setFirstName($row['firstName']);
    $c->setLastName($row['lastName']);
    $c->setEmail($row['email']);
    $c->setPhone($row['phone']);

    $data[] = (array) $c;
  }
}

// products
else if ( $tableName == "products"){
  while ($row = $result->fetch_assoc()){
    $p = new Product();
    $p->setID($row['id']);
    $p->setName($row['name']);
    $p->setColor($row['color']);
    $p->setDescription($row['description']);
    $p->setPrice($row['price']);

    $data[] = (array) $p;
  }
}

// orders
else if ( $tableName == "orders"){
  while ($row = $result->fetch_assoc()){
    $o = new Order();
    $o->setID($row['ID']);
    $o->setShippingAddress($row['ShippingAddress']);
    $o->setOrderDate($row['orderDate']);
    $o->setExpectedArivalDate($row['ExpectedArivalDate']);
    $o->setPrice($row['Price']);

    $data[] = (array) $o;
  }
}
 print(json_encode($data));

 ?>
