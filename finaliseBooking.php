<?php
session_start();
?>
 <!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Thank you for your feedback">
<meta name="keywords" content="poll,honda,squirrel,retreat,accomodation,hotel, holiday, dining, heston blumenthal, acacia tree">
<meta name="author" content="Julie Oanh Cao">
<meta http-equiv="refresh" content="3; URL='index.php'">
<title>Thank you for your feedback
</title>
</head>
<?php
// finaliseBooking.php
require_once 'dbConnect.php';
require_once 'createCustomer.php';
require_once 'bookRoom.php';

$dbh = dbConnect();
$customerId = createCustomer($dbh);
bookRoom($dbh, $customerId);
dbClose($dbh);
?>

<body>
Thank you for booking. We look forward to seeing you.

Redirecting you back to the homepage for the Squirrel Retreat.
<?php require_once 'footer.php'; ?>
