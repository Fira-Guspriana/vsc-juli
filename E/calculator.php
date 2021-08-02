<html>
<head>
	<title>calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		
		<form method="post" action="calculator.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<input type="submit" name="hitung" value="Calculate" class="tombol">											
		</form>
		<p>The result is: <?php if(isset($_POST['hitung'])){ ?>
			<input border="0" type="text" value="<?php echo $hasil; ?>" class="bil"></p>
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>