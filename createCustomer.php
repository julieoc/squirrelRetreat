<?php
session_start();
// createCustomer.php
require_once 'generalFunctions.php';
// Store the customer information in the database
// Returns the customer ID that made the booking
function createCustomer($dbh) {
  // Determine the new respondant ID
  $id_qry = oci_parse($dbh, 'SELECT MAX(customerID) as "MAX_ID" FROM CUSTOMER');
  oci_execute($id_qry);
  $nrows = oci_fetch_all($id_qry, $data);
  $id = $data['MAX_ID'][0] + 1;

  // Extract values from webform
  $customerValues = array(
    ':title' => emptyOrNull($_POST['titleSelection']),
    ':firstName' => emptyOrNull($_POST['firstName']),
    ':lastName' => emptyOrNull($_POST['lastName']),
    ':middleName' => emptyOrNull($_POST['middleName']),
    ':email' => emptyOrNull($_POST['emailAddress']),
    ':homePh' => emptyOrNull($_POST['homePhoneNumber']),
    ':mobilePh' => emptyOrNull($_POST['mobilePhoneNumber']),
    ':address' => emptyOrNull($_POST['address']),
    ':city' => emptyOrNull($_POST['city']),
    ':postcode' => emptyOrNull($_POST['postalCode']),
    ':state' => emptyOrNull($_POST['state']),
    ':country' => emptyOrNull($_POST['country']),
    ':cardType' => emptyOrNull($_POST['paymentOption']),
    ':cardName' => emptyOrNull($_POST['cardHolderName']),
    ':cardNumber' => emptyOrNull($_POST['cardNumber']),
    ':expMonth' => emptyOrNull($_POST['expiryMonth']),
    ':expYear' => emptyOrNull($_POST['yearOfExpiry']),
    ':verificationCd' => emptyOrNull($_POST['verificationNo']),
    ':billAddress' => emptyOrNull($_POST['billingAddress']),
    ':billCity' => emptyOrNull($_POST['billingCity']),
    ':billPostcode' => emptyOrNull($_POST['billingPostCode']),
    ':billState' => emptyOrNull($_POST['billingState']),
    ':billCountry' => emptyOrNull($_POST['billingCountry'])
  );

  // Set the insert statement up
  $sth = oci_parse($dbh, 'INSERT INTO CUSTOMER(customerID, title, firstName, lastName, middleName, email, homePh, 
         mobilePh, address, city, postcode, state, country, cardType, cardName, cardNumber, expMonth, expYear, 
         verificationCd, billAddress, billCity, billPostcode, billState, billCountry)
         VALUES ('. $id .', :title, :firstName, :lastName, :middleName, :email, :homePh, :mobilePh, :address, :city, :postcode,
         :state, :country, :cardType, :cardName, :cardNumber, :expMonth, :expYear, :verificationCd, :billAddress, :billCity, 
         :billPostcode, :billState, :billCountry)');
  // Bind the values and execute
  foreach ($customerValues as $key => $value) {
    oci_bind_by_name($sth, $key, $customerValues[$key]);
  }
  oci_execute($sth);
  return $id;
}

?>
