<html>
<head>
  <script>
  var url = "login1.php"
  var what = "LoginStatus(req.responseText)";
  function CheckLogin()
  {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    DoCallback("username="+username+"&password="+password);
  }
  function LoginStatus(Status)
  {
    if(status == 0)
      alert("Bad Login!");
    else
      alert("Login OK!");
  }
  </script>
  <script src ="ajax.js" type = "text/javascript"></script>
</head>
<body>
  <pre>
  <link href='style2.css' rel='stylesheet' type='text/css'>
  <form method="post" action="login1.php">
    <a id = "head">LOGIN:<br><br></a>
    USN:
    <input type = "name" name="usn">
    Password:
    <input type = "password" name = "pass"><br>
    <input type = "submit" value = "Submit">
  </form>
  </pre>
</body>
</html>
