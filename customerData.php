<?php
// customerData.php
function getCustomerInformation($dbh) {
  $qry = 'SELECT * FROM CUSTOMER';
  $oci_qry = oci_parse($dbh, $qry);
  oci_execute($ocy_qry);
  $nrows = oci_fetch_all($oci_qry, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);

  return $data;
}
?>