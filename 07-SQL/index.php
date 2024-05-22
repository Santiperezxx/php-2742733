<?php

//Documentacion: SQL W3school

// 1. SQL Select
// SELECT Edad FROM `estudiantes`;
// Selecciona las edades de las tablas de estudiantes

// 2. SQL Select distinct
// SELECT DISTINCT `Estado civil` FROM profesores;
// Selecciona una de tres opciones que sean similares y elimina als demás

// 3. SQL Where
// SELECT `Edad` FROM `estudiantes` WHERE ID=2;
// Selecciona la columba especifica de la fila indicada

// 4. Order by
// SELECT Nombre , Documento FROM `profesores` ORDER BY Documento DESC;
// ordena ascendente o descendente la categoria que seleccionemos

// 5. SQL and
// SELECT * FROM estudiantes WHERE `Media técnica` = 'multimedia' AND Nombre LIKE 's%';
// Selecciona dos columnas e imprime la linea que coincida con ambas peticiones

// 6. SQL or
// SELECT * FROM estudiantes WHERE `Media técnica` = 'multimedia' OR `Media técnica`= 'sistemas';
// Solo mostrará las columnas que sean solicitadas

// 7. SQL not
// SELECT * FROM `profesores` WHERE Nombre NOT LIKE 'o%';
// selecciona de la tabla todos excepto los que se indiquen ser excluidos

// 8. SQL insert into
// INSERT INTO profesores (Nombre, Materia) VALUES ('Osvaldo', 'Filosofía');
// Agrega informacion a una columna que sea indicada

// 9. SQL NULL values
//SELECT Nombre, Materia, Edad FROM profesores WHERE Nombre IS NOT NULL;
// Si se asigna el valor vacio NULL no se mostrará, de lo contrario si se afirma que no lo es, este no desaparecerá

// 10. SQL Update
// UPDATE estudiantes SET Edad='15' WHERE `Media técnica`='sistemas';
// A cada linea que está en media tecnica sistemas, se le dará la edad de 15

// 11. SQL Delete
// DELETE FROM estudiantes WHERE Nombre LIKE 'y%';
// Elimina la linea completa de el que cumpla la condicion en una sola columna


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>