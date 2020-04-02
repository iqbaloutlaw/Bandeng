<?php
if(isset($_POST['submit'])){

$_SESSION['bandeng2']=$_SESSION['bandeng2']+$_POST['jml'];
$jml=$_POST['jml'];


	echo "<script language=javascript>
alert('$jml Bandeng Duri Lunak Vacuum Basah (Tanggung) telah di tambahkan ke Keranjang');
document.location='index.php?page=4';
</script>";


}
?>
<html>
<head><title></title>
</head>
<style>
	div.desc {
	padding: 15px;
	text-align: left;
}

</style>
<body>
<img src="bandeng2.jpg" alt="" width="400" height="300">
<div class="desc">
<h2>
Bandeng Duri Lunak Vacuum Basah (Tanggung)
</h2>

<pre>
Ikan Bandeng segar Duri Lunak, diolah dengan bahan baku yang di kemas higienis, 
dicampur dengan bumbu-bumbu alami istimewa yang khas sehingga tekstur daging kenyal, 
empuk dan rasanya membuatnya menjadi makanan yang gurih dan lezat. 
Tersedia juga sambal dengan rasa lezat dan agak manis.

<font color="#25b5d4">Rasa:</font>
Empuk, gurih

<font color="#25b5d4">Bahan:</font>
Bandeng, Bawang Putih, Kunyit, Jahe, garam

<font color="#25b5d4">Tahan:</font>
4 hari di luar kulkas (7 hari dalam kulkas)

<font color="#25b5d4">Kemasan:</font>
2 ekor /kemasan

<font color="#25b5d4">Harga:</font>
<h1><font color="#25b5d4">Rp.110.000</font></h1>
</pre>
<?php
$jmlbeli=$_SESSION['bandeng2'];
$total=$jmlbeli*110000;
if ($jmlbeli>0) {
	echo "<font color='orange'>
	Anda Memiliki $jmlbeli Bandeng Duri Lunak Vacuum Basah (Tanggung) <br>
	dengan total harga Rp$total , di Keranjang Belanja Anda</font><br><br>";
}
?>
<font color="#25b5d4">Jumlah beli:</font>
<form method="post" action="index.php?page=4">
<input type="number" min="1" value="0" name="jml">
<input type="submit" class="button" name="submit" value="Masukan Keranjang">
</form>
<a href='index.php?page=0'><button class='button3'>Lihat Produk Lainnya</button></a>
</div>

</body>
</html>