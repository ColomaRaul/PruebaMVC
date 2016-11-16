<?php

class Error extends Controller
{
	function __construct()
	{
		parent::__construct();
	
	}
	function index()
	{
		$this->view->msg = 'Esta página no existe.';
		$this->view->render('error/index');
	}
}