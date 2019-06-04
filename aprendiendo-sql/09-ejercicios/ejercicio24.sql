/*
24. Listar los encargos con el nombre del coche, el nombre del cliente y
el nombre de la ciudad, pero unicamente cuando sean de Santa Cruz
*/
SELECT e.id AS 'Encargos', co.modelo, c.nombre, c.ciudad
FROM encargos e
INNER JOIN coches co ON e.coche_id=co.id
INNER JOIN clientes c ON e.cliente_id=c.id
WHERE c.ciudad = 'Santa Cruz';