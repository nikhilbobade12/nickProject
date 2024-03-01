<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage Hall Booking System</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
</head>

<body>
    <!-- Navbar Section -->
    <nav>
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="a">
                <a href="#">Marriage Hall Booking</a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="signup.php">Login</a></li>
                    <!-- Add more menu items as needed -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Homepage -->
    <header>
        <div class="container">
            <h1>Welcome to Marriage Hall Booking</h1>
            <p>Find the perfect venue for your special day. Browse our curated selection of marriage halls and book with
                ease.</p>
            <div class="search-bar">
                <form action="search-results.html" method="GET">
                    <input type="text" name="location" placeholder="Enter Location">
                    <input type="date" name="date" placeholder="Select Date">
                    <input type="submit" value="Search">
                </form>
            </div>
        </div>
    </header>

    <!-- Featured Halls Section -->
    <section class="featured-halls">
        <div class="container">
            <h2 class="featured-heading">Featured Halls</h2>
            <div class="hall-list">
                <div class="hall-item">
                    <img src="hall1image.jpeg" alt="Hall 1">
                    <h3>Hall 1</h3>
                    <p>swagat lwans shrirampur</p>
                    <p>Capacity: 100 guests</p>
                    <a href="hall1.php">View Details</a>
                </div>
                <div class="hall-item">
                    <img src="hall2.img1.avif" alt="Hall 2">
                    <h3>Hall 2</h3>
                    <p>Location: City, Country</p>
                    <p>Capacity: 150 guests</p>
                    <a href="hall2.php">View Details</a>
                </div>
                <div class="hall-item">
                    <img src="hall1image.jpeg" alt="Hall 3">
                    <h3>Hall 3</h3>
                    <p>Location: City, Country</p>
                    <p>Capacity: 200 guests</p>
                    <a href="hall-details.html">View Details</a>
                </div>

                <div class="hall-item">
                    <img src="hall1image.jpeg" alt="Hall 1">
                    <h3>Hall 1</h3>
                    <p>swagat lwans shrirampur</p>
                    <p>Capacity: 100 guests</p>
                    <a href="hall1.php">View Details</a>
                </div>
                <div class="hall-item">
                    <img src="hall2.img1.avif" alt="Hall 2">
                    <h3>Hall 2</h3>
                    <p>Location: City, Country</p>
                    <p>Capacity: 150 guests</p>
                    <a href="hall2.php">View Details</a>
                </div>
                <div class="hall-item">
                    <img src="hall1image.jpeg" alt="Hall 3">
                    <h3>Hall 3</h3>
                    <p>Location: City, Country</p>
                    <p>Capacity: 200 guests</p>
                    <a href="hall-details.html">View Details</a>
                </div>
                <!-- Add more hall-item divs as needed -->
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form">
        <div class="container">
            <h2>Contact Us</h2>
            <form action="#" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <input type="submit" value="Send Message">
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Marriage Hall Booking. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>