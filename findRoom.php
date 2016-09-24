<html>
<head>

<?php
// findRoom.php
// Connect to the db
require 'dbConnect.php';
/*
// http://stackoverflow.com/questions/12418843/room-booking-sql-query
SELECT r.room_id
FROM rooms r
WHERE r.room_id NOT IN (
    SELECT b.room_id FROM bookings b
    WHERE NOT (b.end_datetime   < '2012-09-14T18:00'
               OR
               b.start_datetime > '2012-09-21T09:00'))
ORDER BY r.room_id;
*/

// Get a list of available rooms in the chosen room type
$qry = 'SELECT r.roomNumber AS "AVAILABLE_ROOM" from ROOM r
INNER JOIN BOOKING b
ON r.roomNumber = b.roomNumber
WHERE r.roomName = :roomName AND 
r.roomNumber NOT IN (
SELECT b.roomNumber FROM BOOKING
WHERE NOT (b.checkOut < :checkoutDate OR b.checkIn > :checkinDate) )
ORDER BY r.roomNumber';

$sth = oci_parse($dbh, $qry);
oci_bind_by_name($sth, ':roomName', $_POST['roomName']);
oci_bind_by_name($sth, ':checkinDate', $_POST['inDate']);
oci_bind_by_name($sth, ':checkoutDate', $_POST['outDate']);
oci_execute($sth);
$nrows = oci_fetch_all($sth, $roomList); //, null, null, OCI_FETCHSTATEMENT_BY_ROW);

if ($nrows > 0) {
  //echo "Found a room: {$roomList['AVAILABLE_ROOM'][0]}";
  $_SESSION['numAdults'] = $_POST['numAdults'];
  $_SESSION['numChild'] = $_POST['numChildren'];
  $_SESSION['checkoutDate'] = $_POST['outDate'];
  $_SESSION['checkinDate'] = $_POST['inDate'];
  $_SESSION['roomNo'] = $roomList['AVAILABLE_ROOM'][0];
  unset($_SESSION['bookStatus']);
  echo '<meta http-equiv="refresh" content="0;url=guestInformation.html">'
} else {
  $_SESSION['bookStatus'] = false;
  echo '<meta http-equiv="refresh" content="0;url=index.html">'
}

?>

</head>
<body>
</body>
</html>
