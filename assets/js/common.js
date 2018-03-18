function hide(id)
{
	var node = document.getElementById(id);
	if (node == null)
		return;
	var styleString = node.getAttribute("style");
	if (styleString == null)
	{
		styleString = "display: none;";
	}
	else
	{
		styleString += " display: none;";
	}
	node.setAttribute("style",styleString);	
}

function show(id)
{
	var node = document.getElementById(id);
	if (node == null)
		return;	
	var styleString = node.getAttribute("style");
	if (styleString == null)
	{
		styleString = "";
	}
	else
	{
		if (styleString.indexOf("display") != -1)
		{
			styleString = styleString.replace("display: none;","");
		}
	}
	node.setAttribute("style",styleString);			
}

// Send This Command as a Post to the backend
function SendCommand(cmdId, urlParams, cmdParams, token, callback) {
	window.response = null;
	window.responseIn = 0;

	var urlString = "data.php?cmd="+cmdId+"&tk="+token + urlParams;
	var  sendContentType = "application/x-www-form-urlencoded";
	//var $j = jQuery.noConflict();	
	
	var xhttp = new XMLHttpRequest();	
	xhttp.onreadystatechange = function() {	
		if ((xhttp.readyState == 4) && (xhttp.status == 200)) {
				alert("SendCommand Success: resp:" + xhttp.responseText + "\n\n\n\n\n\n\n\n");
				window.lastHTML = xhttp.responseText;
				window.response = JSON.parse(xhttp.responseText);			
				window.responseIn = 1;
				callback(window.response, xhttp.responseText);
		}
		/*else
		{
			//alert("xhttp.readyState: " + xhttp.readyState);
			//alert("xhttp.status: " + xhttp.status);			
		}*/
	};		
	xhttp.open("POST", urlString, true);
	xhttp.setRequestHeader("Content-type", sendContentType);	
	xhttp.send(cmdParams);	

} // end SendCommand

// Send This Command as a Post to the backend
function SendRptCommand(subPageId, urlParams, cmdParams, token, callback) {
	window.response = null;
	window.responseIn = 0;

	var urlString = "rptloader.php?pg="+subPageId+"&tk="+token + urlParams;
	var  sendContentType = "application/x-www-form-urlencoded";
	//var $j = jQuery.noConflict();	
	
	var xhttp = new XMLHttpRequest();	
	xhttp.onreadystatechange = function() {	
		if ((xhttp.readyState == 4) && (xhttp.status == 200)) {
				//alert("SendCommand Success: resp:" + xhttp.responseText + "\n\n\n\n\n\n\n\n");
				window.lastHTML = xhttp.responseText;
				window.response = JSON.parse(xhttp.responseText);			
				window.responseIn = 1;
				callback(window.response, xhttp.responseText);
		}
		/*else
		{
			//alert("xhttp.readyState: " + xhttp.readyState);
			//alert("xhttp.status: " + xhttp.status);			
		}*/
	};		
	xhttp.open("POST", urlString, true);
	xhttp.setRequestHeader("Content-type", sendContentType);	
	xhttp.send(cmdParams);	

} // end SendCommand

// dataFromFormPost
function dataFromFormPost( formId ) {	
	// Now assemble all of the data fields
	var formNode = document.getElementById(formId);
	var inputNodes = formNode.getElementsByTagName("*");
	var dataString = "";	
	for (var z = 0; z < inputNodes.length; z++) {
		var thisNode = inputNodes[z];	
		if (thisNode.disabled == false)
		{
			if (thisNode.tagName.toLowerCase() == "input")
			{						
				if (thisNode.type.toLowerCase() == "checkbox")
				{
					dataString += "&" + thisNode.name + "=";
					dataString += (thisNode.checked) ? "on" : "off";
				}
				else if (thisNode.type.toLowerCase() == "radio")
				{				
					if (thisNode.checked)
					{						
						dataString += "&" + thisNode.name + "=";
						dataString += encodeURIComponent(thisNode.value);
					}
				}
				else
				{
					dataString += "&" + thisNode.name + "=" + encodeURIComponent(thisNode.value);
				}
			}
			else if (thisNode.tagName.toLowerCase() == "select") 
			{				
				dataString += "&" + thisNode.name + "=" + encodeURIComponent(thisNode.options[thisNode.selectedIndex].value);				
			}
			else if (thisNode.tagName.toLowerCase() == "textarea") 
			{				
				dataString += "&" + thisNode.name + "=" + encodeURIComponent(thisNode.value);
			}					
		}
	} // end for z	
	
	return (dataString);
} // end dataFromFormPost

// dataFromFormPost
function clearFormData( formId ) {	
	// Now assemble all of the data fields
	var formNode = document.getElementById(formId);
	var inputNodes = formNode.getElementsByTagName("*");
	for (var z = 0; z < inputNodes.length; z++) {
		var thisNode = inputNodes[z];	
		if (thisNode.disabled == false)
		{
			if (thisNode.tagName == "INPUT")
			{				
				if (thisNode.type == "CHECKBOX")
				{
					thisNode.checked = false;
				}
				else
				{	
					thisNode.value = "";					
				}
			}
			else if (thisNode.tagName == "SELECT") 
			{			
				thisNode.selectedIndex = 0;								
			}
			else if (thisNode.tagName == "TEXTAREA") 
			{		
				thisNode.value = "";
			}					
		}
	} // end for z
	
} // end clearFormData

function SetSelIndex(formSelName, currValue)
{
	var stateSelNode = document.getElementById(formSelName);
	var totalOptions = stateSelNode.length;
	var selectIndex = 0;
	for (var z = 0; z < totalOptions; z++)
	{
		var optionValue = stateSelNode.options[z].value;
		selectIndex = z;
		if (optionValue == currValue)
			break;
	}
	if (z == totalOptions)
		stateSelNode.selectedIndex = 0;
	else
		stateSelNode.selectedIndex = selectIndex;
	
	return (stateSelNode.selectedIndex);
} // SetSelIndex

function ClearSelector(selectorId)
{
	var selNode = document.getElementById(selectorId);
	var optList = selNode.getElementsByTagName("option");
	var delList = [];
	// Find the nodes
	for (var z = 0; z < optList.length; z++)
	{
		var thisNode = optList[z];
		if (thisNode.value != "0")
			delList.push(thisNode);
	}
	// kill the nodes
	for (var x = 0; x < delList.length; x++)
	{
		delList[x].parentNode.removeChild(delList[x]);
	}
} // ClearSelector

function ClearTable(tableName)
{
	var tableNode = document.getElementById(tableName);
	var trNodes = tableNode.getElementsByTagName("tr");
	var delList = [];	
	for (var z=0; z < trNodes.length; z++) {		
		if (trNodes[z].id == null) {
			delList.push(trNodes[z]);
		}
		else if (trNodes[z].id != "no-del") {
			delList.push(trNodes[z]);
		}
	} // loop z
	for (var y=0; y < delList.length; y++) {	
		delList[y].parentNode.removeChild(delList[y]);
	}	
} // ClearTable

function Unix2Date(unixTimestamp, timeZoneOffset)
{
	var newDate = new Date(unixTimestamp * 1000);
	var secsOffset = timeZoneOffset * 60 * 60;
	
	newDate.setSeconds(newDate.getSeconds() + secsOffset);
	var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
	var year = newDate.getFullYear();
	var month = months[newDate.getMonth()];
	var date = newDate.getDate();
	var dateStg = date + month + year;
	return dateStg;
}	

function Unix2Time(unixTimestamp, timeZoneOffset)
{
	var newDate = new Date(unixTimestamp * 1000);
	var secsOffset = timeZoneOffset * 60 * 60;
	
	newDate.setSeconds(newDate.getSeconds() + secsOffset);
	var hour = newDate.getHours();
	var min = newDate.getMinutes();
	var sec = newDate.getSeconds();
	var timeStg = hour + ':' + min + ':' + sec;
	return timeStg;
}

function Unix2DateTime(unixTimestamp, timeZoneOffset)
{
	var newDate = new Date(unixTimestamp * 1000);
	var year = newDate.getFullYear();
	var month = newDate.getMonth() + 1;
	var date = newDate.getDate();
	var dateStg = month + "/" + date + "/" + year;	
	var hour = newDate.getHours();
	var min = newDate.getMinutes();
	var sec = newDate.getSeconds();
	var timeStg = hour + ':' + min + ':' + sec;
	return (dateStg + " " + timeStg);
}


function localABS(decimalValue)
{
	if (decimalValue < 0)
		decimalValue = decimalValue * -1;
	return (decimalValue);
}
