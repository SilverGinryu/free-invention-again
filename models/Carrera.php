<?php
require_once 'Database.php';

class Carrera
{
	private $abreviatura;
	private $nombre;
	public function __construct() {
	}

	public static function get() {
		$sql = "SELECT * FROM carrera";
		$db = new Database();
		if ($row = $db->query($sql)) {
			$db->close();
			return $row;
		}
		$db->close();
		return FALSE;
	}

}