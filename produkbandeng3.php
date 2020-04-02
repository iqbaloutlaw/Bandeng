<?php
if(isset($_POST['submit'])){

$_SESSION['bandeng3']=$_SESSION['bandeng3']+$_POST['jml'];
$jml=$_POST['jml'];


	echo "<script language=javascript>
alert('$jml Bandeng Teriyaki telah di tambahkan ke Keranjang');
document.location='index.php?page=5';
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
<img src="bandeng3.jpg" alt="" width="400" height="300">
<div class="desc">
<h2>
Bandeng Teriyaki
</h2>

<pre>
Ikan Bandeng segar Duri Lunak biasa, yang empuk dan gurih, lalu dibakar dengan saus Teriyaki. 
Saus dibuat dengan perpaduan bumbu-bumbu alami seperti bawang putih, bawang bombay. 
Ikan bandeng tersebut dioles saus sebelum dibakar, resapan saus bumbu teriyaki 
tersebut akan membuat daging bandeng menjadi terasa manis, enak dan lezat.

<font color="#25b5d4">Rasa:</font>
Empuk, gurih, manis

<font color="#25b5d4">Bahan:</font>
Bandeng, Bawang Putih, Bawang Bombay, Saus Teriyaki

<font color="#25b5d4">Tahan:</font>
1 hari di luar kulkas (2 hari dalam kulkas)

<font color="#25b5d4">Kemasan:</font>
1 ekor /kemasan

<font color="#25b5d4">Harga:</font>
<h1><font color="#25b5d4">Rp.50.000</font></h1>
</pre>
<?php
$jmlbeli=$_SESSION['bandeng3'];
$total=$jmlbeli*50000;
if ($jmlbeli>0) {
	echo "<font color='orange'>
	Anda Memiliki $jmlbeli Bandeng Teriyaki <br>
	dengan total harga Rp$total , di Keranjang Belanja Anda</font><br><br>";
}
?>
<font color="#25b5d4">Jumlah beli:</font>
<form method="post" action="index.php?page=5">
<input type="number" min="1" value="0" name="jml">
<input type="submit" class="button" name="submit" value="Masukan Keranjang">
</form>
<a href='index.php?page=0'><button class='button3'>Lihat Produk Lainnya</button></a>
</div>

</body>
</html>