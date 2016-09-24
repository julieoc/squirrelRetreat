<?php
session_start();

function emptyOrNull($v) {
  return empty($v) ? null : $v;
}

function echoSafeText($s) {
  echo(htmlspecialchars($s, ENT_QUOTES));
}
?>
