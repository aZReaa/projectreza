<!DOCTYPE html>

<head>
<link rel="stylesheet" href="style1.css">
<title>Belajar cara memasukkan kode PHP</title>

</head>

<body>
<?php 
    include 'header.php'; 
    ?>
<h1>M. FAHREZA</h1>

<?php

// pembuatan array

$nama = array("Mizan","Hasana", "Ferella", "Zainal", "Indra");

// pengaksesan array

echo $nama[1]; //Hasana

echo "<br />";

echo $nama[2]; //Ferella 
echo "<br />";

echo $nama[3];//Zainal

?>