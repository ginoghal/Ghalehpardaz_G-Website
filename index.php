<?php
require_once 'load.php';


// if(isset($_GET['filter'])){
//     $args = array(
//         'tbl'=>'tbl_movies',
//         'tbl2'=>'tbl_genre',
//         'tbl3'=>'tbl_mov_genre',
//         'col'=>'movies_id',
//         'col2'=>'genre_id',
//         'col3'=>'genre_name',
//         'filter'=>$_GET['filter']
//     );

//     $getMovies = getMoviesByFilter($args);
// }else{
//     // $movie_table = 'tbl_movies';
//     // $getMovies = getAll($movie_table);
// }
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
    <title>Welcome to the movie cms</title>
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
        <h2>Motion Design Videos</h2>
        <div class="nintendoSwitch">
        <h3>Switch Commercial</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/HzqdvgxGsmk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h4>Description</h4>
        </div>

        <div class="compilationVideo">
        <h3>Cinema 4D Compilation Video</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/iwJ3GUDbla8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h4>Description</h4>
        </div>

        <div class="beeProject">
        <h3>Bee Chance - Bee Project</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/yt8mkCuwbRg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h4>Description</h4>
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
  <input class="messageinput" name="message">
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