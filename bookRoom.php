<?php
session_start();
// bookRoom.php

require_once 'generalFunctions.php';
function bookRoom($dbh, $custId) {
  $qry = 'INSERT INTO BOOKING(bookID, roomNumber, customerID, checkIn, checkOut, adults, children)
    VALUES (:bookId, :roomNo, :custId, :checkinDate, :checkoutDate, :numAdults, :numChild)';
  
  // Find the max booking ID and increment it
  $id_qry = oci_parse($dbh, 'SELECT MAX(bookID) as "MAX_ID" FROM BOOKING');
  oci_execute($id_qry);
  $nrows = oci_fetch_all($id_qry, $data);
  $id = $data['MAX_ID'][0] + 1;
  
  $sth = oci_parse($dbh, $qry);

  // Bind the booking and customer id
  oci_bind_by_name($sth, ':custId', $custId);
  oci_bind_by_name($sth, ':bookId', $id);

  // Bind the session variables
  oci_bind_by_name($sth, ':numAdults', emptyOrNull($_SESSION['numAdults']));
  oci_bind_by_name($sth, ':numChild', emptyOrNull($_SESSION['numChild']));
  oci_bind_by_name($sth, ':checkoutDate', emptyOrNull($_SESSION['checkoutDate']));
  oci_bind_by_name($sth, ':checkinDate', emptyOrNull($_SESSION['checkinDate']));
  oci_bind_by_name($sth, ':roomNo', emptyOrNull($_SESSION['roomNo']));
  oci_execute($sth);
  unset($_SESSION['numChild']);
  unset($_SESSION['checkoutDate']);
  unset($_SESSION['checkinDate']);
  unset($_SESSION['roomNo']);
  unset($_SESSION['numAdults']);
}
?>
