/*
18.- Listar los clientes que han hecho algún encargo del coche Rav 4
*/
SELECT cliente_id FROM encargos WHERE coche_id = 5;

SELECT * FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id
IN (SELECT id FROM coches WHERE modelo like '%Rav 4%'));
