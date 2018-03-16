function initModal()
{
	let clsBtn=document.getElementById("clsModal");
	document.getElementById("modal").style.display="block";
}
function closeModal()
{
	document.getElementById("modal").style.display="none";
}
window.onclick =  (event)=> {
		if(event.target==modal){document.getElementById("modal").style.display="none";}
		};
