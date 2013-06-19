CREATE TABLE CLIENTE (
	dni NUMERIC (8) NOT NULL,
	nombre VARCHAR(30) NOT NULL,
	apellido VARCHAR(30) NOT NULL,
	direccion VARCHAR(30) NOT NULL,
	telefono VARCHAR(50) NOT NULL,
	mail VARCHAR(40),
	CONSTRAINT PK_CLIENTE PRIMARY KEY (dni)
);

CREATE TABLE ESTADO (
	id_estado TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre_estado VARCHAR(30) NOT NULL,
	CONSTRAINT PK_ESTADO PRIMARY KEY (id_estado)
);

CREATE TABLE REPARACION (
	id_reparacion MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	numero_serie VARCHAR(40) NOT NULL UNIQUE,
	marca VARCHAR(30),
	modelo VARCHAR(30),
	articulo VARCHAR(30) NOT NULL,
	problema TEXT NOT NULL,
	notas TEXT,
	precio_reparacion NUMERIC(6,2) NOT NULL,
	fecha_inicio DATE NOT NULL,
	fecha_fin DATE DEFAULT NULL,
	dni NUMERIC(8) NOT NULL,
	id_estado TINYINT UNSIGNED NOT NULL,
	CONSTRAINT PK_REPARACION PRIMARY KEY (id_reparacion),
	CONSTRAINT FK_REPARACION_CLIENTE FOREIGN KEY (dni) REFERENCES CLIENTE (dni),
	CONSTRAINT FK_REPARACION_ESTADO FOREIGN KEY (id_estado) REFERENCES ESTADO (id_estado),
	CONSTRAINT PRECIO_REPARACION_POSITIVO CHECK (precio_reparacion >= 0)
);

CREATE TABLE IMAGEN_REPARACION (
	id_reparacion MEDIUMINT UNSIGNED NOT NULL,
	link_imagen VARCHAR(50) NOT NULL,
	CONSTRAINT PK_IMAGEN_REPARACION PRIMARY KEY (id_reparacion,link_imagen),
	CONSTRAINT FK_IMAGEN_REPARACION_REPARACION FOREIGN KEY (id_reparacion) REFERENCES REPARACION (id_reparacion)
);


INSERT INTO CLIENTE VALUES 
	(35418826,'federico','bailes','dufau 576','0249-154665876','fdbailes@gmail.com');

INSERT INTO ESTADO (nombre_estado) VALUES 
	('En Reparacion'),
	('En Espera'),
	('Reparada');

INSERT INTO REPARACION (numero_serie,marca,modelo,articulo,problema,notas,precio_reparacion,fecha_inicio,fecha_fin,dni,id_estado) VALUES
	('NUSGPAL007','Acer','Aspire One 725','Netbook','se cuelga repentinamente','',120,'2013-06-17',NULL,35418826,1);

INSERT INTO IMAGEN_REPARACION VALUES
	(1,'images/fotos/1.jpg'),
	(1,'images/fotos/2.jpg'),
	(1,'images/fotos/3.jpg');