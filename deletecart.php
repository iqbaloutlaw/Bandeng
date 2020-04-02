<?php

$get_id=$_GET['id'];
switch($get_id){
    case "0";
	$_SESSION['bandeng1']=0;

			echo "<script language=javascript>
alert('Data berhasil dihapus');
document.location='index.php?page=1';
</script>";

	break;

	case "1";
	$_SESSION['bandeng2']=0;

			echo "<script language=javascript>
alert('Data berhasil dihapus');
document.location='index.php?page=1';
</script>";
	break;

	case "2";
	$_SESSION['bandeng3']=0;

			echo "<script language=javascript>
alert('Data berhasil dihapus');
document.location='index.php?page=1';
</script>";
	break;

	case "3";
	$_SESSION['bandeng4']=0;

			echo "<script language=javascript>
alert('Data berhasil dihapus');
document.location='index.php?page=1';
</script>";
	break;

	case "4";
	$_SESSION['bandeng5']=0;

			echo "<script language=javascript>
alert('Data berhasil dihapus');
document.location='index.php?page=1';
</script>";
	break;

}

?>