
function loadFile(path)
{
	return new Promise((resolve, reject)=>
		{
			console.log("cesta: " + path);
			let telo=$("body");
			
			var obj=$("body").load(path, 
				(response, status, xhr)=>{
					if(status=="error")
					{
						console.log("chybova odpoved: " + response+" status: " + status + " xhr: " + xhr );
						i++;
						reject(new Error("Chybaaaa " + response + " xhr " + xhr ));
					}
					else
					{
						//console.log("odpoved: " + response+" status: " + status + " xhr: " + xhr);
						console.log("xhr resp.: " + xhr.responseText);
					}
				}
			);
			
			/*for(n in obj[0])
			{
				console.log("n: " + n + " obj: " + obj[0][n]);
			}*/
			resolve(obj);
		}
	);
}
function pseudoParser(raw, anchor)//pseudo parser na surovy HTML text
{
	var contentContainer=[];
	var kotva=String(anchor); 
	
	//console.log("raw: " + raw);
	
	var html=$.parseHTML(raw);//parsovat na uzly
	//console.log("html: " + html);
	for(n in html)
	{
		if(typeof html[n].id!="undefined")
		{
			//console.log("id: " + html[n].id);
			if(html[n].id.indexOf(kotva)!=-1)
			{
			//	console.log("mam lock");
				return html[n];//vratit objekt
			}
		}
	}
}
//synchronizacny element v retazi nacitania a kompozicie docu
//je to ako fetch len robene rucne koli viacerym fileom
function loadFileGet(path)//cesta + ID
{//komplikovanejsi variant natiahnutia suroviny 
	return new Promise((resolve, reject) =>
		{
			$.get(path, (data, stav, xhr)=>{
				/*console.log("data: ");
				console.log(data);
				console.log("stav " + stav);
				console.log("objekt: " + xhr.responseText);*/
				if(status=="error")
				{
					reject(new Error("chyba obsah nenajdeny v dokumente: " + path));
				}
				else
				{
					resolve(xhr);
				}
			});//standardny get nech da odozvu
		} 
	);
}
//for(n in html){if(html[n].indexOf("obsah")!=-1){for(i in html[n]){console.log(html[n][i]);}}}