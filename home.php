<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>AtomicVein</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/homestyle.css">
<link rel="stylesheet" href="css/logincss.css">
<script src="https://kit.fontawesome.com/a28102fa79.js" crossorigin="anonymous"></script>
</head>

<body>
		<header>		
			<img class="logo" src = "images/logo.png" alt = "logo">
			 <nav>
				<ul class="nav_links">
				   <li><a href = "index.html">Explore</a></li>
				   <li><a href = "statistics.html">Statistics</a></li>
				   <li><a href = "#">Your account</a></li>
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

		<main>
					<div class="profilecard-data full-width">
							<div class="profilecard">
								<div class="profilecard-pfp">
									<img src="images/avatar.jpg" alt="">
								</div>
							</div>
							<div class="profilecard-details">
								<h3>Chad Squid</h3>
								<span>ChadSquid, the chaddest of chad</span>
							</div>
						<ul class="profilecard-followdetails">
							<li>
								<h4>Following</h4>
								<span>1.1K</span>
							</li>
							<li>
								<h4>Followers</h4>
								<span>111.1K</span>
							</li>
							<li>
								<a href="#" title="">View Profile</a>
							</li>
						</ul>
					</div><!--profilecard-data end-->
					<div class="suggestioncard full-width">
						<div class="cardheadding">
							<h3>Suggestions</h3>
						</div>
						<div class="suggestioncards-list">
							<div class="suggestioncard-data">
								<img src="images/spongebob.jpg" alt="">
								<div class="suggestioncard-texts">
									<h4>Chad Sponge</h4>
									<span>ChadBob, the chaddest of th..</span>
								</div>
							
							</div>
							<div class="suggestioncard-data">
								<img src="images/nothisispatrick.jpg" alt="">
								<div class="suggestioncard-texts">
									<h4>Chad Star</h4>
									<span>ChadStar, the chaddest of th..</span>
								</div>
								
							</div>
							<div class="suggestioncard-data">
								<img src="images/crab.jpg" alt="">
								<div class="suggestioncard-texts">
									<h4>Chad Crab</h4>
									<span>Chadcrab, the chaddest of th..</span>
								</div>
							
							</div>
							<div class="suggestioncard-data">
								<img src="images/plankton.png" alt="">
								<div class="suggestioncard-texts">
									<h4>Chad Plankton</h4>
									<span>ChadPlankton, the chaddes..</span>
								</div>
							
							</div>
							<div class="suggestioncard-data">
								<img src="images/garry.png" alt="">
								<div class="suggestioncard-texts">
									<h4>Chad Snail</h4>
									<span>Chadsnail, the chaddest of th..</span>
								</div>
							
							</div>
							<div class="suggestioncard-data">
								<img src="images/chocolate.jpg" alt="">
								<div class="suggestioncard-texts">
									<h4>Chocolate man</h4>
									<span>Did somebody say chocolate?</span>
								</div>
							</div>
						</div>
					</div><!--suggestioncards end-->									

					<div class="writestatuscard">
						<div class="users-pfp">
							<img src="images/avatar.jpg" alt="">
						</div>
						<div class="postcommentcard-commentbox">
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
								<input type="text" placeholder="Your thoughts?" name="pname">
								<button type="submit">Send</button>
							</form>
						</div>
						</div>
					</div><!--writestatuscard end-->


						<div class="userpostcard">
							<div class="userpostcard-tophead">
								<div class="userpostcard-pfp">
									<div class="users-pfp">
										<img src="images/avatar.jpg" alt="">
									</div>
									<div class="userpostcard-topdetails">
										<h3>Chad Sponge</h3>
										<span><img src="images/clock.png" alt="">10 min ago</span>
									</div>
								</div>
							</div>
							<div class="userpostcard-rankinglocation">
								<ul class="userpostcard-RL-details">
									<li><img src="images/icon8.png" alt=""><span>Immortal</span></li>
									<li><img src="images/icon9.png" alt=""><span>Bikini Bottom</span></li>
								</ul>
							</div>
							<div class="userpostcard-postext">
								<p><?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    // collect value of input field
                                    $name = $_POST['pname'];
                                    if (empty($name)) {
                                      echo "Name is empty";
                                    } else {
                                      echo $name;
                                    }
                                  }
                                  ?></p>
							</div>
							<div class="userpostcard-bottombar">
								<ul class="userpostcard-likecomment">
									<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Like 13</a></li>
									<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 10</a></li>
								</ul>
								<a>Views 20</a>
							</div>
						</div><!--userpostcard end-->


						<div class="topnftscard">
							<div class="topnftscard-headder">
								<h3>Top NFTs</h3>
							</div>
							<div class="topnftscard-boxmargin">

					<!--Fourth card-->
					<ul class = "topnftcards4">
						<div class = "topnftitemcontainer">
						<div class = "topnftitembox">
						
						<!-- MODEL/IMAGE GOES HERE-->
						<img src = "images/kaiju3.gif" class = "topnftitemimage">
					
					
						<!--DETAILS GOES HERE-->
						<div class = "topnftitemdetails">
						
						<!-- DETAILS of card -->
						<p class="topnftitemproject"> KAIJUKINGZ </p>
						<p class="topnftitempricetag"> PRICE</p>
						<p class="topnftitemname"> KAIJUKINGZ #3</p>
						<p class="topnftitemprice"><img src = "images/eth.svg" class = "topnftitempricelogo"> 14.4</p>
					
						</div>
						<div class = "topnftitemlikesection">
							<a class="topnftbuybuttontext" href = "#"><button class="topnftbutton3">View More</button></a>
						
							<img src = "images/heart.svg" class = "topnftitemlikelogo">
							<p class="topnftitemlikes"> 99</p>
										
						</div>
						</div>
						</div>
						</ul>
					
					<!--Fifth card-->
					<ul class = "topnftcards5">
						<div class = "topnftitemcontainer">
						<div class = "topnftitembox">
					
						<!-- MODEL/IMAGE GOES HERE-->
						<img src = "images/cat2160.png" class = "topnftitemimage">
										
						<!--DETAILS GOES HERE-->
						<div class = "topnftitemdetails">
					
						<!-- DETAILS of card -->
						<p class="topnftitemproject"> COOLCATS</p>
						<p class="topnftitempricetag"> PRICE</p>
						<p class="topnftitemname"> COOLCATS #2160 </p>
						<p class="topnftitemprice"><img src = "images/eth.svg" class = "topnftitempricelogo"> 6.1</p>
					
						</div>
						<div class = "topnftitemlikesection">
							<a class="topnftbuybuttontext" href = "#"><button class="topnftbutton3">View More</button></a>
						
							<img src = "images/heart.svg" class = "topnftitemlikelogo">
							<p class="topnftitemlikes"> 70</p>
						</div>
						</div>
						</div>
						</ul>

					<!--Sixth card-->
					<ul class = "topnftcards6">
						<div class = "topnftitemcontainer">
						<div class = "topnftitembox">
						
					
						<!-- MODEL/IMAGE GOES HERE-->
						<img src = "images/cat925.png" class = "topnftitemimage">
					
					
						<!--DETAILS GOES HERE-->
						<div class = "itemdetails">
					
						<!-- DETAILS of card -->
						<p class="topnftitemproject"> COOLCATS</p>
						<p class="topnftitempricetag"> PRICE</p>
						<p class="topnftitemname"> COOLCATS #925 </p>
						<p class="topnftitemprice"><img src = "images/eth.svg" class = "topnftitempricelogo"> 5.9</p>
					
						</div>
						<div class = "topnftitemlikesection">
							<a class="topnftbuybuttontext" href = "#"><button class="topnftbutton3">View More</button></a>
						
							<img src = "images/heart.svg" class = "topnftitemlikelogo">
							<p class="topnftitemlikes"> 20</p>
															
						</div>
						</div>
						</div>
						</ul>

							</div><!--topnftscard-boxmargin end-->
						</div><!--topnftscard end-->


						<div class="userpostcard2">
							<div class="userpostcard-tophead">
								<div class="userpostcard-pfp">
									<div class="users-pfp">
										<img src="images/avatar.jpg" alt="">
									</div>
									<div class="userpostcard-topdetails">
										<h3>Chad Squid</h3>
										<span><img src="images/clock.png" alt="">20 min ago</span>
									</div>
								</div>
							</div>
							<div class="userpostcard-rankinglocation">
								<ul class="userpostcard-RL-details">
									<li><img src="images/icon8.png" alt=""><span>Immortal</span></li>
									<li><img src="images/icon9.png" alt=""><span>Bikini Bottom</span></li>
								</ul>
							</div>
							<div class="userpostcard-postext">
								<p>2Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna s... <a href="#" title="">view more</a></p>
							</div>
							<div class="userpostcard-bottombar">
								<ul class="userpostcard-likecomment">
									<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Like 105</a></li>
									<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 99</a></li>
								</ul>
								<a>Views 999</a>
							</div>
						</div><!--userpostcard end-->

						
							<div class="postcommentcard">
									<ul>
										<li>
											<div class="postcommentcard-details">
												<div class="postcommentcard-background">
													<img src="images/avatar.jpg" alt="">
												</div>
												<div class="postcommentcard-commentdetails">
													<h3>Chad Squid</h3>
													<span><img src="images/clock.png" alt=""> 19 min ago</span>
													<p>Lorem ipsum dolor sit amet, </p>
													<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
												</div>
											</div>
											<ul>
												<li>
													<div class="postcommentcard-details">
														<div class="postcommentcard-background">
															<img src="images/avatar.jpg" alt="">
														</div>
														<div class="postcommentcard-commentdetails">
															<h3>Chad Squid</h3>
															<span><img src="images/clock.png" alt=""> 19 min ago</span>
															<p>Hello Chad Squid </p>
															<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li>
											<div class="postcommentcard-details">
												<div class="postcommentcard-background">
													<img src="images/avatar.jpg" alt="">
												</div>
												<div class="postcommentcard-commentdetails">
													<h3>Chad Squid</h3>
													<span><img src="images/clock.png" alt=""> 5 min ago</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
													<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
												</div>
											</div>
										</li>
									</ul>

								<div class="post-postcommentcard-commentdetails">
									<div class="users-pfp">
										<img src="images/avatar.jpg" alt="">
									</div>
									<div class="postcommentcard-commentbox">
										<form>
											<input type="text" placeholder="Post a comment">
											<button type="submit">Send</button>
										</form>
									</div>
								</div>
							</div><!--postcommentcard end-->


					<div class="resourcesthathelpcard">
						<div class="cardheadding">
							<h3>Resources that help</h3>
						</div>

					<!--seventh card-->
					<ul class = "">
						<div class = "itemcontainer2">
						<div class = "itembox2">
						
						<!-- MODEL/IMAGE GOES HERE-->
						<img src = "images/resourcesthathelpcard1.png" class = "itemimage">
					
					
						<!--DETAILS GOES HERE-->
						<div class = "itemdetails">
						
						<!-- DETAILS of card -->
						<p class="itemproject2"> 10 tips for avoiding scams and staying safe on the decentralized web </p>					
						</div>
						</div>
						</div>
						</ul>

					<!--eighth card-->
					<ul class = "">
						<div class = "itemcontainer2">
						<div class = "itembox2">
						
						<!-- MODEL/IMAGE GOES HERE-->
						<img src = "images/resourcesthathelpcard2.png" class = "itemimage">
					
					
						<!--DETAILS GOES HERE-->
						<div class = "itemdetails">
						
						<!-- DETAILS of card -->
						<p class="itemproject2"> Keeping yourself safe when buying NFTs on AtomicVein </p>					
						</div>
						</div>
						</ul>
						
					<!--nineth card-->
					<ul class = "">
						<div class = "itemcontainer2">
						<div class = "itembox2">
						
						<!-- MODEL/IMAGE GOES HERE-->
						<img src = "images/resourcesthathelpcard3.png" class = "itemimage">
					
					
						<!--DETAILS GOES HERE-->
						<div class = "itemdetails">
						
						<!-- DETAILS of card -->
						<p class="itemproject2"> The beginner's guide to creating & selling digital art NFTs </p>					
						</div>
						</div>
						</div>
						</ul>	
							</div>
						</div>
					</div><!--createsellherecard end-->	

		</main>
		
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



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
