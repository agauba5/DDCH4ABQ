function changetosignup(){
 	hide("form-signin");
	show("form-signup");
}  

function changetosignin()
{
 	hide("form-signup");
	show("form-signin");	
}

function logmein()
{
	alert("log me in");
	
	var idNode = document.getElementById("loginId");
	var pwNode = document.getElementById("password");
	
	if ((idNode.value == null) || (idNode.value == ""))
	{
		alert("Please enter a login Id");
		return (false);
	}
	
	if ((pwNode.value == null) || (pwNode.value == ""))
	{
		alert("Password can not be blank");
		return (false);
	}
	
	alert("sending login request - would be a progress flashy");
	var cmdId = 'login';
	var urlParms = 'cmd=login';
	var cmdParams = '&loginId=' + idNode.value + "&password=" + pwNode.value;
	var token = '12345678';
	
	SendCommand(cmdId, urlParms, cmdParams, token, logmeinDone);
}

function logmeinDone(response, respText)
{
	alert("logmeinDone");
	if (response == 0)
	{
		alert("Success: label:" + response.errorLabel + " Msg:" + response.errorMsg);		
	}
	else
	{
		alert("Error: " + response.code + " Text:" + respText);
	}
}