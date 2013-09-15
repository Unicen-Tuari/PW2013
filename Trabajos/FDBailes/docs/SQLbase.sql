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
	numero_serie VARCHAR(40),
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

INSERT INTO CLIENTE VALUES 
	(35418826,'federico','bailes','dufau 576','0249-154665876','fdbailes@gmail.com'),
	(32670283,'hernan','bailes','dufau 576','0249-154665876','fdbailes@gmail.com'),
	(18028179,'ricardo','bailes','dufau 576','0249-154665876','fdbailes@gmail.com');

INSERT INTO ESTADO (nombre_estado) VALUES 
	('En Reparación'),
	('Reparada'),
	('Retirada');

INSERT INTO REPARACION (numero_serie,marca,modelo,articulo,problema,notas,precio_reparacion,fecha_inicio,fecha_fin,dni,id_estado) VALUES
	('NUSGPAL007','Acer','Aspire One 725','Netbook','se cuelga repentinamente','',120,'2013-06-17',NULL,35418826,1),
	('NUSGPAL008','Acer','Aspire One 725','Netbook','se cuelga repentinamente','',120,'2013-06-17',NULL,35418826,2),
	('NUSGPAL009','Acer','Aspire One 725','Netbook','se cuelga repentinamente','',120,'2013-06-17',NULL,35418826,3),
	('LASYN-TRSN291','HP','Pavilion DV7 4295','Notebook','problemas de temperatura','',150,'2013-06-17','2013-06-20',32670283,3),
	('LASYN-TRSN292','HP','Pavilion DV7 4295','Notebook','problemas de temperatura','',150,'2013-06-17','2013-06-20',32670283,1),
	('LASYN-TRSN810','HP','Pavilion DV7 4285','Notebook','LCD con falla','',1200,'2013-06-17',NULL,18028179,2),
	('LASYN-TRSN811','HP','Pavilion DV7 4285','Notebook','LCD con falla','',1200,'2013-06-17',NULL,18028179,3);
