<?php
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
