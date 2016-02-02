function searching()
{
	if(window.XMLHttpRequest){
		xhr = new XMLHttpRequest();
	}else
	{
		xhr = new ActiveObject('Microsoft.XMLHTTP');
	}
	
	xhr.onreadystatechange = function(){
		
	if((xhr.readyState==4)&&(xhr.status == 200||xhr.status == 304))
	{
		document.getElementById("underInput").innerHTML = xhr.responseText;
	}	
	
	};//close function xhr.onreadystatechange
	
		xhr.open("GET", 'search.inc.php?userInput='+document.yolo.userInput.value, true);
		
		
		xhr.send();
}




function send_to_php()
{
	if(window.XMLHttpRequest){
		xhr = new XMLHttpRequest();
	}else
	{
		xhr = new ActiveObject('Microsoft.XMLHTTP');
	}
	
	
		xhr.open("GET",  'search.inc.php?my_data='+document.yolo.my_data.value, true);
		xhr.send();
}


function send_to_html()
{
	if(window.XMLHttpRequest){
		xhr = new XMLHttpRequest();
	}else
	{
		xhr = new ActiveObject('Microsoft.XMLHTTP');
	}
	
	xhr.onreadystatechange = function(){
		
	if((xhr.readyState==4)&&(xhr.status == 200||xhr.status == 304))
	{
		document.getElementById("gotdata").innerHTML = xhr.responseText;
	}	
	
	};//close function xhr.onreadystatechange
	
		xhr.open("GET", 'search.inc.php?userInput='+document.yolo.userInput.value, true);
		
		
		xhr.send();
}

