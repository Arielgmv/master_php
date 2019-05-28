/*
13.- Sacar la media de sueldos entre todos los vendedores por grupo
*/
SELECT AVG(sueldo) AS 'Media de sueldos', grupo_id FROM vendedores GROUP BY grupo_id;

SELECT AVG(v.sueldo) AS 'Media de sueldos', g.nombre, g.ciudad FROM vendedores v
INNER JOIN grupos g ON g.id=v.grupo_id
GROUP BY grupo_id;