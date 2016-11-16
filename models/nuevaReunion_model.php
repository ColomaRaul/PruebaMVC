<?php
/**
 * Clase para la creación de nuevas reuniones
 */
class NuevaReunion_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Función que hace una consulta a la base de datos
	 * @param type $nombre nombre de la reunión
	 * @return type devuelve el id de la reunión
	 */		
	public function idReunion($nombre)
	{
		$sth = $this->db->prepare("SELECT Id FROM reunion WHERE titulo = :nombre");
		$sth->execute(array(':nombre' => $nombre));
		return $sth->fetch();
	}

	/**
	 * Función que ingresa los datos en la base de datos de la nueva reunión
	 * @return type
	 */
	public function run()
	{
		$titulo 	= $_POST['titulo'];
		$bDesc 		= $_POST['breveDesc'];
		$gDesc 		= $_POST['granDesc'];
		$fecha 		= $_POST['fecha'];
		$hora 		= $_POST['hora'];
		$idUser 	= Session::get('id');

		$sth = $this->db->prepare("INSERT INTO reunion VALUES (NULL, :titulo, :bDesc, :gDesc, :fecha, :hora, :idUser, NULL)");
		$sth->execute(array(
			':titulo' 	=> $titulo,
			':bDesc' 	=> $bDesc,
			':gDesc' 	=> $gDesc,
			':fecha'	=> $fecha,
			':hora'		=> $hora,
			':idUser'	=> $idUser
			));

		$actualizarResponsable = $this->db->prepare("UPDATE asistentes SET responsable = 1 WHERE id = :idUser");
		$actualizarResponsable->execute(array(':idUser' => $idUser));


		$idReunion = $this->idReunion($titulo);

		$inscribirReunion = $this->db->prepare("UPDATE asistentes SET FK_ID_REUNION = :idReunion WHERE id = :idUser");
		$inscribirReunion->execute(array(
			':idReunion' =>$idReunion[0],
			':idUser' => $idUser
			));


		header('location: ../index');
	}
}