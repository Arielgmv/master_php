/*
4.- Sacar todos los vendedores cuya fecha de alta sea posterior al 8 de Mayo de 2019
*/

UPDATE vendedores SET fecha_alta='2019-05-10' WHERE id = 1;
SELECT * FROM vendedores WHERE fecha_alta >'2019-05-08';