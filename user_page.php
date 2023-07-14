<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/userpage.css">
</head>

<body>
<header>
   
   <div class="container">
      <div class="content">
         <h1><?php echo $_SESSION['user_name'] ?></h1>
         <h2>Weight Loss</h2>
         <a href="logout.php" class="btn">logout</a>
      </div>
   </div>

   <div class="image1">
        <img src="resources/WeightLossImage.png" alt="">
   </div>

<!--First Row Workouts-->
   <div class="row1">
     <div class="work1">
         <img src="resources/squats.gif" alt="">
         <h1>Squats</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a href="#">Hip Muscle</a>
                  <a href="#">Quads and Hamstring</a>
                  <a href="#">Calves</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
      <div class="work1">
         <img src="resources/PushUps.gif" alt="">
         <h1>Push Ups</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a href="#">Strengthening the upper body</a>
                  <a href="#">Core Stability</a>
                  <a href="#">Triceps</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
   </div>

<!--Second Row Workouts-->
   <div class="row1">
     <div class="work1">
         <img src="resources/ButtKicks.gif" alt="">
         <h1>ButtKicks</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a href="#">Improves Running Technique</a>
                  <a href="#">Strengthens the hamstring and glutes</a>
                  <a href="#">Strenghtnes the core muscle</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
      <div class="work1">
         <img src="resources/Crunches.gif" alt="">
         <h1>Crunches</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a href="#">Abdominal Muscle</a>
                  <a href="#">Improves posture </a>
                  <a href="#">Weight Loss</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
   </div>

<!--Third Row Workouts-->
   <div class="row1">
     <div class="work1">
         <img src="resources/JumpingJack.gif" alt="">
         <h1>JumpingJack</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a href="#">Develop glutes</a>
                  <a href="#">Increase Stamina</a>
                  <a href="#">Reduce Weight</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
      <div class="work1">
         <img src="resources/Lunges.gif" alt="">
         <h1>Lunges</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a href="#">Boost Flexibility</a>
                  <a href="#">Better spinal Health</a>
                  <a href="#">Provide Muscle Symmetry</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
   </div>
   
<!--Forth Row Workouts-->
   <div class="row1">
     <div class="work1">
         <img src="resources/SitUps.gif" alt="">
         <h1>SitUps</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a>Core strength</a>
                  <a>Better balance and Flexibility</a>
                  <a>Diaphragm strengthening</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
      <div class="work1">
         <img src="resources/WallSits.gif" alt="">
         <h1>WallSits</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a>Develop muscle in lower body</a>
                  <a>Increase Stability</a>
                  <a>Muscular Endurance</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
   </div>

   <div class="footer">
      <div class="foot-menu">
         <a>exercise of the day</a>
         <a>workouts</a>
         <a>programs</a>
         <a>challenges</a>
         <a>guides</a>
      </div>
   </div>
   













   <script>
      var audio = new Audio("resources/voicetimer.mp3");
      audio.oncanplaythrough = function ( ) { }
      audio.onended = function ( ) { }
   </script>
</header>
</body>
</html>