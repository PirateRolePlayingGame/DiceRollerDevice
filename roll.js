
function randomInt(min, max)
{
	return(Math.floor(Math.random() * (max - min + 1)) + min);
}


function actualizar(dado, cant) {
    if (cant < 1 && cant > 10) { 
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.open("POST", "actualizar.php", true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send("tipo=" + dado + "&cant="+ cant);
    }
}

function roleada()
{
	var dado = document.getElementById("tipo").value;
	dado = dado.substring(1,dado.length);
	//dado = randomInt(1, dado);
	var cant = document.getElementById("cant").value;
	actualizar(parseInt(dado), parseInt(cant));
    return false;
}


function actualizar2() {
    if (cant < 1 && cant > 10) { 
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("show").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("POST", "actualizar.php", true);
        xmlhttp.send();
    }
}



var interval = setInterval(actualizar2, 100);