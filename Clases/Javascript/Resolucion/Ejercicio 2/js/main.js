function invertir()
{
	var cadena = document.getElementById('cadena').value;
	var x = cadena.length;
	var cadenaInvertida = "";
 	while (x>=0) {
    	cadenaInvertida = cadenaInvertida + cadena.charAt(x);
    	x--;
  	}
  	alert(cadenaInvertida);
}
