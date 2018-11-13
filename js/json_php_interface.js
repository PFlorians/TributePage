/*
*@author PFlorians
*this file contains functions which are responsible for a communication with PHP scripts
*/
function logout(path, user, pwd)//used in header if session was set
{
    var xmlhttp=new XMLHttpRequest();
    var jobj, x;
    var jsondata={"usr": user, "pass": pwd}
    console.log("args-user: " + user + " pwd: " + pwd + " path: " + path);
    xmlhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200)//vsetko OK
        {
            jobj=JSON.parse(this.responseText);
            console.log("xmlhttp_logout server responded");
            for(x in jobj)
            {
                console.log(x);
            }
        }
    }
    xmlhttp.open("POST", path, true);//tu otvori spojenie
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("data=", JSON.stringify(jsondata));//odoslat data vo formate JSONu
}
