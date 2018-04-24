<html>
<head>

  <title>Buy-Sell Online</title>

  <link rel="stylesheet" type="text/css" href="CssFile.css">
  <script src="Javascript.js" type="text/javascript"></script>
  <script>
  function showHint() {
	str=document.getElementById('mail').value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			msg="";
			
			if(resp.length>0)
			{
				msg="<p style='color:red;'>Username already exists</p>";
				
			}
			else{
				msg="<p style='color:#7CFC00;'>Unique</p>";
				
			}
			document.getElementById("txtHint").innerHTML = msg;
		}
	};	
	var url="jsondb.php?signal=read&Username="+str;
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
</script>

</head>
<body>
<br><a href="index.php">Go Back To Home</a> &nbsp; <a href="User.php">Go Back To Your Profile</a>

<?php session_start(); ?>


<h1>Create New Account</h1>

<div>
<form action="SignUpComplete.php" method="post" onsubmit="return validate()" name="frm" id="signup">

<?php if (!isset($_SESSION["usertype"])){}
else{ if($_SESSION["usertype"]=="Admin"){ ?>

Select User Type: 

  <input type="radio" name="usertype" value="Admin" checked> Admin
  <input type="radio" name="usertype" value="User"> User<br><br>	

<?php  }}  ?>

First Name <br>
<input type="text" onkeyup="test_fname()" name="firstname" placeholder="First name">
<p id="fn"></p>

Last Name <br>
<input type="text" onkeyup="test_lname()" name="lastname" placeholder="Last name">
<p id="ln"></p>

Choose Your Username<br>
<input type="text" id="mail" name="mail" onkeyup="showHint()" placeholder="username for this website"><br><br>
<p><span id="txtHint"></span></p>

Create Password<br>
<input type="password"  name="psw1" onkeyup="test_psw()" placeholder="************"><br><br>
<p id="pw"></p>
Confirm Password<br>
<input type="password" name="psw2" onkeyup="confirm_pass()" placeholder="************"><br><br>
<p id="cp"></p>

Date Of Birth<br>
<select name="month" form="signup">
  
  <option value="01">January</option>
  <option value="02">February</option>
  <option value="03">March</option>
  <option value="04">April</option>
  <option value="05">May</option>
  <option value="06">June</option>
  <option value="07">July</option>
  <option value="08">August</option>
  <option value="09">September</option>
  <option value="10">October</option>
  <option value="11">November</option>
  <option value="12">December</option>
  
</select>
<select name="day" form="signup">

<?php

for($i=1;$i<=31;$i++) 
{ 
 echo "<option value=".$i.">".$i."</option>";
} 

?>
  
  
</select>
<select name="year" form="signup">

<?php

for($i=1980;$i<=2017;$i++) 
{ 
 echo "<option value=".$i.">".$i."</option>";
} 

?>
  

</select>
<br><br>

Gender: 

  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female <br><br>
 
<br>
Mobile Phone<br>
<input type="number" onkeyup="test_pn()"  name="Mobile" max="11999999999" placeholder="+88***********">
<p id="pn"></p>

YourCurrent e-mail address<br>
<input type="email" id = "emailcheck" name="Email" onkeyup="showHint2()"  placeholder="snow@gmail.com" autocomplete="off">
<p><span id="txtHint2"></span></p>
<p><span id="em"></span></p>
  
  <br>

<br><br>
<input type="submit" value="Submit">
</form>
</div>

</body>
</html>
