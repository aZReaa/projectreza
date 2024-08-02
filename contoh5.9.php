<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style1.css">
    <title>Perulangan while</title>
</head>
<body>
<?php 
    include 'header.php'; 
    ?>
 <h1>M. FAHREZA</h1>
    <script>
        var ulangi = confirm("Apakah anda mau mengulang?")
        var counter = 0
        while(ulangi){
            counter++
            ulangi = confirm("Apakah anda mau mengulang?")
        }
        document.write("Perulangan sudah dilakukan sebanyak "+counter+" kali")
    </script>
</body>
</html>
