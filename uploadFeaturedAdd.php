<pre>
<?php
session_start();
$flag="";

$flag=$_SESSION["flag"];

if($flag=="ok"){
	

$name =  $_FILES['fileToUpload']['type'];
$type = explode("/", $name);

if($type[0] != "image")
{
	echo "error";
	header("Location:PostNewAdd.php");
}
else
{
	include("database.php");
	
	$sql="SELECT Max(ProID) +1  AS ProductCount FROM featured_info";
    $Data= getJSONFromDB($sql);
    $Data = json_decode($Data, true);	
	
	$fname = $_FILES['fileToUpload']['name'];
	$ExtName = explode(".", $fname);
	$ProductName = "uploads/featured".$Data[0]["ProductCount"].".".$ExtName[1];
	
	
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $ProductName);
	
	$sql="INSERT INTO featured_info (ProID, ProName,ProDescription,ProPrice,ProPicture,ProCondition,ProCategory,ProLocation,Username)
          VALUES ('".$Data[0]["ProductCount"]."',
		  '".$_REQUEST['ProName']."',
		  '".$_REQUEST['ProDescription']."',
		  '".$_REQUEST['ProPrice']."',
		  '".$ProductName."',
		  '".$_REQUEST['ProCondition']."',
		  '".$_REQUEST['ProCategory']."',
		  '".$_REQUEST['ProLocation']."',
		  '".$_SESSION["un"]."')";
		
		
		$conn = mysqli_connect("localhost", "root", "", "id3496486_faisal");
	
		if (!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
		if (mysqli_query($conn, $sql)) 
		{
			echo "New records inserted successfully";
			?>
			
			<a href="index.php">Go Back To Home</a>
			<a href="User.php">Go Back To Your Profile</a>
			
			<?php
			
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}
}

else
 echo "Please Login First";
?>
</pre>