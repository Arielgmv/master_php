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

/*Consultas de agrupamiento*/
SELECT COUNT(e.titulo) AS 'Número de entradas', e.categoria_id FROM blog_master.entradas e GROUP BY e.categoria_id; 

/*Consultas de agrupamiento con condiciones, having es lo mismo que where pero para las consultas con agrupamiento*/
SELECT COUNT(e.titulo) AS 'Número de entradas', e.categoria_id FROM blog_master.entradas e GROUP BY e.categoria_id HAVING COUNT(titulo)>=4;
SELECT COUNT(titulo) AS 'Número de entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >=2;

/*
AVG     Sacar la media
COUNT   Contar el número de elementos
MAX     Valor máximo del grupo
MIN     Valor mínimo del grupo
SUM     Sumar todo el contenido del grupo
*/
SELECT  AVG(e.id) FROM blog_master.entradas e;
SELECT  COUNT(e.id) FROM blog_master.entradas e;
SELECT  MAX(e.id) FROM blog_master.entradas e;
SELECT  MIN(e.id) FROM blog_master.entradas e;
SELECT  SUM(e.id) FROM blog_master.entradas e;

/*Inserts para categorías*/
INSERT INTO blog_master.categorias VALUES(null, 'Terror');

/*Insert para entradas*/
INSERT INTO blog_master.entradas VALUES(null, 13, 6, 'Novedades de Helloween', 'Más novedades', CURDATE());

/*Subconsultas
- Consultas que se ejecutan dentro de otras
- Consiste en utilizar los resultados de la subconsulta para operar en la consulta
principal
- Jugando con las claves ajenas
*/
/*Sacar usuarios que existen en la tabla entradas*/
SELECT u.nombre, u.apellidos, u.id FROM blog_master.usuarios u WHERE u.id IN (SELECT e.usuario_id FROM blog_master.entradas e);
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

/*Sacar usuarios que no existen en la tabla entradas*/
SELECT u.nombre, u.apellidos, u.id FROM blog_master.usuarios u WHERE u.id NOT IN (SELECT e.usuario_id FROM blog_master.entradas e);
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

/*Sacar los usuarios que tengan alguna entrada que en su título hable de Assasins*/
SELECT * FROM blog_master.usuarios u WHERE u.id IN (SELECT e.usuario_id FROM blog_master.entradas e WHERE e.titulo like '%Assasins%');
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo like '%Assasins%');

/*Sacar todas las entradas de la categoría acción utilizando su nombre*/
SELECT * FROM blog_master.entradas e WHERE e.categoria_id IN (SELECT c.id FROM blog_master.categorias c WHERE c.nombre='Acción');
SELECT * FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre='Acción');

SELECT * 
FROM blog_master.entradas AS e 
INNER JOIN blog_master.categorias AS c ON e.categoria_id = c.id 
WHERE c.nombre = 'Acción';

/*Mostrar las categorías con más de 2 o más entradas*/
SELECT * FROM  blog_master.categorias c WHERE c.id IN (SELECT e.categoria_id FROM blog_master.entradas e GROUP BY e.categoria_id HAVING COUNT(e.categoria_id)>=2);
SELECT * FROM categorias WHERE id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=2);

/*Mostrar los usuarios que crearon una entrada un martes*/
SELECT CONCAT(u.nombre, ' ', u.apellidos) AS Usuarios, u.fecha FROM blog_master.usuarios u WHERE u.id IN (SELECT e.usuario_id FROM blog_master.entradas e WHERE DAYNAME(e.fecha)='Tuesday');
SELECT nombre FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=3);  

/*Mostrar el nombre del usuario que tenga más entradas*//*Colocamos = en vez de IN por que sólo devuelve un valor*/
SELECT e.usuario_id, e.id FROM blog_master.entradas e; 
SELECT * FROM blog_master.usuarios u WHERE u.id = (SELECT COUNT(e.usuario_id) FROM blog_master.entradas e GROUP BY e.usuario_id ORDER BY COUNT(e.usuario_id) DESC LIMIT 1); 
SELECT CONCAT(nombre,' ',apellidos) AS 'El Usuario con más entradas' FROM usuarios WHERE id=(SELECT COUNT(id) FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

/*Mostrar las categorías sin entradas*/
SELECT * FROM blog_master.categorias c WHERE c.id NOT IN (SELECT e.categoria_id FROM blog_master.entradas e GROUP BY e.categoria_id);
SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas);

/*
Consulta Multitabla
Son consultas que sirven para consultar varias tablas en una sola sentencia
*/
/*Mostrar las entradas con el nombre del autor y el nombre de la categoría*/
SELECT e.id, CONCAT(u.nombre, ' ', u.apellidos) AS Usuarios, c.nombre AS Categoría, e.titulo 
FROM blog_master.entradas e, blog_master.usuarios u, blog_master.categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

/*Inner Join*/
SELECT e.id, CONCAT(u.nombre, ' ', u.apellidos) AS Usuarios, c.nombre AS Categoría, e.titulo
FROM blog_master.entradas e
INNER JOIN blog_master.usuarios u ON e.usuario_id = u.id
INNER JOIN blog_master.categorias c ON e.categoria_id = c.id;

/*Mostrar el nombre de las categorías y al lado cuantas entradas tienen*/
SELECT COUNT(e.id), e.categoria_id FROM blog_master.entradas e GROUP BY e.categoria_id;

SELECT COUNT(e.id) AS 'Cantidad de Entradas', c.nombre 
FROM blog_master.entradas e
INNER JOIN blog_master.categorias c ON e.categoria_id = c.id
GROUP BY e.categoria_id;

SELECT c.nombre AS 'Categoría', COUNT(e.id) AS 'Cantidad de entradas'
FROM categorias c, entradas e
WHERE e.categoria_id=c.id GROUP BY e.categoria_id;

/*Left Join (muestra todas las filas de la tabla de la izquierda)*/

SELECT e.*, c.* FROM entradas e
INNER JOIN categorias c ON e.categoria_id = c.id
ORDER BY e.id DESC LIMIT 4;

SELECT e.*, c.nombre AS 'categoria' FROM entradas e
INNER JOIN categorias c ON e.categoria_id = c.id
WHERE e.categoria_id = 4
ORDER BY e.id DESC;



