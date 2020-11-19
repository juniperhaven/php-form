<?php
// echo 'This is PHP.';

if(isset($_GET["FirstName"])) {
  echo $_GET["FirstName"];
}
else {
  echo '
  <form action="">
  First Name: <input type="text" name="FirstName"/>
  <br/>
  <input type="submit">
  </form>
  ';
}
?>
