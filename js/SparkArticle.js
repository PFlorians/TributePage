class SparkArticle extends Spark
{
	/*constructor()
	{
		this.init();
	}*/
	init()
	{
		this._car=new CarouselClass(97, 70);
		$("[data-toggle=popover]").popover({
					html: true,
					content: function()
					{
						return $("#login-form").html();
					}
				});
		$("#login").popover();
		heurLo();	
		this._car.carusResponsive();
		adjustPadding();
		progressBarMeasurement();
		eventDispatcher(window);
	    window.addEventListener('resize', super.resizeEventHandler());
	   	window.addEventListener('scroll', () => 
	    {
	    	progressBarMeasurement();
	    });
	}
}
