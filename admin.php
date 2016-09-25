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
require_once 'contactUs.php';
$conn = dbConnect();

$pollResults = getPollResults($conn);
$bookings = getBookingHistory($conn);
$customers = getCustomerInformation($conn);
$enquiryForm = getCustomerEnquiry($conn);
dbClose($conn);
?>
<h2>POLL RESULTS</h2>
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
<h2>BOOKING INFORMATION</h2>
<table>
<tr>
<th>Booking ID </th>
<th>Room number </th>
<th>Customer ID </th>
<th>Checkin date </th>
<th>Checkout date </th>
<th>Adults </th>
<th>Children </th>
</tr>
<?php
foreach($bookings as $row){
?>
<tr>
<td><?php echoSafeText($row['BOOKID']); ?></td>
<td><?php echoSafeText($row['ROOMNUMBER']); ?></td>
<td><?php echoSafeText($row['CUSTOMERID']); ?></td>
<td><?php echoSafeText($row['CHECKIN']); ?></td>
<td><?php echoSafeText($row['CHECKOUT']); ?></td>
<td><?php echoSafeText($row['ADULTS']); ?></td>
<td><?php echoSafeText($row['CHILDREN']); ?></td>
</tr>
<?php
}
?>
</table>
<h2>CUSTOMER INFORMATION</h2>
<table>
<tr>
<th>Customer ID </th>
<th>Title </th>
<th>First name </th>
<th>Last name </th>
<th>Middle name </th>
<th>Email </th>
<th>Home phone </th>
<th>Mobile phone </th>
<th>Address</th>
<th>City</th>
<th>Postcode </th>
<th>State </th>
<th>Country</th>
<th>Creditcard type</th>
<th>Card name</th>
<th>Card number</th>
<th>Expiry month</th>
<th>Expiry year</th>
<th>Verification code</th>
<th>Billing address</th>
<th>Billing city</th>
<th>Billing postcode</th>
<th>Billing state</th>
<th>Billing country</th>
</tr>
<?php
foreach($customers as $row){
?>
<tr>
<td><?php echoSafeText($row['CUSTOMERID']); ?></td>
<td><?php echoSafeText($row['TITLE']);?></td>
<td><?php echoSafeText($row['FIRSTNAME']);?></td>
<td><?php echoSafeText($row['LASTNAME']);?></td>
<td><?php echoSafeText($row['MIDDLENAME']);?></td>
<td><?php echoSafeText($row['EMAIL']);?></td>
<td><?php echoSafeText($row['HOMEPH']);?></td>
<td><?php echoSafeText($row['MOBILEPH']);?></td>
<td><?php echoSafeText($row['ADDRESS']);?></td>
<td><?php echoSafeText($row['CITY']);?></td>
<td><?php echoSafeText($row['POSTCODE']);?></td>
<td><?php echoSafeText($row['STATE']);?></td>
<td><?php echoSafeText($row['COUNTRY']);?></td>
<td><?php echoSafeText($row['CARDTYPE']);?></td>
<td><?php echoSafeText($row['CARDNAME']);?></td>
<td><?php echoSafeText($row['CARDNUMBER']);?></td>
<td><?php echoSafeText($row['EXPMONTH']);?></td>
<td><?php echoSafeText($row['EXPYEAR']);?></td>
<td><?php echoSafeText($row['VERIFICATIONCD']);?></td>
<td><?php echoSafeText($row['BILLADDRESS']);?></td>
<td><?php echoSafeText($row['BILLCITY']);?></td>
<td><?php echoSafeText($row['BILLPOSTCODE']);?></td>
<td><?php echoSafeText($row['BILLSTATE']);?></td>
<td><?php echoSafeText($row['BILLCOUNTRY']);?></td>
<?php
}
?>

<h2>ENQUIRYFORM</h2>
<table>
<tr>
<th>Enquiry no. </th>
<th>First Name </th>
<th>Last Name </th>
<th>Enquiry </th>
<th>Submit Date </th>
</tr>
<?php
foreach($enquiryForm as $row){
?>
<tr>
<td><?php echoSafeText($row['ENQUIRYNO']); ?></td>
<td><?php echoSafeText($row['FIRSTNAME']); ?></td>
<td><?php echoSafeText($row['LASTNAME']); ?></td>
<td><?php echoSafeText($row['ENQUIRY']); ?></td>
<td><?php echoSafeText($row['SUBMITDATE']); ?></td>
</tr>
<?php
}
?>



</table>
<?php require_once 'footer.php'; ?>

