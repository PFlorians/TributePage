//validatory
function validateName(src)
{
	let inp=src.value;
	if(/^[A-Z]{1}[a-z]+$/.test(String(inp)) == false)
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
	if(/[a-zA-Z0-9\.\\\/\-\,\?\!\_\]\[]/.test(String(inp)) == false)
	{
		
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
