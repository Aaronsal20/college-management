<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'student';

  $link_id = mysql_connect($dbhost, $dbuser,$dbpass);
  if(!$link_id) {
    die('could not connect:'.mysql_error());}
      echo "success";
  $dbname = $dbname;
  if(!mysql_select_db($dbname)) die(mysql_error());


  ?>
