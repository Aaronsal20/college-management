<?php
include('db.php');
$username = $_POST['id'];
$password =($_POST['pass']);

$sql="SELECT * FROM staff WHERE id ='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    session_start();
    include('staffqw.html');
  } else {
      echo "Unsuccessful! $count";
  }

  ob_end_flush();
  ?>
