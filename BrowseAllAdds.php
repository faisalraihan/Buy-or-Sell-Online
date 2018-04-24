
<html>
<head>
  <title>Buy-Sell Online</title>
  <link rel="stylesheet" type="text/css" href="CssFile.css">
  
  <script type="text/javascript">
function changeIt(img)
{
    var name = img.id;
    alert(name);
}
</script>

</head>

<body>
<br><a href="index.php">Go Back To Home</a>
<br><h1>   *****All Latest Adds*****</h1><br>

<?php
include("database.php");

$sql="SELECT * FROM product_info ORDER BY ProID DESC";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);


for($i=0; $i<sizeof($jsonData) ; $i++){
$k=$i+1;

echo "<h2>".$k.".Name: ".$jsonData[$i]["ProName"].
" || Price: ".$jsonData[$i]["ProPrice"].
" || Condition: ".$jsonData[$i]["ProCondition"].
" || Location: ".$jsonData[$i]["ProLocation"].
'<br><a href="ProductDetails.php?ProID='.$jsonData[$i]["ProID"].'"><img src="'.$jsonData[$i]["ProPicture"].'"alt="add" style="width:300px;height:300px;"></a></h2><br>';


}
?>

</body>
</html>
