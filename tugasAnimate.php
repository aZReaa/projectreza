<!DOCTYPE html>
<html>
<head>
    <title>DOM Animation</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        #container {
            width: 400px;
            height: 400px;
            position: relative;
            background: yellow;
        }

        #animate { 
            width: 50px;
            height: 50px;
            position: absolute;
            background-color: red;
            left: 175px;
        }
    </style>
</head>
<body>
<?php 
    include 'header.php'; 
    ?>
    <p>
        <button onclick="myMove()">Click Me</button>
    </p>
    <div id="container">
        <img src="icon.jpg" id="animate" alt="">
    </div>
    <script>
        function myMove(){
            var elem = document.getElementById("animate");
            var pos = 0;
            var id = setInterval(frame, 5);
            function frame() {

                if (pos == 350) {
                    clearInterval(id);
                } else {
                    pos++;
                    elem.style.top = pos + 'px';
                }
            }
        }
    </script>
</body>
</html>