/**
 * @author PFlorians
 */
$(document).ready(
	function()
    {	
    	var meno=window.location.pathname;
    	var pg=meno.split("/").pop();
    	console.log("strank: " + pg.split(".")[0] + " loca: " + meno);
    	var n=String(pg.split(".")[0]);
    	console.log("n: " + n + " nacitavam");
    	if(n=="")//na linuxovych serveroch je to len /
    	{
    		n="index";
    	}
    	$("body").addClass("back")
    	if(meno.indexOf("html/")!=-1)
    	{//potom to musi byt definn ako sub doc aka article
    		//predpoklad vsetky dyna of type name-body.html
	    	$("body").on("load", () => {//tu bol v jquery bug
    				$("body").load("dynamic-content/"+n+"-body.html #obsah",  
						function(responseTxt, statusTxt, xhr){
		        		if(statusTxt == "error")
		        		{
		            		alert("Error: " + xhr.status + ": " + xhr.statusText);
		           		}
		           		else
		           		{
		           			setTimeout(initArticles(), 100);
		           		}
		    			});
		    		}
	    		);
	    	$("body").trigger("load");//volaj event, niekdey sa nespusti
	    }
	    else 
	    {
	    	//console.log("n: " + n + " nacitavam");
	    	$("body").on("load", () => {
    			$("body").load("html/dynamic-content/"+n+"-body.html #obsah",  
						function(responseTxt, statusTxt, xhr)
						{
		        			if(statusTxt == "error")
		        			{
		            			alert("Error: " + xhr.status + ": " + xhr.statusText);
		           			}
		           			else
		           			{
		           				setTimeout(init(), 100);
		           			}
		    			}
		    		);
		    	}
	    	);
	    	$("body").trigger("load");//volaj event, niekdey sa nespusti
	    }
		
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
);