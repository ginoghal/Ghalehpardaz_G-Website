<?php
require_once 'load.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gino portfolio</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
    <!-- <link rel="shortcut icon" type="image/png" href="public/images/Glogofavicon.png"> -->
    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="public/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Outline&display=swap" rel="stylesheet">

</head>
<body>

<?php include 'templates/header.php'?>
   
<div id="title">
        <div class="animated animated FadeInUp fadeInUp">
            <h2>Gino Ghalehpardaz</h2>
        </div>
          <h3>I am a Front-end Developer and Motion Designer</h3>
          <div class="profileImage"><img src="public/images/ginogprofilepic.png" alt="ginoProfilePic"></div>
          <button class="connectButton"><a href="#contact"> Connect With Me!</a></button>
        
      </div>


    <div id="aboutMe">
        <h1>WHO I AM</h1>
        <h2>Born in London, On. I am currently enrolled in the Interactive Media Design program at Fanshawe College.</h2>
        <h3>Prior to going to Fanshawe, I was a marketing coordinator.</h3>
        <h4>I am striving to improve at my craft everyday. I returned to school and rebuilt myself so that I could provide my pug with the best life possible.</h4>
        
        <div class="pug"><img src="public/images/Pugsley.png" alt="pug"></div>
</div>


<!-- <div id="portfolioWaves"> -->


<div id="portfolio">
        <h1>My Portfolio of Work</h1>
        <h2>Motion Design Videos, Web Development and Design and Graphic Design Work</h2>

        <div class="nintendoSwitch">
        <h3>Switch Commercial</h3>
        <iframe src="https://www.youtube.com/embed/HzqdvgxGsmk" frameborder="0" allowfullscreen></iframe>
        <h4>This was a fun project for me as I wanted to see how many different locations I could come up with.</h4>
        </div>

        <div class="compilationVideo">
        <h3>Cinema 4D Compilation Video</h3>
        <iframe src="https://www.youtube.com/embed/iwJ3GUDbla8" frameborder="0" allowfullscreen></iframe>
        <h4>Description</h4>
        </div>

        <div class="beeProject">
        <h3>Bee Chance - Bee Project</h3>
        <iframe src="https://www.youtube.com/embed/yt8mkCuwbRg" frameborder="0" allowfullscreen></iframe>
        <h4>Description</h4>
        </div>

        <div class="sportsnet">
        <h3>SportsNet 4D: Cowboys vs Bears Intro </h3>
        <iframe src="https://www.youtube.com/embed/ldewKXt8X2Q" frameborder="0" allowfullscreen></iframe>
        <h4>Description</h4>
        </div>

        <div class="mclaren">
        <h3>Mclaren Commercial 4D</h3>
        <iframe src="https://www.youtube.com/embed/v5cUnaQP-lY" frameborder="0"  allowfullscreen></iframe>
        <h4>Description</h4>
        </div>

        <div class="musicMixer">
        <h3>Music Mixer</h3>
        <a href="https://github.com/ginoghal/Ghalehpardaz_G_MusicMixer"><img src="public/images/MusicMixer.png" alt="musicmixer"></a>
        <h4>This was a group project with me taking the lead on the Backend - in this case the Javascript functionality.</h4>
        </div>

        <div class="anglers">
        <h3>Anglers Website</h3>
        <a href="https://github.com/ginoghal/Ghalehpardaz_G-Helder_J-Anglers.org"><img src="public/images/Anglers.png" alt="anglers"></a>
        <h4>This Anglers project was a group project where we both contributed to the total build of the project.</h4>
        </div>

        <div class="ufc">
        <h3>UFC Titles Infographic</h3>
        <a href="https://github.com/ginoghal/ginoghalehpardaz_UFCInforgraphic"><img src="public/images/ufctitle.png" alt="ufc"></a>
        <h4>Description</h4>
        </div>

        <div class="tattoo">
        <h3>Tattoo Project</h3>
       <img src="public/images/ginotattoo.jpg" alt="tattoo">
        <h4>This tattoo project was meant to try and incorporate the design to your body as seamlessly as possible.</h4>
        </div>




</div>


    <div id="contact">
        <h1>Lets Connect</h1>
    <form id="contactForm">
 <h3> Name:</h3><br>
  <input class="nameinput" name="name">
  <br>
  <h3>Email:</h3><br>
  <input class="emailinput" name="email_address">
 <br>
  <h3>Message:</h3><br>
  <textarea v-model="message" class="messageinput" type="text" autocomplete="off" id="textarea"></textarea>
   <div class="submitinput"></div>

   <input type="submit" value="Submit">
</div>

</form>
 

    </div>
</div>
</div>
   
   
   
<script src="public/js/main.js"></script>
 
</body>
</html>


<?php include 'templates/footer.php';?>