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
                  <li><a href = "profile.html">Your account</a></li>
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

    <img class="itemphoto" src = "images/doodle9794.png" alt = "itemphoto">


    <p class="projectname">DOODLES</p>

    <p class="itemname">DOODLES #9794</p>

    <p class="owner">Owned by @chadsquidds</p></p>

    <div class = "offersbox">
 
        <div class = icon><i class="fab fa-ethereum"></i></div> 
        <p class = "highestoffer">Highest Offer</p>
        <p class = "currenthighest">2 ETH ($8,420.12)</p>
     
            <button class ="makeyourofferbox"><p>Make offer</p></button>

   


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
                   <th>Price</th>
                   <th>USD Price</th>
                   <th>Floor Difference</th>
                   <th>Expiration</th>
                   <th>From</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td>10 WETH </td>
                   <td>$43,564.46</td>
                   <td>8.3% below</td>
                   <td>in 20 hours</td>
                   <td>Chad Squid</td>
                </tr>

                <tr>
                   <td>7.33 WETH</td>
                   <td>$29,242.83</td>
                   <td>12.2% Below</td>
                   <td>in 5 hours</td>
                   <td>Okay Crab</td>
                </tr>

                <tr>
                   <td>5.33 WETH </td>
                   <td>$22,490.13</td>
                   <td>12.4% Below</td>
                   <td>in 3 hours</td>
                   <td>Fish Star</td>
                </tr>

                <tr>
                   <td>3.33 WETH </td>
                   <td>$14,003.29</td>
                   <td>8.3% below</td>
                   <td>in 20 hours</td>
                   <td>Cave Squirrel</td>
                </tr>

                <tr>
                   <td>2.33 WETH</td>
                   <td>$10,537.11</td>
                   <td>8.3% below</td>
                   <td>in 20 hours</td>
                   <td>Small Whale</td>
                </tr>
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
            <p>Created By Doodles-Team</p>
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
        <p>Grey, Pink Puffer, Skeleton, Blue Mohawk, Purple</p>
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
    <p>A community-driven collectibles project featuring art by Burnt Toast.
         Doodles come in a joyful range of colors, traits and sizes with a collection size of 10,000.
          Each Doodle allows its owner to vote for experiences and activations paid for by the Doodles 
          Community Treasury.</p>
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
    <p>Token ID - 9794<br>Token Standard - ERC-721<br>Blockchain - Ethereum</p>
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
