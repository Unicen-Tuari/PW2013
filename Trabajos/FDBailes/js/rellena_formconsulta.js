var datos_rep = <?php echo json_encode($datos_rep); ?>;
var nombre_estado = <?php echo json_encode($nombre_estado); ?>;
function rellenadatos()
	var articulo = document.getElementById('articulo');
	var marca = document.getElementById('marca');
	var modelo = document.getElementById('modelo');
	var serie = document.getElementById('serie');
	var fecha_ini = document.getElementById('fecha_ini');
	var fecha_fin = document.getElementById('fecha_fin');
	var estado = document.getElementById('estado');
	var precio = document.getElementById('precio');
	articulo.value=datos_rep['articulo'];
	marca.value=datos_rep['marca'];
	modelo.value=datos_rep['modelo'];
	serie.value=datos_rep['serie'];
	fecha_ini.value=datos_rep['fecha_ini'];
	fecha_fin.value=datos_rep['fecha_fin'];
	estado.value=nombre_estado['nombre_estado'];
	precio.value=datos_rep['precio_reparacion'];
	