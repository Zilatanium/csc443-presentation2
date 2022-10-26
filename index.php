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
    <img src="./images/Development Chart.png" alt="" style="width:50%; height: 50%;"/>
    <img src="./images/Physical Chart.png" alt="" style="width:50%; height: 50%;"/>

  </ul>
</div>

<div class="section slide level1" id="2.3">
  <br><br><br>
  <h1>2.3: <i>Describe your experience with Lab 1 (client-side dynamic table of squares and cubes 1-30)</i></h1>
  <ul class="incremental">
    <h3 style="font-style: italic;">JavaScript Client-Side</h3>
        <li>Had to whiteboard what I wanted to do beforehand before actually programming everything</li>
        <li>Sudo code was done</li>
        <li>Thought the client-side dynamic squares and cubes and the algorithm for it was fairly easy</li>
        <li>Definitely still needed to look things up like event handlers for HTML and the creation of elements</li>
        <li>After getting the creation of elements using JavaScript figured out, I was able to use an algorithm with a time complexity of O(1)</li>
  </ul>
</div>

<div class="section slide level1" id="2.4">
  <br><br><br>
  <h1>2.4: <i>Solution to Lab 1 JavaScript</i></h1>
  <a href="http://167.99.253.247/csc443/delgadoj11/tables_html/">http://167.99.253.247/csc443/delgadoj11/tables_html/ </a>
  <ul class="incremental">
    <img src="./images/Lab Solution 1.png" alt="" style="width:50%; height: 50%;"/>
  </ul>
</div>

<div class="section slide level1" id="2.5">
  <br><br><br>
  <h1>2.5 <i>Describe your experience with Lab 2 (server-side dynamic table of squares and cubes 1-30)</i></h1>
  <ul class="incremental">
    <h3 style="font-style: italic;">PHP Server-Side</h3>
      <li>Definitely a bit harder for me, I wasn't too experienced with PHP</li>
      <li>I didn't completely understand PHP and how its server sided rendering worked</li>
      <li>Talked with the professor and my group mates about PHP</li>
      <li>Really dived into getting the solution made with my group mate to find a solution</li>
      <li>Implemented it with the benchmark as well so we would be able to see the comparison of server-side and client-side</li>

</div>
<div class="section slide level1" id="2.6">
  <br><br><br>
  <h1>2.6 <i>Solution to Lab 2 PHP</i></h1>
    <a href="http://167.99.253.247/csc443/delgadoj11/tables_php/">http://167.99.253.247/csc443/delgadoj11/tables_php/ </a>
    <ul><img src="./images/Lab Solution 2.png" alt="" style="width:50%; height: 50%;"/></ul>
</div>

<div class="section slide level1" id="2.8">
  <br><br><br>
  <h1>2.8 <i>Describing my CSC 443 ThemePark Pages</i></h1>
    <a href="http://167.99.253.247/csc443/delgadoj11/themeParkProposal/">http://167.99.253.247/csc443/delgadoj11/themeParkProposal/ </a>
    <li>Proposed ThemePark page is for PC Builds</li>
    <li>Website would be used to find out what kind of PC build you would need for your specific workflow and its budget</li>
    <li>Anyone can go to the website to see what may be good for them or just inspire some ideas in them for their own optimized build</li>
</div>
<div class="section slide level1" id="2.9">
  <br><br><br>
  <h1>2.9 <i>Display Team Member's Names and A Link</i></h1>
  <h3 style="font-style: italic;">Team Member's link</h3>
                <li> Aaron - <a href="http://167.99.253.247/csc443/hauserm3/CSC443/theme_park/themepark.php">http://167.99.253.247/csc443/hauserm3/CSC443/theme_park/themepark.php</a></li>
                <li> Felix - <a href="http://167.99.253.247/csc443/fernandezf2/CSC-443/Assignment3/">http://167.99.253.247/csc443/fernandezf2/CSC-443/Assignment3/</a></li>
                <li> Sam - <a href="http://167.99.253.247/csc443/beebes3/Assignments/3/themepark.php">http://167.99.253.247/csc443/beebes3/Assignments/3/themepark.php</a></li>
                <li> Maxwell - <a href="http://167.99.253.247/csc443/delgadoj11/themeParkProposal/">http://167.99.253.247/csc443/delgadoj11/themeParkProposal/</a></li>
</div>
<div class="section slide level1" id="2.10">
  <br><br><br>
  <h1>2.10: <i>Describe how your web presentation is hosted and how you made your presentation web-accessible</i></h1>
  <ul class="incremental">
    <li>The presentation is available with the Droplet having a server to serve the files in the given directory URL</li>
    <li>Made the HTML file PHP so everything is rendered server side first</li>
    <li>Any part of what I want to be displayed on the web can be found through the IP address and its route in any browser with internet access</li>
    <li>Use Git for DevOps, pulled from final branch and got it onto the droplet</li>
</ul>
</div>

<div class="section slide level1" id="2.11">
  <br><br><br>
  <h1>2.11 <i>Draw a diagram detailing how the web presentation is hosted</i></h1>
  <ul class="incremental">
  <a href="167.99.253.247/csc443/delgadoj11/csc443-presentation2/">167.99.253.247/csc443/delgadoj11/csc443-presentation2/</a>
  <img src="./images/Website Hosted.png" alt="" style="width:50%; height: 50%;"/>
</div>

<div class="section slide level1" id="2.12">
  <br><br><br>
  <h1>2.12: <i>What I would like to explore</i></h1>
  <ul class="incremental">
    <li>I would like to explore dynamic content further. I’m not really confident in anything that has to be displayed based on some parameters from some data in a server so I’m curious to see how that all works.
</li>
   
</ul>
</div>
</body>
</html>
