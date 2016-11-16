<?php
/**
 * Clase del índice principal
 */
class Indice extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->view->render('index/index');	
	}
}