<?php 
	
	if (!isset($_GET["id"])	
	   ){
		header("Location:../index.php");
		exit;

	}
	$no=1;
	require 'functions.php';
	$id = $_GET['id'];
	$faunaflora = query("SELECT * FROM florafauna WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 5c</title>

	
	<!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <!-- Style -->
   <link rel="stylesheet" href="../assets/css/Latihan5c.css">

</head>
<body>
	
<div class="header">
	<h1 class="text-center"><?= $faunaflora["jenis"]; ?> Terancam Punah</h1>
	</br>
</div>

<div class="container">
	<div class="gajah">
		<div class="badak">
			<div class="pow">
		<table border="" cellpadding="10" cellspacing="0" class="table">
			<tr>
				<th>#</th>
				<th>opsi</th>
				<th width="160px">Nama</th>
				<th>Gambar</th>
				<th>Nama Latin</th>
				<th>Jenis</th>
				<th>Deskripsi</th>
			</tr>
			<?php $i =1; ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td>
					<a href="">ubah</a>
					<a href="">Hapus</a>
				</td>
				<td><?= $faunaflora["nama"]; ?></td>
				<td><img src="../assets/img/<?php echo $faunaflora['gambar']; ?>"></td>
				<td><?= $faunaflora["latin"]; ?></td>
				<td><?= $faunaflora["jenis"]; ?></td>
				<td><?= $faunaflora["tentang"]; ?></td>
			</tr>
		</table>
			</div>
	
	<a href="../index.php"><button type="button" class="btn btn-dark">Kembali	</button></a>

	</div>
</div>
</div>

<div class="footer">
	<h6 class="text-center"></h6>
	</br>
</div>

</body>
</html>