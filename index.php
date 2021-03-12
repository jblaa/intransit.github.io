<?php 
    $this_page = 'Freelance';
    require('inc/header.php');
?>

<!--main page content -->
    <!--showcase-->
        <div id="showcase">
            <img src="img\showcase-color.jpg" alt="" class="image_pulse" onclick="showcase()" id="showcase_img">
            <div id="showcase_text">
                <!--showcase typetext-->
                <div id="showcase_upper">
                    <h2 data-wait="3000" data-words='[
                        "Hi, I`m Jay, freelance developer / founder of:",
                        "I am a full stack (front end / back end) developer.", 
                        "I write, I travel, I go to gigs, I stuff my face.",
                        "Contact me to find out more."
                    ]' id="showcase_text_upper" class="txt-type"></h2>
                </div>
                <!--showcase title-->
                <div id="showcase_text_middle">
                    <h1>IN_TRANSIT</h1>
                </div>
                <!--showcase links-->
                <div id="showcase_link_panel">
                        <!--<a href="#services">[My Services]</a>-->
                        <a href="#portfolio">[My Portfolio]</a>
                        <a href="#contact">[Social Media]</a>
                        <a href="https://intransit.site" target="_blank">[My Personal Site]</a>
                </div>
            </div>
        </div>
    <!--services-->
        <div id="services" class="hide">
            <div id="front_end_card" class="service_card hide">
                <h1>Front End</h1>
                <div class="service_entry">
                    <i class="fab fa-html5 fa-3x"></i>
                    <h3>Website Markup in HTML5</h3>
                </div>
                <div class="service_entry">
                    <i class="fab fa-css3-alt fa-3x"></i>
                    <h3>Website Styling in CSS</h3>
                </div>
                <div class="service_entry">
                    <i class="fab fa-sass fa-3x"></i>
                    <h3>Creating Stylesheets in SASS</h3>
                </div>
                <div class="service_entry">
                    <i class="fab fa-js fa-3x"></i>
                    <h3>Page Interaction with JavaScript</h3>
                </div>
                <div class="service_entry">
                    <i class="fas fa-mobile-alt fa-3x"></i>
                    <h3>Mobile Layouts and Responsiveness</h3>
                </div>
            </div>
            <div id="back_end_card" class="service_card hide">
                <h1>Back End</h1>
                <div class="service_entry">
                <i class="fab fa-php fa-3x"></i>
                    <h3>Server / Page Functionality with PHP</h3>
                </div>
                <div class="service_entry">
                    <i class="fas fa-database fa-3x"></i>
                    <h3>Relational Databses in SQL & phpMyAdmin</h3>
                </div>
                <div class="service_entry">
                    <i class="fab fa-wordpress fa-3x"></i>
                    <h3>Content Management, including WordPress</h3>
                </div>
                <div class="service_entry">
                    <i class="fas fa-code-branch fa-3x"></i>
                    <h3>Fetch and REST API Utilization</h3>
                </div>
                <div class="service_entry">
                    <i class="fab fa-git-square fa-3x"></i>
                    <h3>Deployment Management with Git</h3>
                </div>
            </div>
        </div>
    <!--portfolio-->
        <div id="portfolio">
            <div class="portfolio_card" id="portfolio_3">
                <h1>Recent</h1><h1>Projects</h1>
                <div id="arrow_array">
                    <h1 id="chev_0">></h1>
                    <h1 id="chev_1">></h1>
                    <h1 id="chev_2">></h1>
                    <h1 id="chev_3">></h1>
                    <h1 id="chev_4">></h1>
                    <h1 id="chev_5">></h1>
                </div>
            </div>
            <div class="portfolio_card" id="portfolio_2">
                <a href="">
                    <img src="img\portfolio_2.png" alt="">
                    <p>10 March 2021</p>
                    <h1>IN_T | Freelance</h1>
                    <p>My professional dev portfolio.</p>
                </a>
            </div>
            <div class="portfolio_card" id="portfolio_1">
                <a href="https://intransit.site/portfolio_page/008-fugas/" target="_blank">
                    <img src="img\portfolio_1.png" alt="">
                    <p>08 March 2021</p>
                    <h1>F U Gas</h1>
                    <p>Crypto trading gamification project.</p>
                </a>
            </div>
            <div class="portfolio_card" id="portfolio_0">
                <a href="https://intransit.site/portfolio_page/009-in_transit/" target="_blank">
                    <img src="img\portfolio_0.png" alt="">
                    <p>29 December 2020</p>
                    <h1>IN_TRANSIT</h1>
                    <p>Personal writing / project porftolio.</p>
                </a>
            </div>
        </div>
    <!--contact me-->
        <div id="contact">
            <div id="contact_left" class="contact_area">
                <div id="contact_container">
                    <h1>Find Me On The Internet</h1>
                    <h3>Have you got cool idea that you want to see brought to life? Do you want to partner with a flexible new developer that will do it pretty cheap as he builds up his portfolio? Contact me via the below social links or the <a href="contact.php">[contact page]</a> on my personal site and I'll get back to you ASAP.</h3>
                    <div id="social_block">
                        <a href="https://gist.github.com/jblaa" target="_blank"><i style="color:#f34f29;" class="social_icon fab fa-github fa-2x"></i></a>
                        <a href="https://www.linkedin.com/in/jovaniezayas/" target="_blank"><i style="color:#0e76a8;" class="social_icon fab fa-linkedin fa-2x"></i></a>
                        <a href="https://www.instagram.com/jay.dont.gram/" target="_blank"><i style="color:#fb3958;" class="social_icon fab fa-instagram fa-2x"></i></a>
                        <a href="https://www.intransit.site/" target="_blank"><i style="color:#00749c;" class="social_icon fab fa-wordpress fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <!--<div id="contact_right" class="contact_area">
                <h1>Email Me Directly</h1><br>
                <form method="post" action="none" target="_blank">
                    <label for="name">Your Name</label><br>
                    <input type="text" name="lname" class="no-outline" required><br><br>
                    <label for="email">Your Email Address**</label><br>
                    <input type="email" name="email" class="no-outline" required><br>
                    <small>**I won't SPAM you or sell your email address</small><br><br>
                    <label for="message">Your Message</label><br>
                    <textarea name="message" required></textarea><br>
                    <input id="myBtn" class="btn myModal" type="submit" name="submit" value="Message Me">
                </form>
            </div>-->
        </div>
    <!--testimonials-->
    <!--companies I've worked with-->

<!--footer require-->    
<?php require('inc/footer.php'); ?> 