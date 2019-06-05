/*
30.Mostrar los datos del vendedor con mas antiguedad
en el concesionario
*/
SELECT * FROM vendedores ORDER BY fecha_alta ASC LIMIT 1;

/*
30 plus. Obtener los coches con mas unidades vendidas 
*/
SELECT co.modelo, co.marca, e.cantidad
FROM coches co
INNER JOIN encargos e ON co.id=e.coche_id
ORDER BY e.cantidad DESC LIMIT 2;

SELECT * FROM coches WHERE id IN
    (SELECT coche_id FROM encargos WHERE cantidad IN
       (SELECT MAX(cantidad) FROM encargos));