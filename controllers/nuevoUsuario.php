<?php
/**
 * Clase controladora de la creación de usuarios/asistentes
 */
class NuevoUsuario extends Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Controlador del índice para mostrar la creación de un nuevo usuario
	 * @return type
	 */
	function index()
	{
		$this->view->render('nuevoUsuario/index');
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