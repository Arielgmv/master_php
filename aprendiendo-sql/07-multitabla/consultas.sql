/*
Consulta Multitabla
Son consultas que sirven para consultar varias tablas en una sola sentencia
*/
/*Mostrar las entradas con el nombre del autor y el nombre de la categoría*/
/*no me está funcionando*/
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoría'
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id=u.id AND e.categoria_id=c.id;

/*Inner Join*/
SELECT e.id, e.titulo, u.nombre AS 'Autor'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id=u.id;
INNER JOIN categorias c ON e.categoria_id=c.id;

/*Mostrar el nombre de las categorías y al lado cuantas entradas tienen*/
SELECT c.nombre AS 'Categoría', COUNT(e.id) AS 'Cantidad de entradas'
FROM categorias c, entradas e
WHERE e.categoria_id=c.id GROUP BY e.categoria_id;

/*Mostrar el email de los usuarios y al lado cuantas entradas tienen*/
SELECT u.email, COUNT(titulo) FROM usuarios u, entradas e
WHERE e.usuario_id=u.id GROUP BY e.usuario_id;