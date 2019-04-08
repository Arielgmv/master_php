#Renombrar una tabla
ALTER TABLE usuarios RENAME TO users;

#Cambiar nombre de una columna#
ALTER TABLE users CHANGE apellidos last_name varchar(100) null;

#Modificar columna sin cambiar nombre#
ALTER TABLE users MODIFY last_name char(50) not null;

#Añadir Columna#
ALTER TABLE users ADD website varchar(100) null;

#Añadir restricción a columna#
ALTER TABLE users ADD CONSTRAINT uq_email UNIQUE(email);

#Borrar una columna#
ALTER TABLE users DROP website;