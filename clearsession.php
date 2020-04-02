<?php
if ($_SESSION['checkout']>0) {
session_unset(); 
session_destroy(); 
session_unset(); 
session_destroy(); 
echo "<script language=javascript>
alert('Pesanan Anda Segera Kami Proses, Teimakasih Telah Berbelanja Di Toko Online Kami');
document.location='index.php';
</script>";
}else{
echo "<script language=javascript>
alert('Maaf Anda Tidak Bisa Mengakses Halaman Ini, silahkan Berbelanja Kembali');
document.location='index.php';
</script>";
}


?>