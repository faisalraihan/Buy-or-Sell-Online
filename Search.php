
<html>
<head>
  <title>Buy-Sell Online</title>
  <link rel="stylesheet" type="text/css" href="CssFile.css">
</head>

<body>
<br><a href="index.php">Go Back To Home</a>

<?php
include("database.php");
$sql="SELECT * FROM product_info WHERE ProName LIKE '%".$_REQUEST["SearchName"]."%' OR ProCategory LIKE '%".$_REQUEST["SearchName"]."%' ORDER BY ProID DESC";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);

if (empty($jsonData)){echo "<br><h1>*****No Results*****</h1><br>";}
else {echo "<br><h1>*****Search Results*****</h1><br>";

for($i=0; $i<sizeof($jsonData) ; $i++){
$k=$i+1;

echo "<h2>".$k.".Name: ".$jsonData[$i]["ProName"].
" || Price: ".$jsonData[$i]["ProPrice"].
" || Condition: ".$jsonData[$i]["ProCondition"].
" || Location: ".$jsonData[$i]["ProLocation"].
'<br><a href="ProductDetails.php?ProID='.$jsonData[$i]["ProID"].'"><img src="'.$jsonData[$i]["ProPicture"].'"alt="add" style="width:300px;height:300px;"></a></h2><br>';

}}
?>
</body>
</html>
