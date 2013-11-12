
CREATE TABLE categorias (
	cat_nombre VARCHAR(30) NOT NULL,
	CONSTRAINT pk_categorias PRIMARY KEY (cat_nombre)
	
)
CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE sub_categorias (
	
	subcat_nombre VARCHAR(30) NOT NULL,
	cat_nombre VARCHAR(30) NOT NULL,
	CONSTRAINT pk_subcategorias PRIMARY KEY (subcat_nombre),
	CONSTRAINT fk_subcategorias FOREIGN KEY (cat_nombre) REFERENCES categorias (cat_nombre) ON DELETE CASCADE
	
)
CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE productos (
	producto_id SMALLINT NOT NULL AUTO_INCREMENT,
	producto_nombre VARCHAR(30) NOT NULL,
	subcat_nombre VARCHAR(30) NOT NULL,
	precio NUMERIC(6,2) NOT NULL,
	imagenes VARCHAR(200),
	descripcion VARCHAR(250),
	
	CONSTRAINT pk_productos PRIMARY KEY (producto_id),
	CONSTRAINT fk_productos FOREIGN KEY (subcat_nombre) REFERENCES sub_categorias (subcat_nombre) ON DELETE CASCADE
	
)CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE usuarios (
	usuario_id SMALLINT NOT NULL AUTO_INCREMENT,
	usuario_mail VARCHAR(50) NOT NULL,
	usuario_nombre VARCHAR(100) NOT NULL,
	usuario_pass VARCHAR(100) NOT NULL,
	usuario_direccion VARCHAR(200) NOT NULL,
	usuario_ciudad VARCHAR(40) NOT NULL,
	usuario_provincia VARCHAR(40)  NOT NULL,
	usuario_codigopostal VARCHAR(10) NOT NULL,

	CONSTRAINT pk_usuarios PRIMARY KEY (usuario_id)
)CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE orders (
	order_id SMALLINT NOT NULL AUTO_INCREMENT,
	productos TEXT NOT NULL,
	usuario_mail VARCHAR(50) NOT NULL,
	total SMALLINT NOT NULL,
	
	
	CONSTRAINT fk_orders FOREIGN KEY (usuario_id) REFERENCES usuarios (usuario_id) ON DELETE CASCADE
	
)CHARACTER SET utf8 COLLATE utf8_unicode_ci;

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
