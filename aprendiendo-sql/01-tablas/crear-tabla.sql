/*
int(n° cifras)                  ENTERO
integer(n° cifras)              ENTERO (maximo 255)
varchar(n° caracteres)          STRING/ALFANUMERICO (maximo 255)
char(n° caracteres)             STRING/ALFANUMERICO
float(n° cifras, n° decimales)  DECIMAL/COMA FLOTANTE
date, time, timestamp

//STRING MAS GRANDES
TEXT 65535 caracteres
MEDIUMTEXT 16 millones
LONGTEXT    4 billones de caracteres

//ENTEROS MAS GRANDES
MEDIUMINT
BIGINT

Crear Tabla
*/
CREATE TABLE usuarios(
id int(11) auto_increment not null, 
nombre varchar(100) not null,
apellidos varchar(255) default 'hola que tal',
email varchar(100),
password varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);