<?php
require_once 'Database.php';

class EstadoCita
{
	private $id_status;
	private $status;
	public function __construct() {
	}

	public static function get() {
		$sql = "SELECT * FROM EstadoCita";
		$db = new Database();
		if ($row = $db->query($sql)) {
			$db->close();
			return $row;
		}
		$db->close();
		return FALSE;
	}

}