<?php
// bookRoom.php
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
$getRoomStatement = 'SELECT r.roomNumber AS "AVAILABLE_ROOM" from ROOM r
INNER JOIN BOOKING b
ON r.roomNumber = b.roomNumber
WHERE r.roomType = ? AND 
r.roomNumber NOT IN (
SELECT b.roomNumber FROM BOOKING
WHERE NOT (b.checkOut < ? OR b.checkIn > ?) )
ORDER BY r.roomNumber;';

if (count($roomList['AVAILABLE_ROOM']) > 0) {
  echo "Found a room: {$roomList['AVAILABLE_ROOM'][0]}"
} else {
  echo "No rooms are availble"
}

?>