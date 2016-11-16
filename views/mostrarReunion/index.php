<h1>Reuniones</h1>
<table border=1>

<tr>
	<td>
		<label><b>Id de la Reunión</b></label>
	</td>
	<td>
		<label><b>Título</b></label>
	</td>
	<td>
		<label><b>Breve descripción</b></label>
	</td>
	<td>
		<label><b>Descripción</b></label>
	</td>
	<td>
		<label><b>Fecha</b></label>
	</td>
	<td>
		<label><b>Hora</b></label>
	</td>
	<td>
		<label><b>Acta de la reunión</b></label>
	</td>
</tr>
<?php 
	foreach ($this->listaReunion as $key => $value) {
		echo '<tr>';
		echo '<td>' . $value['Id'] . '</td>';
		echo '<td>' . $value['Titulo'] . '</td>';
		echo '<td>' . $value['BreveDescripcion'] . '</td>';
		echo '<td>' . $value['Descripcion'] . '</td>';
		echo '<td>' . $value['Fecha'] . '</td>';
		echo '<td>' . $value['Hora'] . '</td>';
		echo '<td>' . $value['Acta'] . '</td>';

		echo '<td><a href="'.URL.'mostrarReunion/inscribir/'.$value['Id'].'">Inscribir</a></td>';
		
		//comprobar si es responsable
		if(Session::get('id') == $value['Responsable'])
		{
			echo '<td><a href="'.URL.'mostrarReunion/edit/'.$value['Id'].'">Editar</a> </td>';
			echo '<td><a href="'.URL.'mostrarReunion/delete/'.$value['Id'].'">Borrar</a></td>';
			
		}
		echo '</tr>';
	}
?>

</table>

