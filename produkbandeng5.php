<?php
if(isset($_POST['submit'])){

$_SESSION['bandeng5']=$_SESSION['bandeng5']+$_POST['jml'];
$jml=$_POST['jml'];


	echo "<script language=javascript>
alert('$jml Bandeng Otak Otak Vacuum telah di tambahkan ke Keranjang');
document.location='index.php?page=7';
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
<img src="bandeng5.jpg" alt="" width="400" height="300">
<div class="desc">
<h2>
Bandeng Otak Otak Vacuum
</h2>

<pre>
Cincangan daging bandeng ini memiliki rasa yang sangat unik 
selain empuknya dan gurihnya, karena di bagian dalamnya terdapat 
bumbu-bumbu khas nusantara yang pasti akan semakin menambah kelezatan rasanya. 
Tersedia juga sambalnya rasanya lezat dan manis.

<font color="#25b5d4">Rasa:</font>
Empuk, gurih, manis, pedas

<font color="#25b5d4">Bahan:</font>
Bandeng, Telur, Bawang Putih, Kunyit, Jahe, Garam

<font color="#25b5d4">Tahan:</font>
2 hari (5 hari di dalam kulkas)

<font color="#25b5d4">Kemasan:</font>
2 ekor /kemasan

<font color="#25b5d4">Harga:</font>
<h1><font color="#25b5d4">Rp.170.000</font></h1>
</pre>
<?php
$jmlbeli=$_SESSION['bandeng5'];
$total=$jmlbeli*170000;
if ($jmlbeli>0) {
	echo "<font color='orange'>
	Anda Memiliki $jmlbeli Bandeng Otak Otak Vacuum <br>
	dengan total harga Rp$total , di Keranjang Belanja Anda</font><br><br>";
}
?>
<font color="#25b5d4">Jumlah beli:</font>
<form method="post" action="index.php?page=7">
<input type="number" min="1" value="0" name="jml">
<input type="submit" class="button" name="submit" value="Masukan Keranjang">
</form>
<a href='index.php?page=0'><button class='button3'>Lihat Produk Lainnya</button></a>
</div>

</body>
</html>