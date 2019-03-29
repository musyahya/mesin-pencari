<!DOCTYPE html>
<html>
<head>
	<title>Stemming</title>
</head>
<body>
	<h1>Hasil Stemming</h1>

	<!-- input -->
	<form action="" method="POST">
		Masukan kata :
		<input type="text" name="kata">
		<br>
		<button type="submit" name="submit">kirim</button>
		<br>
	</form>

	<!-- tabel induk -->
	<?php if (isset($_POST["kata"]))
	{ ?>
		<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>Kata</th>
			<th>Kata dasar</th>
		</tr>

		<?php 
		$dasar = $_POST["kata"];
		//akhiran
		if((substr($dasar, -3) == "pun")||(substr($dasar, -3) == "kan")||(substr($dasar, -3) == "lah")||(substr($dasar, -3) == "kah")||(substr($dasar, -3) == "nya"))
		{
			$dasar = substr($dasar,0,-3);
		}
		else if((substr($dasar, -2) == "an")||(substr($dasar, -2) == "ku")||(substr($dasar, -2) == "mu"))
		{
			$dasar = substr($dasar,0,-2);
		}
		else if(substr($dasar, -1) == "i")
		{
			$dasar = substr($dasar,0,-1);
		}

		//awalan
		if((substr($dasar,0,2) == "se")||(substr($dasar,0,2) == "di")||(substr($dasar,0,2) == "me")||(substr($dasar,0,2) == "pe")||(substr($dasar,0,2) == "ke"))
		{
			$dasar = substr($dasar,2);
		}
		else if((substr($dasar,0,3) == "ter")||(substr($dasar,0,3) == "ber"))
		{
			$dasar = substr($dasar,3);
		}
		?>

		<tr>
			<!-- menampilkan kata -->
			<td><?= $_POST["kata"]; ?></td>

			<!-- menampilkan kata dasar -->
			<td><?= $dasar; ?></td>
		</tr>
	</table>
	<?php }
	else
	{
		echo "";
	} ?>

</body>
</html>