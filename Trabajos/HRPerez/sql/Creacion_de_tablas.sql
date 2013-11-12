CREATE TABLE seccion (
id_seccion     INT(10) NOT NULL AUTO_INCREMENT,
nombre_seccion VARCHAR (50) NOT NULL,
descripcion    VARCHAR (150) NOT NULL,

CONSTRAINT PK_SECCION PRIMARY KEY (id_seccion)
)ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
----------------------------------------------------------------------------------------------------------------------------------------
DROP TABLE seccion;
----------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE tag (
id_tag     	   INT(10) NOT NULL AUTO_INCREMENT,
nombre_tag     VARCHAR (50) NOT NULL,
descripcion    VARCHAR (150) NOT NULL,

CONSTRAINT PK_TAG PRIMARY KEY (id_tag)
)ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
----------------------------------------------------------------------------------------------------------------------------------------
DROP TABLE tag;
----------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE noticia (
id_noticia           INT(10) NOT NULL AUTO_INCREMENT,
titulo				 TEXT (500) NOT NULL,
subtitulo			 TEXT (500) NOT NULL,
cuerpo				 TEXT (65000) NOT NULL,
id_tag               INT(10) NOT NULL,
id_seccion           INT(10) NOT NULL,

CONSTRAINT PK_NOTICIA PRIMARY KEY (id_noticia),
CONSTRAINT FK_NOTICIA_TAG FOREIGN KEY (id_tag) REFERENCES tag (id_tag) ON DELETE CASCADE,
CONSTRAINT FK_NOTICIA_SECCION FOREIGN KEY (id_seccion) REFERENCES seccion (id_seccion) ON DELETE CASCADE
)ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
----------------------------------------------------------------------------------------------------------------------------------------
DROP TABLE noticia;
----------------------------------------------------------------------------------------------------------------------------------------
---Ver si la hago
CREATE TABLE usuario (
id_usuario           TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
nombre               VARCHAR  (35) NOT NULL,
apellido             VARCHAR  (35) NOT NULL,
mail                 VARCHAR  (25) NOT NULL,
es_admininstrador    VARCHAR   (1) NOT NULL,

CONSTRAINT PK_USUARIO PRIMARY KEY (id_usuario)
);
----------------------------------------------------------------------------------------------------------------------------------------
DROP TABLE usuario;
----------------------------------------------------------------------------------------------------------------------------------------

---Ver si la hago
CREATE TABLE comentario (
id_comentario        TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
id_usuario           TINYINT UNSIGNED NOT NULL,
id_noticia           TINYINT UNSIGNED NOT NULL,
mensaje              VARCHAR  (140) NOT NULL,

CONSTRAINT PK_COMENTARIO PRIMARY KEY (id_comentario),
CONSTRAINT FK_COMENTARIO_USUARIO FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario) ON DELETE CASCADE,
CONSTRAINT FK_COMENTARIO_NOTICIA FOREIGN KEY (id_noticia) REFERENCES noticia (id_noticia) ON DELETE CASCADE
);
----------------------------------------------------------------------------------------------------------------------------------------
DROP TABLE comentario;
----------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE administrador(
id_administrador int( 11 ) NOT NULL AUTO_INCREMENT ,
mail varchar( 50 ) NOT NULL ,
pass varchar( 50 ) NOT NULL ,
PRIMARY KEY (id_administrador)
) ENGINE = InnoDB DEFAULT CHARSET = utf8 AUTO_INCREMENT =1;
----------------------------------------------------------------------------------------------------------------------------------------
DROP TABLE administrador;