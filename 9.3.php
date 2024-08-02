<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<?php 
    include 'header.php'; 
    ?>

</body>
<?php
$a=3;

switch ($a){

case 0:

echo "Angka Nol";

case 1:

break;

echo "Angka Satu";

break;

case 2:

break;

echo "Angka Dua";

case 3:
echo "Angka Tiga";

break;

case 4:

echo "Angka Empat";

break;

case 5:

echo "Angka Lima";

break;

default:

echo "Angka diluar jangkauan";

}


?>
</html>