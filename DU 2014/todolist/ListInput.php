<?php
	include 'connectDB.php';
	try{
		$sql = $db->prepare ('INSERT INTO aktifitas (todo,tanggal,status,hapus) VALUES (:todo,:tanggal,:status,:hapus)');

		$sql->execute (array(':todo'=>$_POST['todo'],
								':tanggal'=>$_POST['deadline'],
								':status'=>'0%',
								':hapus'=>0));
	}catch(PDOException $e){
		echo $e->getMessage();
	}

	header('Location:index.php');