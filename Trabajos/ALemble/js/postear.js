/*-------------------------------------------------Funciones Comprobar--------------------------------------------------------*/

function comprobar_vid(){
    var titulo = document.nuevovid.titulo;
    var imagen = document.nuevovid.imagen;
    var sinopsis = document.nuevovid.sinopsis;
    var trailer = document.nuevovid.trailer;
    var enlace1 = document.nuevovid.enlace1;
    var descarga1 = document.nuevovid.descarga1;
    var enlace2 = document.nuevovid.enlace2;
    var descarga2 = document.nuevovid.descarga2;
    var enlace3 = document.nuevovid.enlace3;
    var descarga3 = document.nuevovid.descarga3;

   if ((titulo.value.length < 5) || (titulo.value.length > 70)){
      return false;}
    var punto = imagen.value.substr((imagen.value.length - 4),1);
    var http = imagen.value.substr(0,7);
    if ((imagen.value.length < 10) || (imagen.value.length > 1000) ||  
    (http != 'http://') || (punto != '.')){
      return false;}
    if ((sinopsis.value.length < 100) || (sinopsis.value.length > 3000)){
      return false;}
   if (!trailer_valido(trailer)){
      return false;
   }
   if (((enlace1.value.length < 5) || (enlace1.value.length > 100)) || ((descarga1.value.length < 5) || (descarga1.value.length > 1000))){
       return false;}   
    if (((enlace2.value.length < 5) || (enlace2.value.length > 100)) || ((descarga2.value.length < 5) || (descarga2.value.length > 1000))){
       return false;}   
    if (((enlace3.value.length < 5) || (enlace3.value.length > 100)) || ((descarga3.value.length < 5) || (descarga3.value.length > 1000))){
       return false;} 
   
   return true;
}

function comprobar_juego(){
    var titulo = document.nuevojuego.titulo;
    var imagen = document.nuevojuego.imagen;
    var descripcion = document.nuevojuego.descripcion;
    var min_so = document.nuevojuego.min_so;
    var min_procesador = document.nuevojuego.min_procesador;
    var min_memoria = document.nuevojuego.min_memoria;
    var min_video = document.nuevojuego.min_video;
    var min_espacio = document.nuevojuego.min_espacio;
    var min_librerias = document.nuevojuego.min_librerias;
    var min_otros = document.nuevojuego.min_otros;
    var trailer = document.nuevojuego.trailer;
    var enlace1 = document.nuevojuego.enlace1;
    var descarga1 = document.nuevojuego.descarga1;
    var enlace2 = document.nuevojuego.enlace2;
    var descarga2 = document.nuevojuego.descarga2;
    var enlace3 = document.nuevojuego.enlace3;
    var descarga3 = document.nuevojuego.descarga3;

    if ((titulo.value.length < 5) || (titulo.value.length > 70)){
      return false;}
    var punto = imagen.value.substr((imagen.value.length - 4),1);
    var http = imagen.value.substr(0,7);
    if ((imagen.value.length < 10) || (imagen.value.length > 1000) ||  
    (http != 'http://') || (punto != '.')){
      return false;}
    if ((descripcion.value.length < 100) || (descripcion.value.length > 3000)){
      return false;}
    if ((min_so.value.length < 5) || (min_so.value.length > 100)){
      return false;}
    if ((min_procesador.value.length < 5) || (min_procesador.value.length > 100)){
       return false;}    
    if ((min_memoria.value.length < 5) || (min_memoria.value.length > 100)){
       return false;}    
    if ((min_video.value.length < 5) || (min_video.value.length > 100)){
       return false;}    
    if ((min_espacio.value.length < 5) || (min_espacio.value.length > 100)){
       return false;}    
    if ((min_librerias.value.length < 5) || (min_librerias.value.length > 100)){
       return false;}
    if (!trailer_valido(trailer)){
      return false;}    
    if (((enlace1.value.length < 5) || (enlace1.value.length > 100)) || ((descarga1.value.length < 5) || (descarga1.value.length > 1000))){
       return false;}   
    if (((enlace2.value.length < 5) || (enlace2.value.length > 100)) || ((descarga2.value.length < 5) || (descarga2.value.length > 1000))){
       return false;}   
    if (((enlace3.value.length < 5) || (enlace3.value.length > 100)) || ((descarga3.value.length < 5) || (descarga3.value.length > 1000))){
       return false;}   
   return true;
}

/*-------------------------------------------------Funciones Preview--------------------------------------------------------*/

function CargarPreviewVideo(){

document.getElementById('PreviewTitulo').innerHTML = document.nuevovid.titulo.value;
document.getElementById('PreviewImagen').src = document.nuevovid.imagen.value;
document.getElementById('PreviewSinopsis').innerHTML = document.nuevovid.sinopsis.value;
if (trailer_valido(document.nuevovid.trailer)){ document.getElementById('PreviewTrailer').src = 'styles/images/previewtrailer.png';}
document.getElementById('PreviewEnlace1').innerHTML =document.nuevovid.enlace1.value;document.getElementById('PreviewEnlace1').href = document.nuevovid.descarga1.value;
document.getElementById('PreviewEnlace2').innerHTML =document.nuevovid.enlace2.value;document.getElementById('PreviewEnlace2').href = document.nuevovid.descarga2.value;
document.getElementById('PreviewEnlace3').innerHTML =document.nuevovid.enlace3.value;document.getElementById('PreviewEnlace3').href = document.nuevovid.descarga3.value;
document.getElementById('PreviewEnlace4').innerHTML =document.nuevovid.enlace4.value;document.getElementById('PreviewEnlace4').href = document.nuevovid.descarga4.value;
document.getElementById('PreviewEnlace5').innerHTML =document.nuevovid.enlace5.value;document.getElementById('PreviewEnlace5').href = document.nuevovid.descarga5.value;
document.getElementById('PreviewEnlace6').innerHTML =document.nuevovid.enlace6.value;document.getElementById('PreviewEnlace6').href = document.nuevovid.descarga6.value;
document.getElementById('PreviewEnlace7').innerHTML =document.nuevovid.enlace7.value;document.getElementById('PreviewEnlace7').href = document.nuevovid.descarga7.value;
document.getElementById('PreviewEnlace8').innerHTML =document.nuevovid.enlace8.value;document.getElementById('PreviewEnlace8').href = document.nuevovid.descarga8.value;
document.getElementById('PreviewEnlace9').innerHTML =document.nuevovid.enlace9.value;document.getElementById('PreviewEnlace9').href = document.nuevovid.descarga9.value;
document.getElementById('PreviewEnlace10').innerHTML = document.nuevovid.enlace10.value;document.getElementById('PreviewEnlace10').href = document.nuevovid.descarga10.value;
document.getElementById('PreviewEnlace11').innerHTML = document.nuevovid.enlace11.value;document.getElementById('PreviewEnlace11').href = document.nuevovid.descarga11.value;
document.getElementById('PreviewEnlace12').innerHTML = document.nuevovid.enlace12.value;document.getElementById('PreviewEnlace11').href = document.nuevovid.descarga12.value;
document.getElementById('PreviewEnlace13').innerHTML = document.nuevovid.enlace13.value;document.getElementById('PreviewEnlace13').href = document.nuevovid.descarga13.value;
document.getElementById('PreviewEnlace14').innerHTML = document.nuevovid.enlace14.value;document.getElementById('PreviewEnlace14').href = document.nuevovid.descarga14.value;
document.getElementById('PreviewEnlace15').innerHTML = document.nuevovid.enlace15.value;document.getElementById('PreviewEnlace15').href = document.nuevovid.descarga15.value;
document.getElementById('PreviewEnlace16').innerHTML = document.nuevovid.enlace16.value;document.getElementById('PreviewEnlace16').href = document.nuevovid.descarga16.value;
document.getElementById('PreviewEnlace17').innerHTML = document.nuevovid.enlace17.value;document.getElementById('PreviewEnlace17').href = document.nuevovid.descarga17.value;
document.getElementById('PreviewEnlace18').innerHTML = document.nuevovid.enlace18.value;document.getElementById('PreviewEnlace18').href = document.nuevovid.descarga18.value;
document.getElementById('PreviewEnlace19').innerHTML = document.nuevovid.enlace19.value;document.getElementById('PreviewEnlace19').href = document.nuevovid.descarga19.value;
document.getElementById('PreviewEnlace20').innerHTML = document.nuevovid.enlace20.value;document.getElementById('PreviewEnlace20').href = document.nuevovid.descarga20.value;
document.getElementById('PreviewEnlace21').innerHTML = document.nuevovid.enlace21.value;document.getElementById('PreviewEnlace21').href = document.nuevovid.descarga21.value;
document.getElementById('PreviewEnlace22').innerHTML = document.nuevovid.enlace22.value;document.getElementById('PreviewEnlace22').href = document.nuevovid.descarga22.value;
document.getElementById('PreviewEnlace23').innerHTML = document.nuevovid.enlace23.value;document.getElementById('PreviewEnlace23').href = document.nuevovid.descarga23.value;
document.getElementById('PreviewEnlace24').innerHTML = document.nuevovid.enlace24.value;document.getElementById('PreviewEnlace24').href = document.nuevovid.descarga24.value;
document.getElementById('PreviewEnlace25').innerHTML = document.nuevovid.enlace25.value;document.getElementById('PreviewEnlace25').href = document.nuevovid.descarga25.value;
document.getElementById('PreviewEnlace26').innerHTML = document.nuevovid.enlace26.value;document.getElementById('PreviewEnlace26').href = document.nuevovid.descarga26.value;
document.getElementById('PreviewEnlace27').innerHTML = document.nuevovid.enlace27.value;document.getElementById('PreviewEnlace27').href = document.nuevovid.descarga27.value;
document.getElementById('PreviewEnlace28').innerHTML = document.nuevovid.enlace28.value;document.getElementById('PreviewEnlace28').href = document.nuevovid.descarga28.value;
document.getElementById('PreviewEnlace29').innerHTML = document.nuevovid.enlace29.value;document.getElementById('PreviewEnlace29').href = document.nuevovid.descarga29.value;
document.getElementById('PreviewEnlace30').innerHTML = document.nuevovid.enlace30.value;document.getElementById('PreviewEnlace30').href = document.nuevovid.descarga30.value;
document.getElementById('PreviewEnlace31').innerHTML = document.nuevovid.enlace31.value;document.getElementById('PreviewEnlace31').href = document.nuevovid.descarga31.value;
document.getElementById('PreviewEnlace32').innerHTML = document.nuevovid.enlace32.value;document.getElementById('PreviewEnlace32').href = document.nuevovid.descarga32.value;
document.getElementById('PreviewEnlace33').innerHTML = document.nuevovid.enlace33.value;document.getElementById('PreviewEnlace33').href = document.nuevovid.descarga33.value;
document.getElementById('PreviewEnlace34').innerHTML = document.nuevovid.enlace34.value;document.getElementById('PreviewEnlace34').href = document.nuevovid.descarga34.value;
document.getElementById('PreviewEnlace35').innerHTML = document.nuevovid.enlace35.value;document.getElementById('PreviewEnlace35').href = document.nuevovid.descarga35.value;
document.getElementById('PreviewEnlace36').innerHTML = document.nuevovid.enlace36.value;document.getElementById('PreviewEnlace36').href = document.nuevovid.descarga36.value;
document.getElementById('PreviewEnlace37').innerHTML = document.nuevovid.enlace37.value;document.getElementById('PreviewEnlace37').href = document.nuevovid.descarga37.value;
document.getElementById('PreviewEnlace38').innerHTML = document.nuevovid.enlace38.value;document.getElementById('PreviewEnlace38').href = document.nuevovid.descarga38.value;
document.getElementById('PreviewEnlace39').innerHTML = document.nuevovid.enlace39.value;document.getElementById('PreviewEnlace39').href = document.nuevovid.descarga39.value;
document.getElementById('PreviewEnlace40').innerHTML = document.nuevovid.enlace40.value;document.getElementById('PreviewEnlace40').href = document.nuevovid.descarga40.value;

}
function CargarPreviewJuego(){
  
document.getElementById('PreviewTitulo').innerHTML = document.nuevojuego.titulo.value;
document.getElementById('PreviewImagen').src = document.nuevojuego.imagen.value;
document.getElementById('PreviewDescripcion').innerHTML = document.nuevojuego.descripcion.value;
document.getElementById('PreviewMin_so').innerHTML = document.nuevojuego.min_so.value;
document.getElementById('PreviewMin_procesador').innerHTML = document.nuevojuego.min_procesador.value;
document.getElementById('PreviewMin_memoria').innerHTML = document.nuevojuego.min_memoria.value;
document.getElementById('PreviewMin_video').innerHTML = document.nuevojuego.min_video.value;
document.getElementById('PreviewMin_espacio').innerHTML = document.nuevojuego.min_espacio.value;
document.getElementById('PreviewMin_librerias').innerHTML = document.nuevojuego.min_librerias.value;
document.getElementById('PreviewMin_otros').innerHTML = document.nuevojuego.min_otros.value;
CargarPrimeraPreviewRec();
 if (trailer_valido(document.nuevojuego.trailer)){ document.getElementById('PreviewTrailer').src = 'styles/images/previewtrailer.png';}
document.getElementById('PreviewEnlace1').innerHTML =document.nuevojuego.enlace1.value;document.getElementById('PreviewEnlace1').href = document.nuevojuego.descarga1.value;
document.getElementById('PreviewEnlace2').innerHTML =document.nuevojuego.enlace2.value;document.getElementById('PreviewEnlace2').href = document.nuevojuego.descarga2.value;
document.getElementById('PreviewEnlace3').innerHTML =document.nuevojuego.enlace3.value;document.getElementById('PreviewEnlace3').href = document.nuevojuego.descarga3.value;
document.getElementById('PreviewEnlace4').innerHTML =document.nuevojuego.enlace4.value;document.getElementById('PreviewEnlace4').href = document.nuevojuego.descarga4.value;
document.getElementById('PreviewEnlace5').innerHTML =document.nuevojuego.enlace5.value;document.getElementById('PreviewEnlace5').href = document.nuevojuego.descarga5.value;
document.getElementById('PreviewEnlace6').innerHTML =document.nuevojuego.enlace6.value;document.getElementById('PreviewEnlace6').href = document.nuevojuego.descarga6.value;
document.getElementById('PreviewEnlace7').innerHTML =document.nuevojuego.enlace7.value;document.getElementById('PreviewEnlace7').href = document.nuevojuego.descarga7.value;
document.getElementById('PreviewEnlace8').innerHTML =document.nuevojuego.enlace8.value;document.getElementById('PreviewEnlace8').href = document.nuevojuego.descarga8.value;
document.getElementById('PreviewEnlace9').innerHTML =document.nuevojuego.enlace9.value;document.getElementById('PreviewEnlace9').href = document.nuevojuego.descarga9.value;
document.getElementById('PreviewEnlace10').innerHTML = document.nuevojuego.enlace10.value;document.getElementById('PreviewEnlace10').href = document.nuevojuego.descarga10.value;
document.getElementById('PreviewEnlace11').innerHTML = document.nuevojuego.enlace11.value;document.getElementById('PreviewEnlace11').href = document.nuevojuego.descarga11.value;
document.getElementById('PreviewEnlace12').innerHTML = document.nuevojuego.enlace12.value;document.getElementById('PreviewEnlace11').href = document.nuevojuego.descarga12.value;
document.getElementById('PreviewEnlace13').innerHTML = document.nuevojuego.enlace13.value;document.getElementById('PreviewEnlace13').href = document.nuevojuego.descarga13.value;
document.getElementById('PreviewEnlace14').innerHTML = document.nuevojuego.enlace14.value;document.getElementById('PreviewEnlace14').href = document.nuevojuego.descarga14.value;
document.getElementById('PreviewEnlace15').innerHTML = document.nuevojuego.enlace15.value;document.getElementById('PreviewEnlace15').href = document.nuevojuego.descarga15.value;
document.getElementById('PreviewEnlace16').innerHTML = document.nuevojuego.enlace16.value;document.getElementById('PreviewEnlace16').href = document.nuevojuego.descarga16.value;
document.getElementById('PreviewEnlace17').innerHTML = document.nuevojuego.enlace17.value;document.getElementById('PreviewEnlace17').href = document.nuevojuego.descarga17.value;
document.getElementById('PreviewEnlace18').innerHTML = document.nuevojuego.enlace18.value;document.getElementById('PreviewEnlace18').href = document.nuevojuego.descarga18.value;
document.getElementById('PreviewEnlace19').innerHTML = document.nuevojuego.enlace19.value;document.getElementById('PreviewEnlace19').href = document.nuevojuego.descarga19.value;
document.getElementById('PreviewEnlace20').innerHTML = document.nuevojuego.enlace20.value;document.getElementById('PreviewEnlace20').href = document.nuevojuego.descarga20.value;
document.getElementById('PreviewEnlace21').innerHTML = document.nuevojuego.enlace21.value;document.getElementById('PreviewEnlace21').href = document.nuevojuego.descarga21.value;
document.getElementById('PreviewEnlace22').innerHTML = document.nuevojuego.enlace22.value;document.getElementById('PreviewEnlace22').href = document.nuevojuego.descarga22.value;
document.getElementById('PreviewEnlace23').innerHTML = document.nuevojuego.enlace23.value;document.getElementById('PreviewEnlace23').href = document.nuevojuego.descarga23.value;
document.getElementById('PreviewEnlace24').innerHTML = document.nuevojuego.enlace24.value;document.getElementById('PreviewEnlace24').href = document.nuevojuego.descarga24.value;
document.getElementById('PreviewEnlace25').innerHTML = document.nuevojuego.enlace25.value;document.getElementById('PreviewEnlace25').href = document.nuevojuego.descarga25.value;
document.getElementById('PreviewEnlace26').innerHTML = document.nuevojuego.enlace26.value;document.getElementById('PreviewEnlace26').href = document.nuevojuego.descarga26.value;
document.getElementById('PreviewEnlace27').innerHTML = document.nuevojuego.enlace27.value;document.getElementById('PreviewEnlace27').href = document.nuevojuego.descarga27.value;
document.getElementById('PreviewEnlace28').innerHTML = document.nuevojuego.enlace28.value;document.getElementById('PreviewEnlace28').href = document.nuevojuego.descarga28.value;
document.getElementById('PreviewEnlace29').innerHTML = document.nuevojuego.enlace29.value;document.getElementById('PreviewEnlace29').href = document.nuevojuego.descarga29.value;
document.getElementById('PreviewEnlace30').innerHTML = document.nuevojuego.enlace30.value;document.getElementById('PreviewEnlace30').href = document.nuevojuego.descarga30.value;
document.getElementById('PreviewEnlace31').innerHTML = document.nuevojuego.enlace31.value;document.getElementById('PreviewEnlace31').href = document.nuevojuego.descarga31.value;
document.getElementById('PreviewEnlace32').innerHTML = document.nuevojuego.enlace32.value;document.getElementById('PreviewEnlace32').href = document.nuevojuego.descarga32.value;
document.getElementById('PreviewEnlace33').innerHTML = document.nuevojuego.enlace33.value;document.getElementById('PreviewEnlace33').href = document.nuevojuego.descarga33.value;
document.getElementById('PreviewEnlace34').innerHTML = document.nuevojuego.enlace34.value;document.getElementById('PreviewEnlace34').href = document.nuevojuego.descarga34.value;
document.getElementById('PreviewEnlace35').innerHTML = document.nuevojuego.enlace35.value;document.getElementById('PreviewEnlace35').href = document.nuevojuego.descarga35.value;
document.getElementById('PreviewEnlace36').innerHTML = document.nuevojuego.enlace36.value;document.getElementById('PreviewEnlace36').href = document.nuevojuego.descarga36.value;
document.getElementById('PreviewEnlace37').innerHTML = document.nuevojuego.enlace37.value;document.getElementById('PreviewEnlace37').href = document.nuevojuego.descarga37.value;
document.getElementById('PreviewEnlace38').innerHTML = document.nuevojuego.enlace38.value;document.getElementById('PreviewEnlace38').href = document.nuevojuego.descarga38.value;
document.getElementById('PreviewEnlace39').innerHTML = document.nuevojuego.enlace39.value;document.getElementById('PreviewEnlace39').href = document.nuevojuego.descarga39.value;
document.getElementById('PreviewEnlace40').innerHTML = document.nuevojuego.enlace40.value;document.getElementById('PreviewEnlace40').href = document.nuevojuego.descarga40.value;
  
}

function CargarPreviewTitulo(elemento){
  if ((elemento.value.length < 5) || (elemento.value.length > 70)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('PreviewTitulo').innerHTML = '';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewTitulo').innerHTML = elemento.value;
      }
}
function CargarPreviewImagen(elemento){
 var punto = imagen.value.substr((imagen.value.length - 4),1);
    var http = elemento.value.substr(0,7);
    if ((imagen.value.length < 12) || (imagen.value.length > 1000) ||  (http != 'http://') || (punto != '.')) {
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('PreviewImagen').style.display='none';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewImagen').style.display='block';
        document.getElementById('PreviewImagen').src = elemento.value;
      }
}

function CargarPreviewSinopsis(elemento){
  if ((elemento.value.length < 100) || (elemento.value.length > 3000)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('PreviewSinopsis').innerHTML = '';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewSinopsis').innerHTML = elemento.value;
      }
}

function CargarPreviewDescripcion(elemento){
  if ((elemento.value.length < 100) || (elemento.value.length > 3000)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('PreviewDescripcion').innerHTML = '';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewDescripcion').innerHTML = elemento.value;
      }
}

function CargarPreviewTrailer(enlace){
if (((enlace.value.substr(0, 25) == 'http://www.youtube.com/v/') && (enlace.value.length == 36)) || 
    ((enlace.value.substr(0, 26) == 'https://www.youtube.com/v/') && (enlace.value.length == 37))){
  enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
  enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
  enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
  document.getElementById('PreviewTrailer').style.display = 'inline';
  document.getElementById('PreviewTrailer').src = 'styles/images/previewtrailer.png';
}else{
enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
document.getElementById('PreviewTrailer').style.display = 'none';
}
}

function CargarPreviewMin_so(elemento){
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('PreviewMin_so').innerHTML = '';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewMin_so').innerHTML = elemento.value;
      }
}
function CargarPreviewMin_procesador(elemento){
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('PreviewMin_procesador').innerHTML = '';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewMin_procesador').innerHTML = elemento.value;
      }
}

function CargarPreviewMin_memoria(elemento){
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('PreviewMin_memoria').innerHTML = '';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewMin_memoria').innerHTML = elemento.value;
      }
}

function CargarPreviewMin_video(elemento){
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('PreviewMin_video').innerHTML = '';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewMin_video').innerHTML = elemento.value;
      }
}

function CargarPreviewMin_espacio(elemento){
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('PreviewMin_espacio').innerHTML = '';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewMin_espacio').innerHTML = elemento.value;
      }
}

function CargarPreviewMin_librerias(elemento){
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('PreviewMin_librerias').innerHTML = '';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewMin_librerias').innerHTML = elemento.value;
      }
}

function CargarPreviewMin_otros(elemento){
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('VinetaMin_otros').style.display = 'none';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('VinetaMin_otros').style.display = 'block';
        document.getElementById('PreviewMin_otros').innerHTML = elemento.value;
      }
}

function CargarPrimeraPreviewRec(){
if  (((document.nuevojuego.rec_so.value.length < 5) || (document.nuevojuego.rec_so.value.length > 100)) &&
    ((document.nuevojuego.rec_procesador.value.length < 5) || (document.nuevojuego.rec_procesador.value.length > 100)) &&
    ((document.nuevojuego.rec_memoria.value.length < 5) || (document.nuevojuego.rec_memoria.value.length > 100)) &&
    ((document.nuevojuego.rec_video.value.length < 5) || (document.nuevojuego.rec_video.value.length > 100)) &&
    ((document.nuevojuego.rec_espacio.value.length < 5) || (document.nuevojuego.rec_espacio.value.length > 100)) &&
    ((document.nuevojuego.rec_librerias.value.length < 5) || (document.nuevojuego.rec_librerias.value.length > 100)) &&
    ((document.nuevojuego.rec_otros.value.length < 5) || (document.nuevojuego.rec_otros.value.length > 100))){
  document.getElementById('ListaRec').style.display = 'none';
}else {
    document.getElementById('ListaRec').style.display = 'block';
    CargarPreviewRec_so(document.nuevojuego.rec_so);
    CargarPreviewRec_procesador(document.nuevojuego.rec_procesador);
    CargarPreviewRec_memoria(document.nuevojuego.rec_memoria);
    CargarPreviewRec_video(document.nuevojuego.rec_video);
    CargarPreviewRec_espacio(document.nuevojuego.rec_espacio);
    CargarPreviewRec_librerias(document.nuevojuego.rec_librerias);
    CargarPreviewRec_otros(document.nuevojuego.rec_otros);}
if  ((document.nuevojuego.min_otros.value.length < 5) || (document.nuevojuego.min_otros.value.length > 100)){
    document.getElementById('VinetaMin_otros').style.display = 'none';
}
}


function masdescargas(){
  if (document.getElementById('masdescargas').style.display == 'none'){
    document.getElementById('masdescargas').style.display = 'block';
  }else{
    document.getElementById('masdescargas').style.display = 'none';
  } 
}

function CargarPreviewRec(){
if  (((document.nuevojuego.rec_so.value.length < 5) || (document.nuevojuego.rec_so.value.length > 100)) &&
    ((document.nuevojuego.rec_procesador.value.length < 5) || (document.nuevojuego.rec_procesador.value.length > 100)) &&
    ((document.nuevojuego.rec_memoria.value.length < 5) || (document.nuevojuego.rec_memoria.value.length > 100)) &&
    ((document.nuevojuego.rec_video.value.length < 5) || (document.nuevojuego.rec_video.value.length > 100)) &&
    ((document.nuevojuego.rec_espacio.value.length < 5) || (document.nuevojuego.rec_espacio.value.length > 100)) &&
    ((document.nuevojuego.rec_librerias.value.length < 5) || (document.nuevojuego.rec_librerias.value.length > 100)) &&
    ((document.nuevojuego.rec_otros.value.length < 5) || (document.nuevojuego.rec_otros.value.length > 100))){
  document.getElementById('ListaRec').style.display = 'none';
}else {
    document.getElementById('ListaRec').style.display = 'block';
    if ((document.nuevojuego.rec_so.value.length < 5) || (document.nuevojuego.rec_so.value.length > 100)){
    document.getElementById('VinetaRec_so').style.display = 'none';}
    if ((document.nuevojuego.rec_procesador.value.length < 5) || (document.nuevojuego.rec_procesador.value.length > 100)){
    document.getElementById('VinetaRec_procesador').style.display = 'none';}
    if ((document.nuevojuego.rec_memoria.value.length < 5) || (document.nuevojuego.rec_memoria.value.length > 100)){
    document.getElementById('VinetaRec_memoria').style.display = 'none';}
    if ((document.nuevojuego.rec_video.value.length < 5) || (document.nuevojuego.rec_video.value.length > 100)){
    document.getElementById('VinetaRec_video').style.display = 'none';}
    if ((document.nuevojuego.rec_espacio.value.length < 5) || (document.nuevojuego.rec_espacio.value.length > 100)){
    document.getElementById('VinetaRec_espacio').style.display = 'none';}
    if ((document.nuevojuego.rec_librerias.value.length < 5) || (document.nuevojuego.rec_librerias.value.length > 100)){
    document.getElementById('VinetaRec_librerias').style.display = 'none';}
    if ((document.nuevojuego.rec_otros.value.length < 5) || (document.nuevojuego.rec_otros.value.length > 100)){
    document.getElementById('VinetaRec_otros').style.display = 'none';}
}
}

function CargarPreviewRec_so(elemento){
  CargarPreviewRec();
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('VinetaRec_so').style.display = 'none';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('VinetaRec_so').style.display = 'block';
        document.getElementById('PreviewRec_so').innerHTML = elemento.value;
      }
}

function CargarPreviewRec_procesador(elemento){
  CargarPreviewRec();
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('VinetaRec_procesador').style.display = 'none';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('VinetaRec_procesador').style.display = 'block';
        document.getElementById('PreviewRec_procesador').innerHTML = elemento.value;
      }
}

function CargarPreviewRec_memoria(elemento){
  CargarPreviewRec();
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('VinetaRec_memoria').style.display = 'none';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('VinetaRec_memoria').style.display = 'block';
        document.getElementById('PreviewRec_memoria').innerHTML = elemento.value;
      }
}

function CargarPreviewRec_video(elemento){
  CargarPreviewRec();
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('VinetaRec_video').style.display = 'none';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('VinetaRec_video').style.display = 'block';
        document.getElementById('PreviewRec_video').innerHTML = elemento.value;
      }
}

function CargarPreviewRec_espacio(elemento){
  CargarPreviewRec();
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('VinetaRec_espacio').style.display = 'none';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('VinetaRec_espacio').style.display = 'block';
        document.getElementById('PreviewRec_espacio').innerHTML = elemento.value;
      }
}

function CargarPreviewRec_librerias(elemento){
  CargarPreviewRec();
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('VinetaRec_librerias').style.display = 'none';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('VinetaRec_librerias').style.display = 'block';
        document.getElementById('PreviewRec_librerias').innerHTML = elemento.value;
      }
}

function CargarPreviewRec_otros(elemento){
  CargarPreviewRec();
  if ((elemento.value.length < 5) || (elemento.value.length > 100)){
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        elemento.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('VinetaRec_otros').style.display = 'none';
   }else{
        elemento.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        elemento.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('VinetaRec_otros').style.display = 'block';
        document.getElementById('PreviewRec_otros').innerHTML = elemento.value;
      }
}

function CargarPreviewDescarga1(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('PreviewEnlace1').innerHTML = '';
        document.getElementById('PreviewEnlace1').href = '';
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace1').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace1').href = url.value;
      }
}
function CargarPreviewDescarga2(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('PreviewEnlace2').innerHTML = '';
        document.getElementById('PreviewEnlace2').href = '';
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace2').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace2').href = url.value;
      }
} 
function CargarPreviewDescarga3(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
        document.getElementById('PreviewEnlace3').innerHTML = '';
        document.getElementById('PreviewEnlace3').href = '';
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace3').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace3').href = url.value;
      }
}
function CargarPreviewDescarga4(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace4').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace4').href = url.value;
      }
} 
function CargarPreviewDescarga5(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace5').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace5').href = url.value;
      }
} 
function CargarPreviewDescarga6(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace6').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace6').href = url.value;
      }
} 
function CargarPreviewDescarga7(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace7').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace7').href = url.value;
      }
} 
function CargarPreviewDescarga8(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace8').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace8').href = url.value;
      }
} 
function CargarPreviewDescarga9(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace9').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace9').href = url.value;
      }
}
function CargarPreviewDescarga10(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace10').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace10').href = url.value;
      }
}
function CargarPreviewDescarga11(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) ||((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace11').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace11').href = url.value;
      }
}
function CargarPreviewDescarga12(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace12').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace12').href = url.value;
      }
} 
function CargarPreviewDescarga13(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace13').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace13').href = url.value;
      }
}
function CargarPreviewDescarga14(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace14').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace14').href = url.value;
      }
} 
function CargarPreviewDescarga15(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) ||((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace15').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace15').href = url.value;
      }
} 
function CargarPreviewDescarga16(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace16').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace16').href = url.value;
      }
} 
function CargarPreviewDescarga17(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace17').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace17').href = url.value;
      }
} 
function CargarPreviewDescarga18(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace18').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace18').href = url.value;
      }
} 
function CargarPreviewDescarga19(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace19').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace19').href = url.value;
      }
}
function CargarPreviewDescarga20(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace20').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace20').href = url.value;
      }
}
function CargarPreviewDescarga21(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace21').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace21').href = url.value;
      }
}
function CargarPreviewDescarga22(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace22').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace22').href = url.value;
      }
} 
function CargarPreviewDescarga23(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace23').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace23').href = url.value;
      }
}
function CargarPreviewDescarga24(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace24').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace24').href = url.value;
      }
} 
function CargarPreviewDescarga25(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace25').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace25').href = url.value;
      }
} 
function CargarPreviewDescarga26(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace26').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace26').href = url.value;
      }
} 
function CargarPreviewDescarga27(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace27').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace27').href = url.value;
      }
} 
function CargarPreviewDescarga28(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace28').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace28').href = url.value;
      }
} 
function CargarPreviewDescarga29(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace29').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace29').href = url.value;
      }
}
function CargarPreviewDescarga30(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace30').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace30').href = url.value;
      }
}
function CargarPreviewDescarga31(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace31').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace31').href = url.value;
      }
}
function CargarPreviewDescarga32(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace32').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace32').href = url.value;
      }
} 
function CargarPreviewDescarga33(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace33').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace33').href = url.value;
      }
}
function CargarPreviewDescarga34(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace34').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace34').href = url.value;
      }
} 
function CargarPreviewDescarga35(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace35').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace35').href = url.value;
      }
} 
function CargarPreviewDescarga36(enlace,url){
if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace36').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace36').href = url.value;
      }
} 
function CargarPreviewDescarga37(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace37').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace37').href = url.value;
      }
} 
function CargarPreviewDescarga38(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace38').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace38').href = url.value;
      }
} 
function CargarPreviewDescarga39(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace39').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace39').href = url.value;
      }
}
function CargarPreviewDescarga40(enlace,url){
  if (((enlace.value.length < 5) || (enlace.value.length > 100)) || ((url.value.length < 5) || (url.value.length > 1000))){
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        enlace.style["box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #720303";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px#720303";
        url.style["box-shadow"] =" 0 0 1px 1px #720303";
   }else{
        enlace.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        enlace.style["box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-moz-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["-webkit-box-shadow"] =" 0 0 1px 1px #088A08";
        url.style["box-shadow"] =" 0 0 1px 1px #088A08";
        document.getElementById('PreviewEnlace40').innerHTML = enlace.value;
        document.getElementById('PreviewEnlace40').href = url.value;
      }
}

/*-------------------------------------------------Funciones Submit--------------------------------------------------------*/

function submitjuego(){
  if (comprobar_juego()){
    document.nuevojuego.submit();
  }
}
function submitvideo(){
  if (comprobar_vid()){
    document.nuevovid.submit();
  }
}