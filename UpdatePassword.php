<br><br>
<?php
session_start();
$flag=$_SESSION["flag"];
$name=$_SESSION["un"];
$password=$_SESSION["password"];

if($flag=="ok"){
	
include("database.php");

	if ($password == $_REQUEST["OldPassword"]){
        $sql="UPDATE `user_info` SET `Password`='".$_REQUEST["NewPassword"]."' WHERE `Username`='".$name."'";
        $Data = insertData($sql);
        echo "Password Changed Successfully";
		
		$_SESSION['flag']="";
        session_destroy();
    }
	else{echo "Old Password Missmatch";}
}
else{echo "Please Login First";}
?>

<br><br><a href="LogInForm.php">Please Login Again With New Password</a>