<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>RENNAB</title>

</head>

<body>

	<h1>RENNAB</h1>
	<h3>Realiza tu consulta favorita</h3>

</body>

<?php

	try {
		$db = new PDO("pgsql:dbname=grupo5;host=localhost;port=5432;user=grupo5;password=gruponico"); 
		}
	catch(PDOException $e) {
		echo $e->getMessage();
		}

	// ***************	Consulta 1	***************
	$datosConsulta1 = "SELECT curso.sigla, ramo.nombre FROM curso, ramo WHERE ramo.sigla = curso.sigla GROUP BY curso.sigla, ramo.sigla ORDER BY curso.sigla";
	
	echo '<h5>Consulta 1</h5>';
	echo '<p>Alumnos que reprobaron un curso</p>';
	echo '<form action="consultasEntrega3/consulta1.php" method="post">';
	echo '<label><select name="sigla">';

	foreach($db -> query($datosConsulta1) as $row)
	{
		echo "<option value=$row[0]>$row[0] $row[1]</option>";
	}

	echo '</label>';
	echo '<input type="submit"/>';
	echo '</form><br>';

	// ***************	Consulta 2	***************
	$datosConsulta2 = "SELECT alumno.username, usuario.nombres, usuario.apellidop, usuario.apellidom FROM alumno, usuario WHERE usuario.username = alumno.username ORDER BY usuario.apellidop, usuario.apellidom, usuario.nombres";
	
	echo '<h5>Consulta 2</h5>';
	echo '<p>Cursos que ha aprobado un alumno</p>';
	echo '<form action="consultasEntrega3/consulta2.php" method="post">';
	echo '<label><select name="alumno">';

	foreach($db -> query($datosConsulta2) as $row)
	{
		echo "<option value=$row[0]>$row[2] $row[3] $row[1]</option>";
	}

	echo '</label>';
	echo '<input type="submit"/>';
	echo '</form><br>';

	// ***************	Consulta 3	***************
	$datosConsulta3 = "SELECT curso.sigla, ramo.nombre FROM curso, ramo WHERE ramo.sigla = curso.sigla GROUP BY curso.sigla, ramo.sigla ORDER BY curso.sigla";
	
	echo '<h5>Consulta 3</h5>';
	echo '<p>Cantidad de alumnos que cumplen los prerequisitos de un curso y no lo han tomado aun</p>';
	echo '<form action="consultasEntrega3/consulta3.php" method="post">';
	echo '<label><select name="sigla">';

	foreach($db -> query($datosConsulta3) as $row)
	{
		echo "<option value=$row[0]>$row[0] $row[1]</option>";
	}

	echo '</label>';
	echo '<input type="submit"/>';
	echo '</form><br>';

	// ***************	Consulta 4	***************
	$datosConsulta4 = "SELECT curso.sigla, ramo.nombre FROM curso, ramo WHERE ramo.sigla = curso.sigla GROUP BY curso.sigla, ramo.sigla ORDER BY curso.sigla";
	
	echo '<h5>Consulta 4</h5>';
	echo '<p>Nota mínima, máxima, promedio y mediana de un curso dado por cada semestre dictado</p>';
	echo '<form action="consultasEntrega3/consulta4.php" method="post">';
	echo '<label><select name="sigla">';

	foreach($db -> query($datosConsulta4) as $row)
	{
		echo "<option value=$row[0]>$row[0] $row[1]</option>";
	}

	echo '</label>';
	echo '<input type="submit"/>';
	echo '</form><br>';

	// ***************	Consulta 5	***************
	$datosConsulta5 = "SELECT alumno.username, usuario.nombres, usuario.apellidop, usuario.apellidom FROM alumno, usuario WHERE usuario.username = alumno.username ORDER BY usuario.apellidop, usuario.apellidom, usuario.nombres";
	
	echo '<h5>Consulta 5</h5>';
	echo '<p>Todos los profesores que ha tenido un alumno</p>';
	echo '<form action="consultasEntrega3/consulta5.php" method="post">';
	echo '<label><select name="alumno">';

	foreach($db -> query($datosConsulta5) as $row)
	{
		echo "<option value=$row[0]>$row[2] $row[3] $row[1]</option>";
	}

	echo '</label>';
	echo '<input type="submit"/>';
	echo '</form><br>';

	// ***************	Consulta 6	***************
	$datosConsulta5 = "SELECT alumno.username, usuario.nombres, usuario.apellidop, usuario.apellidom FROM alumno, usuario WHERE usuario.username = alumno.username ORDER BY usuario.apellidop, usuario.apellidom, usuario.nombres";
	
	echo '<h5>Consulta 6</h5>';
	echo '<p>Promedio de notas que han obtenido los alumnos en los cursos de cada profesor</p>';
	echo '<form action="consultasEntrega3/consulta6.php" method="post">';
	echo '<input type="submit"/>';
	echo '</form><br>';

?>
