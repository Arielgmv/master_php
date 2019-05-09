/*
6. Visualizar el nombre y los apellidos de los vendedores en una misma columnay su fecha de registro
y el día de la semana en la que se registraron
*/
SELECT CONCAT(nombre,' ',apellidos) AS 'Vendedores', fecha_alta, DAYNAME(fecha_alta) AS 'Día de registro' FROM vendedores;