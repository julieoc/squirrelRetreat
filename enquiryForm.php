<?php
// customerEnquiry.php
function getCustomerEnquiry($dbh) {
  $qry = 'SELECT * FROM ENQUIRYFORM';
  $oci_qry = oci_parse($dbh, $qry);
  oci_execute($ocy_qry);
  $nrows = oci_fetch_all($oci_qry, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);

  return $data;
}
?>