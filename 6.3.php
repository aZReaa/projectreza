<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
<?php 
    include 'header.php'; 
    ?>
    <h1>Aplikasi ubah Warna</h1>
    <label for="">Warna Latar :</label>
    <input type="color" name="" id="bg-color">
    <br>
    <label for="">Warna teks :</label>
    <input type="color" name="" id="teks-color">

    <script>
        var bgColor = document.getElementById('bg-color');
        var txtColor = document.getElementById('teks-color');

        bgColor.addEventListener("change", (event)=>{
            document.body.style.backgroundColor = bgColor.value;
        })
        txtColor.addEventListener("change", (event)=>{
            document.body.style.color = txtColor.value;
        })
    </script>
</body>
</html>
