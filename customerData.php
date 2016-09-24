<?php
session_start();
// customerData.php
function getCustomerInformation($dbh) {
  $qry = 'SELECT * FROM CUSTOMER ORDER BY customerID';
  $oci_qry = oci_parse($dbh, $qry);
  oci_execute($oci_qry);
  $nrows = oci_fetch_all($oci_qry, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);

  return $data;
}
?>
