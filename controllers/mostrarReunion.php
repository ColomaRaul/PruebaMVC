<?php
/**
 * Clase del controlador Mostrar Reunión para mostrar, editar y borrar reuniones
 */
class MostrarReunion extends Controller
{
	function __construct()
	{
		parent::__construct();	
	}
	
	/**
	 * Controlador del índice para mostrar la lista
	 * @return type
	 */
	function index()
	{

		$this->view->listaReunion = $this->model->listaReunion();
		$this->view->render('mostrarReunion/index');
	}

	/**
	 * Controlador para editar una reunión
	 * @param type $id id de la reunión a editar
	 * @return type
	 */
	function edit($id)
	{
		$this->view->mostrarReunion = $this->model->listaSimpleReunion($id);
		$this->view->render('mostrarReunion/edit');
	}

	/**
	 * Controlador para guardar la edición de una reunión
	 * @param type $id Id de la reunión a guardar
	 * @return type
	 */
	function editSave($id)
	{
		$data = array();
		$data['id'] 		= $id;
		$data['titulo'] 	= $_POST['titulo'];
		$data['breveDesc'] 	= $_POST['breveDesc'];
		$data['fecha'] 		= $_POST['fecha'];
		$data['hora'] 		= $_POST['hora'];
		$data['granDesc'] 	= $_POST['granDesc'];
		$data['acta'] 		= $_POST['acta'];

		$this->model->editSave($data);
		header('location: '.URL. 'mostrarReunion');
	}

	/**
	 * Controlador para borrar una reunión
	 * @param type $id Id de la reunión
	 * @return type
	 */
	function delete($id)
	{
		$this->model->delete($id);
		header('location: '.URL. 'mostrarReunion');
	}

	/**
	 * Controlador para inscribir un asistente a una reunión
	 * @param type $id  Id de la reunión
	 * @return type
	 */
	function inscribir($id)
	{
		$this->model->inscribir($id);
		$this->view->render('mostrarReunion/inscribir');
	}

}