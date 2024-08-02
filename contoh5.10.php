<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style1.css">
    <title>Perulangan do while</title>
</head>
<body>
    <?php 
    include 'header.php'; 
    ?>
 <h1>M. FAHREZA</h1>
    <script>
        var ulangi = confirm("Apakah anda mau mengulang?")
        var counter = 0
        do{
            counter++
            ulangi = confirm("Apakah anda mau mengulang?")
        } while(ulangi)
        document.write("Perulangan sudah dilakukan sebanyak "+counter+" kali")
    </script>
</body>
</html
