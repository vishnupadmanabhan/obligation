<?php 

$config = array(

	'username' => 'root',
	'password' => ''

);

function connect($config)
{
	try
	{
		$conn = new PDO('mysql:host=localhost;dbname=obligation',
						$config['username'], 
						$config['password']);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;

	} catch(Exception $e) {
		return false;
	}
}

function  get($table_name, $conn)
{
	try{
		$result = $conn->query("SELECT * FROM $table_name");

		return ($result->rowCount() > 0)
		? $result
		:false;
	} catch(Exception $e) {
		return false;
	}
	
}