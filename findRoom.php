<?php
session_start();
?>
<html>
<head>

<?php
// findRoom.php
// Connect to the db
require_once 'dbConnect.php';
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
$qry = 'SELECT roomNumber AS "AVAILABLE_ROOM" from ROOM
WHERE roomType = (
  SELECT ROOMID FROM ROOM_TYPE 
  WHERE ROOMNAME = :roomName)
AND roomNumber NOT IN (
SELECT roomNumber FROM BOOKING
WHERE NOT (checkOut < :checkoutDate OR checkIn > :checkinDate) )
ORDER BY roomNumber';

$dbh = dbConnect();
$sth = oci_parse($dbh, $qry);
oci_bind_by_name($sth, ':roomName', $_POST['roomType']);
oci_bind_by_name($sth, ':checkinDate', $_POST['inDate']);
oci_bind_by_name($sth, ':checkoutDate', $_POST['outDate']);
oci_execute($sth);
$nrows = oci_fetch_all($sth, $roomList);
if ($nrows > 0) {
  $_SESSION['numAdults'] = $_POST['numAdults'];
  $_SESSION['numChild'] = $_POST['numChildren'];
  $_SESSION['checkoutDate'] = $_POST['outDate'];
  $_SESSION['checkinDate'] = $_POST['inDate'];
  $_SESSION['roomNo'] = $roomList['AVAILABLE_ROOM'][0];
  unset($_SESSION['bookStatus']);
  echo '<meta http-equiv="refresh" content="0;url=guestInformation.php">';
} else {
  $_SESSION['bookStatus'] = false;
  echo '<meta http-equiv="refresh" content="0;url=index.php">';
}
dbClose($dbh);
?>

</head>
<body>
</body>
</html>
