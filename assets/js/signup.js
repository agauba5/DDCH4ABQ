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


function changetosignup(){
 	hide("form-signin");
	show("form-signup");
}  

function changetosignin()
{
 	hide("form-signup");
	show("form-signin");	
}