/*
21.- Obtener los nombres y ciudades de los clientes con encargos de 2 unidades en adelante
*/
SELECT nombre, ciudad FROM clientes WHERE id IN 
(SELECT cliente_id FROM encargos WHERE cantidad >= 2);