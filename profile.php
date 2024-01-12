<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client log in</title>
    <link rel="stylesheet" href="./css/stylesProfile.css">
    <script src="./js/app.js"></script>
</head>
<body>
    <header>
        <h2>Chae & Marie Solutions LLC</h2>
        <nav>
            <div class="childname"><h4></h4></div>
            <h1>Daily Log</h1>
            <div class="childname"><h4>Gracelynn</h4></div>
            <a href="./includes/logout.inc.php">Log Out</a>
            <ul>
                <li><a href="index.html">About Me</a></li>
                <li><a href="index2.html">Meet The Staff</a></li>
                <li><a href="index3.html">Our Facility</a></li>
                <li><a href="index.html">Daily Logs</a></li>
            </ul>
        </nav>
</header>

<div class="boxes">
    <section id="arrival"><h3>Drop Off</h3> <button id="time-button" onclick = "captureTime()">Drop Off Time</button></section>
    <section id="departure"><h3>Pick Up Time</h3><button id="timeout-button" onclick = "captureTimeout()">Time out</button></section>
    <section id="milk"><h3>Milk</h3><p>Lorem <br> ipsum <br> dolor <br> sit.</p></section>
    <section id="provided_food"><h3>Provided Food</h3> <p>Lorem ipsum</p> <br> <p>dolor sit.</p></section>
    <section id="naptime"><h3>Naps</h3><p> Lorem, ipsum.</p></section>
    <section id="pottylog"><h3>Potty Log</h3><p>Lorem</p> <br> <p>ipsum</p><br> <p>dolor</p><br> <p>sit.</p></section>
    <section id="supplies"><h3>Supplies</h3>
    <br><br>
        <select name="brand" id="brand">
            <option value="">--Select Your Diaper Brand--</option>
            <option value="1">Honest</option>
            <option value="1">Huggies</option>
            <option value="1">Kirkland</option>
            <option value="1">Luvs</option>
            <option value="1">Pampers</option>
        </select>
        <br><br>
        <select name="diaperSize" id="diaperSize">
            <option value="">--Select Your Size Diaper--</option>
            <option value="1">Newborn</option>
            <option value="1">1</option>
            <option value="1">2</option>
            <option value="1">3</option>
            <option value="1">4</option>
            <option value="1">5</option>
            <option value="1">6</option>
            <option value="1">7</option>
        </select>
        <br><br>
        <select name="quantity" id="quantity">
            <option value="">--Quantity--</option>
            <option value="1">16</option>
            <option value="1">18</option>
            <option value="1">20</option>
            <option value="1">23</option>
            <option value="1">27</option>
            <option value="1">32</option>
            <option value="1">35</option>
            <option value="1">70</option>
            <option value="1">84</option>
            <option value="1">88</option>
            <option value="1">96</option>
            <option value="1">104</option>
            <option value="1">108</option>
            <option value="1">112</option>
            <option value="1">120</option>
            <option value="1">124</option>
            <option value="1">132</option>
            <option value="1">136</option>
            <option value="1">140</option>
            <option value="1">142</option>
            <option value="1">144</option>
            <option value="1">150</option>
            <option value="1">156</option>
            <option value="1">164</option>
            <option value="1">168</option>
            <option value="1">174</option>
            <option value="1">192</option>
            <option value="1">198</option>
            <option value="1">222</option>
            <option value="1">228</option>
            <option value="1">294</option>
        </select>
        <div class="graph">
            <div class="outer">
                <div class="inner">
                    <div id="percent">
                        
                    </div>
                </div>
            </div>
        </div>
    
    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    version="1.1" width="160px"
                    height="160px">
                    <defs>
                    <linearGradient
                    id="GradientColor">

                    <stop offset="0%" stop-
                    color="#DA22FF" />

                    <stop offset="100%" stop-
                    color="#9733EE" />

                    </linearGradient>
                    </defs>
                    <circle cx="80" cy="80" r="70"
                    stroke-linecap="round" />
                </svg>
</div>
    <br><br><br><br><br><br><br><br>
<footer>
    <archieve class="navbar">
        <a href="1">1</a>
        <a href="2">2</a>
        <a href="3">3</a>
        <a href="4">4</a>
        <a href="5">5</a>
        <a href="6">6</a>
        <a href="7">7</a>
        <a href="more">More</a>
    </archieve>
    <h2>&copy Chae & Marie Solutions LLC 2023</h2>
</footer>
</section>
</body>
</html>