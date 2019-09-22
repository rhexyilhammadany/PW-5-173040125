<?php 

	include '../php/functions.php';
	
	if (isset($_POST["tambah"])) {
		if (tambah($_POST, $_FILES) > 0) {
			echo "<script>
					alert('Data Berhasil ditambah!');
					document.location.href = 'index.php';
				  </script>";
		}else{
			echo "<script>
					alert('Data Gagal ditambah!');
					document.location.href = 'index.php';
				  </script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data</title>
	<style>
		body{
			background-color: skyblue;
		}
		.box{
			margin-top: 50px;
			width: 320px;
			color: white;
			background-color: rgba(0,0,0,0.5);
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			padding: 50px 30px;
			border-radius: 10px;
		}
		input{
			color: white;
			display: block;
			border: none;
			border-bottom: 2px solid white;
			outline: none;
			background: transparent;
			width: 100%;
		}
		input[type="text"]{
			margin-bottom: 20px;
		}
		.b1{
			margin-top: 30px;
		}
		button{
			margin-top: 10px;
			width: 100%;
			border: 1px solid white;
			height: 40px;
			border-radius: 3px;
			font-size: 15px;
		}
		button:hover{
			font-weight: bold;
			background-color: white;
			border: 1px solid #333;
			cursor: pointer;
			box-shadow: 0px 0px 5px white; 
		}
		hr{
			border: 1px solid #333;
			margin-top: -10px;
			width: 600px;
		}
	</style>
</head>
<body>
	<h1 align="center">Tambah Data</h1>
	<hr>
<div class="box">
	<form action="" method="post">
		
		<label for="nama">Nama : </label>
		<input type="text" name="nama" id="nama">

		<label for="latin">Nama Latin : </label>
		<input type="text" name="latin" id="latin">

		<label for="jenis">Jenis : </label>
		<input type="text" name="jenis" id="jenis">

		<label for="tentang">Deskripsi : </label>
		<input type="text" name="tentang" id="tentang">

		<label for="gambar">Gambar : </label>
		<input type="text" name="gambar" id="gambar">

		<button type="submit" name="tambah" class="b1" style="background-color: lightgreen;">Tambah</button>
		<a href="index.php"><button style="background-color: tomato;">Kembali</button></a>

	</form>
</div>
</body>
</html>