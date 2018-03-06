/**
 * @author Prometeus
 */
//current carousel index - index at which carousel starts
var cur=0;
var clickFlag=false;

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
	let viewableW=window.innerWidth;//viditelne okno
	let viewableH=window.innerHeight;
	
}
function navbarOverflowCheck()
{
	console.log("overflow: " + $("#hlavicka").height() + " w: " + $("#hlavicka").width());
	console.log("overflow2: " + $("#nhead").height() + " w: " + $("#nhead").width());
	if(($("#hlavicka").width() <= 768 && $("#hlavicka").height()>68)
		|| ($("#nhead").width() <= 768 && $("#nhead").height()>68))
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
//specialne pravidla nerobit cez @media
function adjustPadding()
{
	console.log("debug: " + $("#mainNav").height() + " " + $("#mainNav").width());
	console.log("window debug: " + window.innerHeight + " " + window.innerWidth);
	if(window.innerWidth <=200)
    {
    	console.log("the special case " + $("#mainNav").height());
    	$("body").css("padding-top", 24);
    }
    else if(window.innerWidth >=768 || (window.innerWidth <= 768 && window.innerHeight >200))
    {
    	//eventDispatcher(window);
    	if(navbarOverflowCheck() == 1)
    	{
    		$("#hlavicka").css("max-height", 68);
    		$("#nhead").css("max-height", 60);
    		heurSpLo();	
    	}
    	else
    	{
    		console.log("zvacseny");
    		$("#hlavicka").css("max-height", '');
    		$("#nhead").css("max-height", '');
    		heurLo();
	    }
	    if($("#mainNav").height() <= 50)
	    {
	    	$("body").css("padding-top", 23);//11, korekcia o 12px
	    }
	    else if($("#mainNav").height() <= 100 && $("#mainNav").height() >= 50)
	    {
	    	$("body").css("padding-top", 73);	
	    }
	    else
	    {
	    	$("body").css("padding-top", 27);
	    }
	}
	
}
function temporaryEraseConditions()
{
	console.log("click: " + clickFlag);
	if(clickFlag==false)
	{
		clickFlag=true;
		$("#hlavicka").css("max-height", '');
    	$("#nhead").css("max-height", '');
    	heurSpLo();
    }
    else
    {
    	clickFlag=false;
    	$("#hlavicka").css("max-height", 68);
    	$("#nhead").css("max-height", 60);
    	heurSpLo();	
    }
}
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
	else if(ind==1)
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
		tmpElem.innerHTML="Amiga OS";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr")); //row 2 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Year released";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="1985";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr"));//row 3 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Kernel";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Microkernel";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr"));//row 4 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Developer";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Commodore International";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr"));//row 5 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Written in";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Assembly, BCPL, C";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr"));//row 6 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Source model";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Closed";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		for(k=0;k<elems.length;k++)
		{
			tab.appendChild(elems[k]);
		}
	}
	else if(ind==2)
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
		tmpElem.innerHTML="Turbo Debugger";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr")); //row 2 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Year released";	
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
		tmpElem.innerHTML="Developer";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Borland";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr"));//row 5 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Designed for";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Turbo Assembler";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		for(k=0;k<elems.length;k++)
		{
			tab.appendChild(elems[k]);
		}
	}
	else if(ind == 3)
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
		tmpElem.innerHTML="Windows 3.0";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr")); //row 2 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Year released";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="1990";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr"));//row 3 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Developer";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Microsoft";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr"));//row 4 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="License";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Commercial";	
		elems[elems.length-1].appendChild(tmpElem);
		i++;
		j=0;
		elems.push(document.createElement("tr"));//row 5 of table
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="Build upon";	
		elems[elems.length-1].appendChild(tmpElem);
		j++;
		tmpElem=document.createElement("td");
		tmpElem.setAttribute("id", "dataRiadok"+i+""+j);
		tmpElem.innerHTML="MS-DOS 6.1 >";	
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
			//console.log("index: " + cur );
		});
}
function basicIntel()
{
	console.log($(window.top).height());
	console.log(window.innerHeight);
	console.log($(window).height());
	console.log("velkost dokumetnu");
	console.log("1 " +document.body.scrollHeight);
	console.log("2 " +document.body.offsetHeight);
	console.log("3 " +document.documentElement.clientHeight);
	console.log("4 " +document.documentElement.scrollHeight);
	console.log("5 " +document.documentElement.offsetHeight);
	console.log("info o navbare");
	console.log("hlavicka: " + $("#hlavicka").height() + " sirka: " + $("#hlavicka").width());
	console.log("nhead div: " + $("#nhead").height() + " " + $("#nhead").width());
	console.log("mainNav: " + $("#mainNav").height());
	console.log("mainNav w: " + $("#mainNav").width());
}
function heurLo()
{
	$("#logo").css("height", 0);
	$("#logo").css("width", 0);
	$("#layer1").css("height", 0);
	$("#layer1").css("width", 0);
	$("#layer2").css("height", 0);
	$("#layer2").css("width", 0);
	var w=($("#hlavicka").width()/100)*11;
	var h=($("#hlavicka").height()/100)*80;
	console.log("vypocital som: " + w + " h: " + h);
	$("#layer1").css("height", h);
	$("#layer1").css("width", w);
	$("#layer2").css("height", h);
	$("#layer2").css("width", w);
	$("#logo").css("height", h);
	$("#logo").css("width", w);
}
function heurSpLo()
{
	$("#logo").css("height", 0);
	$("#logo").css("width", 0);
	$("#layer1").css("height", 0);
	$("#layer1").css("width", 0);
	$("#layer2").css("height", 0);
	$("#layer2").css("width", 0);
	var w=($("#nhead").width()/100)*11;
	var h=($("#nhead").height()/100)*80;
	//console.log("vypocital som: " + w + " h: " + h);
	$("#layer1").css("height", h);
	$("#layer1").css("width", w);
	$("#layer2").css("height", h);
	$("#layer2").css("width", w);
	$("#logo").css("height", h);
	$("#logo").css("width", w);
}

function init()
{
	var curtime, tout;
	var lock=false;
	let car=new CarouselClass(60, 70);
	//init onload sequence
	//basicIntel();
	//logoHeuristics();
	heurLo();	
	car.carusResponsive();
	carusSlide();
	adjustPadding();
	eventDispatcher(window);
    window.addEventListener('resize', function f()//pozor na vnorene volania
    {
    	adjustPadding();
		car.carusResponsive();
		setTimeout(() => {adjustPadding(); car.carusResponsive()}, 200);//pretoze firefox aj chrom neustale spustaju event resize
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