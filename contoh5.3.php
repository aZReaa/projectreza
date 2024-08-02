<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percabangan If</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php 
    include 'header.php'; 
    ?>
 <h1>M. FAHREZA</h1>
    <script>
        var totalBelanja = prompt("Total Belanja?",0)
        if(totalBelanja > 100000){
            document.write("<h2>Selamat Anda dapat hadiah</h2>")
        }
        document.write("<p>Terimakasih sudah berbelanja di toko kami</p>")
    </script>
</body>
</html>
