function initModal()
{
	//let clsBtn=document.getElementById("clsModal");
	document.getElementById("modal").style.display="block";
}
function initModalGal(id)
{
	//let clsBtn=document.getElementById("clsModal");
	document.getElementById(id).style.display="block";
}
function closeModalGal(id)
{
	document.getElementById(id).style.display="none";
}
function closeModal()
{
	document.getElementById("modal").style.display="none";
}
window.onclick = (event)=> {
	//	console.log(event.target);
	//	console.log(event.target.id.indexOf("modal"));
		if(event.target==modal || (event.target.id.indexOf("modal")!=-1))
		{
			var a=document.getElementsByClassName("modal");
			for(let i=0;i<a.length;i++)
			{
				a[i].style.display="none";	
			}
			//document.getElementById("modal").style.display="none";
		}
	};
