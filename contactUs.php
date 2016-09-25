<?php

session_start();
require_once 'generalFunctions.php';
// pollUpdate.php
// Connect to the db
require_once 'dbConnect.php';
$dbh = dbConnect();
// Determine the new respondant ID
$id_qry = oci_parse($dbh, 'SELECT MAX(enquiryNo) as "MAX" FROM enquiryForm');
oci_execute($id_qry);
$nrows = oci_fetch_all($id_qry, $data);
$id = $data['MAX'][0] + 1;




// Store the data from the poll into the database

  $sth = oci_parse($dbh, "INSERT INTO ENQUIRYFORM(enquiryNo, firstName, lastname, enquiry, submitDate) 
                          VALUES (:enquiryNo, :firstName, :lastName, :enquiry, TO_DATE(:submitDate, 'YYYY-MM-DD')");
  oci_bind_by_name($sth, ':enquiryNo', $id);
  oci_bind_by_name($sth, ':firstName', emptyOrNull($_POST['firstname']));
  oci_bind_by_name($sth, ':lastName', emptyOrNull($_POST['lastname']));
  oci_bind_by_name($sth, ':enquiry', emptyOrNull($_POST['enquiry']));
  oci_bind_by_name($sth, ':submitDate', date('Y-m-d'));
  oci_execute($sth);
    

dbClose($dbh);





?>