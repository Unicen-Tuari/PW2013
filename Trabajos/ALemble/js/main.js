var RecaptchaOptions = {
    theme : 'white',
    lang : 'es'
 }

//-----------------------------------------------Comprobaciones------------------------------------------------------//
   
function comprobar_usr(username){

    $('#dispo').html('<img src="styles/images/loader.gif" alt="" />').fadeOut(1400);
       
    var dataString = 'username='+username.value;

    $.ajax({
        type: "POST",
        url: "check_user.php",
        data: dataString,
        success: function(data) {
            if (data == 'No disponible'){
              username.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
              username.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
              username.style["box-shadow"] =" 0 0 1px 1px #720303";
             }else{
                username.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
                username.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
                username.style["box-shadow"] =" 0 0 1px 1px #088A08";
              }
            $('#dispo').fadeIn(2000).html(data);
        }
    });
}
function comprobar_accion(){
    var dataString
    $.ajax({
        url: "check_accion.php",
        success: function(data) {
            if (data == 'false'){
              document.getElementById('aviso-accion').innerHTML = 'Realizaste una ccion hace menos de 5 min';
              return false;
             }else{
                return true;
              }
        }
    });
}


function comprobar_registro(){
    var nombre = document.registro.nombre.value;
    var username = document.registro.username.value;
    var password = document.registro.password.value;
    var passwordc = document.registro.passwordc.value;
    var email = document.registro.email.value;
    var mayor = document.registro.mayoredad.value;

   if ((nombre.length > 20) || (nombre.length < 5)){
      return false;
   }

   if ((username.length > 20) || (username.length < 5)){
      return false;
   }
   if ((password.length > 20) || (password.length < 5)){
      return false;
   }
   if ((passwordc.length > 20) || (passwordc.length < 5)){
      return false;
   }

   if (password != passwordc){
      return false;
   }
   if ((email.length > 30) || (email.length < 5)){
      return false;
   }

   if (mayoredad == false){
      return false;
   }
   
   return true;
}

function trailer_valido(enlace){
if (((enlace.value.substr(0, 25) == 'http://www.youtube.com/v/') && (enlace.value.length == 36)) || 
    ((enlace.value.substr(0, 26) == 'https://www.youtube.com/v/') && (enlace.value.length == 37)) || 
    (enlace.value.length == 0)){
  return true;
}else{
return false;
}
}


function comprobar_login(){
   var username = document.login.usernamelogin.value;
   var password = document.login.passwordlogin.value;

   if ((username.length > 20) || (username.length < 5)){
      return false;
   }

   if ((password.length > 20) || (password.length < 5)){
      return false;
   }
   
   return true;
}

function verifica(elemento,min,max) {
if ((elemento.value.length < min) || (elemento.value.length > max)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
    }
}

//----------------------------------------------Previsualizaciones------------------------------------------------//
  

//------------------------------------------Script Multibuscador--------------------------------------------------//   

function netsearch()
{
   var a1=busqueda_mult.broms.checked;
   var b1=busqueda_mult.torrentz.checked;
   var c1=busqueda_mult.filecrop.checked;
   var d1=busqueda_mult.imdb.checked;
   var e1=busqueda_mult.subdivx.checked;
   var f1=busqueda_mult.skydrow.checked;
   var g1=busqueda_mult.youtube.checked;
   var a2
   var b2
   var c2
   var d2
   var e2
   var f2
   var g2
   var busqueda
   var noENGINE
   var haveTEXT
   var suma = 0;
   busqueda=busqueda_mult.busqueda.value;
   noEngine=true;
   haveTEXT=true;
   if (a1){suma = (suma +1);}
   if (b1){suma = (suma +1);}
   if (c1){suma = (suma +1);}
   if (d1){suma = (suma +1);}
   if (e1){suma = (suma +1);}
   if (f1){suma = (suma +1);}
   if (g1){suma = (suma +1);}
   if ((busqueda.length > 2) && (suma = 1)) {
  
a2="http://www.broms.com.ar/index.php?busqueda="+busqueda+"&type=B&pagina=1"; 
     if (a1)
       {
       noEngine=false
       if (haveTEXT)
         {
         newWindow=window.open(a2, "av","toolbar,location,directories,status,menubar,scrollbars,resizable=1",false)
         }
       }
   

   b2="http://torrentz.eu/search?f="+busqueda;  
     if (b1)
       {
       noEngine=false
       if (haveTEXT)
         {
         newWindow=window.open(b2, "e","toolbar,location,directories,status,menubar,scrollbars,resizable=1",false)
         }
       }  

  c2="http://www.filecrop.com/search.php?w="+busqueda+"&size_i=0&size_f=100000000&engine_r=1&engine_d=1&engine_h=1&engine_e=1&engine_m=1&engine_4=1";
     if (c1)
       {
       noEngine=false
       if (haveTEXT)
         {
         newWindow=window.open(c2, "h","toolbar,location,directories,status,menubar,scrollbars,resizable=1",false)
         }
       }  

d2="http://www.imdb.com/find?q="+busqueda+"&s=all";
     if (d1)
       {
       noEngine=false
       if (haveTEXT)
         {
         newWindow=window.open(d2, "i", "toolbar,location,directories,status,menubar,scrollbars,resizable=1",false)
         }
       }  
    
  
e2="http://www.subdivx.com/index.php?buscar="+busqueda+"&accion=5&masdesc=&subtitulos=1&realiza_b=1";
     if (e1)
       {
       noEngine=false
       if (haveTEXT)
         {
         newWindow=window.open(e2, "l","toolbar,location,directories,status,menubar,scrollbars,resizable=1",false)
         }
       }  

   f2="http://www.skidrowgames.net/?s="+busqueda;
     if (f1)
       {
       noEngine=false
       if (haveTEXT)
         {
         newWindow=window.open(f2, "w","toolbar,location,directories,status,menubar,scrollbars,resizable=1",false)
         }
       }       

   g2="http://www.youtube.com/results?search_query="+busqueda;
     if (g1)
       {
       noEngine=false
       if (haveTEXT)
         {
         newWindow=window.open(g2, "y","toolbar,location,directories,status,menubar,scrollbars,resizable=1",false)
         }
       }  
   }
 
}




