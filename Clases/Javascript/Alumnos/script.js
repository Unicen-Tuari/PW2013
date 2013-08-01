var re  = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/; 

function alertainicio(){
	//alert("Hola Mundo");
	return 0;
}

function valida_datos(){ 
   	//valido los datos
	if (document.login.nombre.value.length==0){ 
      	 alert("Debe ingresar su nombre") 
      	 document.login.nombre.focus() 
      	 return 0;
		}
	if (document.login.apellido.value.length==0){ 
      	 alert("Debe ingresar su apellido") 
      	 document.login.apellido.focus() 
      	 return 0;
		}
	if (!re.test(document.login.mail.value)) { 
		alert("Dirección de email inválida");
		return 0;
		}
	if (document.login.consulta.value==0){
		alert("no sea idiota, haga su consulta")
		return 0;
		}
}
	

