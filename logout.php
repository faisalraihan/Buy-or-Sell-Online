<?php
session_start();
$_SESSION['flag']="";
session_destroy();
header("Location:index.php");
?>