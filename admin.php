<?php session_start(); ?>
<html>
<head>
  <title> Administration </title>
</head>
<body>

<?php
require_once 'generalFunctions.php';
require_once 'dbConnect.php';
require_once 'pollResults.php';
require_once 'bookingInformation.php';
require_once 'customerData.php';

$conn = dbConnect();

$pollResults = getPollResults($conn);
$bookings = getBookingHistory($conn);
$customers = getCustomerInformation($conn);
dbClose($conn);

?>
<h1>POLL RESULTS</h1>
<table>
<tr><th>Question number </th>
<th>Question</th>
<th>Average rating</th>
<th>Number of votes</th>
</tr>
<?php
foreach ($pollResults as $row) {
?>
<tr>
<td><?php echoSafeText($row['QNUM']); ?></td>
<td><?php echoSafeText($row['QUESTION']); ?></td>
<td><?php echoSafeText($row['AVG_RATING']); ?></td>
<td><?php echoSafeText($row['NUMVOTES']); ?></td>
</tr>
<?php 
} 
?>
</table>
<table>
<th><td> BOOKING INFORMATION</td></th>
<?php
foreach($bookings as $row){
?>
<tr>
<td><?php echoSafeText($row['bookID']); ?></td>
<td><?php echoSafeText($row['roomNumber']); ?></td>
<td><?php echoSafeText($row['customerID']); ?></td>
<td><?php echoSafeText($row['checkIn']); ?></td>
<td><?php echoSafeText($row['checkOut']); ?></td>
<td><?php echoSafeText($row['adults']); ?></td>
<td><?php echoSafeText($row['children']); ?></td>
</tr>
<?php
}
?>
</table>
<table>
<th><td> CUSTOMER INFORMATION </td></th>
<?php
foreach($customers as $row){
?>
<tr>
<td><?php echoSafeText($row['customerID']); ?></td>
<td><?php echoSafeText($row['title']);?></td>
<td><?php echoSafeText($row['firstName']);?></td>
<td><?php echoSafeText($row['lastName']);?></td>
<td><?php echoSafeText($row['middleName']);?></td>
<td><?php echoSafeText($row['email']);?></td>
<td><?php echoSafeText($row['homePh']);?></td>
<td><?php echoSafeText($row['mobilePh']);?></td>
<td><?php echoSafeText($row['address']);?></td>
<td><?php echoSafeText($row['city']);?></td>
<td><?php echoSafeText($row['postcode']);?></td>
<td><?php echoSafeText($row['state']);?></td>
<td><?php echoSafeText($row['country']);?></td>
<td><?php echoSafeText($row['cardType']);?></td>
<td><?php echoSafeText($row['cardName']);?></td>
<td><?php echoSafeText($row['cardNumber']);?></td>
<td><?php echoSafeText($row['expMonth']);?></td>
<td><?php echoSafeText($row['expYear']);?></td>
<td><?php echoSafeText($row['verificationCd']);?></td>
<td><?php echoSafeText($row['billAddress']);?></td>
<td><?php echoSafeText($row['billCity']);?></td>
<td><?php echoSafeText($row['billPostcode']);?></td>
<td><?php echoSafeText($row['billState']);?></td>
<td><?php echoSafeText($row['billCountry']);?></td>
<?php
}
?>
</table>
</body>
</html>
