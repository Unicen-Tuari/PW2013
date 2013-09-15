function invertirPalabra() 
{
 var texto= document.getElementById ('texto');
 
 alert (invertir(texto.value));
 
}

function invertir(cadena) {
  var x = cadena.length;
  var cadenaInvertida = "";
 
  while (x>=0) {
    cadenaInvertida = cadenaInvertida + cadena.charAt(x);
    x--;
  }
  return cadenaInvertida;
}