<?php
/**
 * Clase para mostrar las reuniones, modificarlas y borrarlas
 */
class MostrarReunion_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		Session::init();
	}

	/**
	 * Función que hace una consulta a la base de datos
	 * @return Todas las reuniones
	 */
	public function listaReunion()
	{
		$sth = $this->db->prepare("SELECT * FROM reunion");
		$sth->execute();
		return $sth->fetchAll();
	}

 	/**
 	 * Función que hace una consulta a la base de datos
 	 * @param  $id id de la reunión
 	 * @return Devuelve la reunión con el Id pasado por parámetro
 	 */
	public function listaSimpleReunion($id)
	{
		$sth = $this->db->prepare("SELECT * FROM reunion WHERE id = :id");
		$sth->execute(array(':id' => $id));
		return $sth->fetch();
	}

	/**
	 * Función que hace una consulta a la base de datos
	 * @return Devuelve todos los asistentes
	 */
	public function listaAsistentes()
	{	
		$sth = $this->db->prepare("SELECT * FROM asistentes");
		$sth->execute();
		return $sth->fetchAll();
	}

	/**
	 * Función que borra un registro en la base de datos
	 * @param type $id Id de la reunión
	 * @return type
	 */
	public function delete($id)
	{
		$sth = $this->db->prepare('DELETE FROM reunion WHERE id = :id');
		$sth->execute(array(
				':id' => $id
			));
	}

	/**
	 * Función que guarda la edición de un registro en la base de datos
	 * @param type $data Datos de la reunión editada
	 * @return type
	 */
	public function editSave($data)
	{
		$sth = $this->db->prepare("UPDATE reunion 
			SET Id = :id, `Titulo` = :titulo, `BreveDescripcion` = :bDesc, `Descripcion` = :gDesc, `Fecha` = :fecha, `Hora` = :hora, `Acta` = :acta
			WHERE id = :id 
			");
		$sth->execute(array(
			':id'		=> $data['id'],
			':titulo' 	=> $data['titulo'],
			':bDesc' 	=> $data['breveDesc'],
			':gDesc' 	=> $data['granDesc'],
			':fecha'	=> $data['fecha'],
			':hora'		=> $data['hora'],
			':acta'		=> $data['acta']
			));
	}

	/**
	 * Función que inscribe un asistente en una reunión y lo actualiza en la base de datos
	 * @param type $id Id de la reunióm
	 * @return type
	 */
	public function inscribir($id)
	{
		$sth = $this->db->prepare("UPDATE asistentes
			SET FK_ID_REUNION = :idReunion
			WHERE id = :idAsistente
			");
		$sth->execute(array(
			':idReunion' 	=> $id,
			':idAsistente' 	=> Session::get('id')
			));
	}
}