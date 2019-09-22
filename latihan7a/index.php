<?php 

	include '../php/functions.php';

	$florafauna = query("SELECT * FROM florafauna");
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index | Admin</title>
</head>
<body>
	<h1 align="center">Flora dan Fauna Terancam Punah</h1>
<table border="1" cellpadding="5" cellspacing="0">
	<tr style="background-color: #333; color: white; border: 1px solid #eaeaea;">
		<th>No.</th>
		<th>Nama</th>
		<th>Gambar</th>
		<th>Nama latin</th>
		<th>Jenis</th>
		<th>Deskripsi</th>
		<th>Aksi</th>
	</tr>
<?php $no = 1; ?>
<?php foreach ($florafauna as $faunaflora) : ?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $faunaflora["nama"]; ?></td>
		<td><img src="../assets/img/<?php echo $faunaflora["gambar"]; ?>" alt="" style="width: 100px; height: 100px;"></td>
		<td><?php echo $faunaflora["latin"]; ?></td>
		<td><?php echo $faunaflora["jenis"]; ?></td>
		<td><?php echo $faunaflora["tentang"]; ?></td>
		<td>
			<a href=""><button style="background-color: lightgreen;">Ubah</button></a>
			<a href=""><button style="background-color: tomato;">Hapus</button></a>
		</td>
	</tr>
<?php endforeach; ?>
</table>

</body>
</html>