<?php
/**
 * Clase para la creación de un nuevo usuario
 */
class NuevoUsuario_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Función que ingresa los datos en la base de datos de un usuario nuevo
	 * @return type
	 */
	public function run()
	{
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$rpass= $_POST['rpass'];

		$responsable = 0;

		$reglen = strlen($name) * strlen($pass) * strlen($rpass);

		if($reglen > 0)
		{
			if($pass === $rpass)
			{
				//guardar usuario
				$sth = $this->db->prepare("INSERT INTO asistentes VALUES (NULL, :name, MD5(:pass), :responsable, NULL)");
				$sth->execute(array(
					':name' 		=> $name,
					':pass' 		=> $pass,
					':responsable' 	=> $responsable
				));
				header('location: ../index');
			}
			else
			{
				//echo 'Por favor introduzca dos contraseñas idénticas';
				header('location: ../nuevoUsuario');
			}
		}
		else
		{
			//echo 'Por favor introduzca todos los campos';
			header('location: ../nuevoUsuario');
		}
	}
}