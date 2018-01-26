<?php
require_once 'Database.php';

class Profesor
{
	private $matricula;
	public $name;
	public $aPaterno;
	public $aMaterno;
	public $sexo;
	public $nacimiento;
	public $correo;

	public function __construct($matricula, $name, $aPaterno, $aMaterno, $sexo, $nacimiento, $correo) {
		$this->matricula = $matricula;
		$this->name = $name;
		$this->aPaterno = $aPaterno;
		$this->aMaterno = $aMaterno;
		$this->sexo = $sexo;
		$this->nacimiento = $nacimiento;
		$this->correo = $correo;
	}

	public function add($carrera) {
		$sql = "INSERT INTO alumno VALUES ('$this->matricula','$this->name','$this->aPaterno','$this->aMaterno','$this->sexo','$this->nacimiento','$this->correo','$carrera')";
		$db = new Database();
		if ($db->query($sql)) {
			$db->close();
			return TRUE;
		}
		$db->close();
		return FALSE;
	}

}