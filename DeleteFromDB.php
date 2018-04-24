<?php
include("database.php");


if (isset($_REQUEST["ProID"])) 
{
	
$sql="SELECT ProPicture FROM `product_info` WHERE ProID='".$_REQUEST["ProID"]."'";
$Data= getJSONFromDB($sql);
$Data= json_decode($Data, true);
$link=$Data[0]["ProPicture"];
unlink($link); //Delete file

$sql="DELETE FROM `product_info` WHERE ProID = '".$_REQUEST["ProID"]."'";
$Data = insertData($sql);

if (isset($_REQUEST["UserCommand"]))
{
	header("Location:ShowUserAdd.php");
}
else if(isset($_REQUEST["AdminCommand"]))
{
	header("Location:DeleteProduct.php");
}
else {header("Location:LogInForm.php");}

}


else if (isset($_REQUEST["FeatureID"]))
{
$sql="SELECT ProPicture FROM `featured_info` WHERE ProID='".$_REQUEST["FeatureID"]."'";
$Data= getJSONFromDB($sql);
$Data= json_decode($Data, true);
$link=$Data[0]["ProPicture"];
unlink($link); //Delete file

$sql="DELETE FROM `featured_info` WHERE ProID = '".$_REQUEST["FeatureID"]."'";
$Data = insertData($sql);

header("Location:DeleteFeaturedAdd.php");
}


else if (isset($_REQUEST["Username"]))
{	
$sql="DELETE FROM `user_info` WHERE Username = '".$_REQUEST["Username"]."'";
$Data = insertData($sql);
header("Location:DeleteUser.php");
}


else { header("Location:LogInForm.php"); }

?>