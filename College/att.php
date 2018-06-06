<?php
include("db.php");
session_start();
$stud = $_SESSION["usn"];
$sql = mysql_query("SELECT * FROM attendance WHERE usn = '$stud' ");
/*$sql2 = mysql_query("SELECT sub2 FROM attendance WHERE usn LIKE stud ");
$sql3 = mysql_query("SELECT sub3 FROM attendance WHERE usn LIKE 'stud' ");
$sql4 = mysql_query("SELECT sub4 FROM attendance WHERE usn LIKE 'stud' ");
$sql5 = mysql_query("SELECT sub5 FROM attendance WHERE usn LIKE 'stud' ");
$sql6 = mysql_query("SELECT sub6 FROM attendance WHERE usn LIKE 'stud' ");
*/
echo "<a href = 'logout.php' text-align: center;>Log Out</a>";
while ($row = mysql_fetch_row($sql)){
 echo "<h1>Attendance Record:</h1><link href='style1.css' rel='stylesheet' type='text/css'><p>USN: $row[0]<br> Unix System Programming(15CS51):$row[2]<br> Finite Automata and Formal Languages(15CS52):$row[3]<br>Software Engineering(10CS53):$row[4]<br>Object Oriented Modeling and Design(10CS54):$row[5]<br>Advanced Algorithms:$row[6]<br>Elective:$row[7]</p> ";
$classesconducted = $row[1];
$sub1 = $row[2];
$sub2 = $row[3];
$sub3 = $row[4];
$sub4 = $row[5];
$sub5 = $row[6];
$sub6 = $row[7];
 }
 $minatt = 0.75;
 $totalclasses = 40;

 $minclasstoatt = $totalclasses * $minatt;
 echo "Unix System programming:<br>";
 $remain = $totalclasses - $classesconducted;
 if(($sub1 + $remain) < $minclasstoatt){
  print "Attendance shortage<br>";}
else if(($sub1 +$remain) >= $minclasstoatt)
  print "";
if($sub1 >= $minclasstoatt )
  print "Attendance criteria has been met<br>";
else {
  $remamin = $minclasstoatt - $sub1;
  echo "Classes to attend to be eligible<br>";
  print "$remamin<br><br><br>";
}


echo "Finite Automata and Formal Languages<br>";
if(($sub2 + $remain) < $minclasstoatt)
 print "Attendance shortage<br>";
else if(($sub2 +$remain) >= $minclasstoatt)
 print "";
 if($sub2 >= $minclasstoatt )
 print "Attendance criteria has been met<br>";
else {
 $remamin = $minclasstoatt - $sub2;
 echo "Classes to attend to be eligible<br>";
 print "$remamin<br><br><br>";
}


echo "Software Engineering<br>";
if(($sub3 + $remain) < $minclasstoatt){
 print "Attendance shortage<br>";}
else if(($sub3 +$remain) >= $minclasstoatt)
 print "";
if($sub3 >= $minclasstoatt )
 print "Attendance criteria has been met<br>";
else {
 $remamin = $minclasstoatt - $sub3;
 echo "Classes to attend to be eligible<br>";
 print "$remamin<br><br><br>";
}

echo "Object Oriented Modeling and Design<br>";
if(($sub4 + $remain) < $minclasstoatt)
 print "Attendance shortage<br>";
else if(($sub4 +$remain) >= $minclasstoatt)
 print "";
if($sub4 >= $minclasstoatt )
 print "Attendance criteria has been met<br>";
else {
 $remamin = $minclasstoatt - $sub4;
 echo "Classes to attend to be eligible<br>";
 print "$remamin<br><br><br>";
}


echo "Advanced Algorithms:<br>";
if(($sub5 + $remain) < $minclasstoatt)
 print "Attendance shortage<br>";
else if(($sub5 +$remain) >= $minclasstoatt)
 print "";
if($sub5 >= $minclasstoatt )
 print "Attendance criteria has been met<br>";
else {
 $remamin = $minclasstoatt - $sub5;
 echo "Classes to attend to be eligible<br>";
 print "$remamin<br><br><br>";
}

echo "Elective:<br>";
if(($sub6 + $remain) < $minclasstoatt)
 print "Attendance shortage<br>";
else if(($sub6 +$remain) >= $minclasstoatt)
 print "";
if($sub6 >= $minclasstoatt )
 print "Attendance criteria has been met<br>";
else {
 $remamin = $minclasstoatt - $sub6;
 echo "Classes to attend to be eligible<br>";
print "$remamin<br><br><br>";
}

?>
