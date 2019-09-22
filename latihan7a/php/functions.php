<?php 
	
	function koneksi(){
		$conn= mysqli_connect("localhost","root","") or die ("Koneksi ke DB GAGAL");
		mysqli_select_db($conn, "pw_173040138")or die ("Database Salah");

		return $conn;
	}

	function query($sql){
		$conn = koneksi();
		$results = mysqli_query($conn, "$sql");

		$rows = [];
		while ($row = mysqli_fetch_assoc($results)) {
			$rows [] = $row;
		};
	   return $rows;
	}

?>