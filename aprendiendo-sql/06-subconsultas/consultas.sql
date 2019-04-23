/*Subconsultas
- Consultas que se ejecutan dentro de otras
- Consiste en utilizar los resultados de la subconsulta para operar en la consulta
principal
- Jugando con las claves ajenas
*/

INSERT INTO usuarios VALUE(NULL, 'Admin', 'Admin', 'admin@admin.com', 'admin', CURDATE());

/*Sacar usuarios que existen en la tabla entradas*/
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

/*Sacar usuarios que no existen en la tabla entradas*/
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

/*Sacar los usuarios que tengan alguna entrada que en su título hable de Assasins*/
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo like '%Assasins%');