<?php
function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","faisal");
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}

if($_REQUEST["signal"]=="read" && isset($_REQUEST['Username'])){
	$sql="select * from user_info where Email = '".$_REQUEST['Username']."'";
	$jsonData= getJSONFromDB($sql);
	echo $jsonData;
}
else{
	echo "invalid parameter";
}
?>