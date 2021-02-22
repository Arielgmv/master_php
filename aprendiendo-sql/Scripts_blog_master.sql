DELETE FROM usuarios WHERE id=5;
select * from blog_master.usuarios;
SELECT * FROM usuarios;
SELECT email, nombre, apellidos FROM usuarios;
/*Operadores Aritmeticos*/
SELECT email, (8/7) AS 'Operación' FROM usuarios;
SELECT id, email, (7/7) AS 'Operación' FROM usuarios;
SELECT id, email, (7/7) AS 'Operación' FROM usuarios ORDER BY id;
SELECT id, email, (id+7) AS 'Operación' FROM usuarios ORDER BY id;
/*Funciones Matemáticas*/
SELECT ABS(5.678) AS 'Absoluto' FROM usuarios;
SELECT CEIL(5.678) AS 'Absoluto' FROM usuarios;
SELECT FLOOR(5.678) AS 'Absoluto' FROM usuarios;
SELECT PI() AS 'Absoluto' FROM usuarios;
SELECT ROUND(7,89) AS 'Absoluto' FROM usuarios;
SELECT SQRT(25) AS 'Absoluto' FROM usuarios;
/*Funciones Texto*/
SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre, ' ', apellidos) AS Concatenación FROM usuarios;
SELECT nombre, LENGTH(nombre) AS Extensión FROM usuarios;
SELECT CONCAT('      ', nombre, '  ', apellidos) AS Concatenación FROM usuarios;
SELECT TRIM(CONCAT('      ', nombre, ' ', apellidos)) AS Limpieza_Espacios_Blanco FROM usuarios;
/*Funciones Fecha*/
#Current Date#
SELECT email, fecha, CURDATE() FROM usuarios;
SELECT email, fecha, CURDATE() AS 'Fecha Actual' FROM usuarios;
#días diferencia#
SELECT email, fecha, DATEDIFF(fecha, CURDATE()) AS 'Fecha Actual' FROM usuarios;
SELECT email, fecha, DAYNAME(fecha) AS 'Fecha Actual' FROM usuarios;
#fecha del mes, semana, año#
SELECT email, fecha, DAYOFMONTH(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, fecha, DAYOFWEEK(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, fecha, DAYOFYEAR(fecha) AS 'Fecha Actual' FROM usuarios;
#mes del año#
SELECT email, fecha, MONTH(fecha) AS 'Fecha Actual' FROM usuarios;
#año#
SELECT email, fecha, YEAR(fecha) AS 'Fecha Actual' FROM usuarios;
#Hora Actual#
SELECT email, fecha, CURTIME() AS 'Hora Actual' FROM usuarios;
#hora del servidor#
SELECT email, SYSDATE() AS 'Fecha Actual' FROM usuarios;
#Formatear el campo fecha#
SELECT email, fecha, DATE_FORMAT(fecha, '%M-%d-%Y') FROM usuarios;
#Funciones generales#
#Saber si es nulo#
SELECT email, apellidos, ISNULL(apellidos) FROM usuarios;
#Comprobar si dos campos son iguales#
SELECT email, nombre, password, STRCMP(nombre, email) AS Comparación FROM usuarios;
#versión de mysql#
SELECT VERSION() FROM usuarios;
#usuario de mysql#
SELECT USER() FROM usuarios;
#si es nulo#
SELECT IFNULL(apellidos, 'Campo vacio') FROM usuarios;

/*Modificar filas / actualizar datos*/
UPDATE blog_master.usuarios set usuarios.fecha=CURDATE(), usuarios.nombre='admin' WHERE usuarios.id=5;


/*Consulta con una condición*/
SELECT * from blog_master.usuarios as usu where usu.email LIKE 'ariel%';

/*Ejemplos*/
/* 1. Mostrar nombre y apellidos de todos los usuarios registrados en 2019*/
SELECT u.nombre, u.apellidos, u.fecha FROM blog_master.usuarios as u WHERE YEAR(u.fecha)=2019;
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)=2019;

/*2. Mostrar nombre y apellidos de todos los usuarios que no se registraron en 2019*/
SELECT u.nombre, u.apellidos, u.fecha FROM blog_master.usuarios u WHERE YEAR(u.fecha)!=2019; 
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019;

/*3. Mostrar el email de los usuarios cuyo apellido incluya la letra a y que contraseña sea 12345678*/
SELECT u.email, u.apellidos FROM blog_master.usuarios u WHERE u.apellidos LIKE '%a%' AND u.password = '12345678';
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' and password='12345678';

/*4. Sacar todos los registros de la tabla usuarios cuyo año sea par*/
SELECT * FROM blog_master.usuarios u WHERE YEAR(u.fecha)%2=0; 
SELECT * FROM usuarios WHERE (YEAR(fecha)%2=0);

/*5. Sacar todos los registros de la tabla usuarios cuyo nombre tenga más de 4 letras y que se hayan registrado
antes de 2020 y mostrar en mayúsculas*/
SELECT UPPER(u.nombre) as Nombre, u.apellidos, LENGTH(u.nombre) FROM blog_master.usuarios u WHERE LENGTH(u.nombre)>4 AND YEAR((u.fecha))<2020;
SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE (LENGTH(nombre)>4) AND (YEAR(fecha))<2020;

/*Order by*/
SELECT * FROM blog_master.usuarios u ORDER BY u.id;
SELECT * FROM blog_master.usuarios u ORDER BY u.id DESC;

/*Limit*/
SELECT * FROM blog_master.usuarios u LIMIT 1;
SELECT * FROM blog_master.usuarios u LIMIT 1, 2;

