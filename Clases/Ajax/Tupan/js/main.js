function agregaproducto()
{
var listaProd = document.getElementById("listaProductos");
var productos = document.getElementById("productos");
var cantidadProductos = document.getElementById("cantidadProductos");

//Producto
var selectProducto = document.getElementById("producto");
var producto = selectProducto.options[selectProducto.selectedIndex].value;
var nombreproducto = selectProducto.options[selectProducto.selectedIndex].innerHTML;
var cantidad = document.getElementById("cantidad").value;

//Crear el LI
var newLi = document.createElement("li");
newLi.innerHTML= nombreproducto + " - " + cantidad;
listaProd.appendChild(newLi);
//Agregar el Id de Producto a la lista de ids
productos.value = productos.value + ",";
cantidad.value = cantidad.value + ",";
}