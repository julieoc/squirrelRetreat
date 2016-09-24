<?php
// bookRoom.php
function bookRoom($dbh, $custId) {
  $qry = 'INSERT INTO BOOKING(bookID, roomNumber, customerID, checkIn, checkOut, adults, children)
    VALUES (:bookId, :roomNo, :custId, :checkinDate, :checkoutDate, :numAdults, :numChild)';
  
  // Find the max booking ID and increment it
  $id_qry = oci_parse($dbh, 'SELECT MAX(bookID) as "MAX_ID" FROM BOOKING');
  oci_execute($id_qry);
  $nrows = oci_fetch_all($id_qry, $data);
  $id = $data['MAX_ID'][0] + 1;
  
  // Bind the booking and customer id
  oci_bind_by_name($sth, ':custId', $custId);
  oci_bind_by_name($sth, ':bookId', $id);
  
  // Bind the session variables
  oci_bind_by_name($sth, ':numAdults', $_SESSION['numAdults']);
  oci_bind_by_name($sth, ':numChild', $_SESSION['numChild']);
  oci_bind_by_name($sth, ':checkoutDate', $_SESSION['checkoutDate']);
  oci_bind_by_name($sth, ':checkinDate', $_SESSION['checkinDate']);
  oci_bind_by_name($sth, ':roomNo', $_SESSION['roomNo']);
  unset($_SESSION['numChild']);
  unset($_SESSION['checkoutDate']);
  unset($_SESSION['checkinDate']);
  unset($_SESSION['roomNo']);
  unset($_SESSION['numAdults']);
  
  oci_execute($sth);
}
?>
