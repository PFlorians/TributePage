var imgs;
var counterIndex=0;//drzany pre next, prev
var imageBuffer1=[];
function initGallery()//inicializacia galerie pouziva isotope
{
	//console.log("gallery init");
	$("#gallery").imagesLoaded().progress( function() {
			$("#gallery").isotope({
				itemSelector: ".grid-item",
				percentPosition: true,
				masonry: {
					columnWidth: ".grid-responsive-sizer"
				}
			});
  			$("#gallery").isotope('layout');
  			gallTransform();
		});	
}
//transformacie obrazkov v mriezke
function gallTransform()
{
	var imgs=document.getElementsByClassName("img-normal");
	for(i=0;i<imgs.length;i++)
	{
		var tmp=imgs[i];
		//console.log("i: ");
		//console.log(imgs[i]);
		imgs[i].onmouseover=function (tmp){
			var img=tmp.target;
			//console.log(img);
			if(img.classList.contains("img-normal"))
			{
				img.classList.remove("img-normal");
				img.classList.add("img-hover");
			}
		}
		imgs[i].onmouseout=function (tmp){
			var img=tmp.target;
			if(img.classList.contains("img-hover"))
			{
				img.classList.remove("img-hover");
				img.classList.add("img-normal");
			}
		}
	}
}
//inicializacia zakladnych bufferov
function respInitializer()//pre nahadzovanie css pre resize
{
	if(window.innerWidth<1195)
	{
		$("#galleryContent").removeClass("gallery-modal-container");
		$("#galleryContent").addClass("gallery-modal-container-mini");
	}
	else
	{
		if($("#galleryContent").hasClass("gallery-modal-container-mini"))
		{
			$("#galleryContent").removeClass("gallery-modal-container-mini");
			$("#galleryContent").addClass("gallery-modal-container");
		}
		//console.log("nezbahla: " + window.innerWidth);
	}
}
function initImgs()//volat raz, inicializuje obrazkovy buffer
{
	imgs=$("#gallery > .grid-item > .img-normal");
	imageBuffer1=[];//keby nieco
	console.log("init imgs");
	for(let i=0; i<imgs.length;i++)//aby neskoncilo i v bufferi vseob vars
	{
		if(imgs[i].tagName.indexOf("IMG") != -1)
		{
			imageBuffer1.push(imgs[i]);
			imageBuffer1[imageBuffer1.length-1].onclick=(() => {
				initModalGal("modalGallery");current(i);});
		}
		else
		{
			break;
		}
	}
}
//prehliadka
function nxt()
{
	counterIndex+=1;
	console.log("index nxt: " + counterIndex);
	showSlide(counterIndex, 1);
}
function prv()
{
	counterIndex-=1;
	console.log("index prv: " + counterIndex);
	showSlide(counterIndex, 0);
}
function current(index)//kliknem na img
{
	counterIndex=index;
	console.log("klikol som na obrazok cislo: " + counterIndex);
	showSlide(counterIndex);
}
/*
 * direction udava smer, 0 -> vlavo
 * 1->vpravo
 * -1 default nikama aka current
 */
var tmp;
function showSlide(index, direction=-1)
{
	console.log("slide: " + index);
	var disappearing;
	var following;
	//console.log(following);
	if(direction==0)
	{
		if(index<0)//overflow indexu
		{
			counterIndex=imageBuffer1.length-1;
			index=imageBuffer1.length-1;
			disappearing=imageDetector(0);//bol to prvy
		}
		else
		{
			disappearing=imageDetector(index+1);//inak predchodzi toen doprava	
		}
		disappearing.parentElement.style.display="block";
		disappearing.style.display="block";
		$(disappearing).animate({
			left: "+=100%",
			opacity: "0"
			}, 2000, "swing", ()=>{
				disappearing.parentElement.style.display="none";
				disappearing.style.display="none";
				disappearing.style.left="";
				disappearing.style.opacity="1";
				following=imageDetector(index);//load new
				following.parentElement.style.display="block";
				following.style.display="block";
			});
	}
	else if(direction==1)
	{
		//overflow
		if(index>=imageBuffer1.length)//v tomto pripade je vacsi ako buffer
		{
			counterIndex=0;//odzacaitku
			index=0;
			disappearing=imageDetector(imageBuffer1.length-1);//bol predtym posledny
		}
		else
		{
			disappearing=imageDetector(index-1);//predchodzi dolava	
		}
		//console.log("doprava: animujem: ");
		disappearing.parentElement.style.display="block";
		disappearing.style.display="block";
		tmp=disappearing;
		//console.log(disappearing);
		$(disappearing).animate({
			left: "-=100%",
			opacity: "0"
			}, 2000, "swing", ()=>{
				disappearing.parentElement.style.display="none";
				disappearing.style.display="none";
				disappearing.style.left="";//vymazat animaciou nastavene vlastnosti
				disappearing.style.opacity="1";
				following=imageDetector(index);//load new
				following.parentElement.style.display="block";
				following.style.display="block";
			});
	}
	else
	{
		disappearing=null;
		following=imageDetector(index);
		following.parentElement.style.display="block";
		following.style.display="block";
	}
}
/*
 * nasledujuca funkcia vracia referenciu na nasledujuci obrazok
 * na, ktorej sa potom vykonanvaju dalsie operacie
 */
function imageDetector(index)
{
	var smallGrid = $("#modalGallery > #galleryContent > .slajd > .img-gal");
	var imageBuffer2=[];
	console.log("index detector: " + index);
	//pretoze uzly obrazky v druhej mnozine mozu byt inak usporiadane
	for(let i=0;i<smallGrid.length;i++)
	{	
		if(smallGrid[i].nodeName.indexOf("IMG")!=-1)
		{
			imageBuffer2.push(smallGrid[i]);
			//najprv uisti sa, vsetky hidden
			imageBuffer2[imageBuffer2.length-1].parentElement.style.display="none";
			imageBuffer2[imageBuffer2.length-1].style.display="none";
		}
		else
		{//object appendnute veci
			break;
		}
	}
	if(imageBuffer2.length == imageBuffer1.length)
	{
		for(let i=0;i<imageBuffer2.length;i++)
		{
			if(imageBuffer2[i].src==imageBuffer1[index].src)
			{
				return imageBuffer2[i];//vratit hladany objekt
				//break; //sem nedojde
			}
		}	
	}
	else
	{
		console.log("ERROR!!!!!! image buffers should be equal in size");
		console.log("buffer1 " + imageBuffer1.length);
		for(i=0;i<imageBuffer1.length;i++)
		{
			console.log(imageBuffer1[i]);
		}
		console.log("buffer2 " + imageBuffer2.length);
		for(i=0;i<imageBuffer2.length;i++)
		{
			console.log(imageBuffer2[i]);
		}
	}
	return null;//to je zle
}