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

<body>
Thank you for booking. We look forward to seeing you.

Redirecting you back to the homepage for the Squirrel Retreat.
<?php require_once 'footer.php'; ?>
