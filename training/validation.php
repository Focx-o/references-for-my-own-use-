<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type='text/javascript'>

function formValidator(){
	// Make quick references to our fields
	var name1 = document.getElementById('name1');
	var add = document.getElementById('add');
	var mail = document.getElementById('mail');
	var phn = document.getElementById('phn');
	
	if(isAlphabet(name1, "Please enter Your Name"))
	{	
		if(isAlphanumeric(add, "Please enter your address"))
		{
			if(isAlphanumeric(form_id, "Please enter Form ID"))
			{
				if(emailValidator(mail, "Please enter a valid email address"))
				{
					if(isNumeric(phn, "Please enter Day Phone Number")) && if(lengthRestriction(phn, 8, 10))
					{
						return true;
					}
				}
			}
		}
	}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length == min || uInput.length == max){
		return true;
	}else{
		alert("Either enter " +min+ " or " +max+ " characters");
		elem.focus();
		return false;
	}
}


function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}	
}
</script>	
</head>
<body>
<form onsubmit='return formValidator()'>
NAME:<input type="text" id="name1" /><br>
ADDRESS:<input type="text" id="add" /><br>
EMAIL:<input type="text" id="mail" /><br>
PHONE:<input type="text" id="phn" /><br>
<input type='submit' value='Submit' />
</form>

</body>
</html>
