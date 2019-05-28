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

/*Sacar todas las entradas de la categoría acción utilizando su nombre*/
SELECT * FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre='Acción');

/*Mostrar las categorías con más de 2 o más entradas*/
SELECT nombre FROM categorias WHERE id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=2);


/*Mostrar los usuarios que crearon una entrada un lunes*/
SELECT nombre FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=2);

/*Mostrar el nombre del usuario que tenga más entradas*//*Colocamos = en vez de IN por que sólo devuelve un valor*/
SELECT CONCAT(nombre,' ',apellidos) AS 'El Usuario con más entrdas' FROM usuarios WHERE id=(SELECT COUNT(id) FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

/*Mostrar las categorías sin entradas*/
INSERT INTO categorias VALUES(null, 'Plataformas');
SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas);

