<?php
//conexion a la BD
class Database{
	public static function connect(){
		$db = new mysqli('localhost', 'root', '', 'tienda_master');
		$db->query("SET NAMES 'utf8'"); //me devuelve los caracteres correctamente
		return $db;
	}
}

