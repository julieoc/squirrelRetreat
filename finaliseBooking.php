<?php
session_start();
// finaliseBooking.php
require_once 'dbConnect.php';
require_once 'createCustomer.php';
require_once 'bookRoom.php';

$dbh = dbConnect();
$customerId = createCustomer($dbh);
bookRoom($dbh, $customerId);
dbClose($dbh);
?>
