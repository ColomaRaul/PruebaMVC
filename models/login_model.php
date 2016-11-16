<?php
/**
 * Clase para controlar la sesión de un usuario
 */
class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Función donde comprueba el login e inicia sesión
	 * @return type
	 */
	public function run()
	{
		$sth = $this->db->prepare("SELECT id FROM asistentes WHERE
			nombre = :name AND password = MD5(:pass)");
		$sth->execute(array(
			':name' => $_POST['name'],
			':pass' => $_POST['pass']
			));

		$data = $sth->fetch();

		$count = $sth->rowCount();
		if($count > 0)
		{
			//login
			Session::init();
			Session::set('id', $data['id']);
			Session::set('loggedIn', true);
			header('location: ../dashboard');
		}
		else
		{
			header('location: ../login');
		}
	}

	/**
	 * Función donde deslogea de la sesión
	 * @return type
	 */
	public function logout()
	{
		Session::destroy();
		header('location: ../login');
		exit;
	}
}