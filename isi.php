<?php
$get_page=$_GET['page'];
switch($get_page){
    case "0";
	include "produk.php";
	break;

	case "1";
	include "cart.php";
	break;

	case "2";
	include "help.php";
	break;

	case "3";
	include "produkbandeng1.php";
	break;

	case "4";
	include "produkbandeng2.php";
	break;

	case "5";
	include "produkbandeng3.php";
	break;

	case "6";
	include "produkbandeng4.php";
	break;

	case "7";
	include "produkbandeng5.php";
	break;

	case "8";
	include "deletecart.php";
	break;

	case "9";
	include "editcart.php";
	break;

	case "10";
	include "checkout.php";
	break;

	case "11";
	include "clearsession.php";
	break;	

	default;
	include "home.php";
	break;
	
	
	
	
	
	}
?>