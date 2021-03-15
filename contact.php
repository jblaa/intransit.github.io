<?php

    #this page info and requires
        $this_page = 'Contact';
        $page_type = 'contact';
        require('inc/header.php');

?>

<div class="contact_page_wrapper">
    <!--contact page title block-->
        <div class="contact_title_block">
            / <a class="pulse_on_hover" href="index.php">[Home]</a> / CONTACT<br><br>
            <h1>Contact</h1>
            <h3>Let's chat about your idea, product, business...</h3>
        </div>
    <!--contact area-->
        <div class="contact_social">
            <h2>Find Me On The Internet</h2>
            <h3>I'm slowly building up the social media presence needed for an aspiring freelance developer. Feel free to check out what I'm up to and message me via the following platforms.</h3>
            <div class="contact_social_block">
                <a href="https://gist.github.com/jblaa" target="_blank"><i style="color:#f34f29;" class="social_icon fab fa-github fa-2x"></i> GitHub - Code I've written</a>
                <a href="https://www.linkedin.com/in/jovaniezayas/" target="_blank"><i style="color:#0e76a8;" class="social_icon fab fa-linkedin fa-2x"></i> LinkedIn - My professional experience</a>
                <a href="https://www.instagram.com/jay.dont.gram/" target="_blank"><i style="color:#fb3958;" class="social_icon fab fa-instagram fa-2x"></i> Instagram - Fun stuff I do</a>
                <a href="https://www.intransit.site/" target="_blank"><i style="color:#00749c;" class="social_icon fab fa-wordpress fa-2x"></i> WordPress - Writing and other personal projects</a>
            </div>
        </div>
        <div class="contact_area">
            <h2>Message Me Directly</h2>
            <h3>Little time or patience for social media? Yeah, me too. Fill out the form below to email me directly.</h3>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contact_page_form">
            <div class="contact_input">
                <input type="text" name="name" required>
                <label for="name">Your Name</label>
            </div>
            <div class="contact_input">
                <input type="email" name="email" required>
                <label for="email">Your Email</label>
            </div>
            <div class="contact_msg_input" required>
                <textarea name="message"></textarea><br>
                <label for="message">Your Message</label>
            </div>
            <div class="contact_form_submit">
                <input type="submit" id="form_submit" name="form_submit" value="Send" class="btn pulse_on_hover">  
            </div>
        </form>
        </div>
        <a class="pulse_on_hover" href="index.php"><< [Back to Home]</a><br><br>
</div>

<!--footer require-->    
<?php require('inc/footer.php'); ?> 