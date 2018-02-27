/**
 * @author Prometeus
 */
$(document).ready(
	function()
    {	
    	//> znaci priameho potomka`
    	//$("div > ul[name*=list1] > li[name*=monstro][id*=bannerlord]").css("color", "#00f7f7");
    	//console.log("width: " + $(window).width() + " height: " + $(window).height());
		$("[data-toggle=popover]").popover({
			html: true;
			content: function()
			{
				
			}
		});
    	$("#login").popover();
    	$("#cons").css("height", ($(window).height()/100)*20);
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
    	);
    }
);