
<html>
<head>
  <title>Buy-Sell Online</title>
  <link rel="stylesheet" type="text/css" href="CssFile.css">
</head>

<body>
<br><a href="index.php">Go Back To Home</a> &nbsp; <a href="User.php">Go Back To Your Profile</a><br><br>
<?php
session_start();
$flag=$_SESSION["flag"];
$usertype=$_SESSION["usertype"];
if($flag=="ok"){
	if($usertype=="Admin")
	{

// Reads From Database

include("database.php");

$sql="SELECT ProPicture FROM `product_info` ";
$Data= getJSONFromDB($sql);
$Data= json_decode($Data, true);

for($i=0; $i<sizeof($Data); $i++)
{
	$fileDirectory = $Data[$i]["ProPicture"];
	$fileNameExplode = explode("/", $fileDirectory);
	$fileNameArray=array();
	$fileNameArray[$i] = $fileNameExplode[1];
	echo "<br>From DB: ".$fileNameArray[$i]."<br>";
}

// Reads From Directory

$path = "uploads/";
$files = scandir($path);

for($i=2; $i<sizeof($files); $i++) 
{
	if (in_array($files[$i], $fileNameArray))
    {
     echo "<br>".$files[$i]." Exists in database<br>";
    }
    else
    {
		$link = "uploads/".$files[$i];
        echo "<br>".$link." Match NOT found, File will be deleted<br>";
		unlink($link); //deletes file
    }	
}
//header("Location:DeleteProduct.php");
?>


<p>All Files Which records are not in database are deleted.</p>
<?php }} else {header("Location:LogInForm.php");} ?>
</body>
</html>