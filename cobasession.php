<?php
session_start();

$_SESSION["bandeng1"] = '0';
$_SESSION["bandeng2"] = '0';
$_SESSION["bandeng3"] = '0';
$_SESSION["bandeng4"] = '0';
$_SESSION["bandeng5"] = '0';

?>

<html>
<head><title></title>
</head>
<body>

<input type="number" name='bandeng1'><input type="button" name="submit" value="Add to Cart">

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["bandeng1"] . ".<br>";
?>


</body>
</html>