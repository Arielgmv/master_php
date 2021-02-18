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

