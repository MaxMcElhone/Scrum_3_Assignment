<?php
  header("Content-type: application/json");
  include('classes/ScrumDB.php');
  include("classes/Customer.php");
  include("classes/Order.php");
  include("classes/Product.php");
  //$input = $_REQUEST['bId']; // Get table from user input
  $input = "customers";
  //$input2 = explode(" ", $input);
  $table = $input;
  // $rId = "x";
  // if (!is_null($input2[1])) {
  //   $rId = $input2[1];
  // }
  //$table = "1";
  //$rId = $_REQUEST['aRc']; // Get record from user input

  $scrumDB = new ScrumDB(); // Create ScrumDB object
  $rRecord; // Set scope

  // if ($rId == "x") {
    // Call getRecords, sending it rRecord
    $rRecord = $scrumDB->getRecords($table);
  // }

  $data = array(); // Create an array to store separate product fields/variables
  // if ($table == "1") {
  //   //$data['rc'] = $rRecord->toString(); // Store a set of all properties in array
  //   // $data['rc1'] = $rRecord->getId();
  //   // $data['rc2'] = $rRecord->getFirstName();
  //   // $data['rc3'] = $rRecord->getLastName();
  //   // $data['rc4'] = $rRecord->getEmail();
  //   // $data['rc5'] = $rRecord->getPhone();
  //   //$data['rc1'] = $rRecord->getId();
  //   $data['rc1'] = "test";
  //   $data['rc1'] = mysqli_fetch_assoc($rRecord);
  //   //$data['rc1'] = mysqli_use_result($rRecord);
  //   //$data['rc1'] = $rRecord;
  // }
  if ( $table == "customers"){
    while ($row = $rRecord->fetch_assoc()){
      $c = new Customer();
      $c->setID($row['ID']);
      $c->setFirstName($row['firstName']);
      $c->setLastName($row['lastName']);
      $c->setEmail($row['email']);
      $c->setPhone($row['phone']);

      $data[] = (array) $c;
    }
  }

  //print($rRecord);
  print(json_encode($data));
?>
