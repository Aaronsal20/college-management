<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'student';

  $link_id = mysql_connect($dbhost, $dbuser,$dbpass);
  if(!$link_id) {
    die('could not connect:'.mysql_error());}
  //  echo "success in database connection <br>";
$dbname = $dbname;
if(!mysql_select_db($dbname)) die(mysql_error());

$query = "INSERT INTO details (firstname,last_name,usn,password) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[usn]','$_POST[pass]')";
if(!mysql_db_query($dbname,$query,$link_id)) die(mysql_error());
echo "Thank you for registering.<br>";
echo "<a href = \"college.html\">Click here to return home.</a>";

  ?>
