
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

// Check $username and $password

/*if(empty($_POST['username']))
{
    echo "UserName/Password is empty!";
    return false;
}
if(empty($_POST['password']))
{
    echo "Password is empty!";
    return false;
}
*/

// Define $username and $password
$username = $_POST['usn'];
$password =($_POST['pass']);


// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM details WHERE usn ='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    echo "Success! $count";
    session_start();
    $_SESSION["usn"] = $username;
    echo include('login1.html');
} else {
    echo "Unsuccessful! $count";
}

ob_end_flush();
?>
