<?php
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

?>
