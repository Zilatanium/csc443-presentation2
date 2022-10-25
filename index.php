<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta name="author" content="Joseph Dlgado" />
  <!-- HTML slidy was developed by Dave Raggett  -->
  <title>SCSU CSC 443: Fall 2022</title>

  <!--  external Cascading Style Sheets for styling all slides -->
  <link rel="stylesheet" type="text/css" media="screen, projection, print" href="scripts/slidy.css" /> <!-- http://www.w3.org/Talks/Tools/Slidy2/styles/slidy.css -->
  <link rel="stylesheet" type="text/css" href="scripts/www-presentation.css"/>
  <link rel="stylesheet" type="text/css" href="scripts/image-transition.css"/>

  <!--  external JavaScript functions for slideshow behavior (slidy) and simplified JavaScript library (jQuery)
        for a variety of uses ("write less. do more."; see jquery.com )-->
  <script src="scripts/slidy.js" charset="utf-8" type="text/javascript"></script> <!-- http://www.w3.org/Talks/Tools/Slidy2/scripts/slidy.js-->
  <script src="scripts/jquery-3.3.1.min.js" charset="utf-8" type="text/javascript"></script> <!-- https://code.jquery.com/jquery-3.3.1.min.js -->
  <script src="scripts/www-presentation.js" charset="utf-8" type="text/javascript"></script>

</head>
<body>
<div class="www-presentation-header"><img src="./images/scsu-logo-compact-blue.png" style="height: 70px;"/></ul><div class="www-presentation-header-text"></div></div>
<div class="slide titlepage">
  <h1 class="title"><br><font color = "#000080"></font></h1>
  <br><br><img class="right-side-image" src="./images/Joe.jpg"/>

  <p class="date">CSC 443: Presentation 2</p>
  <p class="author"><a href="mailto:Delgadoj11@southernct.edu?subject=CSC443">Joseph Delgado</a>
  Computer Science Department Senior <br><font color = "#8080FF" style="text-shadow:-1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Southern Connecticut State University</font></p>
  <button id="view-fullscreen" onclick="goFullscreen">*</button>
  <!-- https://developer.mozilla.org/en-US/docs/Web/API/Fullscreen_API/Guide -->
  <script type="text/javascript">
    (function goFullscreen() {
        var viewFullScreen = document.getElementById("view-fullscreen");
        if (viewFullScreen) {
            viewFullScreen.addEventListener("click", function () {
                var docElm = document.documentElement;
                if (docElm.requestFullscreen) {
                    docElm.requestFullscreen();
                }
                else if (docElm.msRequestFullscreen) {
                    docElm = document.body; //overwrite the element (for IE)
                    docElm.msRequestFullscreen();
                }
                else if (docElm.mozRequestFullScreen) {
                    docElm.mozRequestFullScreen();
                }
                else if (docElm.webkitRequestFullScreen) {
                    docElm.webkitRequestFullScreen();
                }
            }, false);
        }

        var cancelFullScreen = document.getElementById("cancel-fullscreen");
        if (cancelFullScreen) {
            cancelFullScreen.addEventListener("click", function () {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
                else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
                else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                }
                else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }, false);
        }

        var fullscreenState = document.getElementById("fullscreen-state");
        if (fullscreenState) {
            document.addEventListener("fullscreenchange", function () {
                fullscreenState.innerHTML = (document.fullscreenElement)? "" : "not ";
            }, false);

            document.addEventListener("msfullscreenchange", function () {
                fullscreenState.innerHTML = (document.msFullscreenElement)? "" : "not ";
            }, false);

            document.addEventListener("mozfullscreenchange", function () {
                fullscreenState.innerHTML = (document.mozFullScreen)? "" : "not ";
            }, false);

            document.addEventListener("webkitfullscreenchange", function () {
                fullscreenState.innerHTML = (document.webkitIsFullScreen)? "" : "not ";
            }, false);
        }
    })();
    </script>
</div>

<div class="section slide level1" id="2.1">
  <br><br><br>
  <h1>2.1: My <i>Development Environment</i></h1>
  <ul class="incremental">
    <h3 style="font-style: italic;">Physical Hardware</h3>
      <li>ASUS ROG Zephyrus 15 2022 GA503</li>
      <li>CPU - AND Ryzen 9 6900HS</li>
      <li>GPU - NVIDIA GeForce RTX 3060</li>
      <li>Memory - 16GB DDR5-4800</li>
      <li>Storage - 512GB NVMe M.2 SSD</li>
      <li>Screen - 165HZ WQHD Pantone Display</li>
    <h3 style="font-style: italic;">Logical Software</h3>
      <li>Operating System (OS) - Windows 11</li>
      <li>Integrated Development Environment (IDE) - Visual Studio Code</li>
      <li>DevOps - Git / GitHub</li>
      <li>FullStack - PHP</li>
      <li>Server - Droplet Apache</li>
    </ul>
</div>

<div class="section slide level1" id="2.2">
  <br><br><br>
  <h1>2.2: <i>Diagram Development Environment (Physical / Logical)</i></h1>
  <ul class="incremental">
    <img src="./images/Diagram 2.2.png" alt="" style="width:50%; height: 50%;"/>
  </ul>
</div>

<div class="section slide level1" id="2.3">
  <br><br><br>
  <h1>2.3: <i>Describe your experience with Lab 1 (client-side dynamic table of squares and cubes 1-30)</i></h1>
  <ul class="incremental">
    <h3 style="font-style: italic;">JavaScript Client-Side</h3>
        <li>Had to whiteboard what I wanted to do beforehand before actually programming everything</li>
        <li>Sudo code was done</li>
        <li>Thought the client-side dynamic squares and cubes and the algorithim for it was fairly easy</li>
        <li>Definitely still needed to look things up like event handlers for HTML and the creation of elements</li>
        <li>After getting the creation of elements using JavaScript figured out, I was able to use an algorithim with a time complexity of O(1)</li>
  </ul>
</div>

<div class="section slide level1" id="2.4">
  <br><br><br>
  <h1>2.4: <i>Solution to Lab 1</i></h1>
  <ul class="incremental">
    <img src="./images/Diagram 2.4.png" alt="" style="width:50%; height: 50%;"/>
  </ul>
</div>

<div class="section slide level1" id="2.5">
  <br><br><br>
  <h1>2.5 <i>How this Site is Hosted</i></h1>
  <ul class="incremental">
    <h3 style="font-style: italic;">This site is hosted locally</h3>
      <p style="font-size: 3rem; line-height: 100%;">Essentially, this site is hosted on my computer's local server. This means when the address localhost:5500 
        or 127.0.0.1:5500 (the left of the colon being the IP Address while the right being the port it's being hosted)
        on. Locally hosted can't be accessed via the internet since it's only running within my own computer yet a diagram
        where it's being accessed through the web can be shown.
      </p>

</div>
<div class="section slide level1" id="2.6">
  <br><br><br>
  <h1>2.6 <i>Site Host Diagram</i></h1>
    <ul><img src="./images/Diagram 2.6.png" alt="" style="width:50%; height: 50%;"/></ul>

  <a class="email" href="mailto:Delgadoj11@southernct.edu">
  <ul style=
    "text-align: right;
    font-family: Verdana,sans-serif;
    text-shadow:-1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
    Delgadoj11@southernct.edu</a><br>
    <img class="right-side-image" src="../images/scsu-logo-compact-blue.png"></ul>
  </ul>
</div>

</body>
</html>
