<html>
<head>
  <title> Administration </title>
</head>
<body>

<?php

require 'dbConnect.php';
require 'pollResults.php';
//require 'bookingInformation.php';
//require 'customerData.php';

$conn = dbConnect();

$pollResults = getPollResults($conn);
//$bookings = getBookingHistory($conn);
//$customers = getCustomerInformation($conn);

foreach ($pollResults as $row) {
  echo "{$row['QNUM']} - {$row['QUESTION']}:    {$row['AVG_RATING']} ({$row['NUMVOTES']} votes cast)<br>";
}

/*foreach ($bookings as $row) {
  echo "BOOKING!!<br>";
}*/

dbClose($conn);

?>

</body>
</html>
