<?php
	function conexion(){
	$host = "host=containers-us-west-57.railway.app";
	$port = "port=5886";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=2jZ9ajNWlnPZy3dOo7Ah";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>