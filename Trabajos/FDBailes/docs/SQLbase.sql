create table CLIENTE (
dni numeric (8) not null,
nombre varchar(30) not null,
apellido varchar(30) not null,
direccion varchar(30) not null,
telefono varchar(50) not null,
mail varchar(40),
constraint pk_cliente primary key (dni)
);
create table ESTADO (
id_estado tinyint unsigned not null auto_increment,
nombre_estado varchar(30) not null,
constraint pk_estado primary key (id_estado)
);
create table REPARACION (
id_reparacion mediumint unsigned not null auto_increment,
numero_serie varchar(40) not null unique,
marca varchar(30),
modelo varchar(30),
articulo varchar(30) not null,
problema text not null,
notas text,
precio_reparacion numeric(6,2) not null,
fecha_inicio date not null,
fecha_fin date not null,
dni numeric(8) not null,
id_estado mediumint unsigned not null,
constraint pk_reparacion primary key (id_reparacion),
constraint fk_cliente foreign key (dni) references CLIENTE (dni),
constraint fk_estado foreign key (id_estado) references ESTADO (id_estado)
);
create table IMAGEN_REPARACION (
id_reparacion mediumint unsigned not null,
link_imagen varchar(50) not null,
constraint pk_imagen_reparacion primary key (id_reparacion,link_imagen),
constraint fk_reparacion foreign key (id_reparacion) references REPARACION (id_reparacion)
);