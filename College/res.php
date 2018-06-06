<?php
include("db.php");
session_start();
$stud = $_SESSION["usn"];
$sql = mysql_query("SELECT * FROM results WHERE usn = '$stud' ");
/*$sql2 = mysql_query("SELECT sub2 FROM attendance WHERE usn LIKE stud ");
$sql3 = mysql_query("SELECT sub3 FROM attendance WHERE usn LIKE 'stud' ");
$sql4 = mysql_query("SELECT sub4 FROM attendance WHERE usn LIKE 'stud' ");
$sql5 = mysql_query("SELECT sub5 FROM attendance WHERE usn LIKE 'stud' ");
$sql6 = mysql_query("SELECT sub6 FROM attendance WHERE usn LIKE 'stud' ");
*/
echo "<a href = 'logout.php'>Log Out</a>";
while ($row = mysql_fetch_row($sql)){
  echo "<h1>Results:</h1><link href='style1.css' rel='stylesheet' type='text/css'><p>USN: $row[0]<br> Unix System Programming(15CS51):$row[1]/100<br> Finite Automata and Formal Languages(15CS52):$row[2]/100<br>Software Engineering(10CS53):$row[3]/100<br>Object Oriented Modeling and Design(10CS54):$row[4]/100<br>Advanced Algorithms:$row[5]/100<br>Elective:$row[6]/100</p> ";
 }
?>
