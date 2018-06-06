<?php
include('db.php');
if(isset($_POST['submit'])){
$query = "INSERT INTO attendance (usn,tot,sub1,sub2,sub3,sub4,sub5,sub6) VALUES ('$_POST[usn]','$_POST[tot]','$_POST[sub1]','$_POST[sub2]','$_POST[sub3]','$_POST[sub4]','$_POST[sub5]','$_POST[sub6]')";
if(!mysql_db_query($dbname,$query,$link_id)) die(mysql_error());
echo "<link href='style1.css' rel='stylesheet' type='text/css'>Thank you!<br>";
}else{
  $query = "UPDATE attendance
SET tot = '$_POST[tot]' ,sub1 = '$_POST[sub1]', sub2 ='$_POST[sub2]',sub3 = '$_POST[sub3]',sub4 = '$_POST[sub4]',sub5 = '$_POST[sub5]',sub6 = '$_POST[sub6]'
WHERE usn = '$_POST[usn]'";
if(!mysql_db_query($dbname,$query,$link_id)) die(mysql_error());
echo "<link href='style1.css' rel='stylesheet' type='text/css'>Thank you!<br>";
}
echo "<a href = 'college.html'>Go Back Home</a>";
 ?>
