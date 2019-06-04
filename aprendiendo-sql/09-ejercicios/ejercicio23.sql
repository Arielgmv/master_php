/*
23. Listar todos los encargos realizados con la marca del coche y el nombre del cliente
*/
SELECT e.id AS 'Numero encargo', co.marca, c.nombre
FROM encargos e
INNER JOIN coches co ON e.coche_id=co.id
INNER JOIN clientes c ON e.cliente_id=c.id;
