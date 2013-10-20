CREATE TABLE CLIENTE (
	id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	apellido VARCHAR(30) NOT NULL,
	direccion VARCHAR(30) NOT NULL,
	telefono VARCHAR(50) NOT NULL,
	mail VARCHAR(40),
	CONSTRAINT PK_CLIENTE PRIMARY KEY (id)
);

CREATE TABLE ESTADO (
	id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre_estado VARCHAR(30) NOT NULL,
	CONSTRAINT PK_ESTADO PRIMARY KEY (id)
);

CREATE TABLE REPARACION (
	id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	numero_serie VARCHAR(40),
	marca VARCHAR(30),
	modelo VARCHAR(30),
	articulo VARCHAR(30) NOT NULL,
	desperfecto TEXT NOT NULL,
	notas TEXT,
	precio_reparacion NUMERIC(6,2) NOT NULL DEFAULT 0,
	fecha_ingreso DATE NOT NULL,
	fecha_egreso DATE DEFAULT NULL,
	id_cliente MEDIUMINT UNSIGNED NOT NULL,
	id_estado TINYINT UNSIGNED NOT NULL,
	CONSTRAINT PK_REPARACION PRIMARY KEY (id),
	CONSTRAINT FK_REPARACION_CLIENTE FOREIGN KEY (id_cliente) REFERENCES CLIENTE (id) ON DELETE CASCADE,
	CONSTRAINT FK_REPARACION_ESTADO FOREIGN KEY (id_estado) REFERENCES ESTADO (id),
	CONSTRAINT PRECIO_REPARACION_POSITIVO CHECK (precio_reparacion >= 0)
);

CREATE TABLE USUARIO (
	id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	username varchar(25) NOT NULL,
	password varchar(100) NOT NULL,
	CONSTRAINT PK_USUARIO PRIMARY KEY (id)
);

INSERT INTO CLIENTE (nombre,apellido,direccion,telefono,mail) VALUES 
	('federico','bailes','dufau 576','0249-154665876','fdbailes@gmail.com'),
	('hernan','bailes','dufau 576','0249-154665876','fdbailes@gmail.com'),
	('ricardo','bailes','dufau 576','0249-154665876','fdbailes@gmail.com');

INSERT INTO ESTADO (nombre_estado) VALUES 
	('En Reparación'),
	('Reparada'),
	('Retirada');

INSERT INTO REPARACION (numero_serie,marca,modelo,articulo,desperfecto,notas,precio_reparacion,fecha_ingreso,fecha_egreso,id_cliente,id_estado) VALUES
	('NUSGPAL007','Acer','Aspire One 725','Netbook','se cuelga repentinamente','',120,'2013-06-17',NULL,1,1),
	('NUSGPAL008','Acer','Aspire One 725','Netbook','se cuelga repentinamente','',120,'2013-06-17',NULL,1,2),
	('NUSGPAL009','Acer','Aspire One 725','Netbook','se cuelga repentinamente','',120,'2013-06-17',NULL,1,3),
	('LASYN-TRSN291','HP','Pavilion DV7 4295','Notebook','problemas de temperatura','',150,'2013-06-17','2013-06-20',2,3),
	('LASYN-TRSN292','HP','Pavilion DV7 4295','Notebook','problemas de temperatura','',150,'2013-06-17','2013-06-20',2,1),
	('LASYN-TRSN810','HP','Pavilion DV7 4285','Notebook','LCD con falla','',1200,'2013-06-17',NULL,3,2),
	('LASYN-TRSN811','HP','Pavilion DV7 4285','Notebook','LCD con falla','',1200,'2013-06-17',NULL,3,3);

INSERT INTO USUARIO VALUES
(NULL,'admin','6db5832cd2d1ac659ad5892c06b9c155');