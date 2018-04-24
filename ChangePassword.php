<html>
<head>

  <title>Buy-Sell Online</title>

  <link rel="stylesheet" type="text/css" href="CssFile.css">
  <script>
  function validate() {
    
	var OldPassword = document.frm.OldPassword.value;
	var NewPassword = document.frm.NewPassword.value;
    if (OldPassword == "" || NewPassword == "")
	{ alert("Input Fields Cannot Be Empty");
		return false; }		
}
</script>

</head>
<body>
<br><a href="index.php">Go Back To Home</a> &nbsp; <a href="User.php">Go Back To Your Profile</a>
<?php
session_start();
$flag=$_SESSION["flag"];
$name=$_SESSION["un"];

if($flag=="ok"){
?>	
<div>
<form action="UpdatePassword.php" method="post" onsubmit="return validate()" name="frm" id="changepw">
User ID: <?php echo $name; ?> <br><br>


  Type Your Old Password:<br>
  <input type="password" id="OldPW" name="OldPassword" placeholder="Old Password">
  
  <br>
  Type Your New Password:<br>
  
  <input type="password" id="NewPW" name="NewPassword" placeholder="New Password">
  <br><br>
  
  
  <input type="submit" value="Change Password"><br>
</form> 
</div>
<?php	
	
}

else
{
	echo "Login";
}	
?>
</body>
</html>