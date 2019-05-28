/*
11. Visualizar todos los cargos y el número de vendedores que hay en cada cargo
*/
SELECT cargo, COUNT(id) AS 'Número de vendedores' FROM vendedores GROUP BY cargo;