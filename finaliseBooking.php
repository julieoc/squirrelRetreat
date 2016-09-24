<?php
// finaliseBooking.php
require 'dbConnect.php';
require 'createCustomer.php';
require 'bookRoom.php';

$dbh = dbConnect();
$customerId = createCustomer($dbh);
bookRoom($dbh, $customerId);
dbClose($dbh);
?>