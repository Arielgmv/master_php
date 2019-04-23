/*Consultas de agrupamiento*/
SELECT COUNT(titulo) AS 'Número de entradas', categoria_id FROM entradas GROUP BY categoria_id;

/*Consultas de agrupamiento con condiciones, having es lo mismo que where pero para las consultas con agrupamiento*/
SELECT COUNT(titulo) AS 'Número de entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >=2;

/*
AVG     Sacar la media
COUNT   Contar el número de elementos
MAX     Valor máximo del grupo
MAX     Valor máximo del grupo
SUM     Sumar todo el contenido del grupo
*/
SELECT AVG(id) AS 'Media de Entradas' FROM entradas;