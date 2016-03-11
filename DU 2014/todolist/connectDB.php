<?php
// *************************************** KONEKSI DATABASE *******************************************
	$db=null;
	try{
		$db = new PDO("mysql:host=localhost;dbname=todolist","root","root");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		echo $e->getMessage();
	}

	