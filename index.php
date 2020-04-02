<?php
session_start();
# Di buat oleh : M. Iqbal rafsanjani | A11.2015.09130

$cart=$_SESSION['bandeng1']+$_SESSION['bandeng2']+$_SESSION['bandeng3']+$_SESSION['bandeng4']+$_SESSION['bandeng5'];


if ($cart==0) {
	$_SESSION['bandeng1']=0;
	$_SESSION['bandeng2']=0;
	$_SESSION['bandeng3']=0;
	$_SESSION['bandeng4']=0;
	$_SESSION['bandeng5']=0;
}

?>
<html>
<head>
<title>Bandeng Presto Joana</title>
</head>
<style>
.button1 {
    background-color: #25b5d4;
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;

    
}

	.button {
    background-color: #25b5d4;
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
}

	.button2 {
    background-color: #25b5d4;
    border: none;
    color: white;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
}

	.button3 {
    background-color: orange;
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
}

.button:hover {
background-color: #2485b8;
}

.button1:hover {
background-color: #2485b8;
}

.button2:hover {
background-color: #2485b8;
}

input[type=number]{
padding: 5px 10px;
margin: 10px;
}
.notif {
    background-color: lightgrey;
    width: 50px;
    border: 5px solid green;
    padding: 5px;
    margin: 5px;
}
</style>
<body bgcolor="#eaeaea" link="#25b5d4" vlink="#25b5d4" alink="#25b5d4">
<center>
<table border="0" height="700" width="900" bgcolor="#ffffff">

<tr height=50>
<td>
<img src="headernew.png" width="250" height="250" style="float:left">
</td>
<td colspan=2 valign="center" style="float:right; margin:10px; margin-top:100px;">
<center><h1>
<a href='index.php'class="button1">Home</a> &nbsp
<a href='index.php?page=0'class="button1">Produk</a>  &nbsp
<a href='index.php?page=1'class="button1">Keranjang <?php echo $cart ?></a> &nbsp
<a href='index.php?page=2'class="button1">Bantuan</a>
</center></h1>
</td>
</tr>


<tr>
<td colspan="3"><?php include "isi.php";?></td>
</tr>

</table>
</center>

</body>
</html>
