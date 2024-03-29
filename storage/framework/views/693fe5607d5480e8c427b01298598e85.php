<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>D-pot</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
	<!-- section banner start -->
	<div class="header_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div><a href="index.html"><img src="images/logo.png"></a></div>
				</div>
				<div class="col-md-8">
					<div class="menu_text">
						<ul>
							<li class="last"> <?php if(Route::has('login')): ?>
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/dashboard')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Hi, <?php echo e(Auth::user()->name); ?></a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?></li>
							<li class="last"><a href="#"><img src="images/search-icon.png"></a></li>
							<li class="active">
							 <div id="myNav" class="overlay">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                             <div class="overlay-content">
                             	<a href="index.html">Home</a>
                                <a href="about.html">About</a>
                                <a href="gallery.html">Gallery</a>
                                <a href="contact.html">Contact</a>
                              </div>
                            </div>
                             <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
                            </div>	
                            </li>
						</ul>
					</div>
			</div>
		</div>
		<div class="banner_main">
			<div class="container">
				<div class="ram">
					<div class="row">
					    <div class="col-sm-12">
						    <h1 class="taital">Best Pet Shop</h1>
						    <p class="consectetur_text">we care your pet</p>
						    <div class="banner_bt">
						    	<button class="read_bt">Read More</button>
						    </div>
					    </div>
				    </div>
				</div>
				<div class="box">
					<h1 class="numbar_text">01</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- section banner end -->
	<!-- section about start -->
	<div class="about_section">
		<div class="about_text">
			<div class="container">
				<h1 class="about_taital_1"><strong><span style="color: #f7941d;">About</span> Dogs</strong></h1>
				<p class="magna_text"> 
 Dogs, domesticated from wolves over thousands of years, are highly diverse in breeds, each with distinct characteristics and roles, such as hunting, herding,
 guarding, or companionship. Renowned for their loyalty and intelligence, dogs form strong bonds with humans, earning them the title of "man's best friend." 
 Communication is achieved through body language, vocalizations, and scent. With an average lifespan of 10 to 15 years, dogs require proper care, including exercise,
 a balanced diet, grooming, and veterinary attention. Training is a crucial aspect of a dog's development, with positive reinforcement being a widely accepted method.
 Many dogs serve specific functions like search and rescue, therapy, or police work. Regular veterinary check-ups are essential for their health. As popular pets 
 globally, dogs come in various sizes and temperaments, making them adaptable companions for diverse living situations. Responsible ownership involves understanding 
 and meeting the specific needs of each individual dog.</p>
				<div class="about_bt">
					<button class="more_bt">Read More</button>
				</div>
				<div class="about">
					<h1 class="numbar_text">02</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- section about end -->
	<!-- section gallery start -->
    <div class="gallery_main layout_padding">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<h1 class="about_taital"><strong><span style="color: #ffffff;">Our</span> Dogs</strong></h1>
				    <p class="sed_text"> Pomeranian,Chihuahua,Pug,Boston Terrie,French Bulldog......</p>

    			</div>
    		</div>
    		<div class="gallery_images">
    			<div class="row">
    				<div class="col-sm-7">
						<div class="gallery_blog">
                           <img src="images/gallery-img1.png" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
    				</div>
    				<div class="col-sm-5">
						<div class="gallery_blog">
                           <img src="images/gallery-img2.png" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
    				</div>
    			</div>
    		</div>
    		<div class="gallery_images">
    			<div class="row">
    				<div class="col-sm-5">
						<div class="gallery_blog">
                           <img src="images/gallery-img3.png" style="max-width: 100%; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
    				</div>
    				<div class="col-sm-7">
						<div class="gallery_blog">
                           <img src="images/gallery-img4.png" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
						<div class="gallery_blog">
                           <img src="images/gallery-img5.png" style="max-width: 100%; height: 297px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="gallery_section_2">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-8">
    				<h1 class="pet_taital">Pet adoption be part of something beautiful</h1>
    				<p class="lorem_text">it's essential to choose a pet that matches your lifestyle, energy level, and living situation. Each animal has its own 
                        personality and needs, and finding the right match ensures a harmonious relationship between you and your new companion. Adoption processes 
                        typically involve screenings and interviews to ensure a good fit between the pet and the adopter. </p>
    			<div class="banner_bt">
					<button class="dog_bt">Read More</button>
				</div>
				<div class="box_3">
					<h1 class="numbar">03</h1>
				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="dog_img"><img src="images/dog-img.png" style="max-width: 100%;"></div>
    			</div>
    		</div>
    	</div>
    </div>
	<!-- section gallery end -->
	<!-- section get in touch start -->
    <div class="touch_section">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
				    <h1 class="get_taital"><strong><span style="color: #ffffff;">Contact</span>  Us</strong></h1>
    			</div>
    		</div>
    		<div class="email_box">
                    <div class="input_main">
                       <div class="container">
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Name" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Your Phone Numbar" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Your Email" name="Email">
                            </div>
                            
                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                            </div>
                          </form>   
                       </div> 
                       <div class="send_btn">
                        <button type="button" class="main_bt"><a href="#">Send</a></button>
                       </div>                   
                    </div>
    		</div>
    	</div>
    </div>
    <div class="touch_section_2">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<h1 class="our_texts">Our Newsletter</h1>
    				<div class="input-group mb-3">
                        <input class="email_bt" type="text" class="form-control" placeholder="Enter your email">
                     <div class="input-group-append">
                        <button class="subscribe_bt" class="btn btn-primary" type="Subscribe">Subscribe</button>  
                     </div>
                    </div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- section get in touch end -->

	<!-- section footer start -->
    <div class="section_footer">
    	<div class="container">
    		<div class="mail_section">
    			<ul>
    				<li class="footer-logo"><img src="images/footer-logo.png"></li>
    				<li class="footer-logo"><img src="images/map-icon.png"><span class="map_text">Gb road 123 london Uk</span></li>
    				<li class="footer-logo"><img src="images/call-icon.png"><span class="map_text">(+71) 9876543210</span></li>
    				<li class="footer-logo"><img src="images/email-icon.png"><span class="map_text">Demo@gmail.com</span></li>
    			</ul>
    	    </div> 
    	    <div class="footer_section_2">
		        <div class="row">
    		        <div class="col-sm-6 col-md-6 col-lg-3">
    		        	<h2 class="shop_text">About Pet Shop</h2>
    		        	<p class="dummy_text">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and </p>
    		        </div>
    		        <div class="col-sm-6 col-md-6 col-lg-3">
    		        	<h2 class="shop_text">Useful Links</h2>
    		        	<div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">Pet Dictionary</span></div>
    				    <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">Help Links</span></div>
    				    <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">Pet Attitudes</span></div>
    				    <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">Call a Doctor</span></div>
    				    <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">Help a Pet</span></div>
    		        </div>
    		        <div class="col-sm-6 col-md-6 col-lg-3">
    				    <h2 class="shop_text">Overview</h2>
    				    <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">Bacerim Dictionary</span></div>
    				    <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">Help Links</span></div>
    				    <div class="image-icon"><img src="images/bulit-icon.png"><span class="pet_text">bacerim Attitudes</span></div>    				
    		        </div>
    			<div class="col-sm-6 col-md-6 col-lg-3">
    				<h2 class="adderess_text">Instagram</h2>
    				<div class="footer-img">
    					<div class="row">
    						<div class="col-sm-6">
    							<div class="footer-img"><img src="images/footer-img1.png" style="width: 100%;"></div>
    							<div class="footer-img"><img src="images/footer-img2.png" style="width: 100%;"></div>
    						</div>
    						<div class="col-sm-6">
    							<div class="footer-img"><img src="images/footer-img3.png" style="width: 100%;"></div>
    							<div class="footer-img"><img src="images/footer-img4.png" style="width: 100%;"></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			</div>
    	        </div>
    	        <div class="social-icon">
	        	    <div class="row">
	        		    <div class="col-sm-12">
	        			    <div class="icons">
	        				    <ul>
	        					    <li><a href="#"><img src="images/fb-icon.png"></a></li>
	        					    <li><a href="#"><img src="images/twitter-icon.png"></a></li>
	        					    <li><a href="#"><img src="images/google-icon.png"></a></li>
	        					    <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
	        				    </ul>
	        			    </div>
	        		    </div>
	        	    </div>
	            </div>
	            <div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html Templates</a></div>
	        </div>
    	</div>
    </div>
	<!-- section footer end -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         </script> 


   <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }
</script>
     
</body>
</html><?php /**PATH D:\laravel\pet\resources\views/home.blade.php ENDPATH**/ ?>