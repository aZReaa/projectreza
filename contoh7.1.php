<DOCTYPE html>

    <html>
<HEAD>
    <Link rel="stylesheet" href="style1.css">
</HEAD>    
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
    }
    </style>
    
    <body>
        
    <?php 
    include 'header.php'; 
    ?>
 <h1>M. FAHREZA</h1>
    
    <button onclick="myMove()">Click Me</button>
    
    </p>
    
    <div id="container">
    
    <div id="animate"></div>
    
    </div>
    
    <script>
    
    function myMove() {
    
    var elem = document.getElementById("animate");
    
    var pos = 0;
    
    var id = setInterval(frame, 5);
    
    function frame() {
    
    if (pos == 350) {
    
    clearInterval(id);
    
    } else {
    
    pos++
    
    elem.style.top = pos + 'px';
    elem.style.left = pos + 'px';

}
    }   
}

</script>

</body>

</html>    