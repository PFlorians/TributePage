class Spark
{
	constructor(w=60, h=70)
	{
		this._w=w;
		this._h=h;
		this._instance=this;
		//console.log("carousel w: " + this._w + " h: " + this._h );
		this.init();
	}
	init()
	{
		this._car=new CarouselClass(this._w, this._h);
		//console.log(this);
		//init onload sequence
		//basicIntel();
		$("[data-toggle=popover]").popover({//lebo predtym nieje istota, ze element existuje
					html: true,
					content: function()
					{
						return $("#login-form").html();
					}
				});
		$("#login").popover();
		heurLo();	
		this._car.carusResponsive();
		carusSlide();
		adjustPadding();
		progressBarMeasurement();
		eventDispatcher(window);
		 
		//console.log(this._car);
		//console.log("resizeEvent: ");
		//console.log(this.resizeEventHandler);});
		registerHandlers(this._car);
	    /*window.addEventListener('resize', this.resizeEventHandler);
	    window.addEventListener('scroll', () => 
	    {
	    	progressBarMeasurement();
	    	navbarCorrection();
	    });*/
	}
	getW()
	{
		return this._w;
	}
	getH()
	{
		return this._h;
	}
}


