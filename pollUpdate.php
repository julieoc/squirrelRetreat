<?php
// pollUpdate.php
// Connect to the db
require 'dbConnect.php';
$dbh = dbConnect();

// Store the poll results in the database
$qNum = 1;  // Setup the first question number as 1

// Determine the new respondant ID
$id_qry = oci_parse($dbh, 'SELECT MAX(responseID) as "MAX_ID" FROM POLL_RESULTS');
oci_execute($id_qry);
$nrows = oci_fetch_all($id_qry, $data);
$id = $data['MAX_ID'][0] + 1;

// $tore the data from the poll into the database
foreach($_POST as $name => $value) {
  $sth = oci_parse($dbh, 'INSERT INTO POLL_RESULTS(qNum, responseID, response) VALUES (:qnum,'. $id .', :rating)');
  oci_bind_by_name($sth, ':qnum', $qNum);
  oci_bind_by_name($sth, ':rating', $value);
  oci_execute($sth);
  $qNum++;
}

dbClose($dbh);
?>
