function verificarFormulario()
{
	var nombre= document.getElementById('nombre');
	var asunto = document.getElementById('asunto');
	var telefono = document.getElementById('telefono');
	var email = document.getElementById('email');
	var mensaje = document.getElementById('mensaje');
	var linferior = 3;
	var lsuperior = 20;

	if(esVacio(nombre.value) && !largoEntre(linferior, lsuperior, nombre.value))
	{
		alert('Debe ingresar un nombre entre 3 y 30 caracteres');
		nombre.focus();
		return;
	}

	if(!emailValido(email.value))
	{
		alert('Debe ingresar un email valido Ej: usuario@gmail.com');
		email.focus();
		return;
	}

	if (!esVacio(telefono.value)){
		telefonoValido (telefono.value);
		telefono.focus();
	}
	
	if(esVacio(asunto.value) && !largoEntre(linferior, lsuperior, lastname.value))
	{
		alert('Debe ingresar un asunto entre 3 y 20 caracteres');
		asunto.focus();
		return;
	}

	if(esVacio(mensaje.value))
	{
		alert('Debe ingresar un mensaje');
		mensaje.focus();
		return;
	}

	
	return alert('Mensaje Enviado. Tendrás noticias a la brevedad.')
}

function emailValido(email)
{
	if(esVacio(email)) return false;

	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
	{
  	  return false;
	}

	return true;
}

function esVacio(valor)
{
	if(valor.length == 0)
	{
		return true;
	}

	return false;
}

function largoEntre(linferior, lsuperior, valor)
{
	if(valor.length> linferior && valor.length < lsuperior)
	{
		return true;
	}

	return false;
}

function telefonolValido(telefono){
	if( isNaN(telefono) || !(/^\d{9}$/.test(telefono)) ) { //Si es numero y si tiene 9 cifras seguidas
  		return false;
	}
	return false;
}