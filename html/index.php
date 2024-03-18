<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
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
            <img src="photos/logo-text.png">
            <li><button class="main-button"><a href="">Adopt</a></button></li>
            <li><button class="main-button"><a href="">Donate</a></button></li>
            <li><button class="main-button"><a href="">Shop</a></button></li>
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
                    <button class="main-button"
                        style="    width: 200px; height: 80px; font-size: 35px; margin-right: 0;">
                        <a href="">Adopt</a>
                    </button>
                </h1>

            </div>

            <div class="mySlides fade">
                <img src="photos/background2.jpg" style="width:100%">

                <h1 class="image-text">
                    <p style="margin: 0; color: orange;">Your Generosity</p>
                    Their Second Chance
                    <br>
                    <button class="main-button"
                        style="    width: auto; height: auto; font-size: 35px; margin-right: 0;"><a href="">Donate
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
    </div>
    <script src="js/slideshow.js"></script>
</body>

</html>