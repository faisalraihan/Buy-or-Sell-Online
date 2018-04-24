
<html>
<head>

  <title>Buy-Sell Online</title>
  
  <link rel="stylesheet" type="text/css" href="CssFile.css">
  
<script>
function myFunction() {
    document.getElementById("SearchForm").submit();
}
</script>

</head>
<body>

<?php session_start(); ?>

<h1>Buy-Sell Online.com</h1>

<form action="Search.php" method="post" id="SearchForm" >
  <input type="search" name="SearchName">
  <input type="button" onclick="myFunction()" value="Search" class="src">
</form>


<ul>

  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="FeaturedAdds.php">Featured Adds</a></li>
  <li><a href="SelectCategory.php">Select Catagory</a></li>
  
  <li><a href="BrowseAllAdds.php">Browse All Adds</a></li>
  
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About</a></li>
  
<?php if(isset($_SESSION["flag"])){
	if($_SESSION["flag"]=="ok"){ ?>
	
		<li style="float:right"><a href="User.php"> <?php echo"Logged in: ".$_SESSION["lname"]?> </a></li>

		<?php	}	}  else { ?>
  
  <li style="float:right"><a href="SignUpForm.php">Sign Up</a></li>
  <li style="float:right"><a href="LogInForm.php">Log in</a></li>
  
<?php  }   ?>  
  
</ul>

<br><br>

<h2>Featured Adds</h2>

<?php
include("database.php");

$sql="SELECT * FROM featured_info LIMIT 4";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);

for($i=0; $i<sizeof($jsonData) ; $i++){
?>
<div class="floating-box">
<?php 
echo '<a href="FeaturedProductDetails.php?ProID='.$jsonData[$i]["ProID"].'">
<img src="'.$jsonData[$i]["ProPicture"].'"alt="add" style="width:260px;height:260px;"></a>';
?>
</div>
<?php } ?> 

</body>
</html>
