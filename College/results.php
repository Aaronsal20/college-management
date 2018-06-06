<?php
include('db.php');
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];
$sub6 = $_POST['sub6'];
if($sub1 < 0 && $sub1 > 100)  {
echo "<link href='style1.css' rel='stylesheet' type='text/css'>Enter Valid Details";
}
else if($sub2 < 0 && $sub2>100)  {
echo "<link href='style1.css' rel='stylesheet' type='text/css'>Enter Valid Details";
}
else if($sub3 < 0 && $sub3>100)  {
echo "<link href='style1.css' rel='stylesheet' type='text/css'>Enter Valid Details";
}
else if($sub4 < 0 && $sub4>100)  {
echo "<link href='style1.css' rel='stylesheet' type='text/css'>Enter Valid Details";
}
else if($sub5 < 0 && $sub5>100)  {
echo "<link href='style1.css' rel='stylesheet' type='text/css'>Enter Valid Details";
}
else if($sub6 < 0 && $sub6>100)  {
echo "<link href='style1.css' rel='stylesheet' type='text/css'>Enter Valid Details";
}
else{$query = "INSERT INTO results (usn,sub1,sub2,sub3,sub4,sub5,sub6) VALUES ('$_POST[usn]','$_POST[sub1]','$_POST[sub2]','$_POST[sub3]','$_POST[sub4]','$_POST[sub5]','$_POST[sub6]')";
if(!mysql_db_query($dbname,$query,$link_id)) die(mysql_error());
echo "<link href='style1.css' rel='stylesheet' type='text/css'>Thank you!";
echo "<a href = 'college.html'>Go Back Home</a>";
}
