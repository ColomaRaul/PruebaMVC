<?php
/**
 * Clase controladora del login
 */
class Login extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Controlador que carga el índice del login para logear
	 * @return type
	 */
	function index()
	{
		$this->view->render('login/index');
	}

	/**
	 * Controlador donde carga el módulo para logear
	 * @return type
	 */
	function run()
	{
		$this->model->run();
	}
}