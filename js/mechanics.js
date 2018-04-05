/**
 * @author PFlorians
 */
$(document).ready(
	function()
    {	
    	console.log("static-variant");
    	var content=[];//zbiera nacitany obsah
    	var tmpObj="";//docasna premenna na objekt
    	//funkcne vars
    	var meno=window.location.pathname;
    	var pg=meno.split("/").pop();
    	//console.log("strank: " + pg.split(".")[0] + " loca: " + meno);
    	var n=String(pg.split(".")[0]);
    	
    	//console.log("n: " + n + " nacitavam");
    	if(n=="")//na linuxovych serveroch je to len /
    	{
    		n="index";
    	}
    	$("body").addClass("back")
    	if(meno.indexOf("html/")!=-1)
    	{
    		initArticles();
    	}
    	else 
    	{
    		init();
    	}
    	/*
    	 * decomissioned branch for later rework 
    	 switch(window.location.protocol)
    	{
    		case 'http:':
    			serverVariant();
    			break;
    		case 'https:':
    			serverVariant();
    			break;
    		case 'file:':
    			staticVariant();
    			break;
    		default:
    			staticVariant();
    			//static variant
    	}*/
		
    }
);
function staticVariant()
{
	//logicke vars
		console.log("static-variant");
    	var content=[];//zbiera nacitany obsah
    	var tmpObj="";//docasna premenna na objekt
    	//funkcne vars
    	var meno=window.location.pathname;
    	var pg=meno.split("/").pop();
    	//console.log("strank: " + pg.split(".")[0] + " loca: " + meno);
    	var n=String(pg.split(".")[0]);
    	
    	//console.log("n: " + n + " nacitavam");
    	if(n=="")//na linuxovych serveroch je to len /
    	{
    		n="index";
    	}
    	$("body").addClass("back");
    	if(meno.indexOf("html/")!=-1)
    	{
    		window.location="dynamic-content/offline-docs/"+n+"-body.html";
    	}
    	else if(meno.indexOf(""))
    	{
    		window.location="html/dynamic-content/offline-docs/"+n+"-body.html";
    	}
}
function serverVariant()//if on server only
{
	//logicke vars
    	var content=[];//zbiera nacitany obsah
    	var tmpObj="";//docasna premenna na objekt
    	//funkcne vars
    	var meno=window.location.pathname;
    	var pg=meno.split("/").pop();
    	//console.log("strank: " + pg.split(".")[0] + " loca: " + meno);
    	var n=String(pg.split(".")[0]);
    	
    	//console.log("n: " + n + " nacitavam");
    	if(n=="")//na linuxovych serveroch je to len /
    	{
    		n="index";
    	}
    	$("body").addClass("back")
    	if(meno.indexOf("html/")!=-1)
    	{//potom to musi byt definn ako sub doc aka article
    		//predpoklad vsetky dyna of type name-body.html
    		let links = [
	    	"dynamic-content/header/article-header.html",
	    	"dynamic-content/"+n+"-body.html",
	    	"dynamic-content/footer/footer_generic.html"
	    	];
	    	$("body").on("load", () => {//tu bol v jquery bug
	    			loadFileGet(links[0]).then(obsah => {
	    			//console.log("call1: " + obsah);
	    				try
	    				{
							content.push(pseudoParser(obsah, "headr"));	    					
	    				}
	    				catch(e)
	    				{
	    					console.log("vynimka 1 pri fetch header " + e);
	    				}
	    				return loadFileGet(links[1]);//to treba lebo chain chyti undefined
	    			}).then(obsah => {
	    				//console.log("call2: " + obsah);
	    				try 
	    				{
		    				content.push(pseudoParser(obsah, "obsah"));
	    				}
	    				catch(e)
	    				{
	    					console.log("zachytena podmienka 2 " + e);
	    				}
	    				return loadFileGet(links[2]);
	    			}).then(obsah => {
	    				//console.log("call3: " + obsah);
	    				try
	    				{
		    				content.push(pseudoParser(obsah, "footer"));
		    				for (var i in content)
		    				{
		    					$("body").append(content[i]);
		    				}
		    				initArticles();//na zaver az je hotove
		    				//console.log("--------------------------------");
		    			//	console.log("DEBUG: " + content);
	    				}
	    				catch(e)
	    				{
	    					console.log("zachytena vynimka 3 " +e);
	    				}
	    			}).catch(err => {
	    				console.log("Catch triggered retazec get: " + err);
	    			});
		    	}
	    	);
	    	$("body").trigger("load");//volaj event, niekdey sa nespusti
	    }
	    else 
	    {
	    	let links = [
	    	"html/dynamic-content/header/header.html",
	    	"html/dynamic-content/"+n+"-body.html",
	    	"html/dynamic-content/footer/footer_generic.html"
	    	];	
	    	$("body").on("load", ()=>{
	    		loadFileGet(links[0]).then(obsah => {
	    			//console.log("call1: " + obsah);
	    				try
	    				{
	    					//console.log(obsah);
							content.push(pseudoParser(obsah, "headr"));	    					
	    				}
	    				catch(e)
	    				{
	    					console.log("vynimka 1 pri fetch header " + e);
	    				}
	    				return loadFileGet(links[1]);//to treba lebo chain chyti undefined
	    			}).then(obsah => {
	    				//console.log("call2: " + obsah);
	    				try 
	    				{
		    				content.push(pseudoParser(obsah, "obsah"));
	    				}
	    				catch(e)
	    				{
	    					console.log("zachytena podmienka 2 " + e);
	    				}
	    				return loadFileGet(links[2]);
	    			}).then(obsah => {
	    				//console.log("call3: " + obsah);
	    				try
	    				{
		    				content.push(pseudoParser(obsah, "footer"));
		    				for (var i in content)
		    				{
		    					$("body").append(content[i]);
		    				}
		    				init();//na zaver az je hotove
		    				//console.log("--------------------------------");
		    			//	console.log("DEBUG: " + content);
	    				}
	    				catch(e)
	    				{
	    					console.log("zachytena vynimka 3 " +e);
	    				}
	    			}).catch(err => {
	    				console.log("Catch triggered retazec get: " + err);
	    			});
	    		}
		    );
	    	$("body").trigger("load");//volaj event, niekdey sa nespusti
	    }
}
function widget()
{
	//experimentalny widget
    	/*$("#cons").css("height", ($(window).height()/100)*20);
    	$("#cons-title").css("bottom", ($("#cons").height()+2));
    	$("#cons-title").click(function()
    		{
    			//$("#cons").slideToggle(800);
    			if($("#cons").height()>0)
    			{
    				$("#cons").animate(
	    				{
	    					height: '0px'
	    				}, 600, 'linear'
	    			);
	    			$("#cons-title").animate(
	    				{
	    					bottom: '0px'
	    				}, 600, 'linear'
	    			);	
    			}
    			else
    			{
    				$("#cons").animate(
	    				{
	    					height: parseInt(($(window).height()/100)*20).toString() + 'px'
	    				}, 600, 'linear'
	    			);
	    			$("#cons-title").animate(
	    				{
	    					bottom: parseInt((($(window).height()/100)*20)).toString() + 'px'
	    				}, 600, 'linear'
	    			);
    			}
    			return false;
    		}
    	);*/
}
