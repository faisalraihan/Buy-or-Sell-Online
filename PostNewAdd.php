<?php
session_start();
$flag="";

if (!isset($_SESSION["flag"])) 
{
    echo "Please Login First SS ";
}
else{

    $flag=$_SESSION["flag"];
	if($flag=="ok"){
		?>
		<html>
		<head>

<title>Buy-Sell Online</title>

<link rel="stylesheet" type="text/css" href="CssFile.css">
<script>
  function validate() {
    
	var pn = document.frm.ProName.value;
	var pc = document.frm.ProCategory.value;
	var pd = document.frm.ProDescription.value;
	var pl = document.frm.ProLocation.value;
	var pp = document.frm.ProPrice.value;
	
    if (pn == "" || pc == "" || pd == "" || pl == "" || pp == "")
	{ alert("Please Insert All Values");
		return false; }		
}
</script>

</head>
<body>
<br><a href="index.php">Go Back To Home</a> &nbsp; <a href="User.php">Go Back To Your Profile</a>

        <h1>Post A New Add</h1>
<div>
<form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="return validate()" name="frm" id="newadd">

Product Name <br>
<input type="text" name="ProName" placeholder="Product Name">
<p id="pn"></p>

Select Category <br>

<select name="ProCategory" form="newadd">
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

Product Description <br>
<input type="text" name="ProDescription" placeholder="Product Description">
<p id="pd"></p>

Location <br>
<input type="text" name="ProLocation" placeholder="Location">
<p id="pd"></p>

Product Price In BDT: <br>
<input type="number" name="ProPrice" placeholder="Price" step="0.01"><br><br>


Select Product Picture<br>
<input type="file" accept="image/*" name="fileToUpload"><br><br>
Product Condition<br>

<input type="radio" name="ProCondition" value="Used" checked> Used
<input type="radio" name="ProCondition" value="Unused"> Unused<br><br>


<input type="submit" value="Upload File" name="submit">


</div>
</form>
</body>
</html>

<?php
}

else
 echo "Please Login First";

}
?>