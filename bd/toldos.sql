CREATE DATABASE toldosmty;

use toldosmty;


-- Tabla de Usuarios para Iniciar Sesion
create table trol(
id_rol int auto_increment,
nombre varchar(50),
primary key (id_rol)
);

create table tpago(
id_tpago int auto_increment,
nombre varchar(50),
primary key (id_tpago)
);

create table estado(
id_estado int auto_increment,
status varchar (50),
primary key (id_estado)
);

create table tuser(
	id_user int auto_increment,
	id_rol int not null,
	user varchar (50),
	password varchar(50),
	fecha_captura timestamp, 
	primary key (id_user),
	foreign key (id_rol) references trol (id_rol)
	);

create table trhpuesto(
	id_trhpuesto int auto_increment PRIMARY KEY,
	id_rol int not null,
	nombre varchar(50),
	foreign key (id_rol) references trol (id_rol)
	);

--Tabla de Capital Humano ( Recursos Humanos)
create table  trh(
	id_rh int auto_increment,
	id_user int not null,
	id_trhpuesto int not null,
	fecha_captura timestamp,
	nombre varchar(20),
	appat varchar (25),
	apmat varchar(25),
	calle varchar(30),
	numero int,
	colonia varchar(30),
	cp int,
	municipio varchar(30),
	estado varchar(20),
	pais varchar(20),
	telefono int,
	celular int,
	rfc varchar(20),
	estadocivil varchar(20),
	email varchar(50),
	fecha_nac date,
	fecha_ing date,
	fecha_egr date,
	sueldoi decimal,
	sueldoa decimal,
	nss int,
	ninfonavit int,
	primary key (id_rh),	foreign key (id_user) references tuser (id_user),
	foreign key (id_trhpuesto) references trhpuesto (id_trhpuesto)
	);
	

--Tabla Categorias de productos por ejemplo Estructuras, Contrapesos , herrajes
create table categoria(
	id_categoria int auto_increment,
	id_user int not null,
	nombrecategoria varchar (50),
	fecha_captura timestamp,
	primary key (id_categoria),
	foreign key (id_user) references tuser (id_user)
	);

--Tabla de imagenes
create table imagen(
	id_imagen int auto_increment,
	id_categoria int not null,
	id_user int not null,
	nombre varchar(50),
	ruta varchar (500),
	fecha_captura timestamp,
	primary key (id_imagen),
	foreign key (id_categoria) references categoria (id_categoria),
	foreign key (id_user) references tuser (id_user)
	);


create table medida(
	id_medida int auto_increment,
	id_categoria int not null,
	medida varchar(50),
	primary key (id_medida),
	foreign key (id_categoria) references categoria (id_categoria)
	);


--Tabla de Productos
create table productos(
	id_producto int auto_increment,
	id_categoria int not null,
	id_imagen int not null,
	id_estado int not null,
	id_medida int,
	id_user int not null,
	id_color int not null,
	nombre  varchar(50),
	codigo int,
	fecha timestamp,
	precio decimal,
	costo decimal,
	primary key (id_producto),
	foreign key (id_user) references tuser (id_user),
	foreign key (id_categoria) references categoria  (id_categoria),
	foreign key (id_imagen) references imagen (id_imagen),
	foreign key (id_estado) references estado  (id_estado),
	foreign key (id_medida) references medida (id_medida),
	foreign key (id_color) references color (id_color)
);

create table clientes(
id_cliente int auto_increment,
id_user int not null,
id_tpago int not null,
nombre varchar(50),
apellido varchar (50),
direccion varchar (100),
codigo_postal varchar(10),
entrecalle varchar (100),
referencia varchar (100),
email varchar (100),
telefono varchar (20),
rfc varchar(20),
primary key (id_cliente),
foreign key (id_user) references tuser (id_user),
foreign key (id_tpago) references tpago (id_tpago)
);

create table proveedor(
id_proveedor int auto_increment,
id_tpago int not null,
id_user int not null,
nombre varchar(50),
cargo varchar(50),
contacto varchar(50),
apellido varchar (50),
direccion varchar (100),
codigo_postal int,
entrecalle varchar (100),
referencia varchar (100),
email varchar (100),
telefono varchar (20),
rfc varchar(20),
fecha timestamp,
notas varchar(100),
primary key (id_proveedor),
foreign key (id_user) references tuser (id_user),
foreign key (id_tpago) references tpago (id_tpago)
);

create table venta(
id_venta int auto_increment,
id_cliente int not null,
id_producto int not null,
id_user int not null,
id_tpago int not null,
precio decimal,
descuento decimal,
fecha_compra date,
primary key (id_venta),
foreign key (id_user) references tuser (id_user),
foreign key (id_tpago) references tpago (id_tpago),
foreign key (id_cliente) references clientes (id_cliente),
foreign key (id_producto) references productos (id_producto) 
 );

create table dventa(
id_dventa int auto_increment,
id_venta int not null,
id_producto int not null,
id_medida int not null,
cantidad int,
precio decimal,
descuento decimal,
primary key (id_dventa),
foreign key (id_venta) references venta (id_venta),
foreign key (id_producto) references productos (id_producto),
foreign key (id_medida) references medida (id_medida)
);



create table compras(
id_compras int auto_increment,
id_producto int not null,
id_proveedor int not null,
id_user int not null,
id_medida int not null,
id_tpago int not null,
id_categoria int not null,
precio decimal,
fecha date,
primary key (id_compras),
foreign key (id_producto) references productos(id_producto),
foreign key (id_proveedor) references proveedor (id_proveedor),
foreign key (id_user) references tuser (id_user),
foreign key (id_medida) references medida(id_medida),
foreign key (id_tpago) references tpago (id_tpago),
foreign key (id_categoria) references categoria (id_categoria)
);

create table dcompras(
id_dcompras int auto_increment,
id_compras int not null,
id_producto int not null,
id_proveedor int not null,
precio decimal,
cantidad int,
descuento decimal,
primary key (id_dcompras),
foreign key (id_compras) references compras (id_compras),
foreign key (id_producto) references productos (id_producto),
foreign key (id_proveedor) references proveedor (id_proveedor)
);

create table almacendanado(
	id_almacendanado int auto_increment,
	id_user int not null,
	id_producto int not null,
	id_medida int not null,
	id_proveedor int not null,
	id_categoria int not null,
	id_estado int,
	fecha date,
	notas varchar(100),
	cantidad int,
	precio decimal,
	primary key (id_almacendanado),
	foreign key (id_user) references tuser (id_user),
	foreign key (id_producto) references productos (id_producto),
	foreign key (id_medida) references medida (id_medida),
	foreign key (id_proveedor) references proveedor (id_proveedor),
	foreign key (id_categoria) references categoria (id_categoria),
	foreign key (id_estado) references estado (id_estado)
	);

create table articulos(
	id_articulo int auto_increment,
	id_categoria int not null,
	id_estado int not null,
	id_user int not null,
	id_color int not null,
	nombre  varchar(50),
	codigo int,
	fecha timestamp,
	precio decimal,
	costo decimal,
	primary key (id_producto),
	foreign key (id_user) references tuser (id_user),
	foreign key (id_categoria) references categoria  (id_categoria),
	foreign key (id_imagen) references imagen (id_imagen),
	foreign key (id_estado) references estado  (id_estado),
	foreign key (id_medida) references medida (id_medida),
	foreign key (id_color) references color (id_color)
);