<?php
/**
 * Clase del controlador Nueva Reunión para crear reuniones
 */
class NuevaReunion extends Controller
{
	function __construct()
	{
		parent::__construct();
		Session::init();
	}

	/**
	 * Controlador del índice para mostrar la creación de una nueva reunión
	 * @return type
	 */
	function index()
	{
		$this->view->render('nuevaReunion/index');
	}
	
	/**
	 * Controlador donde carga el modelo para insertar en la base de datos
	 * @return type
	 */
	function run()
	{
		$this->model->run();
	}
}