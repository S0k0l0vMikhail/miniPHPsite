<?php
$mysqli = false;
function connectDB() {
  global $mysqli;
  $mysqli = new mysqli ("localehoste", "root", "", "test1base");
  $mysqli -> query ("SET NAMES 'utf-8'");
}
echo "ok";

/*function closeDB () {
  global $mysqli;
  $mysqli -> close ();
}
*/
?>
