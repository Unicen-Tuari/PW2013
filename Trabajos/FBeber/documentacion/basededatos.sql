CREATE TABLE categoria(
	
	nombre_cat varchar (30) NOT NULL,
	
	CONSTRAINT Pk_categoria PRIMARY KEY (nombre_cat)
 
	);

CREATE TABLE subcategoria(
	
	nombre_cat varchar (30) NOT NULL,
	
	nombre_subcat varchar (30) NOT NULL,

	CONSTRAINT Pk_subcategoria PRIMARY KEY (nombre_subcat, nombre_cat), 

	CONSTRAINT Pk_subcategoria_ FOREIGN KEY (nombre_cat) REFERENCES categoria (nombre_cat)
 ON DELETE CASCADE	
	);

CREATE TABLE cliente(
	dni numeric (8) NOT NULL,
	nombre varchar (30) NOT NULL,
	apellido varchar (50) NOT NULL,
	contraseña varchar (8) NOT NULL,
	telefono numeric (30) NOT NULL,
	e_mail varchar (100),
        direccion varchar (30),
	localidad varchar (30) NOT NULL,
	CONSTRAINT Pk_cliente PRIMARY KEY (dni)
	);

CREATE TABLE publicacion(
	id_publicacion TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre_public varchar (20) NOT NULL,
	descripcion varchar (256) NOT NULL,
	imagen varchar (100),
	nombre_subcat varchar (30) NOT NULL,
	dni numeric (8) NOT NULL,
	fecha date NOT NULL,
	tipo char (1) NOT NULL, 
	CONSTRAINT Pk_publicacion PRIMARY KEY (id_publicacion, dni),
	CONSTRAINT Fk_publicacion FOREIGN KEY (nombre_subcat) REFERENCES subcategoria (nombre_subcat) ON DELETE CASCADE,
	CONSTRAINT Fk_publicacion_dni FOREIGN KEY (dni) REFERENCES cliente (dni) ON DELETE CASCADE

	);

	
INSERT INTO categoria VALUES
	('Vehiculos'),
	('Servicios'),
	('Comunicaciones'),
	('Varios');

INSERT INTO subcategoria VALUES
	('Camionetas', 'Vehiculos'),
	('Autos', 'Vehiculos'),
	('Celulares', 'Comunicaciones'),
	('Accesorios', 'Varios');

INSERT INTO cliente VALUES
	(36793323, 'florencia', 'beber', 3679332311, 4382723, 'florenciadaianabeber@gmail.com', 'los robles 401', 'tandil'),

INSERT INTO publicacion VALUES
	(NULL, 'celular', 'blackberry', 'Celulares', 36793323, '2013-06-25', 'C'),
	(NULL, 'camioneta', 'modelo 2005', 'vehiculos', 36793323, '2013-06-25', 'V');