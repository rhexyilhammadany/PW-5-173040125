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

	function tambah($data){
		$conn = koneksi();

		$nama = htmlspecialchars($data["nama"]);
		$gambar = htmlspecialchars($data["gambar"]);
		$latin = htmlspecialchars($data["latin"]);
		$jenis = htmlspecialchars($data["jenis"]);
		$tentang = htmlspecialchars($data["tentang"]);

		$querytambah = "INSERT INTO florafauna 
						VALUES ('','$nama','$gambar','$latin','$jenis','$tentang')";

		mysqli_query($conn, $querytambah);

		return mysqli_affected_rows($conn);
	}

?>