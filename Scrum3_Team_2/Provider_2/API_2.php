<?php
header("Content-type: application/json");
include("classes/ScrumDB.php");
include("classes/Customer.php");
include("classes/Order.php");
include("classes/Product.php");

$tableName = $_POST['tableName'];
$method = $_POST['method'];

$db = new ScrumDB();
$result;

if(strcmp($method, 'getOne') == 0){
  $ID = $_POST('ID');
  $result = $db->getOneRecord($tableName, $ID);

}
elseif (strcmp($method, 'getAll') == 0) {
  $result = $db->getRecords($tableName);

}
elseif (strcmp($method, 'update') == 0) {
    $ID = $_POST('ID');

     $params = array();
     if (strcmp($tableName, "customers") == 0) {
         $params['firstName'] = $_POST["firstName"];
         $params['lastName'] = $_POST["lastName"];
         $params['email'] = $_POST['email'];
         $params['phone'] = $_POST['phone'];
     }
     else if (strcmp($tableName, "orders") == 0) {
         $params['ShippingAddress'] = $_POST["shippingAddress"];
         $params['orderDate'] = $_POST["orderDate"];
         $params['ExpectedArivalDate'] = $_POST['expectedArivalDate'];
         $params['Price'] = $_POST['price'];
     }
     else if (strcmp($tableName, "products") == 0) {
         $params['name'] = $_POST["name"];
         $params['color'] = $_POST["color"];
         $params['description'] = $_POST['description'];
         $params['price'] = $_POST['price'];
     }

     $db->updateRecord($tableName, $ID, $params);
     $result->getOneRecord($tableName, $ID);
}
elseif (strcmp($method, 'insert') == 0) {
    $params = array();
    if (strcmp($tableName, "customers") == 0) {
        $params['firstName'] = $_POST["firstName"];
        $params['lastName'] = $_POST["lastName"];
        $params['email'] = $_POST['email'];
        $params['phone'] = $_POST['phone'];
    }
    else if (strcmp($tableName, "orders") == 0) {
        $params['ShippingAddress'] = $_POST["shippingAddress"];
        $params['orderDate'] = $_POST["orderDate"];
        $params['ExpectedArivalDate'] = $_POST['expectedArivalDate'];
        $params['Price'] = $_POST['price'];
    }
    else if (strcmp($tableName, "products") == 0) {
        $params['name'] = $_POST["name"];
        $params['color'] = $_POST["color"];
        $params['description'] = $_POST['description'];
        $params['price'] = $_POST['price'];
    }

    $result = $db->insertRecord($tableName, $params);
}
elseif (strcmp($method, 'delete') == 0) {
    $ID = $_POST('ID');
    $db->insertRecord($tableName, $ID);
}

$data = array();
// customers
if ( strcmp($tableName, "customers") == 0){
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
else if ( strcmp($tableName, "products") == 0){
  while ($row = $result->fetch_assoc()){
    $p = new Product();
    $p->setID($row['ID']);
    $p->setName($row['name']);
    $p->setColor($row['color']);
    $p->setDescription($row['description']);
    $p->setPrice($row['price']);

    $data[] = (array) $p;
  }
}

// orders
else if ( strcmp($tableName, "orders") == 0){
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
