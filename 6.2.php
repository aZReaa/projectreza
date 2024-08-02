<DOCTYPE html> 
    <html lang="en">
    
    <head>
    
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0 <meta http-equiv="X-UA-Compatible" content="le=edge">
    
    <title>DOM API Javascript</title>
    
    </head>
    
    <body>
        <!DOCTYPE html>
<head>
    <title>Home</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<?php 
    include 'header.php'; 
    ?>
</body>
</html>
    
    <h2 id="judul2">Delete Saya!</h2>
    
    <script> 
    // memilih elemen berdasarkan ID var h2 = document.getElementById(judul2');
    var h2 = document.getElementById("judul2");
    // menghapus elemen yang sudah dipilih h2.remove();
    h2.remove();

    console.log("Elemen sudah dihapus"); 
    console.log(h2);
    
    </script>
    
    </body>
</html>