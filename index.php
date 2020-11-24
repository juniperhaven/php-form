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
  <p>First Name: <input type="text" name="FirstName"/></p>
  <p>Last Name: <input type="text" name="LastName"/></p>
  <p>Favorite Color</p>
  <p><input type="radio" name="FavoriteColor" value="red"/>red</p>
  <p><input type="radio" name="FavoriteColor" value="purple"/>purple</p>
  <p><input type="radio" name="FavoriteColor" value="green"/>green</p>
  <br/>
  <input type="submit">
  </form>';
}
?>
