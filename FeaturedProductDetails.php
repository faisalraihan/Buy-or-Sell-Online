<html>
<head>

  <title>Buy-Sell Online</title>

  <link rel="stylesheet" type="text/css" href="CssFile.css">

</head>
<body>
<br><a href="index.php">Go Back To Home</a>

<br><h1> Product Details </h1>

<?php 
include("database.php");

$sql="SELECT * FROM featured_info WHERE ProID = '".$_REQUEST["ProID"]."' ORDER BY ProID DESC";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);

$sql="select * from user_info where username = (select username from featured_info where proid = '".$_REQUEST["ProID"]."')";
$UserData= getJSONFromDB($sql);
$UserData = json_decode($UserData, true);




echo "<div><p>Name: ".$jsonData[0]["ProName"].
" <br><br> Price: ".$jsonData[0]["ProPrice"].
" <br><br> Description: ".$jsonData[0]["ProDescription"].
" <br><br> Condition: ".$jsonData[0]["ProCondition"].
" <br><br> Category: ".$jsonData[0]["ProCategory"].
" <br><br> Posted By: ".$UserData[0]["LastName"].
" <br><br> Posting Time: ".$jsonData[0]["PostingDate"].
" <br><br> Mobile Number: ".$UserData[0]["Mobile"].
" <br><br> Email address: ".$UserData[0]["Email"].
"<br><br>Picture: <br><br>".'<img src="'.$jsonData[0]["ProPicture"].
'" style="width:300px;height:300px;">'."</p><br><br>";

?>
</div>
</body>
</html>