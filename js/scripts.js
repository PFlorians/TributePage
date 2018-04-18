/**
 * @author Prometeus
 */
//current carousel index - index at which carousel starts
var cur=0;
var clickFlag=false;//ci som klikol na rolovacie menu
var popoverClicked=false;//ci je kliknute na popover
var car;//instancia carouselu predana z inicializacnej funkcie

//logika progress baru
function progressBarMeasurement()//pre progress bar
{
	let viewableW=window.innerWidth;//viditelne okno
	let viewableH=window.innerHeight;
	let pb=document.getElementById("progress").children[0];
	let scrl=getScrollSize();
	//console.log("scrollSiz: " + scrl + " dockel " + document.documentElement.scrollTop);
	pb.setAttribute("aria-valuenow", (((document.documentElement.scrollTop + viewableH)/scrl)*100));
	pb.style.width=(((document.documentElement.scrollTop + viewableH)/scrl)*100) + "%";
}

function navbarOverflowCheck()//niekde moze vypaltit na tucny kus headra
{
	//console.log("overflow: " + $("#hlavicka").height() + " w: " + $("#hlavicka").width());
	//console.log("overflow2: " + $("#nhead").height() + " w: " + $("#nhead").width());
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
	//console.log("debug: " + $("#mainNav").height() + " " + $("#mainNav").width());
	//console.log("window debug: " + window.innerHeight + " " + window.innerWidth);
	if(window.innerWidth <=200)
    {
    	//console.log("the special case " + $("#mainNav").height());
    	$("body").css("padding-top", 24);
    	heurSpLo();
    }
    else //if(window.innerWidth >=768 || (window.innerWidth <= 768 && window.innerHeight >200))//stara verzia
    {
    	if(navbarOverflowCheck() == 1)
    	{
    		$("#hlavicka").css("max-height", 68);
    		$("#nhead").css("max-height", 60);
    		if(window.innerWidth<=1195)//len custom bootstrap
		    {
		    	$("body").css("padding-top", 70);
		    	heurSpLo();
		    }
		    else
		    {
		    	$("body").css("padding-top", 80);
		    	heurLo();
		    }	
    	}
    	else
    	{
    		//console.log("zvacseny");
    		$("#hlavicka").css("max-height", '');
    		$("#nhead").css("max-height", '');
    		if(window.innerWidth<=1195)//len custom bootstrap
		    {
		    	$("body").css("padding-top", 70);
		    	heurSpLo();
		    }
		    else
		    {
		    	$("body").css("padding-top", 80);
		    	heurLo();
		    }
	    }
	    
	}
	
}
function temporaryEraseConditions()
{
	//console.log("click: " + clickFlag);
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
function carusSlide()//vracia index carouselu
{
	var cur=0;
	briefContent(cur);//on initial call 
	$(".carousel").on("slid.bs.carousel", function (){
			cur=$("div.active").index();
			briefContent(cur);
			//console.log("index: " + cur );
		});
}
function basicIntel()//cisto debugovacia funkcia
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
function heurLo()//heuristika podla kontajnera hlavicka
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
function heurSpLo()//specialny pripad, nhead kontajner
{
	$("#logo").css("height", 0);
	$("#logo").css("width", 0);
	$("#layer1").css("height", 0);
	$("#layer1").css("width", 0);
	$("#layer2").css("height", 0);
	$("#layer2").css("width", 0);
	var w=($("#nhead").width()/100)*70;
	var h=($("#nhead").height()/100)*90;
	console.log("vypocital som: " + w + " h: " + h);
	$("#layer1").css("height", h);
	$("#layer1").css("width", w);
	$("#layer2").css("height", h);
	$("#layer2").css("width", w);
	$("#logo").css("height", h);
	$("#logo").css("width", w);
}
function setPopoverFlag()
{
	if(!popoverClicked)
	{
		popoverClicked=true;
	}
	else
	{
		popoverClicked=false;
	}
}
function navbarCorrection()
{
	if((window.innerWidth <= 1195) && (clickFlag==true))
	{
		if(popoverClicked)
		{
			console.log("deactivating");
			$("#login").click();	
		}
		$("#bars").trigger('click');
	}
}
function resEvH()
{
	console.log("handler called");
	adjustPadding();
	car.carusResponsive();
	progressBarMeasurement();
	if(document.getElementById("gallery")!=null)//ak existuje galeria
	{
		respInitializer();
	}
	setTimeout(() => {adjustPadding(); car.carusResponsive()}, 200);//pretoze firefox aj chrom neustale spustaju event resize
}
function registerHandlers(carouselObj)
{
	car=carouselObj;
	console.log("handlery inicializovane")
	window.addEventListener('resize', resEvH);
	window.addEventListener('scroll', () => 
	{
	   	progressBarMeasurement();
	   	navbarCorrection();
	});
}
