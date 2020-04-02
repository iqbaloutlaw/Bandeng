<?php
$_SESSION['checkout']=1;
if(isset($_POST['submit'])){

	echo "<script language=javascript>
	var r=confirm('Pastikan Data Anda Sudah Benar , Apakah Anda Yakin Untuk Melanjutkan ?');
	if (r == true) {
    document.location='index.php?page=11';
} else {
    document.location='index.php?page=10';
} 

</script>
";

}

$bd1=$_SESSION['bandeng1'];
$bd2=$_SESSION['bandeng2'];
$bd3=$_SESSION['bandeng3'];
$bd4=$_SESSION['bandeng4'];
$bd5=$_SESSION['bandeng5'];

$total1=0;
$total2=0;
$total3=0;
$total4=0;
$total5=0;

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>
Berita Pengiriman
</h1>
<table border="1" width="800">
<tr align="center" bgcolor="orange">
<td>Produk</td>
<td>Harga satuan</td>
<td>jumlah</td>
<td>total</td>
</tr>

<?php
if ($cart>0) {
	
if ($bd1>0) {
$id=0;
$total1=$bd1*130000;	
	echo "<tr>
<td>Bandeng Duri Lunak Vacuum Kering (Tanggung)</td>
<td>Rp.130000</td>
<td>$bd1</td>
<td>Rp.$total1</td>

</tr>";

}

if ($bd2>0) {
$id=1;
$total2=$bd2*110000;	
	echo "<tr>
<td>Bandeng Duri Lunak Vacuum Basah (Tanggung)</td>
<td>Rp.110000</td>
<td>$bd2</td>
<td>Rp.$total2</td>

</tr>";
}

if ($bd3>0) {
$id=2;
$total3=$bd3*50000;	
	echo "<tr>
<td>Bandeng Teriyaki</td>
<td>Rp.50000</td>
<td>$bd3</td>
<td>Rp.$total3</td>

</tr>";
}

if ($bd4>0) {
$id=3;
$total4=$bd4*170000;	
	echo "<tr>
<td>Bandeng Dalam Sangkar Vacuum</td>
<td>Rp.170000</td>
<td>$bd4</td>
<td>Rp.$total4</td>

</tr>";
}

if ($bd5>0) {
$id=4;
$total5=$bd5*170000;	
	echo "<tr>
<td>Bandeng Otak Otak Vacuum</td>
<td>Rp.170000</td>
<td>$bd5</td>
<td>Rp.$total5</td>

</tr>";
}

}else{

	echo "<script language=javascript>
alert('Maaf Anda tidak bisa mengakses halaman ini bila Keranjang Belanja anda masih kosong, silahkan berbelanja kembali');
document.location='index.php?page=0';
</script>";
}

$totalcart=$total1+$total2+$total3+$total4+$total5;
echo "<tr bgcolor='orange'>
	<td colspan='3'>Total Bayar</td>
	<td colspan='2'>Rp.$totalcart</td>
	</tr>";
?>

</table>

<br>
<br>
<form method="post" action="">
<table border="1" width="800">
<tr>
<td>Nama:</td>
<td><input type="text" pattern="[a-zA-Z]+" sixe="25" maxlength="25" minlength="4" required>*</td>
</tr>
<tr>
<td>No. Ktp:</td>
<td><input type="text" pattern="\d*" size="16" maxlength="16" minlength="16" required>*</td>
</tr>
<tr>
<td>Alamat Pengiriman:</td>
<td><textarea rows="3" required></textarea>*</td>
</tr>
<tr>
<td>Kab./kota:</td>
<td><input type="text" pattern="[a-zA-Z]+" required>*</td>
</tr>
<tr>
<td>Kode Pos:</td>
<td><input type="text" pattern="\d*" required>*</td>
</tr>
<tr>
<td>No. Hp:</td>
<td><input type="text" pattern="\d*" required>**</td>
</tr>
<tr>
<td>Alamat Email:</td>
<td><input type="email" required>**</td>
</tr>
<tr>
	<td colspan="2"><input type="submit" class="button2" name="submit" value="Simpan"></td>
</tr>
	</table>
</form>
</center>
<p style="float:left;margin:5px;">
* Harap Di Isi Dengan Benar
<br>
** Digunakan Untuk Pemberihatuan Berita Pengiriman Pesanan Anda
</p>

</body>
</html>