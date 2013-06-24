CREATE TABLE Usuarios(
ID				INTEGER		NOT NULL,
FechaInicio			DATE	NOT NULL,
Nombre			VARCHAR(50)	NOT NULL,
Alias			VARCHAR(50)	NOT NULL,
Contraseņa		VARCHAR(50)	NOT NULL,
FechaNac		DATE		NOT NULL,
Mail			VARCHAR(50)	NOT NULL,
Sexo			VARCHAR(1)	NOT NULL,
CONSTRAINT ID PRIMARY KEY(ID));

CREATE TABLE Categorias(
ID				INTEGER		NOT NULL,
Nombre			VARCHAR(50)	NOT NULL,
CONSTRAINT ID PRIMARY KEY(ID));

CREATE TABLE Posts(
ID				INTEGER		NOT NULL,
IDCategoria		INTEGER		NOT NULL,
IDUsuario		INTEGER		NOT NULL,
Fecha			DATE		NOT NULL,
Titulo			VARCHAR(50)	NOT NULL,
Descripcion		VARCHAR(50)	NOT NULL,
Requirimientos	VARCHAR(50)	NOT NULL,
Descarga		VARCHAR(50)	NOT NULL,
Puntuacion		INTEGER(1)	NOT NULL,
Nombre	VARCHAR(30) 	    NOT NULL,
CONSTRAINT pk_Posts PRIMARY KEY(ID),
CONSTRAINT fk_Categorias FOREIGN KEY(IDCategoria) REFERENCES Categoria(ID),
CONSTRAINT fk_Usuarios FOREIGN KEY(IDUsuario) REFERENCES Usuario(ID));

CREATE TABLE Comentarios(
ID				INTEGER				NOT NULL,
IDPost			INTEGER				NOT NULL,
IDUsuario		INTEGER				NOT NULL,
Fecha			DATE				NOT NULL,
Texto			VARCHAR(50)			NOT NULL,
CONSTRAINT pk_Posts PRIMARY KEY(ID),
CONSTRAINT fk_Posts FOREIGN KEY(IDPosts) REFERENCES Posts(ID),
CONSTRAINT fk_Usuarios FOREIGN KEY(IDUsuario) REFERENCES Usuario(ID));