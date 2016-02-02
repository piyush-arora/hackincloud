
function compile()
{

    var code = editor.getValue();

    if(window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else
    {
        xhr = new ActiveObject('Microsoft.XMLHTTP');
    }

    xhr.onreadystatechange = function(){

        if((xhr.readyState==4)&&(xhr.status == 200||xhr.status == 304))
        {
            document.getElementById("compiler").innerHTML = xhr.responseText;
        }

    };
    if(xhr)
    {
        alert('COMPILING CODE ........'+"\n"+'CHECK THE COMPILE WINDOW');
        xhr.open("GET",'http://localhost:8888/editor/compile/test?my_data='+code, true);
        xhr.send();
    }
    else
    {
        alert('php not ready');
    }

}


function compile_blockly()
{

    var code = Blockly.Arduino.workspaceToCode();

    if(window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else
    {
        xhr = new ActiveObject('Microsoft.XMLHTTP');
    }

    xhr.onreadystatechange = function(){

        if((xhr.readyState==4)&&(xhr.status == 200||xhr.status == 304))
        {
            document.getElementById("compiler").innerHTML = xhr.responseText;
        }

    };
    if(xhr)
    {
        alert('COMPILING CODE ........'+"\n"+'CHECK THE COMPILE WINDOW'+code);
        xhr.open("GET",'http://localhost:8888/editor/compile/test?my_data='+code, true);
        xhr.send();
    }
    else
    {
        alert('php not ready');
    }

}


