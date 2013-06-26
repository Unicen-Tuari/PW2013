CREATE TABLE Alumno (
DNI integer not null,
NroLibreta integer not null UNIQUE,
Nombre varchar(25) not null,
Apellido varchar(25) not null,
FechaNacimiento date not null,
Email varchar(25),
Password varchar(10) not null,
idmateria integer not null,
idcarrera integer not null,
constraint Pk_alumno
 primary key (DNI),
 check (DNI>0 and NroLibreta>0),
 foreign key (idmateria) references materia(idmateria) ,
 foreign key (idmateria) references carrera(Idcarrera)
);

CREATE TABLE Carrera (
Idcarrera integer not null,
NombreCarrera varchar (25)not null,
constraint PK_carrera
 Primary Key (Idcarrera),
 check (Idcarrera>= 0)
);

CREATE TABLE Materia (
idmateria integer not null,
NombreMateria varchar (25)not null,
constraint PK_materia
 Primary Key (idmateria),
 check (idmateria>=0)
);


CREATE TABLE Notas(
idalumno integer not null UNIQUE,
idmateria integer not null,
idcarrera integer not null,
Nota integer not null,
EstadoMateria varchar(15) not null,
idnota integer not null,
constraint PK_notas
	PRIMARY KEY (idnota),
	FOREIGN KEY (idalumno)REFERENCES alumno(NroLibreta),
	FOREIGN KEY (idmateria)REFERENCES Materia(idmateria),
	FOREIGN KEY (idcarrera)REFERENCES Carrera(Idcarrera),
	check(idnota>0)
);

CREATE TABLE InscripcionCarrera (
DNI integer not null UNIQUE;
idcarrera integer not null;
Nombre varchar(25) not null,
Apellido varchar(25) not null,
FechaNacimiento date not null,
Email varchar(25),
Password varchar(10) not null,
constraint PK_carrera
 Foreign Key (idcarrera) REFERENCES Carrera(Idcarrera),
 Primary key (DNI)
);

CREATE TABLE InscripcionMateria (
Libreta integer not null UNIQUE;
idmatera integer not null;
constraint FK_materia
 Foreign key Libreta REFERENCES Alumno(Nrolibreta)
 Foreign Key idmateria REFERENCES Materia(idmateria);
)

CREATE TABLE Inscripcionviaje (
id integer not null,
Libreta integer not null,
constraint PK_materia
 Primary key (id),
 Foreign key (Libreta) REFERENCES Alumno(Nrolibreta)
);



