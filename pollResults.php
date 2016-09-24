<?php
// pollResults.php
function getPollResults($dbh) {
  $qry = 'SELECT P.qNum as QNUM, P.question as QUESTION,
    AVG(R.RESPONSE) AS AVG_RATING, COUNT(R.RESPONSE) as NUMVOTES
    FROM POLL_RESULTS R
    INNER JOIN POLL_QUESTION P
    ON P.qNum = R.qNum
    GROUP BY P.qNum, P.question
    ORDER BY P.qNum';
  $oci_qry = oci_parse($dbh, $qry);
  oci_execute($oci_qry);
  $nrows = oci_fetch_all($oci_qry, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);

  return $data;
}
?>

