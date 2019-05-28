/*
16. Obtener un listado de clientes atendidos por el vendedor 'David Lopez'
*/
SELECT nombre, vendedor_id FROM clientes WHERE vendedor_id=1;

SELECT c.nombre, v.nombre FROM clientes c
INNER JOIN vendedores v ON c.vendedor_id=v.id
WHERE vendedor_id=1;

UPDATE clientes SET vendedor_id=4 WHERE id=3;
UPDATE clientes SET vendedor_id=4 WHERE id=5;
UPDATE clientes SET vendedor_id=2 WHERE id=6;

SELECT * FROM clientes WHERE vendedor_id IN
(SELECT id FROM vendedores WHERE nombre = 'David' AND apellidos = 'Lopez');