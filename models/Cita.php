<?php
require_once 'Database.php';

class Cita
{
	private $id_cita;
	public $date;
	public $hour;


	public function __construct($matricula, $name, $aPaterno) {
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