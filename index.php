<?php 

	require 'php/functions.php';
	$florafauna = query("SELECT * FROM florafauna");

?>
<!DOCTYPE html>
<html>
<head>

	<title>Latihan 5b</title>

	<!-- Bootstrap CSS -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!-- Style -->
   <link rel="stylesheet" href="assets/css/Latihan5b.css">

</head>
<body>
<div class="header">
	<h1 class="text-center">Flora dan Fauna Terancam Punah</h1>
	</br>
</div>
<div class="container-fluid">

	<div class="row">
		<div class="col-6 col-md-4"></div>
  		<div class="col-6 col-md-4">
			<div class="paper">
			<?php 

				foreach ($florafauna as $faunaflora) :

			?>
				<div class="kotak">
					<a href="php/result.php?id=<?= $faunaflora['id']; ?> ">
						<img src="assets/img/<?php echo $faunaflora['gambar']; ?>" class="rounded-circle">
					</a>
					<a href="php/result.php?id=<?= $faunaflora['id']; ?> ">
						<p class="nama"><b><?php echo $faunaflora["nama"] ?></b></p>
					</a>
					<a href="php/result.php?id=<?= $faunaflora['id']; ?> ">
						<p class="jenis">(<?php echo $faunaflora["jenis"] ?>)</p>
					</a>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
		</div>
  <div class="col-6 col-md-4"></div>
	</div>
</div>
<div class="footer">
	<h6 class="text-center">Diki Fauzi (173040138)</h6>
	</br>
</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>