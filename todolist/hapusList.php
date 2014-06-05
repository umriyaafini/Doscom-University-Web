<?php
	include 'connectDB.php';

	try{
		$idhps=$_POST['idhps'];
		echo $idhps;

		$hps='UPDATE aktifitas SET hapus = :hapus WHERE idList = :idhps';
		$hhps=$db -> prepare($hps);
		$hhps->execute(array(':hapus'=>1,
								':idhps'=>$idhps));

		header('Location:index.php');

	}catch(PDOException $e){

		echo 'ERROR: '.$e->getMessage();
		
	}
