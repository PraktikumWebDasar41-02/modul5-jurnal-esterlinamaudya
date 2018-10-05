
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="hal1.php">
	<table>
		<tr>
			<td>
				NAMA:
			</td>
			<td>
				<?php echo $Nama; ?>
			</td>
		</tr>
		<tr>
			<td>
				KOMENTAR:
			</td>
			<td>
				<input type="textbox" name="Komen">
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
	$Nama = $_POST['Nama'];
	$Komentar = $_POST['Komentar'];
	$Nama = $_POST['NIM'];

session_start();
$Nim = $_SESSION['NIM'];
$Nama = $_SESSION['Nama'];
$dbase = "SELECT Nama WHERE NIM='$Nim'";
$sql = mysqli_query($datcon,$dbase);
if($sql){
	echo $sql;
}

mysqli_query($datcon,"INSERT INTO t_jurnal1 VALUES('','$Nama','', '$Komentar')");

header('location: hal3.php');
	}
 ?>