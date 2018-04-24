
<html>
<head>
  <title>Buy-Sell Online</title>
  <link rel="stylesheet" type="text/css" href="CssFile.css">
</head>

<body>
<br><a href="index.php">Go Back To Home</a>
<br><h1>Select Category</h1><br>
<div>
<form action="SelectCategory.php" method="post" name="frm" id="category">
<select name="ProCategory" form="category">
  <option value=""></option>
  <option value="Electronics">Electronics</option>
  <option value="Vehicle">Vehicle</option>
  <option value="Books">Books</option>
  <option value="Clothing">Clothing</option>
  <option value="Musical Instruments">Musical Instruments</option>
  <option value="Home and Garden">Home and Garden</option>
  <option value="Property">Property</option>
  <option value="Health and Beauty">Health and Beauty</option>
  <option value="Pets and Animals">Pets and Animals</option>
  <option value="Services">Services</option>
  <option value="Education">Education</option>
  <option value="Business and Industry">Business and Industry</option>
  <option value="Jobs in Bangladesh">Jobs in Bangladesh</option>
  <option value="Food and Agriculture">Food and Agriculture</option>
  <option value="Others">Others</option>
</select><br><br>
<input type="submit" value="View Selected Products" name="submit">
</form>
</div>

<?php If(isset($_REQUEST["ProCategory"]) && $_REQUEST["ProCategory"]!="" ){ 
 
include("database.php");
$sql="SELECT * FROM product_info WHERE ProCategory='".$_REQUEST["ProCategory"]."' ORDER BY ProID DESC";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);

if (empty($jsonData)){echo "<br><h1>*****No Results*****</h1><br>";}
else {echo "<br><h1>*****Selected Results*****</h1><br>";

for($i=0; $i<sizeof($jsonData) ; $i++){
$k=$i+1;

echo "<h2>".$k.".Name: ".$jsonData[$i]["ProName"].
" || Price: ".$jsonData[$i]["ProPrice"].
" || Condition: ".$jsonData[$i]["ProCondition"].
" || Location: ".$jsonData[$i]["ProLocation"].
'<br><a href="ProductDetails.php?ProID='.$jsonData[$i]["ProID"].'"><img src="'.$jsonData[$i]["ProPicture"].'"alt="add" style="width:300px;height:300px;"></a></h2><br>';

}
}
}

?>
</body>
</html>