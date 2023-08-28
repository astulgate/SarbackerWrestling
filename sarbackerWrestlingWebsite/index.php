<!DOCTYPE html>
<html>
<head>
    <!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
    <link rel="shortcut icon" href="img/sarbackerLogo.jpg" type="image/x-icon">
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <title>Sarbacker Wrestling Academy</title>
    <meta name="description" content="Sarbacker Wrestling Academy">
<style>
body, html {
    height: 100%;
}

    .parallax {
        /* The image used 
        
        **proxima nova/lite/bold
        background-image: url('img/splashHead.jpg');*/

        /* Full height */
        height: 100%;
        width: 100%;

        /* Create the parallax scrolling effect */
        background-attachment: scroll;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .parallaxb {
        /* The image used */
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/sarbackerSplashFoot.jpg');

        /* Full height */
        height: 100%;
        width: 100%;

        /* Create the parallax scrolling effect */
        background-attachment: scroll;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    .parallaxc {
        background-image: url('img/NewWayToSave_Slice.png');
        background-attachment: fixed;
        background-position: right;
        background-repeat: no-repeat;
        height: 90%;
 
        
    }
    
    .parallaxMid {
        /* The image used */
        background-image: url('img/sarbackerWrestlinghead.jpg');

        /* Full height */
        height: 20%;
        width: 100%;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    .parallaxMidb {
        /* The image used */
        background-image: url('img/sarbackerWins.jpg');

        /* Full height */
        height: 20%;
        width: 100%;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .w3-hide-small{
        display:none!important
    }
    
    li{
        float:left;
        padding:0px;
    }
    
    .w3-modal {
    z-index: 3;
    display: none;
    padding-top: 100px;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}
    
    .w3-animate-opacity {
    animation: opac 0.8s;
}
    
    .w3-modal-content {
    margin: auto;
    background-color: #fff;
    position: relative;
    padding: 0;
    outline: 0;
    width: 600px;
}
    
    .w3-white, .w3-hover-white:hover {
    color: #000!important;
    background-color: #fff!important;
}
    
    .w3-container, .w3-panel {
    padding: 0.01em 16px;
}
    
    .w3-wide {
    letter-spacing: 4px;
}
    
    .w3-border {
    border: 5px solid rgb(252, 4, 4)!important;
    
}
    
    .w3-input {
    padding: 8px;
    display: block;
    border: none;
    border-bottom: 1px solid #ccc;
    width: 100%;
}
    
    .w3-button {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
    
    .w3-block {
    display: block;
    width: 100%;
}
    
    .w3-padding-large {
    padding: 12px 24px!important;
}
    .w3-green, .w3-hover-red:hover {
    color: #fff!important;
    background-color: rgb(49,237,154)!important;
}
    .w3-black, .w3-hover-red:hover {
    color: #fff!important;
    background-color: rgb(0,0,0)!important;
}
    .w3-margin-bottom {
    margin-bottom: 16px!important;
}

    .w3-display-middle {
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        -ms-transform:translate(-50%,-50%)
}

    .modalFont {
        font-family: sans-serif;
        font-size: 18px;
}
    
    .modalHeaderFont {
        font-family: sans-serif;
        font-size:40px;
}

    .w3-xxlarge {
        font-size:56px!important
}
    .w3-text-white,.w3-hover-text-white:hover {
        font-family: sans-serif;
        color:#fff!important
}
    .w3-wide {
        letter-spacing:4px
}

    .w3-display-container{
        position:relative
}

.w3-bar{width:100%;overflow:hidden}.w3-center .w3-bar{display:inline-block;width:auto}
.w3-bar .w3-bar-item{padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0}
.w3-bar .w3-bar-item{padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0}
.w3-bar .w3-dropdown-hover,.w3-bar .w3-dropdown-click{position:static;float:left}
.w3-bar .w3-button{white-space:normal}
.w3-bar-block .w3-bar-item{width:100%;display:block;padding:8px 16px;text-align:left;border:none;white-space:normal;float:none;outline:0}
.w3-bar-block.w3-center .w3-bar-item{text-align:center}.w3-block{display:block;width:100%}
.w3-bar:before,.w3-bar:after{content:"";display:table;clear:both}
.w3-bar-block .w3-dropdown-hover,.w3-bar-block .w3-dropdown-click{width:100%}
.w3-bar-block .w3-dropdown-hover .w3-dropdown-content,.w3-bar-block .w3-dropdown-click .w3-dropdown-content{min-width:100%}
.w3-bar-block .w3-dropdown-hover .w3-button,.w3-bar-block .w3-dropdown-click .w3-button{width:100%;text-align:left;padding:8px 16px}
.w3-top,.w3-bottom{position:fixed;width:100%;z-index:1}.w3-top{top:0}
.w3-bar{width:100%;overflow:hidden}.w3-center .w3-bar{display:inline-block;width:auto}
.w3-bar .w3-bar-item{padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0}
.w3-bar .w3-dropdown-hover,.w3-bar .w3-dropdown-click{position:static;float:left}
.w3-bar .w3-button{white-space:normal}
.w3-bar-block .w3-bar-item{width:100%;display:block;padding:8px 16px;text-align:left;border:none;white-space:normal;float:none;outline:0}
.w3-bar-block.w3-center .w3-bar-item{text-align:center}.w3-block{display:block;width:100%}
.w3-responsive{display:block;overflow-x:auto}
.w3-hide-medium{display:none!important}
.w3-hover-black:hover{color:#fff!important;background-color:#000!important}
.w3-right{float:right!important}
.w3-hide-large{display:none!important}




table { width: 100%; box-sizing: border-box; box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,0.1); font-family: 'Ubuntu'; /*border-collapse: collapse;*/ border-spacing: 0; background-color: #333333; }

th, td { border: 1px solid rgba(255,255,255,0.1); box-sizing: border-box; }

th { text-transform: uppercase; font-size:10px; font-weight:700; padding: 10px 0; color: rgba(255,255,255,0.5); background-color: #292929; letter-spacing: 1px; }

td { width: 14.285%; transition: all 0.3s; font-size: 14px; color: rgba(255,255,255,0.6); font-weight: 400; font-size: 14px; padding: 1.5% 1.5% 5%; vertical-align: initial; padding: 1.5% 0 ; height: 75px; }

.day:hover { background-color: rgba(0,0,0,0.1); cursor:pointer; }

.today { color: #FFF; background-color: rgba(0,0,0,.25) !important; }

span.number { margin-left: 10% }

span.event { height: auto; background-color: rgba(0,0,0,.3); font-family: sans-serif; font-weight:bold; display: block; margin: 5px 10%; border-radius: 2px; background-color: #09832d; }

span.event-multiday { margin: 5px -2px; border-radius: 0; }
span.event-multiday-start { margin-right: -4px;  }
span.event-multiday-finish { margin-left: -4px;  }

span.event-ghost { background-color:transparent; }

    
    
</style>
</head>
<body>
    
    <?php

    ?>

    <!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar" id="myNavbar">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="index.htm" class="w3-bar-item w3-button"> HOME</a>
      <a href="coaches.htm" class="w3-bar-item w3-button"> COACHES</a>
      <a href="programs.htm" class="w3-bar-item w3-button"> PROGRAMS</a>
      <a href="competitions.htm" class="w3-bar-item w3-button"> COMPETITION</a>
      <a href="#calendar" class="w3-bar-item w3-button"> CALENDAR</a>
      <a href="#" class="w3-bar-item w3-button w3-right w3-hover-red">Login/SignUp</a>
    </div>
  
    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="#coaches" class="w3-bar-item w3-button" onclick="toggleFunction()">COACHES</a>
      <a href="#programs" class="w3-bar-item w3-button" onclick="toggleFunction()">PROGRAMS</a>
      <a href="#calendar" class="w3-bar-item w3-button" onclick="toggleFunction()">CALENDAR</a>
      <a href="#" class="w3-bar-item w3-button">LOGIN/SIGNUP</a>
    </div>
  </div>

<div class="parallax">
    <div style="width:100%; height: 80%; background:linear-gradient(to right, rgb(26, 24, 25), rgb(26, 24, 25), rgb(172, 134, 51), rgb(246, 236, 141)); overflow:auto;">
        <img src="img/sarbackerLogo.jpg" width="200px" style="margin-left:2%">
        
        
    <div style="width:48%; height:96%; float:right;  align-items:center; margin-top:0.5%;">
            <img src="img/demonstration.jpg"  width="92%" height="465" style="float:right;padding-right:55px; padding-top:25px">
            <img src="img/cade.jpg"  width="30%" height="220" style="float:right;padding-right:55px; padding-top:20px">
            <img src="img/trainhard2.jpg"  width="35%" height="220" style="float:right;padding-right:15px; padding-top:20px">
            <img src="img/coaches2.jpg"  width="24%" height="220" style="float:right;padding-right:15px; padding-top:20px">
            
            
        </div>
        <div style="width:40%; float:right; margin-top: 50px; margin-right:8%">
            <p style="font-family: sans-serif;font-size:30px;display:block;text-align:left;line-height:2;width:90%;color:#fff"><span style="font-family: sans-serif;important;text-align:right;font-size:45px;">Sarbacker Wrestling Academy</span> is dedicated to helping your young athlete achieve success not only in the sport of wrestling but most importantly in LIFE! </p>
        </div>
    <!--<button style="background-color:black;color:white;text-align:center;font-size:16px;border-radius:50px;margin-left:25%;padding:20px;width:12%" onclick="document.getElementById('download').style.display='block'">Sign up</button>-->
    </div>
    <div style="width:100%; background-color:white;height:15%; margin-top:10px; text-align:center;">
    <h3 style="font-family: sans-serif;text-align:center;font-size:18px">Learn More</h3>
        <img src="img/learnMore.png">
    </div>
    </div>

    <div style="height:100%;background-color:white;text-align:left; overflow: auto;">
    
        <div style="width:50%; float:right; align-items:stretch;margin-top:4%">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5442.093375549224!2d-90.33466452550154!3d42.965393948295535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87fd130c24049c1f%3A0xfb91d1aba8b9141e!2sCobb%2C%20WI%2053526!5e0!3m2!1sen!2sus!4v1568237958069!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97732.31807477509!2d-89.4754538675795!3d43.083404775597664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8806536d3a2019ff%3A0x4e0cfcb5ba484198!2sMadison%2C%20WI!5e0!3m2!1sen!2sus!4v1568238257936!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            
            <!--<img src="img/locations.jpg"  width="650" height="650" style="float:right;padding-right:135px">-->
            
        </div>
        
        <div style="width:30%;float:right; margin-top:5%;">  
            
            <div style="width:25%; height:5px; background-color:rgb(246, 236, 141);"></div>
            
            <h1 style="font-family: sans-serif;text-align:left;font-size:50px">Locations </h1><!--<h1 style="font-family: sans-serif;text-align:left;font-size:50px">way to save.</h1>-->
            
            <div>   
                <p style="font-family: sans-serif;font-size:18px;display:block;text-align:left;line-height:2;width:80%">This is where we will let people know about the two Wisconsin locations. The one in Cobb and the one in Westside Madison. We will also link to our social media below!</p>
            </div>
            <div >
                <i><a href="https://www.facebook.com/SarbackerWrestlingAcademy/" target="_blank"><img src="img/Facebook_Icon.png"></a></i>
            <i><a href="https://www.instagram.com/sarbackerwrestlingacademy/" target="_blank"><img src="img/Instagram_Icon.png"></a></i>
            <i><a href="https://twitter.com/SarbackerA" target="_blank"><img src="img/Twitter_Icon.png"></a></i>
            <i><a href="https://www.youtube.com/channel/UCnsPW1fTWwqVSMgF3gt-xqw" target="_blank"><img src="img/Youtube_Icon.png"></a></i>
            </div>
        </div>
        
        
    </div>
    
<div class="parallaxMid w3-display-container">
    <div class="w3-display-middle">
        <h2 class="w3-wide w3-text-white w3-xxlarge">THEE ALPHA</h2>
    </div>
</div>
    
    <div style="height:100%;background-color:white;text-align:;font-size:36px;">
    
        <div style="width:50%; float:left; align-items:stretch;margin-top:5%">
            <img src="img/trainHard.jpg"  width="100%" height=auto>
            
        </div>
        
        <div style="width:30%;float:left;margin-left:0.5%;margin-top:4%">  
            
            <div style="width:25%; height:5px; background-color:rgb(246, 236, 141);float:right;"></div>
            
            <a href="programs.htm"><h1 style="font-family: sans-serif;important;text-align:right;font-size:50px;">Programs</h1></a> <!--<h1 style="font-family: sans-serif;important;text-align:right;font-size:50px">happen.</h1>-->
            
            <div>   
                <p style="font-family: sans-serif;font-size:18px;text-align:right;line-height:1.75;width:80%;float:right">Here we will let people know about the myraid programs we offer at Sarbacker Wrestling Acadamy, from cub club to highschool to strenth training and also show dates and times for programs offered! </p>
            </div>
        </div>
        
        
    </div>
    
<div class="parallaxMidb w3-display-container">
    <div class="w3-display-middle">
        <h2 class="w3-wide w3-text-white w3-xxlarge">Success is KEY!</h2>
    </div>
</div>
    
    <div style="height:100%;background-color:white;text-align:left;font-size:36px;">
    
        <div style="width:50%; float:right;  align-items:stretch; margin-top:5%;">
            <iframe width="90%" height="515" src="https://www.youtube.com/embed/iO15d3P3x0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <!-- <video width="100%" height=auto controls autoplay loop muted>
                <source src="vid/Lifestyle_CutV1.mp4" type="video/mp4">
            </video>*/-->
        </div>
        
        <div style="width:30%;float:right; margin-top:5%;">  
            
            <div style="width:25%; height:5px; background-color:rgb(246, 236, 141);"></div>
            
            <a href="coaches.htm"><h1 style="font-family: sans-serif;important;font-size:50px;">Coaches</h1></a> <!--<h1 style="font-family: sans-serif;important;font-size:50px;">Free</h1>-->
            
            <div>   
                <p style="font-family: sans-serif;font-size:18px;display:block;text-align:left;line-height:2;width:80%">This is where we may give a short blurb about each person on our coaching staff, their wrestling bacground, which location the coach is located and possible contact information</p>
                <p style="font-family: sans-serif;font-size:16px;display:block;text-align:left;margin-top:9%;">Questions? Our team is happy to help.</p>
                <!--<h3 style="font-family: sans-serif;font-size:16px;display:block;text-align:left;">support@thestackerapp.com</h3>-->
            </div>
        </div>
        
        
    </div>

    <div class="parallaxb">
        <div style="align-content:center;text-align:center;padding-top:15px" id="calendar">
            <div style="color:white;"><h1 style="font-family: sans-serif;important;font-size:80px;">Calendar</h1></div>
            <div style="color:white;"><h1 style="font-family: sans-serif;font-size:40px;display:block;">September - October</h1></div>
        <!--<div style="padding-top:50px;">
            <button style="background-color:rgb(49,237,154);color:black;text-align:center;font-size:16px;border-radius:50px;padding:20px;width:12%" onclick="document.getElementById('download').style.display='block'">Sign up</button></div>-->
        </div>
    
        <div >
                <table>
                        <tr>
                          <th class="day-name">Sun</th>
                          <th class="day-name">Mon</th>
                          <th class="day-name">Tue</th>
                          <th class="day-name">Wed</th>
                          <th class="day-name">Thu</th>
                          <th class="day-name">Fri</th>
                          <th class="day-name">Sat</th>
                        </tr>
                        <tr>
                          <td class="day"><span class="number">1</span><span class="event">Madison Practice (Pre Seaseon)</span><span class="event" style="background-color:#5a9ab2;">Cobb Practice (Pre Season)</span></td>
                          <td class="day"><span class="number">2</span></td>
                          <td class="day"><span class="number">3</span><span class="event event-multiday-start"></span></td>
                          <td class="day"><span class="number">4</span><span class="event event-multiday"></span></td>
                          <td class="day"><span class="number">5</span><span class="event event-multiday-finish"></span><span class="event event-multiday eventclass" style="background-color:#5a9ab2;"></span></td>
                          <td class="day"><span class="number">6</span><span class="event event-ghost"></span><span class="event event-multiday-finish eventclass" style="background-color:#5a9ab2;"></span></td>
                          <td class="day"><span class="number">7</span><span class="event" style="background-color:#da5f5f;">Competition</span></td>
                        </tr>
                        <tr>
                          <td class="day"><span class="number">8</span><span class="event"></span></td>
                          <td class="day"><span class="number">9</span></td>
                          <td class="day"><span class="number">10</span></td>
                          <td class="day"><span class="number">11</span></td>
                          <td class="day"><span class="number">12</span></td>
                          <td class="day"><span class="number">13</span></td>
                          <td class="day"><span class="number">14</span></td>
                        </tr>
                        <tr>
                          <td class="day"><span class="number">15</span><span class="event">HS/Thee Alpha 9am - 10.30a</span><span class="event" style="background-color:#5a9ab2;">HS/Thee Alpha 9am - 10.30a</span></span></td>
                          <td class="day"><span class="number">16</span><span class="event" style="background-color:#5a9ab2;">TheeAlpha/Cub Club 6pm - 7.30p</span></td>
                          <td class="day"><span class="number">17</span><span class="event">HS/Thee Alpha 7pm - 9.30p</span><span class="event"></span></td>
                          <td class="day"><span class="number">18</span><span class="event" style="background-color:#5a9ab2;">TheeAlpha/Cub Club 6pm - 7.30p</span><span class="event" style="background-color:#5a9ab2;">High School 7.30pm - 9p</span></td>
                          <td class="day"><span class="number">19</span></td>
                          <td class="day"><span class="number">20</span></td>
                          <td class="day"><span class="number">21</span></td>
                        </tr>
                        <tr>
                          <td class="day"><span class="number">22</span><span class="event">HS/Thee Alpha 9am - 10.30a</span><span class="event" style="background-color:#5a9ab2;">HS/Thee Alpha 9am - 10.30a</span></td>
                          <td class="day"><span class="number">23</span><span class="event" style="background-color:#5a9ab2;">TheeAlpha/Cub Club 6pm - 7.30p</span></td>
                          <td class="day"><span class="number">24</span><span class="event">HS/Thee Alpha 7pm - 9.30p</span><span class="event"></span></td>
                          <td class="day"><span class="number">25</span><span class="event" style="background-color:#5a9ab2;">TheeAlpha/Cub Club 6pm - 7.30p</span><span class="event" style="background-color:#5a9ab2;">High School 7.30pm - 9p</span></td>
                          <td class="day"><span class="number">26</span></td>
                          <td class="day"><span class="number">27</span><span class="event event-multiday-start" style="background-color:#da5f5f;"></td>
                            <td class="day"><span class="number">28</span><span class="event event-multiday" style="background-color:#da5f5f;"></td>
                        </tr>
                        <tr>
                          <td class="day "><span class="number">29</span><span class="event">HS/Thee Alpha 9am - 10.30a</span><span class="event" style="background-color:#5a9ab2;">HS/Thee Alpha 9am - 10.30a</span></td>
                          <td class="day"><span class="number">30</span><span class="event" style="background-color:#5a9ab2;">TheeAlpha/Cub Club 6pm - 7.30p</span></td>
                          <!--<td class="day"><span class="number">31</span></td>-->
                          <td class="day"><span class="number">1</span><span class="event">HS/Thee Alpha 7pm - 9.30p</span><span class="event"></span></td>
                          <td class="day"><span class="number">2</span><span class="event" style="background-color:#5a9ab2;">TheeAlpha/Cub Club 6pm - 7.30p</span><span class="event" style="background-color:#5a9ab2;">High School 7.30pm - 9p</span></td>
                          <td class="day"><span class="number">3</span></td>
                          <td class="day"><span class="number">4</span></td>
                          <td class="day"><span class="number">5</span><span class="event" style="background-color:#da5f5f;">Grapplar Fall Classic East Lansing, Michigan</span></td>
                        </tr>
                        <tr>
                          
                          <td class="day"><span class="number">6</span><span class="event">HS/Thee Alpha 9am - 10.30a</span><span class="event" style="background-color:#5a9ab2;">HS/Thee Alpha 9am - 10.30a</span></td>
                          <td class="day"><span class="number">7</span><span class="event" style="background-color:#5a9ab2;">TheeAlpha/Cub Club 6pm - 7.30p</span></td>
                          <td class="day"><span class="number">8<span class="event">HS/Thee Alpha 7pm - 9.30p</span><span class="event"></span></td>
                          <td class="day"><span class="number">9</span><span class="event" style="background-color:#5a9ab2;">TheeAlpha/Cub Club 6pm - 7.30p</span><span class="event" style="background-color:#5a9ab2;">High School 7.30pm - 9p</span></td>
                          <td class="day"><span class="number">10</span></td>
                          <td class="day"><span class="number">11</span></td>
                          <td class="day"><span class="number">12</span></td>
                        </tr>
                      </table>
    
        </div>
        
    </div>
    
<div style="background-color:rgb(0,0,0);color:#ffffff;opacity:0.9;padding:5px 20px;height:auto;margin:0px;text-align:center;">
    <div>   
    <p style="text-align:center; font-family: sans-serif; font-size: 14px;"> Copyright © 2017-2019  Sarbacker Wrestling. All rights reserved.</p>
    </div>
        <!--<div style="float:right;width:20%:height:20px;">-->
            <i style="float"><a href="https://www.facebook.com/SarbackerWrestlingAcademy/" target="_blank"><img src="img/Facebook_Icon.png"></a></i>
            <i><a href="https://www.instagram.com/sarbackerwrestlingacademy/" target="_blank"><img src="img/Instagram_Icon.png"></a></i>
            <i><a href="https://twitter.com/SarbackerA" target="_blank"><img src="img/Twitter_Icon.png"></a></i>
            <i><a href="https://www.youtube.com/channel/UCnsPW1fTWwqVSMgF3gt-xqw" target="_blank"><img src="img/Youtube_Icon.png"></a></i>
        
    </div>

<div id="download" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('download').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
      <h2 class="w3-wide modalHeaderFont">Sign me up</h2>
      <p class = "modalFont">Keep me updated</p>
      <i class="fa fa-android w3-large"></i> <i class="fa fa-apple w3-large"></i> <i class="fa fa-windows w3-large"></i>
      
        <form action="/test.php" method="post">
            <p><input class="w3-input w3-border" type="text" name="name" placeholder="Name"></p>
            <p><input class="w3-input w3-border" type="text" name="email" placeholder="E-mail"></p>
            <p><input class="w3-input w3-border w3-green" type="submit" value="Submit"></p>
        </form>
      <button type="button" class="w3-button w3-block w3-padding-large w3-black w3-margin-bottom" onclick="document.getElementById('download').style.display='none'">Close</button>
    </div>
  </div>
</div>


<script>
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }
    
    // Change style of navbar on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        }
    }
    
    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>

</body>
</html>
