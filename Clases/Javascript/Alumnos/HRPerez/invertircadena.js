function invertir() {
  var name = document.getElementById('name').value;
  var x = name.length;
  var cadenaInvertida = "";
 
  while (x>=0) {
    cadenaInvertida = cadenaInvertida + name.charAt(x);
    x--;
  }
   return alert(cadenaInvertida);
}

