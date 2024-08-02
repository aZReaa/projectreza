<!DOCTYPE html>
<html>
<head>
    <title>Tugas</title>
    <link rel="stylesheet" href="style2.css">       
    <link rel="shortcut icon" href="icon.PNG" type="image/x-icon">
    <style>
        .kotak1 {
            width: 100px;
            height: 100px;
            background-color: rgb(229, 233, 34);
            text-align: center;
        }
        #kotak2 {
            width: 100px;
            height: 100px;
            background-color: rgb(49, 189, 37);
            text-align: center;
        }
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
            padding-top: 50px; /* Space for the navbar */
        }
        .tabelAudio {
            margin-left: auto;
            margin-right: auto;
        }
        .videoKotak {
            margin-left: auto;
            margin-right: auto;
        }
        .body{
            margin: 0;
            padding:0;


        }
    </style>
</head>
<body>
    <?php 
    include 'header.php'; 
    ?>
    <div class="tabelAudio">
        <h1>Belajar Tab Tabel</h1>
        <table border="1">
            <tr>
                <td>baris 1, kolom 1</td>
                <td>baris 1, kolom 2</td>
                <td>baris 1, kolom 3</td>
                <td rowspan="5">baris 1, kolom 4</td>
            </tr>
            <tr>
                <td>baris 2, kolom 1</td>
                <td>baris 2, kolom 2</td>
                <td>baris 2, kolom 3</td>
            </tr>
            <tr>
                <td>baris 3, kolom 1</td>
                <td>baris 3, kolom 2</td>
                <td>baris 3, kolom 3</td>
            </tr>
            <tr>
                <td>baris 4, kolom 1</td>
                <td>baris 4, kolom 2</td>
                <td>baris 4, kolom 3</td>
            </tr>
            <tr>
                <td>baris 5, kolom 1</td>
                <td>baris 5, kolom 2</td>
                <td>baris 5, kolom 3</td>
            </tr>
        </table>
        <h1>Audio</h1>
        <audio src="audio.mp3" controls>Ini Lagu</audio>
    </div>
    <div class="videoKotak">
        <h1>Video</h1>
        <video src="video.mp4" controls height="200px" width="150px">Ini Video</video>
        <h1>Kotak</h1>
        <div class="kotak1">
            <p>Kotak 1</p>
        </div>
        <div id="kotak2">
            <p>Kotak 2</p>
        </div>
    </div>
</body>
</html>
