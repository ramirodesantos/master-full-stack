<!DOCTYPE html>
<html lang="en">
<head>
  <title>CASO VULNERABLE - OWASP TOP 10:2021</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid p-5 bg-secondary text-white text-center">
  <h1>HOSPITAL CENTRAL</h1>
  <p>Sede sur</p> 
</div>
<div class="container mt-3">
  <h2>BÚSQUEDA DE PACIENTES</h2>
  <form action="owaps-vulnerabilidades.php" method="post"> 
    <div class="mb-3 mt-3">
      <label for="dni">DNI/PASAPORTE:</label>
      <input type="dni" class="form-control" id="dni" placeholder="Introduzca el DNI o pasaporte del paciente" name="dni">
    </div>
    <button type="submit" class="btn btn-secondary btn-lg">BUSCAR</button>
  </form>
  
  <?php
  
  if(isset($_POST["dni"]))
  {
		$dni=$_POST["dni"];
		$mysqli = new mysqli("localhost","root", "", "hospitalcentral");
		if ($mysqli->connect_errno) 
		{
			echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		$consulta="SELECT * FROM pacientes  WHERE dni='$dni' ";
		$resultado=$mysqli->query($consulta);
		$row_cnt = $resultado->num_rows;
		if($row_cnt > 0)
		{
			
			echo "<table class='table table-hover'>
			<thead>
			  <tr>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>DNI</th>
				<th>Anamnesis</th>
				<th>Diagnóstico</th>
				
			  </tr>
			</thead>
			<tbody>";
	
			while($paciente = $resultado->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>"; echo $paciente['nombre'];  echo "</td>";
				echo "<td>"; echo $paciente['apellidos'];  echo "</td>";
				echo "<td>"; echo $paciente['dni'];  echo "</td>";
				echo "<td>"; echo $paciente['anamnesis'];  echo "</td>";
				echo "<td>"; echo $paciente['diagnostico'];  echo "</td>";
				echo "</tr>";
			}
			
			echo"</tbody> </table>";
		}
		else
		{
			echo"<div class='alert alert-danger'>
			<strong>ERROR - PACIENTE NO ENCONTRADO </strong> 
		  </div>";
		}
  }
  
  
  ?>

</body>
</html>
