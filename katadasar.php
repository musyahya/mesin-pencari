<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>STEMMING</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

		<ul>
			<li><a href="katadasar.php">kata dasar</a></li>
			<li><a href="upload.php">upload</a></li>
			<li><a href="awalquery.php">kata kunci</a></li>
			<li><a href="query.php">keyword</a></li>
		</ul>

<h3>PENCARIAN KATA DASAR</h3>
<form method="post" action="">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$keluaran = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$keluaran.'<br/>';
}
?>
</body>
</html>