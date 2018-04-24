
var flag=0;

function validate() {
    
	var fn = document.frm.firstname.value;
	var ln = document.frm.lastname.value;
	var mobile = document.frm.Mobile.value;
	var mail = document.frm.mail.value;
	var psw1 = document.frm.psw1.value;
	var psw2 = document.frm.psw2.value;
	var email = document.frm.Email.value;
	
	
    if (fn == "" || ln == "" || mobile == "" || mail == "" || psw1 == "" || psw2 == "" || email == "") 
	{ alert("All fields must be filled out");
		return false; }		
}





function showHint2() {
	str=document.getElementById('emailcheck').value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			resp=JSON.parse(xmlhttp.responseText);
			msg="";
			
			if(resp.length>0)
			{
				msg="<p style='color:red;'>Email already exists</p>";
				flag=1;
			}
			else{
				msg="<p style='color:#7CFC00;'>Email Unique</p>";
				flag=0;
			}
			document.getElementById("txtHint2").innerHTML = msg;
		}
	};	
	var url="jsondb2.php?signal=read&Username="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}




	function test_fname(){
	a=document.frm.firstname.value;
	if(a.length<2){
		msg=document.getElementById("fn");
		msg.innerHTML="<p style='color:red;'>too short</p>";
	}
		else{
		msg=document.getElementById("fn");
		msg.innerHTML="<p style='color:blue;'>ok to go</p>";
	}
}

	function test_lname(){
		a=document.frm.lastname.value;
		if(a.length<4){
			msg=document.getElementById("ln");
			msg.innerHTML="<p style='color:red;'>too short</p>";
		}
		else{
			msg=document.getElementById("ln");
			msg.innerHTML="<p style='color:blue;'>ok to go</p>";
		}
	}
	
	function test_pn(){
	a=document.frm.Mobile.value;
		if(a.length != 11){
		msg=document.getElementById("pn");
		msg.innerHTML="<p style='color:red;'>invalid Phone No</p>";
	}
		else{
		msg=document.getElementById("pn");
		msg.innerHTML="<p style='color:blue;'>ok to go</p>";
	}
}
	
	function test_psw(){
		a=document.frm.psw1.value;
		if((a.length<6) || (a.includes("@") == false) && (a.includes("$") == false) && (a.includes("!") == false) && (a.includes("#") == false) && (a.includes("%") == false) && (a.includes("&") == false) && (a.includes("*") == false)){
			msg=document.getElementById("pw");
			msg.innerHTML="<p style='color:red'>password must be more than 6 Character including special character</p>";
		}
		
		else{
			msg=document.getElementById("pw");
			msg.innerHTML="<p style='color:blue;'>ok to go</p>";
	}
}
	
	function check_email(){
		a=document.frm.Email.value;
		if((a.includes("@") == false) || (a.includes("gmail.com") == false) && (a.includes("yahoo.com") == false) && (a.includes("outlook.com") == false)){
			msg=document.getElementById("em");
			msg.innerHTML="<p style='color:red'>missing formal email format</p>";
		}
		
		else{
			msg=document.getElementById("em");
			msg.innerHTML="<p style='color:blue;'>ok to go</p>";
	}
}

function confirm_pass(){
	a=document.frm.psw1.value;
	b=document.frm.psw2.value;
	if(a!=b){
		msg=document.getElementById("cp");
		msg.innerHTML="<p style='color:red;'>password does not match</p>";
	}
		else{
		msg=document.getElementById("cp");
		msg.innerHTML="<p style='color:blue;'>password matched</p>";
	}
}