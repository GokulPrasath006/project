<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Document</title>
</head>
<body class="main-content">
    <section class="section home" id="home">
        <div class="home-content">
            <div class="left column">
                <div class="image-shape"></div>
                <div class="image">
                    <img src="image/rio.jpg" alt="">
                </div>
            </div>
            <div class="right column">
                <h1 class="name">
                    Hi I'm <span class="name-span">Gokul Prasath</span> a Student
                </h1>
                <p>Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development rather than software development. </p>
                <div class="button">
                    <a href="logout.php" class="main-btn">
                        <span class="btn-text">Logout</span>
                        <span class="btn-icon"><i class="fa-solid fa-sign-out"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section about" id="about">
        <div class="title">
            <h2>About <span>me</span><span class="bg-text">my stats</span></h2>
        </div>
        <div class="about-content">
            <div class="left column">
                <h2>Information about me</h2>
                <p>I have known and Experienced Person in HTML & PHP, I've been coding for the last 2 months, I'll be able to handle web designing with ease & I'm well knowledged in CSS & the Font design,I have done more than 5+ Web design till now & you can get it in affordable price with quality expectations.   
                </p>
            </div>
            <div class="right column">
                <div class="abt-item">
                    <div class="abt-text">
                        <p class="large-text">1+</p>
                        <p class="small-text">projects <br>completed</p>
                    </div>
                </div>
                <div class="abt-item">
                    <div class="abt-text">
                        <p class="large-text">1</p>
                        <p class="small-text">month <br>experience</p>
                    </div>
                </div>
                <div class="abt-item">
                    <div class="abt-text">
                        <p class="large-text">1+</p>
                        <p class="small-text">happy <br>customers</p>
                    </div>
                </div>
                <div class="abt-item">
                    <div class="abt-text">
                        <p class="large-text">5+</p>
                        <p class="small-text">customer <br>reviews</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-stats">
            <div class="title">My Experience</div>
            <div class="stats-content">
                <div class="bar">
                    <div class="info">
                        <span>HTML</span>
                        <span>80%</span>
                    </div>
                    <div class="line html"></div>
                </div>
                <div class="bar">
                    <div class="info">
                        <span>CSS</span>
                        <span>80%</span>
                    </div>
                    <div class="line css"></div>
                </div>
                <div class="bar">
                    <div class="info">
                        <span>JAVASCRIPT</span>
                        <span>70%</span>
                    </div>
                    <div class="line javascript"></div>
                </div>
                <div class="bar">
                    <div class="info">
                        <span>PHP</span>
                        <span>80%</span>
                    </div>
                    <div class="line php"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section portfolio" id="portfolio">
        <div class="title">
            <h2>My <span>Samples</span><span class="bg-text">my work</span></h2>
        </div>
        <p>Here is some of my works that i've done in various programming languages</p>
        <div class="portfolio-content">
            <div class="portfolio-item">
                <div class="image">
                    <img src="images/sample.jpg" alt="">
                </div>
                <div class="hover-item">
                    <h3>Sample 1</h3>
                    <div class="icons">
                        <a href="sample3.html">
                            sample-1
                        </a>
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="images/sample2.webp" alt="">
                </div>
                <div class="hover-item">
                    <h3>Sample 2</h3>
                    <div class="icons">
                        <a href="sample2.html">
                            sample-2
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="image">
                    <img src="images/sample3.jpg" alt="">
                </div>
                <div class="hover-item">
                    <h3>Sample 3</h3>
                    <div class="icons">
                        <a href="new.html">
                            sample-3
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section contact" id="contact">
        <div class="title">
            <h2>contact<span>us</span><span class="bg-text">contact us</span></h2>
        </div>
        <div class="contact-content">
            <div class="left column">
                <h2>Get in Touch</h2>
                <p>We tried to get in touch with you but you were out of town, and keep or stay in touch , meaning "remain in communication or contact,".</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="icon">
                            <i class="fa-solid fa-map-marker-alt"></i>
                            Location
                        </div>
                        <p> : Coimbatore, Tamilnadu</p>
                    </div>
                    <div class="contact-item">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                            Email
                        </div>
                        <p> : gokulprasath@gmail.com</p>
                    </div>
                    <div class="contact-item">
                        <div class="icon">
                            <i class="fa-solid fa-user"></i>
                            Education
                        </div>
                        <p> : Bharathiyar University</p>
                    </div>
                    <div class="contact-item">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                            Phone number
                        </div>
                        <p> : 9465484490</p>
                    </div>
                    <div class="contact-item">
                        <div class="icon">
                            <i class="fa-solid fa-globe"></i>
                            Languages
                        </div>
                        <p> : English, Tamil</p>
                    </div>
                </div>
                <div class="contact-items">
                    <div class="contact-icon">
                        <a href="" target="_blank">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="" target="_blank">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a href="" target="_blank">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="right column">
                <form action="" class="contact-form">
                    <div class="input-control main-cntrl">
                        <input type="text" placeholder="Name" required>
                        <input type="Email" placeholder="Email" required>
                    </div>
                    <div class="input-control">
                        <input type="text" placeholder="Enter Subject" required>
                    </div>
                    <div class="input-control">
                        <textarea cols="15" rows="10" placeholder="Message Here" required></textarea>
                    </div>
                    <div class="button">
                        <a href="" class="main-btn">
                            <span class="btn-text">Send Message</span>
                            <span class="btn-icon"><i class="fa-solid fa-download"></i></span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        Created by <a href="">Gokul Prasath</a> <span class="fa-solid fa-copyright"></span> 2022 All Rights Reserved.!
    </footer>
    <div class="navbar">
        <a href="#home">
            <i class="fa-solid fa-home"></i>
        </a>
        <a href="#about">
            <i class="fa-solid fa-user"></i>
        </a>
        <a href="#portfolio">
            <i class="fa-solid fa-briefcase"></i>
        </a>
        <a href="#contact">
            <i class="fa-solid fa-envelope-open"></i>
        </a>
    </div>


</body>
</html>