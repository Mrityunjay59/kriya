<!DOCTYPE html>
<html>

<head>
	<title>Kriya - the best way to your problems </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
		integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />

	
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

	
		
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
		



</head>

<body>
	<header>
		<nav>
			<div class="logo">
				<!-- <span id="blue">kRIYA</span><span style="font-style: italic;"></span> -->
				<img src="./images/logo.png" alt="logo" width="70px" height="70px" />

			</div>
			<div class="menu">
				<a href="#">HOME</a>
				<a href="#about">ABOUT</a>
				
				<a href="#services">DESCRIPTION</a>
				<a href="#members">REVIEWS</a>
				<a href="#work">FEATURES</a>
				<a href="#contact">CONTACT</a>
				
<?php 
session_start();
if (isset($_SESSION['username']) ) {

	$cookie_name = "user";
$cookie_value = $_SESSION['username'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
	
	
	echo "<a class=\"btn\" style=\"font-weight:bold;\" href=\"floating-login-signup/logout.php\"
	target=\"_blank\">Sign out</a>" ;


    // last request was more than 30 minutes ago
     // destroy session data in storage
}
else{
	
	echo "<a class=\"btn\" style=\"font-weight:bold;\" href=\"floating-login-signup/register.php\"
	target=\"_blank\">Sign in</a>" ;

	
}

?>
				
			</div>

			<div class="icon">
				<i class="fab fa-instagram" href></i>
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-google-plus-g"></i>
				<i class="fab fa-github"></i>
			</div>

		</nav>


		<div class="container">
			<div class="left">
				<img src="images/YOGA/yoga.jpg">
			</div>
			<div class="right">
				<p>Aim to make you</p>
				<h1>Healthy and Fit</h1>
				<p>Bring the Problems to us. We have a Solution for you.</p>
				<button class="btn">Join us</button>
			</div>
		</div>
	</header>
	<section id="about">
		<div class="about-row">
			<div class="about-left-col">
				<h1> About <span id="blue"> us</span></h1>
				<p id="p-title">We focus mainly on making Fitness and health related Features accessible to Every corner
					of this
					world</p>
				<p>
					Our Aim is make fitness related functionalities accessible to all the people and Start their Journey
					toward fitness easily and with best fitness coaches. suggestions and tips.
					Here we provide fitness tracks like :
				<ul class="List">
					<li>Weight Loss and Gain.</li>
					<li>Muscle Gain.</li>
					<li>Fit from Home.</li>
					<li>Yoga.</li>
					<li>Meditation.</li>
					<li>Meal Chart Plans.</li>
				</ul>
				</p>
				<p>
					Join us to resolve any of the above problems.
				</p>
				<button class="c-btn"><a href="#services"></a>Read more</button>
			</div>
			<div class="about-right-col">
				<img
					src="images/YOGA/old-couple-relaxing-sitting-lotus-pose-senior-men-elderly-women-meditating-sitting-lotus-position-park-125354602.jpg">
			</div>
		</div>
	</section>
	<section id="signup">
		<div class="signup-row">
			<div class="signup-left-col">
				<img src="images/YOGA/kids-doing-yoga.jpg">
			</div>
			<div class="signup-right-col">
				<h1>BUILD <span id="blue">IDEAL PERSONALITY</span></h1>
				<h2> WITH US</h2>
				<br>
				<h3>The One Word Answer To Healthy Physique and Mental Well Being For all Age Group is <span id="bluee">YOGA</span> </h3>
				<h3><span id="bluee">KRIYA </span>is your one step solution for all the problems realated to health.</h3>
				<button class="c-btn "><a   href="floating-login-signup/register.php"
	target="_blank">Sign up</a></button>
			</div>
		</div>
	</section>
	
	<!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/YOGA/gallery4.jpg" style="width:100%">
  <div class="text">Doing Yoga</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/YOGA/yoga.jpg" style="width:100%">
  <div class="text"> Yoga assana</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/YOGA/gallery11.jpg" style="width:100%">
  <div class="text">Yoga</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
	

	<section id="services">
		<div class="services-info">
			<h1>About <span id="blue"> KRIYA </span>Benefits</h1>
			<p>What we Provide</p>
		</div>
		<div class="services-row">
			<div class="services-box">
				<i class="fas fa-shoe-prints"></i>
				<h2 class="service-box-text">Calorie Counter</h2>
				<p class="service-box-details"> Track your daily calorie intake and burned. </p>
			</div>

			<div class="services-box">
				<i class="fas fa-calculator"></i>
				<h2 class="service-box-text">BMI calculator</h2>
				<p class="service-box-details"> BMI is an estimate of body fat and measure your future body risk.</p>
			</div>

			<div class="services-box">
				<i class="fas fa-blog"></i>
				<h2 class="service-box-text">Blogs</h2>
				<p class="service-box-details"> See Different Blogs to get daily advice to accelerate your Fitness
					journey.</p>
			</div>

			<div class="services-box">
				<i class="fas fa-utensils"></i>
				<h2 class="service-box-text">Healthy Food</h2>
				<p class="service-box-details"> Bored with some set of traditional healthy food. Try this !</p>
			</div>

			<div class="services-box">
				<i class="fas fa-scroll"></i>
				<h2 class="service-box-text">Meal chart</h2>
				<p class="service-box-details"> Confused what to eat? Take a survey and get a personalized Meal
					chart.</p>
			</div>

			<div class="services-box">
				<i class="fas fa-running"></i>
				<h2 class="service-box-text">Workout training</h2>
				<p class="service-box-details"> Don't know how to do and what exercise to do ? Just Visit our feature in
					website. </p>
			</div>

		</div>
	</section>


	<section id="members">
		<div class="services-info">
			<h1>Our <span id="blue">Users</span></h1>
			<p>What our product user says</p>
		</div>


		<div class="member-card">


			<img src="images/YOGA/profile.jpeg">
			<img src="images/YOGA/WhatsApp Image 2022-07-20 at 7.43.25 PM nitish.jpeg">
			<img src="images/YOGA/IMG_20220308_221307.jpg">
			<img src="images/YOGA/WhatsApp Image 2022-07-20 at 7.50.22 PM new.jpeg">
			
			<p id="infoo">
				<br>
				Having a <span id="highlight">Fantastic Experience</span> with this website. They helped me a lot in
				reducing
				my weight and bring confidence in my <span id="highlight">worklife and dailylife</span>, too during
				pandemic
				by staying at home. As all the gym are closed, i strongly suggest to use <span id="bluee">KRIYA </span>
			</p>
			<h2>~ Mrityunjay Raj (
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
				)
			</h2>

			<div class="icon">
				<i class="fab fa-instagram" href></i>
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-twitter"></i>
			</div>
		</div>
	</section>

	<section id="work">
		<div class="services-info">
			<h1>Our<span id="blue"> Features</span></h1>
			<p>to use them just click on it</p>
		</div>
		<div class="services-row">
			<div class="hovereffect work-box">
				<img class="img-responsive" src="images/BMI_Calculator.webp" alt="">
				<div class="overlay">
					<h2>B.M.I Calculator</h2>
					<a class="info" href="bmi-calculator/bmi.html" target="_blank">Visit here</a>
				</div>
			</div>
			<div class="hovereffect work-box">
				<img class="img-responsive" src="images/diet-plan.png" alt="">
				<div class="overlay">
					<h2>Diet Plan</h2>
					<a class="info" href="Diet Plan/chart.html" target="_blank">Visit here</a>
				</div>
			</div>
			<div class="hovereffect work-box">
				<img class="img-responsive" src="images/healthy-food.png" alt="">
				<div class="overlay">
					<h2>Healthy Food</h2>
					<a class="info" href="meal-search-api-vanilla-js-master/index.html" target="_blank">Visit here</a>
				</div>
			</div>
			<div class="hovereffect work-box">
				<img class="img-responsive" src="images/workout.png" alt="">
				<div class="overlay">
					<h2>Workout</h2>
					<a class="info" href="Workout section/index.html" target="_blank">Visit here</a>
				</div>
			</div>
			<div class="hovereffect work-box">
				<img class="img-responsive" src="images/Fit-Blogs.png" alt="">
				<div class="overlay">
					<h2>Fitness Blogs</h2>
					<a class="info" href="blog/blog.html" target="_blank">Visit here</a>
				</div>
			</div>
			<div class="hovereffect work-box">
				<img class="img-responsive" src="images/Calorie-counter.png" alt="">
				<div class="overlay">
					<h2>Calories Counter</h2>
					<a class="info" href="calorie-counter/Calorie-Calculator/index.html" target="_blank">Visit here</a>
				</div>
			</div>
		</div>
	</section>

	<section id="contact">
		<div class="services-info">
			<h1>Get in Touch for <span id="blue">Registration</span></h1>
			<p> We are Available</p>
		</div>

		<div class="contact-row">
			<div class="contact-left-col">
				<div class="form">
					<input type="text" name="" placeholder="E-mail">
					<input type="text" name="" placeholder="Subject"><br>
					<input type="text" name="" placeholder="Service needed"><br>
					<textarea rows="10" cols="40" placeholder="Message"></textarea>
					<br> <button class="c_btn">Send</button>
				</div>
			</div>
			<div class="contact-right-col">
				<span><i class="fas fa-envelope-open-text"></i> E-mail</span>
				<p>gauravabhishekpandey@gmail.com</p><br>
				<span><i class="fa fa-phone" aria-hidden="true"></i> Call us @</span>
				<p>98797874544</p><br>
				<span><i class="fa fa-location-arrow" aria-hidden="true"></i> Address</span>
				<p>Nitte Meenakshi Institute of Technology,<br>
					Bengaluru, 560064
				</p>
			</div>
		</div>


	</section>


	<section id="footer">
		<h1>Kriya<span id="blue" style="font-style: italic;"></span></h1>

		<p>&copy; Nitte Meenakshi Institute of Technology, Bengaluru</p>
		<div class="icon">
			<i class="fab fa-instagram" href></i>
			<i class="fab fa-facebook-f"></i>
			<i class="fab fa-twitter"></i>
			<i class="fab fa-google-plus-g"></i>
			<i class="fab fa-github"></i>
		</div>
	</section>

	<script type="text/javascript" src="home.js"></script>
</body>

</html>