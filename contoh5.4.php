<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percabangan if else</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php 
    include 'header.php'; 
    ?>
 <h1>M. FAHREZA</h1>
    <script>
        var password = prompt("Password:")
        if(password=="kopi"){
            document.write("<h2>Selamat datang bos!</h2>")
        } else {
            document.write("<p>Password salah, coba lagi!</p>")
        }
    </script>
</body>
</html>
