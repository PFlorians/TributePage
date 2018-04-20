//validatory
var pass1="";
function validateName(src)
{
	let inp=src.value;
	if(/^[a-zA-Z0-9]+$/.test(String(inp)) == false)
	{
		$("#chybaUname").removeClass("hide");
	}
}
function validateMail(src)
{
	let inp=src.value;
	if(/[a-zA-Z0-9\.{1}\_\-]+@(([a-z0-9]+)([.]{1}))+([a-z]{1,3})/.test(String(inp)) == false)
	{
		$("#chybaMail").removeClass("hide");	
	}
}
function validatePasswdChars(src)
{
	let inp=src.value;
	pass1=src.value;
	//console.log("chars called");
	if(/[a-zA-Z0-9\.\\\/\-\,\?\!\_\]\[]/.test(String(inp)) == false)
	{
		$("#passwd1Err").removeClass("hide");
	}
}
function validatePasswdMatch(src)
{
	let inp = src.value;
	if(pass1==inp)
	{
		if(/[a-zA-Z0-9\.\\\/\-\,\?\!\_\]\[]/.test(String(inp)) == false)
		{
			$("#passwd2Err").removeClass("hide");
		}
	}
	else
	{
		$("#passwd2ErrMatch").removeClass("hide");
	}
}
//utils
function hideUnameErr()
{
	$("#chybaUname").addClass("hide");
}
function hideMailErr()
{
	$("#chybaMail").addClass("hide");
}
function hidePassw1Err()
{
	$("#passwd1Err").addClass("hide");
}
function hidePassw2Err()
{
	//console.log("match: " + $("#passwd2ErrMatch").hasClass("hide") + " chars: " + $("#passwd2Err").hasClass("hide"));
	if($("#passwd2Err").hasClass("hide"))
	{
		if($("#passwd2ErrMatch").hasClass("hide")==false)
		{
			$("#passwd2ErrMatch").addClass("hide");
		}
	}
	else
	{
		if($("#passwd2ErrMatch").hasClass("hide"))
		{
			$("#passwd2Err").addClass("hide");	
		}	
		else//realne by nemalo nastat ale keby nieco
		{
			$("#passwd2Err").addClass("hide");
			$("#passwd2ErrMatch").addClass("hide");
		}
	}
}
