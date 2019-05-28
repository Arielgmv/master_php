/*
10.- Visualizar los apellidos de los vendedores, fecha y número de grupo,
ordenado por fecha descendente, mostrar los 4 últimos
*/
SELECT apellidos, fecha_alta, grupo_id FROM vendedores ORDER BY fecha_alta DESC LIMIT 4;