<?php 
$wan = 1;
$too = 1;
$tri = 1;
?>

<!DOCTYPE html>
<html lang="en">
   <head>
 
      <meta charset="utf-8">
      <title>AtomicVein</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="css/styleprofile.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/logincss.css">
      <script src="https://kit.fontawesome.com/a28102fa79.js" crossorigin="anonymous"></script>

   </head>
<body>

<header>
            <a href = "home.php">
               <img  class="logoa" src = "images/logo.png" alt = "logo">
               </a>
            <nav>
               <ul class="nav_links">
                  <li><a  href = "index.html">Explore</a></li>
                  <li><a  href = "statistics.html">Statistics</a></li>
                  <li><a  href = "profile.php">Your account</a></li>
               </ul>
            </nav>
            <a class="cta" href = "#"><button class="button1" onclick="openFunction()">Wallet</button></a>

            <!--Side login bar starts HERE-->
    <div id="menu" class = "sidemenu">


      <!--Top header-->
<b>Atomic Wallet</b>

<!-- form-->

<p class = "walletnotice"> Your wallet address is synced. Please key in your password to continue</p>


<form>
   <c> Password <samp>*</samp></c>
   <div class = "password">
       <input type = "password" name="password" required>
   </div>
   <!--login botton lul-->
    <input type = "submit" name = "login" class = "login" value = "login">

    <!--forgetti spaghetti-->
    <d href = "#" class ="forget">Forget Your Password?</d>

</form>


      <a href="#" class = "closebtn" onclick="closeFunction()"> &times;</a>
  </div>
  <script type = "text/javascript">
      function openFunction(){
          document.getElementById("menu").style.width="350px";
          document.getElementById("mainbox").style.marginLeft="300px";
          document.getElementById("mainbox").innerHTML="Click on Cross Element and Close Menu";
      }
      function closeFunction(){
          document.getElementById("menu").style.width="0px";
          document.getElementById("mainbox").style.marginLeft="0px";
          document.getElementById("mainbox").innerHTML="&#9776; Open";
      }
  </script>
            
            
         </header>
         <!--Profile-->
      
         <div class ="profile">
            
            <div class = "profilephoto">
               <img src="images/avatar.jpg" alt="Avatar" class="avatar">
               <div class ="socialsection">
                  <a href="https://www.facebook.com/Squidward" class="fa fa-facebook"></a>
                  <a href="https://twitter.com/squidward" class="fa fa-twitter"></a> 
                  <a href="https://www.instagram.com/squidward_tentaclesofficial/?hl=en" class="fa fa-instagram"></a>
                  <a href="https://twitter.com/squidward" class="fa fa-google"></a> 
               </div>
               <div class = "usersection">
                   <p class ="username">
                      <?php if (!empty($_POST)) {
                         
                         $wan = 0; echo htmlspecialchars($_POST["name"]); ?><br>
                        <?php }
                        ?>
                        <?php if ($wan == 1) {
                         
                            ?>Chad Squid<br>
                           <?php }
                           ?>
                        
                  </p>
                  <p class ="usertag">
                  <?php if (!empty($_POST)) {
                         
                         $too = 0; echo htmlspecialchars('@' . $_POST["tag"]); ?><br>
                        <?php }
                        ?>
                        <?php if ($too == 1) {
                         
                            ?>@chadsquid<br>
                           <?php }
                           ?>
                     
                  </p>
                  <p class ="userbio">
                  <?php if (!empty($_POST)) {
                         
                         $tri = 0; echo htmlspecialchars($_POST["bio"]); ?><br>
                        <?php }
                        ?>
                        <?php if ($tri == 1) {
                         
                            ?>Hi I'm ChadSquid, the chaddest of chad, the squiddest of squid. Squid Squid Squid Squid Squid Squid Squid Squid Squid Squid Squid Squid<br>
                           <?php }
                           ?>
                  </p>
                  <div class ="joinsection">
                  <p class ="joindate"> <img src="images/calender.svg"  class="calender">
                     Joined August 2021
                  </p>
               </div>
               
               </div>  
            </div>
            <div class = "profilefollowing">
               <div class ="followingsection">
                  <p class ="follower"> Followers</p>  
                     <p class ="followerc">111.1k</p>
                  <p class ="following"> Following</p>
                     <p class ="followingc">1.1k</p>
                  <p class ="sale"> For Sale</p> 
                     <p class ="salec"> 3 </p>     
               </div>
               <div class ="editsection">
                  <a class="cta"><button class="editbutton"  onclick="document.getElementById('id01').style.display='block'">Edit Profile</button></a>
               </div>
            </div>
         
         </div>
         
         <!--Collection-->
      
      
<div class="w3-container">

   
      <div class="w3-row">
      <a id="defaultOpen" href="javascript:void(0)" onclick="openCity(event, 'Collection');">
        <div class="tablink w3-bottombar"><img src = "images/collection.svg" class = "itemlogo">Collections</div>
      </a>
   </div>
  <div class="w3-row2">
        
         <a href="javascript:void(0)" onclick="openCity(event, 'Like');">
           <div class="tablink w3-bottombar  "><img src = "images/favourite.svg" class = "itemlogo">Favourites</div>
         </a>
      
     </div>
</div>

<div id="Collection" class="w3-container city" style="display:none">
   <div class="bordersection"> 
   </div>
   <div class="bordersection2">

   </div>
   <div class="itemsection">
   <!--Fourth card-->
   <div class="bordersection">

   </div>
<ul class = "cards4">
   <div class = "itemcontainer">
      <div class = "itembox">
      
      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/kaiju2887.gif" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">
      
      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> KAIJUKINGZ #3</p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 13.4</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempage.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 69</p>

     
      </div>
      </div>
      </div>
   </ul>

   <!--Fifth card-->
<ul class = "cards5">
   <div class = "itemcontainer">
      <div class = "itembox">

      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/cat2160.png" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">

      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "projectcool.html">  COOLCATS</p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> COOLCATS #2160 </p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 6.1</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempagecool.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 70</p>
      </div>
      </div>
      </div>
   </ul>

      <!--Sixth card-->
<ul class = "cards6">
   <div class = "itemcontainer">
      <div class = "itembox">
    

      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/kaiju949.png" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">
 
      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> KAIJUKINGZ #949 </p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 5.9</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempage.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 40</p>

    

      </div>
      </div>
      </div>
   </ul>

      <!--Seventh card-->
<ul class = "cards7">
   <div class = "itemcontainer">
      <div class = "itembox">


      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/kaiju888.png" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">

      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> KAIJUKINGZ #888 </p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 5.2</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempage.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 35</p>

   

      </div>
      </div>
      </div>
   </ul>

      <ul class = "cards8">
         <div class = "itemcontainer">
            <div class = "itembox">
      
      
            <!-- MODEL/IMAGE GOES HERE-->
            <img src = "images/cat6133.png" class = "itemimage">
      
      
            <!--DETAILS GOES HERE-->
            <div class = "itemdetails">
      
            <!-- DETAILS of card -->
            <p class="itemproject"><a href = "projectcool.html">  COOLCATS</p>
            <p class="itempricetag"> PRICE</p>
            <p class="itemname"> COOLCATS #6133 </p>
            <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 7</p>
      
            </div>
            <div class = "itemlikesection">
               <a class="buybuttontext" href = "itempagecool.php"><button class="button3">View More</button></a>
            
               <img src = "images/heart.svg" class = "itemlikelogo">
               <p class="itemlikes"> 31</p>
      
         
      
            </div>
            </div>
            </div>
   </ul>
 <!--Fourth card-->
 <ul class = "cards4">
   <div class = "itemcontainer">
      <div class = "itembox">
      
      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/doodle9794.png" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">
      
      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "projectdood.html">  DOODLES</p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> DOODLES #9794</p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 2   </p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempagedood.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 52</p>

     
      </div>
      </div>
      </div>
   </ul>

   <!--Fifth card-->
<ul class = "cards5">
   <div class = "itemcontainer">
      <div class = "itembox">

      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/doodle7534.png" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">

      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "projectdood.html">  DOODLES</p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> DOODLES #7534 </p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 1.6</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempagedood.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 11</p>
      </div>
      </div>
      </div>
   </ul>

      <!--Sixth card-->
<ul class = "cards6">
   <div class = "itemcontainer">
      <div class = "itembox">
    

      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/cat2566.png" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">
 
      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "projectcool.html">  COOLCATS</p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> COOLCATS #925 </p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 2</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempagecool.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 33</p>

    

      </div>
      </div>
      </div>
   </ul>

      <!--Seventh card-->
<ul class = "cards7">
   <div class = "itemcontainer">
      <div class = "itembox">


      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/cat8800.png" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">

      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "projectcool.html">  COOLCATS</p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> COOLCATS #8800 </p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 14</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempagecool.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 74</p>

   

      </div>
      </div>
      </div>
   </ul>

      <ul class = "cards8">
         <div class = "itemcontainer">
            <div class = "itembox">
      
      
            <!-- MODEL/IMAGE GOES HERE-->
            <img src = "images/kaiju2418.png" class = "itemimage">
      
      
            <!--DETAILS GOES HERE-->
            <div class = "itemdetails">
      
            <!-- DETAILS of card -->
            <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
            <p class="itempricetag"> PRICE</p>
            <p class="itemname"> KAIJUKINGZ #2418 </p>
            <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 7</p>
      
            </div>
            <div class = "itemlikesection">
               <a class="buybuttontext" href = "itempage.php"><button class="button3">View More</button></a>
            
               <img src = "images/heart.svg" class = "itemlikelogo">
               <p class="itemlikes"> 54</p>
      
         
      
            </div>
            </div>
            </div>
   </ul>
   </div>
 </div>

 <div id="Like" class="w3-container city" style="display:none">
   <div class="bordersection"> 
   </div>
   <div class="bordersection2">

   </div>

<div class="itemsection">
    <!--Fourth card-->
<ul class = "cards4">
   <div class = "itemcontainer">
      <div class = "itembox">
      
      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/kaiju3.gif" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">
      
      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> KAIJUKINGZ #3</p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 14.4</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempagekaiju.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 99</p>

     
      </div>
      </div>
      </div>
   </ul>

   <!--Fifth card-->
<ul class = "cards5">
   <div class = "itemcontainer">
      <div class = "itembox">

      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/kaiju2887.gif" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">

      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> KAIJUKINGZ #2887</p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 13.4</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempage.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 69</p>
      </div>
      </div>
      </div>
   </ul>

      <!--Sixth card-->
<ul class = "cards6">
   <div class = "itemcontainer">
      <div class = "itembox">
    

      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/kaiju2.gif" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">
 

         <!-- DETAILS of card -->
         <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
         <p class="itempricetag"> PRICE</p>
         <p class="itemname"> KAIJUKINGZ #2</p>
         <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 14.4</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempage.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 70</p>

    

      </div>
      </div>
      </div>
   </ul>

      <!--Seventh card-->
<ul class = "cards7">
   <div class = "itemcontainer">
      <div class = "itembox">


      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/kaiju5.gif" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">

    <!-- DETAILS of card -->
    <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
    <p class="itempricetag"> PRICE</p>
    <p class="itemname"> KAIJUKINGZ #5</p>
    <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 13.9</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempage.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 55</p>

   

      </div>
      </div>
      </div>
   </ul>

      <ul class = "cards8">
         <div class = "itemcontainer">
            <div class = "itembox">
      
      
            <!-- MODEL/IMAGE GOES HERE-->
            <img src = "images/kaiju7.gif" class = "itemimage">
      
      
            <!--DETAILS GOES HERE-->
            <div class = "itemdetails">
      
            <!-- DETAILS of card -->
            <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
            <p class="itempricetag"> PRICE</p>
            <p class="itemname"> KAIJUKINGZ #7 </p>
            <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 10.5</p>
      
            </div>
            <div class = "itemlikesection">
               <a class="buybuttontext" href = "itempage.php"><button class="button3">View More</button></a>
            
               <img src = "images/heart.svg" class = "itemlikelogo">
               <p class="itemlikes"> 87</p>
      
         
      
            </div>
            </div>
            </div>
   </ul>
  <!--Fourth card-->
<ul class = "cards4">
   <div class = "itemcontainer">
      <div class = "itembox">
      
      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/kaiju6.gif" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">
      
      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> KAIJUKINGZ #6</p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 16.4</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempage.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 99</p>

     
      </div>
      </div>
      </div>
   </ul>

   <!--Fifth card-->
<ul class = "cards5">
   <div class = "itemcontainer">
      <div class = "itembox">

      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/kaiju1.gif" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">

      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> KAIJUKINGZ #1</p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 17</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempage.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 70</p>
      </div>
      </div>
      </div>
   </ul>

      <!--Sixth card-->
<ul class = "cards6">
   <div class = "itemcontainer">
      <div class = "itembox">
    

      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/kaiju4.gif" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">
 
      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> KAIJUKINGZ #4</p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 17</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempage.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 45</p>

    

      </div>
      </div>
      </div>
   </ul>

      <!--Seventh card-->
<ul class = "cards7">
   <div class = "itemcontainer">
      <div class = "itembox">


      <!-- MODEL/IMAGE GOES HERE-->
      <img src = "images/kaiju8.gif" class = "itemimage">


      <!--DETAILS GOES HERE-->
      <div class = "itemdetails">

      <!-- DETAILS of card -->
      <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
      <p class="itempricetag"> PRICE</p>
      <p class="itemname"> KAIJUKINGZ #8</p>
      <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 16,7</p>

      </div>
      <div class = "itemlikesection">
         <a class="buybuttontext" href = "itempage.php"><button class="button3">View More</button></a>
      
         <img src = "images/heart.svg" class = "itemlikelogo">
         <p class="itemlikes"> 67</p>

   

      </div>
      </div>
      </div>
   </ul>

      <ul class = "cards8">
         <div class = "itemcontainer">
            <div class = "itembox">
      
      
            <!-- MODEL/IMAGE GOES HERE-->
            <img src = "images/kaiju0.gif" class = "itemimage">
      
      
            <!--DETAILS GOES HERE-->
            <div class = "itemdetails">
      
            <!-- DETAILS of card -->
            <p class="itemproject"><a href = "project.html">  KAIJUKINGZ </p>
            <p class="itempricetag"> PRICE</p>
            <p class="itemname"> KAIJUKINGZ #0 </p>
            <p class="itemprice"><img src = "images/eth.svg" class = "itempricelogo"> 20</p>
      
            </div>
            <div class = "itemlikesection">
               <a class="buybuttontext" href = "itempage.php"><button class="button3">View More</button></a>
            
               <img src = "images/heart.svg" class = "itemlikelogo">
               <p class="itemlikes"> 97</p>
      
         
      
            </div>
            </div>
            </div>
   </ul>
</div>
 </div>
 
 
</div>

<script>
   function openCity(evt, tabName) {
     var i, x, tablinks;
     x = document.getElementsByClassName("city");
     for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
     }
     tablinks = document.getElementsByClassName("tablink");
     for (i = 0; i < x.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" w3-border-orange", "");
     }
     document.getElementById(tabName).style.display = "block";
     evt.currentTarget.firstElementChild.className += " w3-border-orange";
   }
   document.getElementById("defaultOpen").click();
   </script>
            
 































         <footer class = "footer">
            <div class = "container">
               <div class ="row">
                  <img class="logo2" src = "images/logo.png" alt = "logo2">
                  <div class = "footer-col">

                  

                  <h4>Explore</h4>
                     <ul>
                        <li><a href = "index.html">Explore</a></li>
                        <li><a href = "itempage.php">Buy and Sell</a></li>
                        <li><a href = "itempage.php">Trade</a></li>
                        <li><a href = "statistics.html">View statistics</a></li>
                     </ul>
                  </div>

                  <div class = "footer-col">
                     <h4>Developers</h4>
                     <ul>
                        <li><a href = "https://www.antiersolutions.com/non-fungible-token-development/">NFT standard</a></li>
                        <li><a href = "https://docs.opensea.io/">Whitepaper</a></li>
                        <li><a href = "https://docs.opensea.io/docs/developer-tutorials">Dev groups</a></li>
                        <li><a href = "https://docs.opensea.io/reference/request-an-api-key">API</a></li>
                     </ul>
                  </div>

                  <div class = "footer-col">
                     <h4>Contact</h4>
                     <ul>
                        <li><a href = "https://www.facebook.com">Facebook</a></li>
                        <li><a href = "https://www.twitter.com">Twitter</a></li>
                        <li><a href = "https://www.instagram.com">Instagram</a></li>
                        <li><a href = "https://github.com/GavinKillerz/AtomicVein">GitHub</a></li>
                        <li><a href = "https://discord.com">Discord</a></li>
                     </ul>
                  </div>
            </div>

         </footer>
      </body>
</html>


      
<div id="id01" class="modal">
  
   <span onclick="document.getElementById('id01').style.display='none'"
                 class="close" title="Close">&times;</span>
        <!-- Modal Content -->
        <form class="modal-content animate" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
           
       
        <h1> Edit Your Profile </h1>

    
       
            <div class="offerm">
                <div class="offerbox">
                <label for="name">
                <b>Edit Name</b></label>
                <input type="text" placeholder="Chad Squid" name="name" required>
                <label for="tag">
                 <b>Edit Tag</b></label>
                  <input type="text" c placeholder="@chadsquidds" name="tag" required>
                  <label for="offer">
                  <b>Edit Bio</b></label>
                  <input type="text" c placeholder="Hi I'm Chad Squid..." name="bio" required>
                 </div>
             
                
            </div>
           
          <div class="buttoncontains">
            <button type="submit" class="acceptbutton" >Make Edit</button>
            
        </div>
        <div class="buttoncontains2">
            <button type="button"  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel Edit</button>
        </div>
        </form>
     