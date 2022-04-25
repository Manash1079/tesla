<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>

<body>
    <div class="header" id="header">
        <nav>
            <img src="/web-assignment/images/logo.png" class="logo">
            <ul>
                <li><a href="javascript:void(0)" id="models">Model S </a></li>
                <li><a href="javascript:void(0)" id="model3">Model 3 </a></li>
                <li><a href="javascript:void(0)" id="modelx">Model X </a></li>
                <li><a href="javascript:void(0)" id="modely">Model Y </a></li>
            </ul>
            <a href="javascript:void(0)" class="btn"> Reserve Now</a>
        </nav>

        <div class="info" id="modelinfo">
            <div id="speed">
                <h2>1.9 s</h2>
                <p>60 mph</p>
            </div>
            <div id="top">
                <h2>200mph</h2>
                <p>Top Speed</p>
            </div>
            <div id="range">
                <h2>396 min</h2>
                <p>Range</p>
            </div>
            <div class="line">
            </div>
            <div>
                <h2 id="model">Model S</h2>
            </div>
        </div>
    </div>

    <script>
        var header = document.getElementById("header");
        var ms = document.getElementById("models");
        var m3 = document.getElementById("model3");
        var mx = document.getElementById("modelx");
        var my = document.getElementById("modely");
        var model = document.getElementById("model");
        // var modelinfo = document.getElementById("modelinfo");
        var speed = document.getElementById("speed");
        var top = document.getElementById("top");
        var range = document.getElementById("range");

        ms.onclick = function() {
            header.style.backgroundImage = "url(/web-assignment/images/image-1.png)";
            model.innerHTML = "Model S";
            speed.innerHTML = "<h2>1.6</h2><p>60 mph</h2>";
            top.innerHTML = "<h2>200mph</h2><p>Top Speed</p>";
            range.innerHTML = "<h2>396 min</h2><p>Range</p>";
        }

        m3.onclick = function() {
            header.style.backgroundImage = "url(/web-assignment/images/image-2.png)";
            model.innerHTML = "Model 3";
            speed.innerHTML = "<h2>2.0</h2><p>60 mph</h2>";
            top.innerHTML = "<h2>180mph</h2><p>Top Speed</p>";
            range.innerHTML = "<h2>350 min</h2><p>Range</p>";
        }

        mx.onclick = function() {
            header.style.backgroundImage = "url(/web-assignment/images/image-3.png)";
            model.innerHTML = "Model X";
            speed.innerHTML = "<h2>1.7</h2><p>60 mph</h2>";
            top.innerHTML = "<h2>210mph</h2><p>Top Speed</p>";
            range.innerHTML = "<h2>406 min</h2><p>Range</p>";
        }

        my.onclick = function() {
            header.style.backgroundImage = "url(/web-assignment/images/image-4.png)";
            model.innerHTML = "Model Y";
            speed.innerHTML = "<h2>1.4</h2><p>60 mph</h2>";
            top.innerHTML = "<h2>230mph</h2><p>Top Speed</p>";
            range.innerHTML = "<h2>410 min</h2><p>Range</p>";
        }
    </script>
</body>

</html>