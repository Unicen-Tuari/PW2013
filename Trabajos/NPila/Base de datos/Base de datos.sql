CREATE TABLE Especialidad(
	Id_especialidad TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nom_especialidad VARCHAR(15) NOT NULL,
	CONSTRAINT PK_ESPECIALIDAD PRIMARY KEY (Id_especialidad));

CREATE TABLE Medico(
	Id_medico TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	Id_especialidad TINYINT UNSIGNED NOT NULL,
	Nombre_Apellido VARCHAR(40) NOT NULL,
	CONSTRAINT PK_MEDICO PRIMARY KEY (Id_medico),
	CONSTRAINT FK_MEDICO_ESPECIALIDAD FOREIGN KEY (Id_especialidad) REFERENCES Especialidad (Id_especialidad) ON DELETE CASCADE);

CREATE TABLE Estudios(
	Id_estudio TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	Estudio BLOB NOT NULL,
	CONSTRAINT PK_ESTUDIOS PRIMARY KEY (Id_estudio));

CREATE TABLE Paciente(
	DNI NUMERIC(8) NOT NULL,	
	Nombre_Apellido VARCHAR(40) NOT NULL,
	Localidad VARCHAR(20) NOT NULL,
	Calle VARCHAR(50) NOT NULL,
	Numero SMALLINT NOT NULL,
	Telefono NUMERIC(11) NOT NULL,
	Movil NUMERIC(13),
	Mail VARCHAR(30),
	Fecha_nac DATE NOT NULL,
	Obr_soc VARCHAR(40),
	Num_afiliado VARCHAR(15),
	Antecedentes TEXT,
	Id_estudio TINYINT UNSIGNED,
	Id_medico TINYINT UNSIGNED NOT NULL,
	CONSTRAINT PK_PACIENTE PRIMARY KEY (DNI),
	CONSTRAINT FK_PACIENTE_ESTUDIOS FOREIGN KEY (Id_estudio) REFERENCES Estudios(Id_estudio) ON DELETE CASCADE,
	CONSTRAINT FK_PACIENTE_MEDICO FOREIGN KEY (Id_medico) REFERENCES Medico(Id_medico) ON DELETE CASCADE);

CREATE TABLE Turnos(
	DNI NUMERIC(8) NOT NULL,
	Fecha DATE NOT NULL,
	Hora TIME NOT NULL,
	CONSTRAINT PK_TURNOS PRIMARY KEY (DNI),
	CONSTRAINT FK_TURNOS_PACIENTE_DNI FOREIGN KEY (DNI) REFERENCES Paciente(DNI) ON DELETE CASCADE);

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
	('35874586', 'Nahuel Pila', 'Las Flores', 'Bº Las Flores', '11', '454404', '2244422370', 'nahuelmpila@gmail.com', '19910904', 'ioma', '14047887/2', 'No presenta antecedentes', '1', '1'),
	('35258745', 'Martin Pila', 'Las Flores', 'Bº Las Flores', '11', '450888', '2244912570', 'nahuelmpila_22@hotmail.com', '19990718', 'ioma', '14047887/19', 'No presenta antecedentes', '2', '2');

INSERT INTO Turnos VALUES
	('35874586', '20130809', '153000'),
	('35258745', '20130706', '174000');
