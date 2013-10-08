
CREATE TABLE categorias (
	cat_nombre VARCHAR(30) NOT NULL,
	CONSTRAINT pk_categorias PRIMARY KEY (cat_nombre)
	
)
CHARACTER SET utf8 COLLATE utf8_bin;

CREATE TABLE sub_categorias (
	
	subcat_nombre VARCHAR(30) NOT NULL,
	cat_nombre VARCHAR(30) NOT NULL,
	CONSTRAINT pk_subcategorias PRIMARY KEY (subcat_nombre),
	CONSTRAINT fk_subcategorias FOREIGN KEY (cat_nombre) REFERENCES categorias (cat_nombre)
	
)
CHARACTER SET utf8 COLLATE utf8_bin;

CREATE TABLE productos (
	producto_id SMALLINT NOT NULL AUTO_INCREMENT,
	producto_nombre VARCHAR(30) NOT NULL,
	subcat_nombre VARCHAR(30) NOT NULL,
	precio NUMERIC(6,2) NOT NULL,
	imagenes VARCHAR(200),
	descripcion VARCHAR(250),
	
	CONSTRAINT pk_productos PRIMARY KEY (producto_id),
	CONSTRAINT fk_productos FOREIGN KEY (subcat_nombre) REFERENCES sub_categorias (subcat_nombre)
	
)CHARACTER SET utf8 COLLATE utf8_bin;

INSERT INTO categorias VALUES
	('Accesorios'),
	('Electrónica'),
	('Ropa');

INSERT INTO sub_categorias VALUES
	('Fundas', 'Accesorios'),
	('Gadgets', 'Electrónica'),
	('Mouses', 'Electrónica'),
	('Teclados', 'Electrónica'),
	('Webcams', 'Electrónica');
