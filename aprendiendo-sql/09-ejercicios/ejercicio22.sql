/*
22.- Mostrar listado de clientes (número de cliente y el nombre)
mostrar también el número de vendedor y su nombre
*/
SELECT c.id AS 'Número Cliente', c.nombre AS 'Nombre Cliente', c.vendedor_id AS 'Numero Vendedor', v.nombre AS 'Nombre vendedor'
FROM clientes c
INNER JOIN vendedores v ON c.vendedor_id=v.id; 

SELECT c.id, c.nombre, v.id, CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedor'
FROM clientes c, vendedores v
WHERE c.vendedor_id=v.id;