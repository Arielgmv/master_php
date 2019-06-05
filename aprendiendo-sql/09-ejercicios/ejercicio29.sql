/*
29. Crear una vista llamada vendedoresA que incluira
todos los vendedores del grupo que se llame "Vendedores A"
*/
CREATE VIEW vendedoresA AS
SELECT CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedores', g.nombre
FROM vendedores v
INNER JOIN grupos g ON v.grupo_id=g.id
WHERE g.nombre='Vendedores A';

CREATE VIEW vendedoresB AS
SELECT * FROM vendedores WHERE grupo_id IN
    (SELECT id FROM grupos WHERE nombre='Vendedores B');

