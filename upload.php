<html>
<title>Form Upload</title>
<link rel="stylesheet" type="text/css" href="css.css">
<body>

		<ul>
			<li><a href="katadasar.php">kata dasar</a></li>
			<li><a href="upload.php">upload</a></li>
			<li><a href="awalquery.php">kata kunci</a></li>
			<li><a href="query.php">keyword</a></li>
		</ul>

<form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
File yang di upload : <input type="file" name="fupload"><br>
Deskripsi File : <br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=Upload>
</form>