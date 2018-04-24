
<html>
<head>
  <title>Buy-Sell Online</title>
  <link rel="stylesheet" type="text/css" href="CssFile.css">
</head>

<body>
<br><a href="index.php">Go Back To Home</a> &nbsp; <a href="User.php">Go Back To Your Profile</a>

<br><h1>   *****Your Adds*****</h1><br>

<?php
session_start();
if($_SESSION["flag"]=="ok"){
include("database.php");

$sql="SELECT * FROM product_info WHERE Username='".$_SESSION["un"]."' ORDER BY ProID DESC";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);


for($i=0; $i<sizeof($jsonData) ; $i++){
$k=$i+1;

echo "<h2>".$k.".Name: ".$jsonData[$i]["ProName"].
" || Price: ".$jsonData[$i]["ProPrice"].
" || Condition: ".$jsonData[$i]["ProCondition"].
" || Category: ".$jsonData[$i]["ProCategory"].
" || Date: ".$jsonData[$i]["PostingDate"].
'<br><a href="DeleteFromDB.php?ProID='.$jsonData[$i]["ProID"].'&UserCommand=1"><button type="button">DELETE THIS</button></a>
<br><br><a href="ProductDetails.php?ProID='.$jsonData[$i]["ProID"].'"><img src="'.$jsonData[$i]["ProPicture"].'"alt="add" style="width:300px;height:300px;"></a></h2><br>';


}
}
else {header("Location:LogInForm.php");}
?>
</body>
</html>
