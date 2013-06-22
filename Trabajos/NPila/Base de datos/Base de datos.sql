CREATE TABLE Especialidad(
	Id_especialidad TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
	Nom_specialidad VARCHAR(15) NOT NULL,
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
	Telefono BIGINT NOT NULL,
	Movil BIGINT,
	Mail VARCHAR(30),
	Fecha_nac DATE NOT NULL,
	Obr_soc VARCHAR(40),
	Num_afiliado VARCHAR(15),
	Antecedentes TEXT,
	Id_estudio TINYINT UNSIGNED NOT NULL,
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