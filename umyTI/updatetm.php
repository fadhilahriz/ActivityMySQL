<?php

	$server = "localhost";
	$user  = "root";
	$namadb = "tiumy";
	$password = "";
	
	$conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");
	
	$Id = $_POST['Id'];
	$nama = $_POST['nama'];
	$telpon = $_POST['telpon'];
	
	class emp{}
		$query = mysqli_query($conn,"UPDATE teman set nama = '".$nama."',telpon = '".$telpon."' WHERE Id = '".$Id."'");
		
		if($query) {
			$response = new emp();
			$response -> success = 1;
			$response -> message = "Data berhasil diedit";
			die(json_encode($response));
		} else {
			$response = new emp();
			$response -> success = 0;
			$response -> message = "Gagal mengedit data";
			die(json($response));
		}
?>