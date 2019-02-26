<?php
include('../classes/Order.php');

$order = new Order(); //create new Product object named $order from Product class
$rCode = $order->toString(); //call the toString( ) method in the $order object & store string in $rCode variable
print("Default object variables: " . "$rCode"); //return string with the properties of the $order object

print("<br /><br />"); //return HTML new lines

//Set new variables into $order object by calling setter functions in $order object
$order->setID(1);
$order->setShippingAddress("Ship Address");
$order->setOrderDate("Order Date");
$order->setExpectedArivalDate("Arrival Date");
$order->setPrice(99);

$rCode = $order->toString(); //call the toString( ) method in the $order object & overwrite string in $rCode variable
print("New object variables: " . "$rCode"); //return string with the new properties of the $order object

?>
