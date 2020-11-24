<?php
// echo 'This is PHP.';

if(isset($_GET["FirstName"])) {
  // echo $_GET["FirstName"];
  echo '<pre>';
  var_dump($_GET);
  echo '</pre>';
}
else {
  echo '<form action="">
  First Name: <input type="text" name="FirstName"/>
  <br/>
  <input type="submit">
  </form>';
}
?>
