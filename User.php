<html>
<head>

  <title>Buy-Sell Online</title>

  <link rel="stylesheet" type="text/css" href="CssFile.css">

</head>
<body>
<br><a href="index.php">Go Back To Home</a>
<?php
session_start();
$flag="";

$flag=$_SESSION["flag"];
$name=$_SESSION["un"];
$usertype=$_SESSION["usertype"];
$lastname=$_SESSION["lname"];
$firstname=$_SESSION["fname"];
$email=$_SESSION["email"];
$mobile=$_SESSION["mobile"];


if($flag=="ok"){
	if($usertype=="Admin")
	{
	 echo "<br><h1>Welcome Admin ".$lastname."</h1><br><br>";
     echo "<div>First Name: ".$_SESSION["fname"]."<br><br>";
     echo "Last Name: ".$_SESSION["lname"]."<br><br>";
     echo "Email: ".$_SESSION["email"]."<br><br>";
     echo "Gender: ".$_SESSION["gender"]."<br><br>";	 ?>
     
	 <p><a href="SignUpForm.php">Add New User</a></p>
	 <p><a href="DeleteUser.php">Delete User</a></p>
	 <p><a href="PostNewAdd.php">Post A New Add</a></p>
	 <p><a href="ShowUserAdd.php">Show Your Ads</a></p>
	 <p><a href="PostFeaturedAdd.php">Post New Featured ADD</a></p>
	 <p><a href="DeleteFeaturedAdd.php">Delete Featured Product</a></p>
	 <p><a href="DeleteProduct.php">Delete From All Products</a></p>
	 

	 <?php

	}
	else
	{		
echo "<h1>Welcome ".$name."</h1><br><br>";
echo "<div>First Name: ".$_SESSION["fname"]."<br><br>";
echo "Last Name: ".$_SESSION["lname"]."<br><br>";
echo "Email: ".$_SESSION["email"]."<br><br>";
echo "Gender: ".$_SESSION["gender"]."<br><br>";
?>
     
<p><a href="PostNewAdd.php">Post A New Add</a></p>
<p><a href="ShowUserAdd.php">Show Your Adds</a></p>

<?php  }   ?>
<br/>
<a href="ChangePassword.php">Change Password</a>
<br><br>
<a href="logout.php">Log Out</a>
<?php
}
else{
	header("Location:LogInForm.php");
}
?>
</div>
</body>
</html>