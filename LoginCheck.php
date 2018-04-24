<pre>
<?php


session_start();
$_SESSION["flag"]="";


if(strlen($_REQUEST["id"])==0 && strlen($_REQUEST["psw"])==0)
{
	header("Location:LogInForm.php");
}

else
{
	include("database.php");
	
	$sql="select * from user_info where Username='".$_REQUEST['id']."'";
	echo $sql."<br/>";
	$jsonData= getJSONFromDB($sql);
	
	$jsonData = json_decode($jsonData, true);
	//print_r($GLOBALS);
	echo $jsonData[0]["Username"];
	echo $jsonData[0]["Password"];
	
	if($jsonData[0]["Password"]==($_REQUEST["psw"]))
	{
	  $_SESSION["un"] = $jsonData[0]["Username"];
	  $_SESSION["fname"] = $jsonData[0]["FirstName"];
	  $_SESSION["lname"] = $jsonData[0]["LastName"];
	  $_SESSION["email"] = $jsonData[0]["Email"];
	  $_SESSION["mobile"] = $jsonData[0]["Mobile"];
	  $_SESSION["gender"] = $jsonData[0]["Gender"];
	  $_SESSION["usertype"]= $jsonData[0]["UserType"];
	  $_SESSION["password"]= $jsonData[0]["Password"];
	  $_SESSION["dateOfBirth"]= $jsonData[0]["DOB"];
	  
	  $_SESSION["flag"]="ok";
		header("Location:User.php");
	}
	else{
		header("Location:LogInForm.php");
	}
	
}

?>

</pre>