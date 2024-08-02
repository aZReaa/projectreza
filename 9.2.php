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
</body>
<?php

$nama="Budi";

if ($nama=="Andi")

{
echo "Selamat Datang Andi...";

echo "Anda Memiliki 3 pesan di inbox...";
}
else{
echo "Maaf, anda tidak memiliki hak akses";
}

?>

</html>