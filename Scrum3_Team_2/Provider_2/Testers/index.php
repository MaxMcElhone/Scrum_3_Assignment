<?php
print("<h2>Order Class:</h2><h3>");
// Order Tester
include('../classes/Order.php');

$order = new Order(); //create new Product object named $order from Product class
$rCode = $order->toString(); //call the toString( ) method in the $order object & store string in $rCode variable
print("Default object variables: " . "$rCode"); //return string with the properties of the $order object

print("<br /><br />"); //return HTML new lines

//Set new variables into $order object by calling setter functions in $order object
$order->setID(1);
$order->setShippingAddress("Ship Address");
$order->setOrderDate("Order Date");
$order->setExpectedArrivalDate("Arrival Date");
$order->setPrice(99);

$rCode = $order->toString(); //call the toString( ) method in the $order object & overwrite string in $rCode variable
print("New object variables: " . "$rCode"); //return string with the new properties of the $order object

print("</h3><br /><br /><h2>Customer Class:</h2><h3>");
// Customer Tester
include('../classes/Customer.php');

$customer = new Customer(); //create new Product object named $customer from Product class
$rCode = $customer->toString(); //call the toString( ) method in the $customer object & store string in $rCode variable
print("Default object variables: " . "$rCode"); //return string with the properties of the $customer object

print("<br /><br />"); //return HTML new lines

//Set new variables into $customer object by calling setter functions in $customer object
$customer->setID(1);
$customer->setFirstName("name");
$customer->setLastName("last");
$customer->setEmail("email");
$customer->setPhone(99);

$rCode = $customer->toString(); //call the toString( ) method in the $customer object & overwrite string in $rCode variable
print("New object variables: " . "$rCode"); //return string with the new properties of the $customer object

print("</h3><br /><br /><h2>Product Class:</h2><h3>");
// Product Tester
include('../classes/Product.php');

$product = new Product(); //create new Product object named $product from Product class
$rCode = $product->toString(); //call the toString( ) method in the $product object & store string in $rCode variable
print("Default object variables: " . "$rCode"); //return string with the properties of the $product object

print("<br /><br />"); //return HTML new lines

//Set new variables into $product object by calling setter functions in $product object
$product->setID(1);
$product->setName("name");
$product->setColor("color");
$product->setDescription("description");
$product->setPrice(99);

$rCode = $product->toString(); //call the toString( ) method in the $product object & overwrite string in $rCode variable
print("New object variables: " . "$rCode"); //return string with the new properties of the $product object

 ?>
