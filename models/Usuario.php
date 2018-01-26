<?php
require_once 'Database.php';

class Usuario
{
	private $matricula;
	private $password;

	public function __construct($matricula, $password)
	{
		$this->matricula = $matricula;
		$this->password = password_hash($password,PASSWORD_DEFAULT);
	}
	protected function add() {
		$sql = "INSERT INTO usuario VALUES ('$this->matricula','$this->password')";
		$db = new Database();
		if ($db->query($sql)) {
			$db->close();
			return TRUE;
		}
		$db->close();
		return "La matricula ya existe";
	}

	public function matricula(){
		return $matricula;
	}
}