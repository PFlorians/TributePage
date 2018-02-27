/**
 * @author Prometeus
 */
//current carousel index - index at which carousel starts
var cur=0;
function tstReq()
{
	console.log("activated");
	var connector = new XMLHttpRequest();
	connector.onreadystatechange=responseListener(connector);
	
	connector.open("GET", "http://www.aktuality.sk/index.html");
	connector.send();
	
	document.getElementById("garbage").textContent=connector.responseText;
}
function responseListener(con)
{
	console.log("response " + con);
	if(con.readyState == 4 && con.status==200)
	{
		console.log("response detected");
		console.log(con.responseText);
	}
	else
	{
		console.log("buggy info :");
		console.log(con.status);
		console.log(con.readyState);
	}
}
//logika progress baru
function progressBarMeasurement()
{
	
}
//util window event dispatcher generic
function eventDispatcher(obj)
{
	if(Object.is(window, obj))
	{
		obj.dispatchEvent(new Event("resize"));		
	}
}
//specialne pravidla nerobit cez @media
function adjustPadding()
{
	if(window.innerWidth <=200)
    {
    	$("body").css("padding-top", 24);
    }
    else if(window.innerWidth >=768 || (window.innerWidth <= 768 && window.innerHeight >200))
    {
    	if($("#mainNav").height() <= 50)
     	{
     		$("body").css("padding-top", 23);//11, korekcia o 12px
     	}
     	else if($("#mainNav").height() <= 100 && $("#mainNav").height() >= 50)
     	{
     		$("body").css("padding-top", 73);	
     	}
     	else if($("#mainNav").height()>100)
     	{
     		$("body").css("padding-top", 110);
     	}
     	else
     	{
     		console.log("the special case");
     		$("body").css("padding-top", 27);
     	}
	}
}
function logoHeuristics()//nech sirka je 11% sirky stranky, nech vyska je 80% 
{
	$("#logo").css("height", 0);
	$("#logo").css("width", 0);
	var w=($("#mainNav").width()/100)*11;
	var h=($("#mainNav").height()/100)*80;
	//console.log("vypocital som: " + w + " h: " + h);
	$("#logo").css("height", h);
	$("#logo").css("width", w);
}
//define style
function styleDecisionCascade(sirka, vyska)
{
	var styl = null;
	console.log("vysk sirk: " + vyska + " " + sirka);
	if(sirka>=768)
	{
		styl=document.createElement("style");
		styl.setAttribute("id", "styleCarusResp");
		styl.innerHTML =  " .carousel { width: " + sirka + "px; height: " + vyska + "px;}" +
						" .carousel-inner {height: 100%;}" + 
						".item {background-size: cover; background-position: 50% 50%; " +
					      " width: 100%; height: 100%;}" +
						".item img { visibility: hidden;}";		
	}
	else
	{
		styl=document.createElement("style");
		styl.setAttribute("id", "styleCarusResp");
		styl.innerHTML =  " .carousel { width: 100%; height: 100%;}" +
						" .carousel-inner {height: 100%;}" + 
						".item {background-size: cover; background-position: 50% 50%; " +
					      " width: 100%; height: 100%;}" +
						".item img { visibility: hidden;}";
	}
	return styl;
}
//service routine for responsive carousel
function carusResponsive()
{
	var w = (window.innerWidth/100)*60;
	var h = (window.innerHeight/100)*50;
	var stylehseet = null;
	if(document.getElementById("styleCarusResp") == null)
	{
		stylesheet = styleDecisionCascade(w, h);
		document.body.appendChild(stylesheet);
	}
	else
	{
		stylesheet = document.getElementById("styleCarusResp");
		stylesheet.parentNode.removeChild(stylesheet);
		stylesheet = styleDecisionCascade(w, h);
		document.body.appendChild(stylesheet);
	}
	console.log("styl: " + stylesheet.getAttribute("id"));
}
function removeChildren(elem)
{
	while(elem.firstChild)
	{
		elem.removeChild(elem.firstChild);
	}
}
function briefContent(ind)//nahadzuje content podla indexu carouselu
{
	var tab=null;//table references
	var elems=[];//element array
	var i=0; //row of data
	var j=0; //column of data
	var k; //tmp cycle variable
	var tmpElem = null;//tmp buffer
	
	tab=document.getElementById("infoBody");
	removeChildren(tab);
	if(ind==0)
	{
		elems.push(document.createElement("tr")); // line 1 of table
		elems[elems.length-1].setAttribute("id", "riadok"+i);
		tmpElem = document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Name";
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Prince of Persia";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr")); //row 2 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Year";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="1989";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr"));//row 3 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Platform";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="MS-DOS";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr"));//row 4 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Created";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Jordan Mechner";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr"));//row 5 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Genre";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Action, Platform";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		for(k=0;k<elems.length;k++)
		{
			tab.appendChild(elems[k]);
		}
	}
}
//event on carousel slide
function carusSlide()
{
	var cur=0;
	briefContent(cur);//on initial call 
	$(".carousel").on("slid.bs.carousel", function (){
			cur=$("div.active").index();
			briefContent(cur);
			console.log("index: " + cur );
		});
}
function init()
{
	//init onload sequence
	logoHeuristics();
	//carusResponsive();
	carusSlide();
	adjustPadding();
	eventDispatcher(window);
    window.addEventListener('resize', function f()
    {
    	adjustPadding();
    	//carusResponsive();
    	//logoHeuristics();
    	//console.log("status " + window.innerWidth + " " + $("#mainNav").height());
    	//console.log("padding " + $("#progress").position().top);
    });
}
function initArticles()
{
	//init onload sequence
	logoHeuristics();
	adjustPadding();
	eventDispatcher(window);
    window.addEventListener('resize', function f()
    {
    	adjustPadding();
    	//logoHeuristics();
    	//console.log("status " + window.innerWidth + " " + $("#mainNav").height());
    	//console.log("padding " + $("#progress").position().top);
    });
}