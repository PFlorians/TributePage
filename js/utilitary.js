/*
 * utilitary functions
 * 
 */
//remove all children of given element
function removeChildren(elem)
{
	if(elem!=null)
	{
		while(elem.firstChild)
		{
			elem.removeChild(elem.firstChild);
		}
	}
}
//event dispatcher
function eventDispatcher(obj)//vysli event resize
{
	if(Object.is(window, obj))
	{
		obj.dispatchEvent(new Event("resize"));		
	}
}
function getScrollSize()//velkost plochy, kt. zabera dokument
{
	let doc=document.documentElement;
	let bod=document.body;
	return Math.max(doc.clientHeight, doc.scrollHeight, doc.offsetHeight, bod.scrollHeight, bod.offsetHeight);
}