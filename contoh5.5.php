<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percabangan if else if</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php 
    include 'header.php'; 
    ?>
 <h1>M. FAHREZA</h1>
    <script>
        var nilai = prompt("Inputkan nilai akhir:")
        var grade = ""
        if(nilai>=90) grade = "A"
        else if(nilai>=80) grade="B+"
        else if(nilai>=70) grade="B"
        else if(nilai>=60) grade="C+"
        else if(nilai>=50) grade="C"
        else if(nilai>=40) grade="D"
        else if(nilai>=30) grade="E"
        else grade="F"
        document.write(`<p>Grade anda :${grade}</p>`)
    </script>
</body>
</html>
