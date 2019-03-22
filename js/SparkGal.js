class SparkGal extends Spark
{
	init()//mutacia pre galerie
	{
		this._car=new CarouselClass(super.getW(), super.getH());
	//	console.log("velkost carus: " + super.getW() + " h: " + super.getH());
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
		initGallery();
		initImgs();//new
		eventDispatcher(window);
		registerHandlers(this._car);
	    /*window.addEventListener('resize', super.resizeEventHandler());
	   	window.addEventListener('scroll', () => 
	    {
	    	progressBarMeasurement();
	    });*/
	}
}
