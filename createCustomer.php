<?php
// createCustomer.php

// Store the customer information in the database
// Returns the customer ID that made the booking
function createCustomer() {
  // Determine the new respondant ID
  $id_qry = oci_parse($dbh, 'SELECT MAX(customerID) as "MAX_ID" FROM CUSTOMER');
  oci_execute($id_qry);
  $nrows = oci_fetch_all($id_qry, $data);
  $id = $data['MAX_ID'][0] + 1;

  // Extract values from webform
  $customerValues = array(
    'title' => empty($_POST['titleSelection']) ? null : $_POST['titleSelection'],
    'firstName' => empty($_POST['firstName']) ? null : $_POST['firstName'],
    'lastName' => empty($_POST['lastName']) ? null : $_POST['lastName'],
    'middleName' => empty($_POST['middleName']) ? null : $_POST['middleName'],
    'email' => empty($_POST['emailAddress']) ? null : $_POST['emailAddress'],
    'homePh' => empty($_POST['homePhoneNumber']) ? null : $_POST['homePhoneNumber'],
    'mobilePh' => empty($_POST['mobilePhoneNumber']) ? null : $_POST['mobilePhoneNumber'],
    'address' => empty($_POST['address']) ? null : $_POST['address'],
    'city' => empty($_POST['city']) ? null : $_POST['city'],
    'postcode' => empty($_POST['postalCode']) ? null : $_POST['postalCode'],
    'state' => empty($_POST['state']) ? null : $_POST['state'],
    'country' => empty($_POST['country']) ? null : $_POST['country'],
    'cardType' => empty($_POST['paymentOption']) ? null : $_POST['paymentOption'],
    'cardName' => empty($_POST['cardHolderName']) ? null : $_POST['cardHolderName'],
    'cardNumber' => empty($_POST['cardNumber']) ? null : $_POST['cardNumber'],
    'expMonth' => empty($_POST['expiryMonth']) ? null : $_POST['expiryMonth'],
    'expYear' => empty($_POST['yearOfExpiry']) ? null : $_POST['yearOfExpiry'],
    'verificationNo' => empty($_POST['verificationNo']) ? null : $_POST['verificationNo'],
    'billAddress' => empty($_POST['billingAddress']) ? null : $_POST['billingAddress'],
    'billCity' => empty($_POST['billingCity']) ? null : $_POST['billingCity'],
    'billPostcode' => empty($_POST['billingPostCode']) ? null : $_POST['billingPostCode'],
    'billState' => empty($_POST['billingState']) ? null : $_POST['billingState'],
    'billCountry' => empty($_POST['billingCountry']) ? null : $_POST['billingCountry']
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
    oci_bind_by_name($sth, ':'. $key, $value);
  }
  oci_execute($sth);
  return $id;
}

?>
