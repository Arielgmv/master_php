/*Consulta con una condición*/
SELECT * FROM usuarios WHERE email='ariel.munoz.villegas@gmail.com';

/*
Operadores de Comparación
Igual       =
Distinto    !=
Menor       <
Mayor       >
Menor o igual <=
Mayor o igual >=
Entre       between A and B
En          in
Es nulo     is null
No nulo     is not null
Como        like
No es como  not like
*/
/*
Operadores Lógicos
O   or
Y   and
NO  not
*/

/*
Comodines
Cualquier cantidad de carcateres: %
Un caracter desconocido: _

*/

/*Ejemplos*/
/* 1. Mostrar nombre y apellidos de todos los usuarios registrados en 2019*/
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)=2019;

/*2. Mostrar nombre y apellidos de todos los usuarios que no se registraron en 2019*/
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019;

/*3. Mostrar el email de los usuarios cuyo apellido incluya la letra a y que contraseña sea 12345678*/
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' and password='12345678';

/*4. Sacar todos los registros de la tabla usuarios cuyo año sea par*/
SELECT * FROM usuarios WHERE (YEAR(fecha)%2=0);

/*5. Sacar todos los registros de la tabla usuarios cuyo nombre tenga más de 5 letras y que se hayan registrado
antes de 2020 y mostrar en mayúsculas*/
SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE (LENGTH(nombre)>5) AND (YEAR(fecha))<2020;

/*Order by*/
SELECT * FROM usuarios ORDER BY id;
SELECT * FROM usuarios ORDER BY id DESC;

/*Limit*/
SELECT * FROM usuarios LIMIT 1;
SELECT * FROM usuarios LIMIT 1,2; /**limita del registro 1 al 2/