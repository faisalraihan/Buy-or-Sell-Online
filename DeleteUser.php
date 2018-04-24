<?php

session_start();
$flag=$_SESSION["flag"];
$usertype=$_SESSION["usertype"];
if($flag=="ok"){
	if($usertype=="Admin")
	{

?>
<html>
<head>
  <title>Buy-Sell Online</title>
  <link rel="stylesheet" type="text/css" href="CssFile.css">
  <script src="Javascript.js" type="text/javascript"></script>
</head>

<body>
<br><a href="index.php">Go Back To Home</a> &nbsp; <a href="User.php">Go Back To Your Profile</a>
<br><h1>   *****Delete User*****</h1><br>

<div>
<form action="DeleteFromDB.php" method="post">
  Type Username To Delete:<br>
  <input type="text" name="Username" placeholder="Username to delete">
  <input type="submit" value="Delete User"><br>
</form>
</div>

<br><h2>   *****All User List*****</h2><br>

<?php
include("database.php");
$sql="SELECT * FROM user_info";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);

for($i=0; $i<sizeof($jsonData) ; $i++){
$k=$i+1;
echo "<h2>".$k.".Username: ".$jsonData[$i]["Username"]."</h2>";
}


 }} else {header("Location:LogInForm.php");} 
 
 
?>

</body>
</html>
