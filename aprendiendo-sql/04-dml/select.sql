#Mostrar todos los registros/filas de una tabla#
SELECT email, nombre, apellidos FROM usuarios;

#Mostrar todos los campos#
SELECT * FROM usuarios;

#Operadores Aritmeticos#
SELECT email, (7/7) AS 'Operación' FROM usuarios;
SELECT id, email, (7/7) AS 'Operación' FROM usuarios;
SELECT id, email, (7/7) AS 'Operación' FROM usuarios ORDER BY id;

SELECT id, email, (id+7) AS 'Operación' FROM usuarios ORDER BY id;

#Funciones Matemáticas#
SELECT ABS(5.678) AS 'Absoluto' FROM usuarios;
SELECT CEIL(5.678) AS 'Absoluto' FROM usuarios;
SELECT FLOOR(5.678) AS 'Absoluto' FROM usuarios;
SELECT PI() AS 'Absoluto' FROM usuarios;
SELECT ROUND(7,89) AS 'Absoluto' FROM usuarios;
SELECT SQRT(25) AS 'Absoluto' FROM usuarios;

#Funciones Texto#
SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre, ' ', apellidos) AS Concatenación FROM usuarios;
SELECT LENGTH(nombre) AS Extensión FROM usuarios;
SELECT CONCAT('      ', nombre, '  ', apellidos) AS Concatenación FROM usuarios;
SELECT TRIM(CONCAT('      ', nombre, '  ', apellidos)) AS Limpieza_Espacios_Blanco FROM usuarios;

#Funciones Fecha#
#Current Date#
SELECT email, fecha, CURDATE() FROM usuarios;
SELECT email, fecha, CURDATE() AS 'Fecha Actual' FROM usuarios;
#días diferencia#
SELECT email, DATEDIFF(fecha, CURDATE()) AS 'Fecha Actual' FROM usuarios;
SELECT email, DAYNAME(fecha) AS 'Fecha Actual' FROM usuarios;
#fecha del mes, semana, año#
SELECT email, DAYOFMONTH(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, DAYOFWEEK(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, DAYOFYEAR(fecha) AS 'Fecha Actual' FROM usuarios;
#mes del año#
SELECT email, MONTH(fecha) AS 'Fecha Actual' FROM usuarios;
#año#
SELECT email, YEAR(fecha) AS 'Fecha Actual' FROM usuarios;
#Hora Actual#
SELECT email, CURTIME() AS 'Fecha Actual' FROM usuarios;
#hora del servidor#
SELECT email, SYSDATE() AS 'Fecha Actual' FROM usuarios;
#Formatear el campo fecha#
SELECT email, DATE_FORMAT(fecha, '%d-%M-%Y') FROM usuarios;

#Funciones generales#
#Saber si es nulo#
SELECT email, ISNULL(apellidos) FROM usuarios; 

#Comprobar si dos campos son iguales#
SELECT email, STRCMP(nombre, password) AS Compración FROM usuarios;

#versión de mysql#
SELECT VERSION() FROM usuarios;

#usuario de mysql#
SELECT USER() FROM usuarios;

#si es nulo#
SELECT IFNULL(apellidos, 'Campo vacio') FROM usuarios;