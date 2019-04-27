/*
Consulta Multitabla
Son consultas que sirven para consultar varias tablas en una sola sentencia
*/
/*Mostrar las entradas con el nombre del autor y el nombre de la categoría*/
/*no me está funcionando*/
SELECT e.titulo, u.nombre, c.nombre
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id=u.id AND e.categoría_id=c.id;
