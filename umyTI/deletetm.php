<?php

	$server = "localhost";
	$user  = "root";
	$namadb = "tiumy";
	$password = "";
	
	$conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");
	
	$Id = $_POST['Id'];
	
	class emp{}
		$query = mysqli_query($conn,"DELETE from teman WHERE Id = '".$Id."'");
		
		if($query) {
			$response = new emp();
			$response -> success = 1;
			$response -> message = "Data berhasil dihapus";
			die(json_encode($response));
		} else {
			$response = new emp();
			$response -> success = 0;
			$response -> message = "Gagal menghapus data";
			die(json($response));
		}
?>