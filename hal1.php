<!DOCTYPE html>
<html>
<head>
	<title>jurnal5</title>
</head>
<body>
<form method="POST" action="">
	<table>
		<tr>
			<td>
				NIM:
			</td>
			<td>
				<input type="text" name="NIM">
			</td>
		</tr>
		<tr>
			<td>
				NAMA:
			</td>
			<td>
				<input type="text" name="Nama">
			</td>
		</tr>
		<tr>
			<td>
				EMAIL:
			</td>
			<td>
				<input type="text" name="Email">
			</td><br/ >
		</tr>
		<tr>
			<td>
				<input type="submit" name="Submit" value="SUBMIT">
			</td>
		</tr>
	</table>
</form>
</body>
</html>

<?php
$datcon = mysqli_connect('localhost','root','','d_modul5');

if(isset($_POST['Submit'])){
	$Nim = $_POST['NIM'];
	$Nama = $_POST['Nama'];
	$Email = $_POST['Email'];

$cek = mysqli_query($datcon,"INSERT INTO t_jurnal1 VALUES($Nim,'$Nama','$Email', '')");
session_start();

if($cek){
header('location: hal2.php');
	}
}
 ?>
