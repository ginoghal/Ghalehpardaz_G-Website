<?php
require_once 'load.php';
require_once 'user.php';


//This is how the first part of your php page should look like, 
//just copy and paste the form and remove the confirm logged ins on both files

if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if(empty($name) || empty($email) || empty($message)){
        $message = 'Please fill required fields!';
    }else{
        
    
        createUser($name, $email, $message);
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gino Ghalehpardaz' Portfolio Website</title>
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
          <h3>I am a Front-end Developer, Motion Designer, Multimedia & Marketing Specialist.</h3>
          <div class="profileImage"><img src="public/images/ginogprofilepic.png" alt="ginoProfilePic"></div>
          <button class="connectButton"><a href="#contact"> Connect With Me!</a></button>
        
      </div>


    <div id="aboutMe">
        <h1>WHO I AM</h1>
        <h2>Born in London, On. I am currently enrolled in the Interactive Media Design program at Fanshawe College.</h2>
        <h3>Prior to going to Fanshawe, I was a marketing coordinator.</h3>
        <h5>I have creating digital media content with companys such as: <br><br>•Adrenaline Mixed Martial Arts & Fitness<br>•BTC Fight Promotions<br>•XO Cookie Co.<br>•Ilderton Area Business Association<br>and more...</h5>
        <h4>I am striving to improve at my craft everyday. I returned to school and rebuilt myself so that I could provide my pug with the best life possible.</h4>
        
        <div class="pug"><img src="public/images/Pugsley.png" alt="pug"></div>
</div>


<div id="portfolio">
        <h1>My Portfolio of Work</h1>
        <h2>Motion Design Videos, Web Development and Design and Graphic Design Work</h2>

        <div class="td">
        <h3>TD Investment Education</h3>
        <iframe src="https://www.youtube.com/embed/M-GKlBwCK3Q" frameborder="0" allowfullscreen></iframe>
        <h4> TD Investment Education Application Video.</h4>
        </div>


        <div class="punisher">
        <h3>Punisher Title Sequence</h3>
        <iframe src="https://www.youtube.com/embed/wiuqFsIjTzI" frameborder="0" allowfullscreen></iframe>
        <h4>Punisher Title Sequence class project I made with After Effects.</h4>
        </div>
        
        <div class="nintendoSwitch">
        <h3>Switch Commercial</h3>
        <iframe src="https://www.youtube.com/embed/HzqdvgxGsmk" frameborder="0" allowfullscreen></iframe>
        <h4>This was a fun project for me as I wanted to see how many different locations I could come up with.</h4>
        </div>

        <div class="sportsViz">
        <h3>Sports Vizualization Project</h3>
        <iframe src="https://www.youtube.com/embed/ZXeNsoF2GgU" frameborder="0" allowfullscreen></iframe>
        <h4>This was a collaborative project showcasing different sports and tracking various statistic visualizations on them. The segments that were created specifically by me was the man doing dips, full segment of the man with the battle ropes, the paragliding, the kid with the scooter at the skatepark, the soccer clip and the motion tracking of the runner.</h4>
        </div>

        <div class="compilationVideo">
        <h3>2019 Demoreel</h3>
        <iframe src="https://www.youtube.com/embed/iwJ3GUDbla8" frameborder="0" allowfullscreen></iframe>
        <h4>This demo reel was a collaboration of all my projects created in Cinema4D.</h4>
        </div>

        <div class="beeProject">
        <h3>Bee Chance - Bee Project</h3>
        <iframe src="https://www.youtube.com/embed/yt8mkCuwbRg" frameborder="0" allowfullscreen></iframe>
        <h4>This was a collaborative project with a one hour time limit based around saving the bees. I was responsible for the video creation while my partner created the logo clip.</h4>
        </div>

        <div class="sportsnet">
        <h3>SportsNet 4D: Cowboys vs Bears Intro </h3>
        <iframe src="https://www.youtube.com/embed/ldewKXt8X2Q" frameborder="0" allowfullscreen></iframe>
        <h4>Project started in class using both Cinema 4D and After Effects to create a sports net like commercial for an upcoming game between the Cowboys and Bears.</h4>
        </div>

        <div class="mclaren">
        <h3>Mclaren Commercial 4D</h3>
        <iframe src="https://www.youtube.com/embed/v5cUnaQP-lY" frameborder="0"  allowfullscreen></iframe>
        <h4>This is a Mclaren commercial created with both Cinema 4D and After Effects. The car models and music are pre existing ones but the transition effect and video itself are put together by me.</h4>
        </div>

        <div class="musicMixer">
        <h3>Music Mixer</h3>
        <a class="musicMixer" href="https://github.com/ginoghal/Ghalehpardaz_G_MusicMixer"><img src="public/images/MusicMixer.png" alt="musicmixer"></a>
        <h4>This was a group project with me taking the lead on the Backend - in this case the Javascript functionality. To open - tap or click on image to be redirected to the Github Repo.</h4>
        </div>

        <div class="anglers">
        <h3>Anglers Website</h3>
        <a class="anglers" href="https://github.com/ginoghal/Ghalehpardaz_G-Helder_J-Anglers.org"><img src="public/images/Anglers.png" alt="anglers"></a>
        <h4>This Anglers project was a group project where we both contributed to the total build of the project. To open - tap or click on image to be redirected to the Github Repo.</h4>
        </div>

        <div class="ufc">
        <h3>UFC Titles Infographic</h3>
        <a class="ufc" href="https://github.com/ginoghal/ginoghalehpardaz_UFCInforgraphic"><img src="public/images/ufctitle.png" alt="ufc"></a>
        <h4>This infograph was designed as a break down of all the countries that have won UFC titles and the number of titles they have won. In addition I have added a fun fact to each one that appears when you click on each country. To open - tap or click on image to be redirected to the Github Repo.</h4>
        </div>

        <div class="tattoo">
        <h3>Tattoo Project</h3>
       <img src="public/images/ginotattoo.jpg" alt="tattoo">
        <h4>This tattoo project was meant to try and incorporate the design to your body as seamlessly as possible.</h4>
        </div>

        <div class="cinema4d">
        <h3>Cinema 4D Models</h3>
        <img name="cinema4d"></img>
        <h4>These are just some of the models I have created in Cinema 4D, Check back often as I am always working!</h4>
        </div>

        <div class="uiux">
        <h3>UI/UX Mockup</h3>
        <img src="public/images/UIUXRedesigns.jpg" alt="UIUX">
        <h4>These are just some UI/UX Mockup websites I have recreated from existing sites.</h4>
        </div>

        <div class="punisherskull">
        <h3>Punisher Tattoo (Graphic Design piece)</h3>
        <img src="public/images/tattoopunisher.png" alt="punisherskull">
        <h4>This is the punisher skull that I designed and created for my mock tattoo piece. This graphic design was created using Adobe Illustrator.</h4>
        </div>

        <div class="conorMcgregor">
        <h3>Conor Mcgregor (Graphic Design piece)</h3>
        <img src="public/images/ConorMcgregor(2016).png" alt="conormcgregor">
        <h4>Here is an old Conor Mcgregor Graphic Design piece I did in 2016 using Adobe Photoshop, It is inspired from the posters the UFC uses for autographs for individual fighters to give to fans. </h4>
    

        </div>




</div>


<div id="contact">
        <h1>Lets Connect</h1>
        <h2> I will even let you pet my Pug! </h2>

 <div id="contactForm">

 <h3><a href="mailto:ginoghalehpardaz@gmail.com">Click to Send Email (ginoghalehpardaz@gmail.com)</a></h3>
 <br>
 <p>Thank you for contacting me! I will be in touch shortly</p>

 <br><br><br><br><br>
       
    <!-- <form action="index.php" method="post">
    <label class="nametext"><h5>First name:</h5></label>
    <input type="text" name="name" class="name" value=""><br><br>
    <label class="emailtext"><h5>Email:</h5></label>
    <input type="text" name="email" class="email" value=""><br><br>
    <label class="messagetext"><h5>Message<h5></label>
    <textarea type="text" name="message" class="message" value=""></textarea>

    <button class="submit" name="submit">Submit</button>
    </form> -->

 
 </div>
</div>

   
   
   
<script src="public/js/main.js"></script>
 
</body>
</html>


<?php include 'templates/footer.php';?>