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
function eventDispatcher(obj)
{
	if(Object.is(window, obj))
	{
		obj.dispatchEvent(new Event("resize"));		
	}
}