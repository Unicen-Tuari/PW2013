CREATE TABLE Especialidad(
	Id_especialidad TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nom_especialidad VARCHAR(15) NOT NULL,
	CONSTRAINT PK_ESPECIALIDAD PRIMARY KEY (Id_especialidad));

CREATE TABLE Medico(
	Id_medico TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	Id_especialidad TINYINT UNSIGNED NOT NULL,
	Nombre_Apellido VARCHAR(40) NOT NULL,
	Calle VARCHAR(50) NOT NULL,
	Numero SMALLINT NOT NULL,
	Localidad VARCHAR(20) NOT NULL,
	Telefono NUMERIC(11) NOT NULL,
	Mail VARCHAR(30),
	CONSTRAINT PK_MEDICO PRIMARY KEY (Id_medico),
	CONSTRAINT FK_MEDICO_ESPECIALIDAD FOREIGN KEY (Id_especialidad) REFERENCES Especialidad (Id_especialidad) ON DELETE CASCADE);

CREATE TABLE Estudios(
	Id_estudio TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	Estudio BLOB NOT NULL,
	CONSTRAINT PK_ESTUDIOS PRIMARY KEY (Id_estudio));

CREATE TABLE Paciente(
	Nombre_Apellido VARCHAR(40) NOT NULL,
	DNI NUMERIC(8) NOT NULL,	
	Localidad VARCHAR(20) NOT NULL,
	Calle VARCHAR(50) NOT NULL,
	Numero SMALLINT NOT NULL,
	C_P NUMERIC(4) NOT NULL,
	Telefono NUMERIC(11) NOT NULL,
	Movil NUMERIC(13),
	Mail VARCHAR(30),
	--Fecha_nac DATE NOT NULL,
	Obr_soc VARCHAR(40),
	Num_afiliado VARCHAR(15),
	Antecedentes TEXT,
	Id_estudio TINYINT UNSIGNED,
	Id_medico TINYINT UNSIGNED NOT NULL,
	CONSTRAINT PK_PACIENTE PRIMARY KEY (Nombre_Apellido),
	CONSTRAINT FK_PACIENTE_ESTUDIOS FOREIGN KEY (Id_estudio) REFERENCES Estudios(Id_estudio) ON DELETE CASCADE,
	CONSTRAINT FK_PACIENTE_MEDICO FOREIGN KEY (Id_medico) REFERENCES Medico(Id_medico) ON DELETE CASCADE);

CREATE TABLE Turnos(
	Id_turno TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nombre_Apellido VARCHAR(40) NOT NULL,
	Fecha DATE NOT NULL,
	Hora TIME NOT NULL,
	CONSTRAINT PK_TURNOS PRIMARY KEY (Id_turno),
	CONSTRAINT FK_TURNOS_PACIENTE_NOM_APE FOREIGN KEY (Nombre_Apellido) REFERENCES Paciente(Nombre_Apellido) ON DELETE CASCADE);

CREATE TABLE Usuario(
	Id TINYUNT UNSIGNED NOT NULL AUTO_INCREMENT,
  	Nom_usuario VARCHAR(50) NOT NULL,
	Pass varchar(50) NOT NULL,
  	CONSTRAINT PK_USUARIO PRIMARY KEY (Id);


INSERT INTO Usuario (Id, Nom_usuario, Pass) VALUES
	(1, 'nahuel', '3e5a240026859a74d5224fff869d0546');

INSERT INTO Especialidad (Nom_especialidad) VALUES
	('Kinesiologia'),
	('Nutricion');

INSERT INTO Medico (Id_especialidad, Nombre_Apellido) VALUES
	('1', 'Roberto Perez'),
	('2', 'Juan Martinez');

INSERT INTO Estudios (Estudio) VALUES
	('nsjsabfksdbfksdbfkbsdfkbjdsfgsdfgdfs'),
	('dsfsdflñheberbgoburegfb reufharbfuse');

INSERT INTO Paciente VALUES
	('Nahuel Pila', '35874586', 'Las Flores', 'Bº Las Flores', '11', '454404', '2244422370', 'nahuelmpila@gmail.com', '19910904', 'ioma', '14047887/2', 'No presenta antecedentes', '1', '1'),
	('Martin Pila', '35258745', 'Las Flores', 'Bº Las Flores', '11', '450888', '2244912570', 'nahuelmpila_22@hotmail.com', '19990718', 'ioma', '14047887/19', 'No presenta antecedentes', '2', '2');

INSERT INTO Turnos VALUES
	('1', 'Nahuel Pila', '20130920', '153000'),
	('2', 'Martin Pila', '20130623', '174000');
