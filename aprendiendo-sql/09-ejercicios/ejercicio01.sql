/*
1. Diseñar y crear la base de datos de un concesionario
*/

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches(
id          int(10) auto_increment not null, 
modelo      varchar(100) not null,
marca       varchar(50),
precio      int(20) not null,
stock       int(255) not null,
CONSTRAINT pk_coches  PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos(
id          int(10) auto_increment not null,
nombre      varchar(100) not null,
ciudad      varchar(100),
CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
id          int(10) auto_increment not null,
grupo_id    int(10) not null,
jefe        int(10),
nombre      varchar(100) not null,
apellidos   varchar(150),
cargo       varchar(50),
fecha_alta  date,
sueldo      float(20, 2),
comision    float(10, 2),
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes(
id              int(10) auto_increment not null,
vendedor_id     int(10),
nombre          varchar(150) not null,
ciudad          varchar(100),
gastado         float(50, 2),
fecha           date,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
id              int(10) auto_increment not null,
cliente_id      int(10) not null,
coche_id        int(10) not null,
cantidad        int(100),
fecha           date,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

/*Rellenar la base de datos con información*/
/*Coches*/
INSERT INTO coches VALUES(null, 'Renault Clio', 'Renault', 12000, 13);
INSERT INTO coches VALUES(null, 'Compass', 'Jeep', 18000, 3);
INSERT INTO coches VALUES(null, 'Patriot', 'Jeep', 17500, 8);
INSERT INTO coches VALUES(null, 'io', 'Hyundai', 14000, 18);
INSERT INTO coches VALUES(null, 'Rav 4', 'Toyota', 23000, 9);
INSERT INTO coches VALUES(null, 'Celica', 'Toyota', 9000, 1);
/*Grupos*/
INSERT INTO grupos VALUES(null, 'Vendedores A', 'Santa Cruz');
INSERT INTO grupos VALUES(null, 'Vendedores B', 'Santa Cruz');
INSERT INTO grupos VALUES(null, 'Vendedores A', 'La Paz');
INSERT INTO grupos VALUES(null, 'Vendedores B', 'La Paz');
INSERT INTO grupos VALUES(null, 'Vendedores A', 'Cochabamba');
INSERT INTO grupos VALUES(null, 'Vendedores B', 'Cochabamba');
INSERT INTO grupos VALUES(null, 'Vendedores A', 'Sucre');
INSERT INTO grupos VALUES(null, 'Vendedores B', 'Sucre');
INSERT INTO grupos VALUES(null, 'Vendedores A', 'Tarija');
INSERT INTO grupos VALUES(null, 'Vendedores B', 'Tarija');
/*Vendedores*/
INSERT INTO vendedores VALUES(null, 1, null, 'David', 'Lopez', 'Responsable de tienda', CURDATE(), 30000, 4);
INSERT INTO vendedores VALUES(null, 1, 1, 'Fran', 'Martinez', 'Ayudante de tienda', CURDATE(), 21000, 2);
INSERT INTO vendedores VALUES(null, 2, null, 'Nelson', 'Sanchez', 'Responsable de tienda', CURDATE(), 38000, 5);
INSERT INTO vendedores VALUES(null, 2, 3, 'Jesus', 'Lopez', 'Ayudante de tienda', CURDATE(), 12000, 6);
INSERT INTO vendedores VALUES(null, 3, null, 'Antonio', 'Lopez', 'Vendedor de recambios', CURDATE(), 13000, 8);
INSERT INTO vendedores VALUES(null, 4, null, 'Oswaldo', 'Soliz', 'Vendedor experto', CURDATE(), 60000, 2);
INSERT INTO vendedores VALUES(null, 5, null, 'Salvador', 'Allende', 'Ejecutivo de cuentas', CURDATE(), 60000, 1);
INSERT INTO vendedores VALUES(null, 6, 8, 'Luis', 'Sanchez', 'Ayudante de tienda', CURDATE(), 10000, 5);

/*Clientes*/
INSERT INTO clientes VALUES(null, 1, 'Rodrigo Soliz', 'La Paz', 9000, CURDATE());
INSERT INTO clientes VALUES(null, 1, 'CodeRoad', 'Cochabamba', 18000, CURDATE());
INSERT INTO clientes VALUES(null, 1, 'Imprenta Martinez', 'Santa Cruz', 35000, CURDATE());
INSERT INTO clientes VALUES(null, 1, 'Jesus Colchones Inc', 'Sucre', 14000, CURDATE());
INSERT INTO clientes VALUES(null, 1, 'Bar Pepe srl', 'Tarija', 23000, CURDATE());
INSERT INTO clientes VALUES(null, 1, 'Tienda PC', 'Santa Cruz', 24000, CURDATE());

/*Encargos*/
INSERT INTO encargos VALUES(null, 1, 6, 1, CURDATE());
INSERT INTO encargos VALUES(null, 2, 2, 1, CURDATE());
INSERT INTO encargos VALUES(null, 3, 3, 2, CURDATE());
INSERT INTO encargos VALUES(null, 4, 4, 1, CURDATE());
INSERT INTO encargos VALUES(null, 5, 5, 1, CURDATE());
INSERT INTO encargos VALUES(null, 6, 1, 2, CURDATE());