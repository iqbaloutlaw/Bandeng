<?php
if(isset($_POST['submit'])){

$_SESSION['bandeng4']=$_SESSION['bandeng4']+$_POST['jml'];
$jml=$_POST['jml'];


	echo "<script language=javascript>
alert('$jml Bandeng Dalam Sangkar Vacuum telah di tambahkan ke Keranjang');
document.location='index.php?page=6';
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
<img src="bandeng4.jpg" alt="" width="400" height="300">
<div class="desc">
<h2>
Bandeng Dalam Sangkar Vacuum
</h2>

<pre>
Ikan Bandeng segar duri lunak, diolah dengan bahan baku yang dikemas higienis, 
dicampur dengan bumbu-bumbu alami istimewa yang khas sehingga tekstur daging kenyal, 
empuk dan rasanya membuatnya menjadi makanan gurih dan lezat. 
Ditambah lagi dengan adanya balutan adonan goreng telur yang begitu renyah 
menjadikan bentuknya semakin unik dan menarik, mirip seperti sangkar. 
Tersedia juga sambalnya rasanya lezat dan agak manis.

<font color="#25b5d4">Rasa:</font>
Empuk, gurih, renyah

<font color="#25b5d4">Bahan:</font>
Bandeng, Telur, Bawang Putih, Kunyit, Jahe, Garam

<font color="#25b5d4">Tahan:</font>
4 hari

<font color="#25b5d4">Kemasan:</font>
2 ekor /kemasan

<font color="#25b5d4">Harga:</font>
<h1><font color="#25b5d4">Rp.170.000</font></h1>
</pre>
<?php
$jmlbeli=$_SESSION['bandeng4'];
$total=$jmlbeli*170000;
if ($jmlbeli>0) {
	echo "<font color='orange'>
	Anda Memiliki $jmlbeli Bandeng Dalam Sangkar Vacuum <br>
	dengan total harga Rp$total , di Keranjang Belanja Anda</font><br><br>";
}
?>
<font color="#25b5d4">Jumlah beli:</font>
<form method="post" action="index.php?page=6">
<input type="number" min="1" value="0" name="jml">
<input type="submit" class="button" name="submit" value="Masukan Keranjang">
</form>
<a href='index.php?page=0'><button class='button3'>Lihat Produk Lainnya</button></a>
</div>

</body>
</html>