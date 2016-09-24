<?php
// createCustomer.php
// Connect to the db
require 'dbConnect.php';
$dbh = dbConnect();

// Store the customer information in the database

// Determine the new respondant ID
$id_qry = oci_parse($dbh, 'SELECT MAX(customerID) as "MAX_ID" FROM CUSTOMER');
oci_execute($id_qry);
$nrows = oci_fetch_all($id_qry, $data);
$id = $data['MAX_ID'][0] + 1;

// Extract values from webform
$formValues = array(
  'customerID' => $id,
  'title' => empty($_POST['title']) ? null : $_POST['title'],
  'firstName' => empty($_POST['firstName']) ? null : $_POST['firstName'],
  'lastName' => empty($_POST['lastName']) ? null : $_POST['lastName'],
  'middleName' => empty($_POST['middleName']) ? null : $_POST['middleName'],
  'email' => empty($_POST['email']) ? null : $_POST['email'],
  'homePh' => empty($_POST['homePh']) ? null : $_POST['homePh'],
  'mobilePh' => empty($_POST['mobilePh']) ? null : $_POST['mobilePh'],
  'address' => empty($_POST['address']) ? null : $_POST['address'],
  'city' => empty($_POST['city']) ? null : $_POST['city'],
  'postcode' => empty($_POST['postcode']) ? null : $_POST['postcode'],
  'state' => empty($_POST['state']) ? null : $_POST['state'],
  'country' => empty($_POST['country']) ? null : $_POST['country'],
  'cardType' => empty($_POST['cardType']) ? null : $_POST['cardType'],
  'cardName' => empty($_POST['cardName']) ? null : $_POST['cardName'],
  'cardNumber' => empty($_POST['cardNumber']) ? null : $_POST['cardNumber'],
  'expMonth' => empty($_POST['expMonth']) ? null : $_POST['expMonth'],
  'expYear' => empty($_POST['expYear']) ? null : $_POST['expYear'],
  'verificationCd' => empty($_POST['verificationCd']) ? null : $_POST['verificationCd'],
  'billAddress' => empty($_POST['billAddress']) ? null : $_POST['billAddress'],
  'billCity' => empty($_POST['billCity']) ? null : $_POST['billCity'],
  'billPostcode' => empty($_POST['billPostcode']) ? null : $_POST['billPostcode'],
  'billState' => empty($_POST['billState']) ? null : $_POST['billState'],
  'billCountry' => empty($_POST['billCountry']) ? null : $_POST['billCountry']
);

// Set the insert statement up
$sth = oci_parse($dbh, 'INSERT INTO CUSTOMER(customerID, title, firstName, lastName, middleName, email, homePh, 
       mobilePh, address, city, postcode, state, country, cardType, cardName, cardNumber, expMonth, expYear, 
       verificationCd, billAddress, billCity, billPostcode, billState, billCountry)
       VALUES ('. $id .', :title, :firstName, :lastName, :middleName, :email, :homePh, :mobilePh, :address, :city, :postcode,
       :state, :country, :cardType, :cardName, :cardNumber, :expMonth, :expYear, :verificationCd, :billAddress, :billCity, 
       :billPostcode, :billState, :billCountry)');
// Bind the values and execute
foreach ($formValues as $key => $value) {
  oci_bind_by_name($sth, ':'. $key, $value);
}
oci_execute($sth);

dbClose($dbh);
?>

