<?php

$n = $_POST["i_like"];

$m = $_POST["mail"];

$c = $_POST["password"];

echo "Bienvenido maestro(a)".$n." de la Escuela Politecnica de Guadalajara."

?>

CREATE TABLE `teachers` (

  `user` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,

  `name` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,

  `mail` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,

  `password` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO `teachers` (`user`, `name`, `mail`, `password` ) VALUES

('tchr-50747', 'Moisés', 'Gómez Meléndez', 'moises.gomez@sems.udg.mx'),

('tchr-617af', 'Rigoberto', 'Gonzalez Garcia', 'rigoberto.gonzalez@sems.udg.mx'),

('tchr-a80e12', 'Pamela', 'Sánchez', 'pamela.sanchez@sems.udg.mx');

<?php

$t = $_POST["tarea"];

$f = $_POST["fecha"];

echo "".$t." añadido exitosamente para".$f."" 

?>

CREATE TABLE `tareas` (

  `actividad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,

  `fecha` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,

  `descripción` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,

INSERT INTO `tareas` (`actividad`, `fecha`, `descripción`) VALUES

('tarea 1', '12/04/22', 'hacer una pagina web que te indique la hora'),

('tarea 2', '15/05/22', 'hacer diagrama de flujo del programa visto en clase');
