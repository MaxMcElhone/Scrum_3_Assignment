<?php
  //header("Content-type: application/json");
  include('ScrumDB.php');

  //$input = $_REQUEST['bId']; // Get table from user input
  $input = "1 ";
  $input2 = explode(" ", $input);
  $table = $input2[0];
  $rId = "x";
  if (!is_null($input2[1])) {
    $rId = $input2[1];
  }
  //$table = "1";
  //$rId = $_REQUEST['aRc']; // Get record from user input

  $scrumDB = new ScrumDB(); // Create ScrumDB object
  $rRecord; // Set scope

  if ($rId == "x") {
    // Call getRecords, sending it rRecord
    $rRecord = $scrumDB->getRecords($table);
  }

  $data = array(); // Create an array to store separate product fields/variables
  if ($table == "1") {
    //$data['rc'] = $rRecord->toString(); // Store a set of all properties in array
    // $data['rc1'] = $rRecord->getId();
    // $data['rc2'] = $rRecord->getFirstName();
    // $data['rc3'] = $rRecord->getLastName();
    // $data['rc4'] = $rRecord->getEmail();
    // $data['rc5'] = $rRecord->getPhone();
    //$data['rc1'] = $rRecord->getId();
    $data['rc1'] = "test";
    $data['rc1'] = mysqli_fetch_assoc($rRecord);
    //$data['rc1'] = mysqli_use_result($rRecord);
    //$data['rc1'] = $rRecord;
  }
  //print($rRecord);
  print(json_encode($data));
?>
