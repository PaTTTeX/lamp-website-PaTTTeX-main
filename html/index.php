<?php

session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if (count($results) > 0) {
		$user = $results;
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>FoxFord Rescue Ranch</title>
	<link href="css/main.css" rel="stylesheet" />
</head>

<body>
	<div id="nav">
		<ul id="nav-bar">
			<a href=""><img src="photos/logo.png" class="logo"></a>
			<a href="" style="margin-right: 20px;"><img src="photos/text.png"></a>

			<li><a href=""><button class="main-button">Adopt</button></a></li>
			<li><a href=""><button class="main-button">Donate</button></a></li>
			<li><a href=""><button class="main-button">Shop</button></a></li>
			<?php
			if (!empty($user)) {
				header('Location: home.php');
			} else {
				echo '<h3><a href="login.php" id="login-register">Login</a> or <a href="register.php" id="login-register">Register</a></h3>';
			}
			?>
		</ul>

		<ul id="nav-bar-bottom">
			<li><a href="">Services</a></li>
			<li><a href="">About Us</a></li>
			<li><a href="">Gallery</a></li>
			<li><a href="">Contact</a></li>
		</ul>
	</div>

	<div id="container">
		<div class="slideshow-container">
			<div class="mySlides fade">
				<img src="photos/background.png" style="width:100%">

				<h1 class="image-text">
					Where Every <br>
					<p style="margin: 0; color: orange;">Paw</p>
					Finds a Home
					<br>
					<a href=""><button class="main-button" style="width: 200px; font-size: 24px;">Adopt</button></a>
				</h1>

			</div>

			<div class="mySlides fade">
				<img src="photos/background2.jpg" style="width:100%">

				<h1 class="image-text">
					<p style="margin: 0; color: orange;">Your Generosity</p>
					Their Second Chance
					<br>
					<button class="main-button" style="    width: auto; height: auto; font-size: 35px; margin-right: 0;"><a href="">Donate
							Today</a></button>
				</h1>
			</div>


			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
			</div>
		</div>

		<div class="services-cards">
			<h1 style="font-size: 60px; margin: 40px;">How to help</h1>
			<div class="cards">
				<div class="card">
					<img src="photos/cards/donation.png">
					<h1>Donate</h1>
					<p>
						Foxford Rescue Ranch depends on public generosity to continue our vital rescue efforts.
					</p>
					<br>
					<a href="">Read More</a>
				</div>

				<div class="card">
					<img src="photos/cards/events.png">
					<h1>Attend Events</h1>
					<p>
						Inform people about upcoming events hosted by Foxford Rescue Ranch, such as adoption drives,
						fundraising events, or educational workshops.
					</p>
					<br>
					<a href="">Read More</a>
				</div>

				<div class="card">
					<img src="photos/cards/supplies.png">
					<h1>Donate Supplies</h1>
					<p>
						Donate essential supplies such as pet food, bedding, toys, cleaning supplies, and medical
						supplies.
					</p>
					<br>
					<a href="">Read More</a>
				</div>

				<div class="card">
					<img src="photos/cards/foster.png">
					<h1>Foster Animals</h1>
					<p>
						Explain the importance of fostering animals to provide temporary homes and care, and provide
						information on how to become a foster caregiver.
					</p>
					<br>
					<a href="">Read More</a>
				</div>

				<div class="card">
					<img src="photos/cards/sponsor.png">
					<h1>Sponsor an Animal</h1>
					<p>
						Offer opportunities for people to sponsor an animal by contributing towards their care,
						veterinary expenses, and rehabilitation.
					</p>
					<br>
					<a href="">Read More</a>
				</div>

				<div class="card">
					<img src="photos/cards/volunteer.png">
					<h1>Volunteer</h1>
					<p>
						Volunteers are the heart of Foxford Rescue Ranch. Join us in making a difference for animals in
						need.
					</p>
					<br>
					<a href="">Read More</a>
				</div>
			</div>
		</div>

		<div class="about-us">
			<h1 style="font-size: 60px; padding: 40px;">Who are we?</h1>
			<div class="about-us-content">
				<div class="flex1">
					<p class="multiline">
						<b style="text-decoration: underline;">Foxford Rescue Ranch</b>
						<br>
						our mission is to provide refuge to animals in need, offering them the care and love they deserve while we work to find them suitable forever homes.
						<br><br>
						What sets us apart is our commitment to wildlife rehabilitation and our dedication to sustainable farming and homesteading practices. Join us as we manage our homestead and care for the animals we've rescued, including chickens, ducks, rabbits, piglets, sheep, goats, geese, pigeons, turtles, and various livestock.
						<br><br>
						At Foxford Rescue Ranch, our goal is to demonstrate how animal rescue can seamlessly integrate with sustainable farming and homesteading, inspiring others to follow suit.
					</p>
				</div>
				<div class="flex2">
					<img src="photos/whoarewe.jpg" class="flex2img">
				</div>
			</div>
		</div>

	</div>

	<footer class="footer">
		<div class="container">
			<div class="footer-logo">
				<img src="photos/logo-text.png" alt="Logo">
			</div>
			<nav class="footer-nav">
				<ul>
					<li><a href="#">Services</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<div class="social-icons">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</div>
		</div>

		<div class="copyright">
			&copy; 2024 Foxford Rescue Ranch
		</div>
	</footer>

	<script src="https://kit.fontawesome.com/d0cf862544.js" crossorigin="anonymous"></script>
	<script src="js/slideshow.js"></script>
</body>

</html>