<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'mysql';

  $link_id = mysql_connect($dbhost, $dbuser,$dbpass);
  if(!$link_id) {
    die('could not connect:'.mysql_error());}
    echo "success in database connection <br>";
$dbname = $dbusername."_".$dbname;

$query = "INSERT INTO student (firstname,last_name,usn,password) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[usn]','$_POST[password]')";
if(!mysql_db_query($dbname,$query,$link_id)) die(mysql_error());
echo "Thank you for registering."
echo "<a href = "college.html">Click here to return home.</a>";

  ?>
