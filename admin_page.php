<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/adminpage.css">

</head>
<body>
<header>
   
   <div class="container">
      <div class="content">
         <h1><?php echo $_SESSION['admin_name'] ?></h1><h2>Weight Gain</h2>
         <a href="logout.php" class="btn">logout</a>
   </div>

</div>

   <div class="image1">
        <img src="resources/WeightGainImage.jpeg" alt="">
   </div>

<!--First Row Workouts-->
   <div class="row1">
     <div class="work1">
         <img src="resources/BenchPress.jpg" alt="">
         <h1>Bench Press</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a href="#">Pectoralis major</a>
                  <a href="#">Pectoralis minor</a>
                  <a href="#">Triceps</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
      <div class="work1">
         <img src="resources/BicepCurls.jpg" alt="">
         <h1>BicepCurls</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a href="#">Boost Athletic performance</a>
                  <a href="#">Build strenght in uppder arm</a>
                  <a href="#">Development in bicep peak</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
   </div>

<!--Second Row Workouts-->
   <div class="row1">
     <div class="work1">
         <img src="resources/Dips.jpg" alt="">
         <h1>Bar Dips</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a href="#">Building Lower Chest</a>
                  <a href="#">Increase strenght</a>
                  <a href="#">Triceps</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
      <div class="work1">
         <img src="resources/Deadlift.jpg" alt="">
         <h1>Deadlift</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a href="#">Reduce Lower back pain</a>
                  <a href="#">Activate your core</a>
                  <a href="#">Increase Metabolism</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
   </div>

<!--Third Row Workouts-->
   <div class="row1">
     <div class="work1">
         <img src="resources/LegPress.jpg" alt="">
         <h1>Leg Press</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a href="#">Building strength in legs</a>
                  <a href="#">Developing Quads, Hamstring</a>
                  <a href="#">Boost Testosterone</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
      <div class="work1">
         <img src="resources/PullUps.jpg" alt="">
         <h1>PullUps</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a href="#">Developing Lats</a>
                  <a href="#">Building strength</a>
                  <a href="#">Biceps</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
   </div>
   
<!--Forth Row Workouts-->
   <div class="row1">
     <div class="work1">
         <img src="resources/TricepPress.jpg" alt="">
         <h1>Over head Tricep Extension</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a>Hypertrophy of the triceps</a>
                  <a>All three heads of triceps</a>
                  <a>Buid strenght in triceps</a>
               </div>
            </div>
            <h1 onclick="audio.play( )">20x</h1>
         </div>
      </div>
      <div class="work1">
         <img src="resources/LabCurls.jpg" alt="">
         <h1>Leg Extension</h1>
         <div class="detail1">
            <div class="dropdown">
               <button class="dropbtn">Benifits</button>
               <div class="dropdown-content">
                  <a>Develop Rectus femoris</a>
                  <a>Lactus laterails</a>
                  <a>Vastus medialis</a>
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