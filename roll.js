
function randomInt(min, max)
{
	return(Math.floor(Math.random() * (max - min + 1)) + min);
}


function actualizar(dado, cant) {
    if (cant < 1 && cant > 10) { 
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("show").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "actualizar.php?tipo=" + dado + "&cant="+ cant, true);
        xmlhttp.send();
    }
}

function roleada()
{
	var dado = document.getElementById("tipo").value;
	dado = dado.substring(1,dado.length);
	//dado = randomInt(1, dado);
	var cant = document.getElementById("cant").value;
	actualizar(parseInt(dado), parseInt(cant));
};