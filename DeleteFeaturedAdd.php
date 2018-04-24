
<html>
<head>
  <title>Buy-Sell Online</title>
  <link rel="stylesheet" type="text/css" href="CssFile.css">

</head>

<body>
<br><a href="index.php">Go Back To Home</a> &nbsp; <a href="User.php">Go Back To Your Profile</a>
<br><h1>   *****Delete Featured Product*****</h1><br>


<?php
session_start();
$flag=$_SESSION["flag"];
$usertype=$_SESSION["usertype"];
if($flag=="ok"){
	if($usertype=="Admin")
	{

include("database.php");
$sql="SELECT * FROM featured_info ORDER BY ProID DESC";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);

if (empty($jsonData)){echo "<br><h1>*****No Item To Delete*****</h1><br>";}
else {echo "<br><h1>*****All Product List*****</h1><br>";

for($i=0; $i<sizeof($jsonData) ; $i++){
$k=$i+1;
echo "<h2>Pro ID: ".$jsonData[$i]["ProID"].
" || Name: ".$jsonData[$i]["ProName"].
" || Price: ".$jsonData[$i]["ProPrice"].
" || Location: ".$jsonData[$i]["ProLocation"].
'<br><a href="DeleteFromDB.php?FeatureID='.$jsonData[$i]["ProID"].'&AdminCommand=1"><button type="button">DELETE THIS</button></a>
<br><br><a href="FeaturedProductDetails.php?ProID='.$jsonData[$i]["ProID"].'"><img src="'.$jsonData[$i]["ProPicture"].'"alt="add" style="width:300px;height:300px;"></a></h2><br>';



}}
}} else {header("Location:LogInForm.php");}
?>

</body>
</html>
