<?php
function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","faisal");
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	} //print_r($arr);
	return json_encode($arr);
}

function insertData($sql){
	$conn = mysqli_connect("localhost", "root", "","faisal");
	if ($conn->query($sql) === TRUE)
	{
    return true;
    }
	else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
	return false;
}
$conn->close();	
}

?>