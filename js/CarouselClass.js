/**
 * @author Prometeus
 */
class CarouselClass
{
	constructor(wt=60, ht=60, bh=50, bv=50)
	{
		this._width=wt;
		this._height=ht;
		this._backV=bv;//vertical
		this._backH=bh;//horizontal
	}
	styleDecisionCascade(sirka, vyska)//vytvori styl do docu
	{
		this._styl = null;
		//console.log("vysk sirk: " + vyska + " " + sirka);
		if(window.innerWidth>=768)
		{
			this._backH=0;
			this._backV=0;
			//console.log("trigger detected");
			this._styl=document.createElement("style");
			this._styl.setAttribute("id", "styleCarusResp");
			this._styl.innerHTML =  " .carousel { height: " + vyska + "px; width: " + sirka +"px;}" +
							" .carousel img{ min-width: " + this._width +"%;}"+
							" .carousel-inner {height: 100% !important; width: 100% !important;}" + 
							".item {background-size: cover; background-position: "+ this._backH +"% "+ this._backV +"%;" +
						      " width: 100%; height: 100%; background-repeat: no-repeat; }" +
							".item img { visibility: hidden;}";		
		}
		else
		{
			this._styl=document.createElement("style");
			this._styl.setAttribute("id", "styleCarusResp");
			this._styl.innerHTML =  " .carousel { height: " + vyska + "px;}" +
							" .carousel img{ min-width: " + this._width +"%;}"+
							" .carousel-inner {height: 100% !important; width: 100% !important;}" + 
							".item {background-size: cover; background-position: "+ this._backH +"% "+ this._backV +"%;" +
						      " width: 100%; height: 100%; background-repeat: no-repeat;}" +
							".item img { visibility: hidden;}";	
		}
		
		return this._styl;
	}
	carusResponsive()//zaisti logiku za responzivitou
	{
		//console.log("called carus responsive");
		this._w = (window.innerWidth/100)*this._width;
		this._h = (window.innerHeight/100)*this._height;
		this._stylehseet = null;
		if(document.getElementById("styleCarusResp") == null)
		{
			this._stylesheet = this.styleDecisionCascade(this._w, this._h);
			if(this._stylesheet != null)
			{
				document.body.appendChild(this._stylesheet);
			}
		}
		else
		{
			this._stylesheet = document.getElementById("styleCarusResp");
			this._stylesheet.parentNode.removeChild(this._stylesheet);
			this._stylesheet = this.styleDecisionCascade(this._w, this._h);
			if(this._stylehseet!=null)
			{
				document.body.appendChild(this._stylesheet);
			}
		}
	}
	//getters setters
	get width()
	{
		return this._width;
	}
	set width(val)
	{
		this._width=val;
	}
	get height()
	{
		return this._height;
	}
	set height(val)
	{
		this._height=val;
	}
}
