<pre>
<?php
session_start();
if(isset($_SESSION["usertype"]) && $_SESSION["usertype"]=="Admin"){ 
$NewUserType = $_REQUEST['usertype'];
}
else { $NewUserType = "User"; }

//print_r($_REQUEST);
$count=0;

if(strlen($_REQUEST["firstname"])==0 || ($_REQUEST['firstname']=="First Name"))
{
	echo "Line 1: firstname can't be empty<br><br>";
	$count=1;
}
if(strlen($_REQUEST["lastname"])==0 || ($_REQUEST['lastname']=="Last Name"))
{
	echo "Line 1: lastname can't be empty<br><br>";
	$count=1;
}
if(strlen($_REQUEST["mail"])==0)
{
	echo "Line 2: username can't be empty<br><br>";
	$count=1;
}


if(strlen($_REQUEST["psw1"])==0)
{
	echo "Line 3: password can't be empty<br><br>";
	$count=1;
}

if(strlen($_REQUEST["psw2"])==0)
{
	echo "Line 4: Comfirm your password<br><br>";
	$count=1;
}

if(($_REQUEST["psw1"])!=($_REQUEST["psw2"]))
{
	echo "Line 4: password missmatch!!<br><br>";
	$count=1;
}

if(strlen($_REQUEST["Mobile"])==0 || ($_REQUEST['Mobile']=="+88***********"))
{
	echo "Line 7: Mobile number can't be empty<br><br>";
	$count=1;
}
if(strlen($_REQUEST["Email"])==0 || ($_REQUEST['Email']=="email"))
{
	echo "Line 8: Email can't be empty<br><br>";
	$count=1;
}

if($count==0)
	
{
	
 	echo "<h2>Congratulations! ".$_REQUEST["lastname"]."</h2><br><br>";
	echo "<p>Name: ".$_REQUEST["firstname"]." ".$_REQUEST["lastname"]."</p>";
	echo "<p>Username: ".$_REQUEST["mail"]."</p>";	
	echo "<p>Mobile Number: ".$_REQUEST["Mobile"]."</p>";
	
	
	
	
	function updateSQL($sql){
	$conn = mysqli_connect("localhost", "root", "","faisal");
	echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	return $result;
    }
	
	$Month=$_REQUEST['month'];
	$Day=$_REQUEST['day'];
	$Year=$_REQUEST['year'];
	
    $s="insert into user_info values(
	'".$_REQUEST['mail']."',
	'".$_REQUEST['firstname']."',
	'".$_REQUEST['lastname']."',
	'".$_REQUEST['gender']."',
	'".$_REQUEST['Mobile']."',
	'".$_REQUEST['Email']."',
	'".$_REQUEST['psw1']."',
	'".$Year."-".$Month."-".$Day."',
	'".$NewUserType."')";
	
    $num=updateSQL($s);
	
    //echo $num." row(s) updated";
	echo "New User Added successfully";
}
?>
<p><a href="index.php">Go Back To Home</a> &nbsp; <a href="User.php">Go Back To Your Profile</a></p>
</pre>