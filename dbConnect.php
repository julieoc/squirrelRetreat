<?php
// dbConnect.php
// Login to the database
function dbConnect() {
  $config_file = parse_ini_file('/home/juliec/public_html/SIT774/config/dbConfig.ini');
  $user = $config_file['username'];
  $password = $config_file['password'];
  $dbh = oci_connect($user, $password, "SSID");
  return $dbh;
}

function dbClose($dbh) {
  if ($dbh) {
    OCILogoff($dbh);
  }
}
?>
