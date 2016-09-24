<?php
function echoSafeText($s) {
  echo(htmlspecialchars($s, ENT_QUOTES));
}
?>