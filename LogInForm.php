
<html>
<head>

  <title>Buy-Sell Online</title>

  <link rel="stylesheet" type="text/css" href="CssFile.css">
  <script>
  function validate() {
    
	var id = document.frm.id.value;
	var pw = document.frm.psw.value;
    if (id == "" || pw == "")
	{ alert("Please Insert your ID and password");
		return false; }		
}
</script>

</head>
<body>
<br><a href="index.php">Go Back To Home</a>
<h1> Please Login </h1>

<div>
<form action="LoginCheck.php" method="post" onsubmit="return validate()" name="frm" id="login">
  ID:<br>
  <input type="text" id="mytext" name="id" placeholder="your username">
  <br>
  Password:<br>
  <input type="password" id="ps" name="psw" placeholder="password">
  <br><br>
  <input type="submit" value="Login"><br>
</form> 
</div>



</body>
</html>
