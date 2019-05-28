#Insertar nuevos registros#
INSERT INTO usuarios values (null, 'Ariel', 'Muñoz Villegas', 'ariel.munoz.villegas@gmail.com', '12345678', '2019-04-16');
INSERT INTO usuarios values (null, 'Ana', 'García Limchs', 'ana@gmail.com', '12345678', '2020-12-18');
INSERT INTO usuarios values (null, 'Oswaldo', 'Solíz Villegas', 'oswaldo@gmail.com', '12345678', '2018-03-16');

#Insertar filas sólo con ciertas columnas#
INSERT INTO usuarios (email, password) VALUES('admingmail.com', 'admin');