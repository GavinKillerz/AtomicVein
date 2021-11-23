<?php
    error_reporting(E_ALL ^ E_WARNING); 
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "test";
    $handler = mysqli_connect($servername, $username, $password, $dbname);
    $user2 = '@username';
    $user1 = '@chadsquid';
    $ownership = $_POST['gay'];
    $mhmyes = 0;
    $prim = 1;
    $alert = 1;
?>





<!DOCTYPE html>
<html lang="en">
   <head>
 
      <meta charset="utf-8">
      <title>AtomicVein</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/logincss.css">
      <link rel="stylesheet" href="css/itempage.css">
      <script src="https://kit.fontawesome.com/a28102fa79.js" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
      

   </head>
   
<body>
    

         <header>
         <a href = "home.php">
           <img class="logoa" src = "images/logo.png" alt = "logo">
           </a>
            <nav>
               <ul class="nav_links">
                  <li><a href = "index.html">Explore</a></li>
                  <li><a href = "statistics.html">Statistics</a></li>
                  <li><a href = "profile.php">Your account</a></li>
               </ul>
            </nav>


            <a class="cta" href = "#"><button class="button1" onclick="openFunction()">Wallet</button></a>
            
            <!-------------->



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


<!-- Right side things-->

    <img class="itemphoto" src = "images/kaiju0.gif" alt = "itemphoto">


    <p class="projectname">Project name</p>

    <p class="itemname">Item title name #6969</p>

    <?php if ($_POST['eth68']) { $ownership = 1;} ?>
    <?php
    if( $ownership == 1 ) {
    ?>
    <p class="owner">Owned by <?php echo $user1?></p>

    <?php } 
    else { ?>

        <p class="owner">Owned by <?php echo $user2?></p>

    <?php } ?>

   

    <div class = "offersbox">
 
        <div class = icon><i class="fab fa-ethereum"></i></div> 
        <p class = "highestoffer">Current Price</p>
        <p class = "currenthighest">
        <?php if ($_POST['eth68']) { $mhmyes = 1; $ownership = 1; $usd = '$' . $_POST['eth68'] * 4000;
            echo $_POST['eth68'] . ' ETH ('.$usd.')';?>
            
    
        <?php	} ?>

		<?php
        if ($mhmyes == 0 ) {?>
        7.33 ETH ($30,537.11)

        <?php

            } ?>
    </p>

    
        <?php
    if( $ownership == 1 ) {
    ?>
     <button class ="makeyourofferbox" onclick="document.getElementById('id02').style.display='block'" ><p>List Price</p></button>
        
    <?php } 
    else { ?>

<button class ="makeyourofferbox" onclick="document.getElementById('id01').style.display='block'" ><p>Make offer</p></button>

    <?php } ?>

        

   
         


    </div>


    <div class = "pricehistory">
        <div class = icon><i class="fas fa-chart-line"></i></div> 
        <p class = "highestoffer">Price History (All time)</p>
        <canvas id="chart01" style="width:100%;max-width:650px;margin-left:20px;margin-top:50px"></canvas>
        <script>
            var xValues = [100,200,300,400,500,600,700,800,900,1000];
    
            new Chart("chart01", {
              type: "line",
              data: {
                labels: xValues,
                datasets: [{
                  data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
                  borderColor: "#CCC5B9",
                  fill: false
                },{
                  data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                  borderColor: "#EB5E28",
                  fill: false
                }]
              },
              options: {
                legend: {display: false}
              }
            });
        </script>

        </div>
    </div>

    <div class = "newoffersbox">
        <div class = icon><i class="fas fa-tag"></i></div>
        <p class = "highestoffer">Offers</p>

        <table class="content-table">
            <thead>
                <tr>
                   <th>Price(ETH)</th>
                   <th>USD Price</th>
                   <th>Floor Difference</th>
                   <th>Expiration</th>
                   <th>From</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                   <?php
                   $conn=mysqli_connect("localhost","root","","test");
                   $sql="SELECT * FROM ethoffer";
                   $result = $conn->query($sql);

                   if($result->num_rows >0){
                       while($row=$result->fetch_assoc()){
                           echo"<tr><td>".$row["Price"] . "</td><td>" .$row["USD"] . "</td><td>" .$row["Superidol"] . "</td><td>" .$row["Expiration"] . "</td><td>" .$row["Previous"] . "</td></tr>";
                       }
                   }
                   else{
                   }
                   $conn->close()
                   ?>
                   <tr>
                
            </tbody>
        </table>

        </div>
    </div>


<!-- ACCORDIAN STARTS HERE-->


    <div class = "wrapper">
        <!--Accordion 1-->
        <div class="parent-tab">
            <input type = "checkbox" name = "tab" id="tab-1" >
        <label for = "tab-1">
            <span> Description</span>
            <div class = "icon"><i class="fas fa-angle-down"></i></div>
        </label>
        <div class = "content">
            <p>one two three one two three one two three one two three one two three one two three one two three </p>
        </div>
        </div>
    

    <!--Accordion 2-->
    <div class="parent-tab">
        <input type = "checkbox" name = "tab" id="tab-2" >
    <label for = "tab-2">
        <span> Properties</span>
        <div class = "icon"><i class="fas fa-angle-down"></i></div>
    </label>
    <div class = "content">
        <p>one two three one two three one two three one two three one two three one two three one two three </p>
    </div>
    </div>



<!--Accordion 3-->
<div class="parent-tab">
    <input type = "checkbox" name = "tab" id="tab-3" >
<label for = "tab-3">
    <span> About Project</span>
    <div class = "icon"><i class="fas fa-angle-down"></i></div>
</label>
<div class = "content">
    <p>sifdughsidfughsidfughuisdfghiusdfhgsdfiughsduifsifg</p>
</div>
</div>



<!--Accordion 4-->
<div class="parent-tab">
    <input type = "checkbox" name = "tab" id="tab-4" >
<label for = "tab-4">
    <span> Details</span>
    <div class = "icon"><i class="fas fa-angle-down"></i></div>
</label>
<div class = "content">
    <p>one two threeone two three one two three one two threeone two three one two three one two three</p>
</div>
</div>
</div>

<!--FOOTER STARTS HERE-->

         <footer class = "footer">
            <div class = "container">
               <div class ="row">
                  <img class="logo2" src = "images/logo.png" alt = "logo2">
                  <div class = "footer-col">

                  

                     <h4>Explore</h4>
                     <ul>
                        <li><a href = "index.html">Explore</a></li>
                        <li><a href = "#">Buy and Sell</a></li>
                        <li><a href = "#">Trade</a></li>
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
<?php if ($_POST['eth68']) { $alert = 0;
} ?>
   
<?php

    if( $ownership == 1 and $alert == 1) {
    ?>
    
     <script>alert("Purchase Successfully by ChadSquid")</script>
     
        
    <?php } 
    else { }?>
 
<?php
    if( $ownership == 1 ) {
    ?>
    
    <div id="id02" class="modal">
  
<span onclick="document.getElementById('id02').style.display='none'"
              class="close" title="Close">&times;</span>
     <!-- Modal Content -->
     <form class="modal-content animate" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        
    
     <h1> List Your Price </h1>

     <div class ="imagecontainer">
     <img class="itemphoto2" src = "images/kaiju0.gif" alt = "itemphoto"> </div>
         <div class="offerm">
             <div class="offerbox">
             <label for="offer">
                 <div class = icon style = "right:295px"><i class="fab fa-ethereum"></i></div>
             <b>Please Key in your Price</b></label>
              </div>
             <input type="number" class="offerbtn" id="eth68" class="numinput" placeholder="ETH" name="eth68" min="0.01" step=".01" required>
         </div>
       <div class="buttoncontains">
         <button type="submit" name="submit1" value="insert">List Price</button>
     </div>
     <div class="buttoncontains2">
         <button type="button"  onclick="document.getElementById('id02').style.display='none'" class="offerbtn">Cancel List</button>
     </div>
     </form>
     
     
        
    <?php } 
    else {?><div id="id01" class="modal">
  
        <span onclick="document.getElementById('id01').style.display='none'"
                      class="close" title="Close">&times;</span>
             <!-- Modal Content -->
             <form class="modal-content animate" action="connect.php" method="POST">
                
            
             <h1> Make an Offer </h1>
     
             <div class ="imagecontainer">
             <img class="itemphoto2" src = "images/kaiju0.gif" alt = "itemphoto"> </div>
                 <div class="offerm">
                     <div class="offerbox">
                     <label for="offer">
                         <div class = icon style = "right:295px"><i class="fab fa-ethereum"></i></div>
                     <b>Please Key in your offer</b></label>
                      </div>
                     <input type="number" id="eth69" class="numinput" placeholder="ETH" name="eth69" min="0.01" step=".01" required>
                 </div>
               <div class="buttoncontains">
                 <button type="submit" class="offerbtn" name="submit1" value="insert">Make Offer</button>
             </div>
             <div class="buttoncontains2">
                 <button type="button"  onclick="document.getElementById('id01').style.display='none'" class="offerbtn">Cancel Offer</button>
             </div>
             </form>  <?php }?>   



        