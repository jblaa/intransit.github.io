<?php 
    $this_page = 'intransit.site';
    $page_type = 'portfolio';
    require('inc/header.php');
?>

<div class="portfolio_page_wrapper">
    <div class="portfolio_title_block">
        <h3>My first website (that I actually published)...</h3>
        <h1>[intransit.site]</h1>
        <p>My personal writing and project portfolio</p>
    </div>
    <div class="portfolio_image_block">
        <img src="img/001-in_transit.gif" alt="">
    </div>
    <div class="portfolio_description_block">
        <h2>About this project:</h2>
        <p>I've built quite a few websites before this, none of them were very good. I'm not saying this project was perfect, but it was the first website that I felt proud enough about to publish. <strong><em>intransit.site</strong></em> was the result of 8 months of hard work studying web development from the ground up.</p><br>
        <p>Did I cheat a bit and use a built WordPress themes and widgets? Yes. Was this still a massive technical challenge? Also, yes. I can definitely see why people pay others to do this stuff for them.</p>
    </div>
    <div class="portfolio_technical_sheet">
        <h2>Technical Sheet:</h2>
        <p>Code and concepts utilised in completing this project:</p>
        <ul>
            <li>Markup: HTML5 / PHP, WordPress</li>
            <li>Theme / Stylesheets: WordPress, Bridge Theme</li>
            <li>Specific Styling: CSS</li>
            <li>Mobile Responsive Design: WordPress</li>
            <li>Content Management: WordPress, myPhpAdmin</li>
            <li>Widgets and Plugins: Bridge Theme, Vanilla JS</li>
        </ul>
    </div>
    <div class="portfolio_resources">
        <h2>Resources and Links:</h2>
        <ul>
            <li><a href="https://wordpress.org/" target="_blank">WordPress</a>: free website builder and content management system</li>
            <li><a href="https://themeforest.net/item/bridge-creative-multipurpose-wordpress-theme/7315054" target="_blank">Bridge Theme</a>: WordPress theme with layout, stylesheets, widgets and other site functionality.</li>
            <li><a href="https://serverpress.com/" target="_blank">ServerPress Desktop Server</a>: make a local installation of a WordPress site</li>
            <li><a href="https://www.youtube.com/channel/UC29ju8bIPH5as8OGnQzwJyA" target="_blank">Traversy Media (YouTube)</a>: online web development & programming tutorials</li>
        </ul><br>
        <p>Tools used: <a href="https://code.visualstudio.com/" target="_blank">VSCode</a> (Code Editor), <a href="https://filezilla-project.org/" target="_blank">FileZilla</a> (FTP), <a href="https://brave.com/" target="_blank">Brave</a> (Browser)</p>
    </div>
    <div class="portfolio_contact">
        <h2>Like what you see?</h2>
        <p>Get in touch and we can discuss development options for your project, product, business...</p><br><br>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="portfolio_contact_form">
            <div class="portfolio_input">
                <input type="text" name="name" required>
                <label for="name">Your Name</label>
            </div>
            <div class="portfolio_input">
                <input type="email" name="email" required>
                <label for="email">Your Email</label>
            </div>
            <div class="portfolio_msg_input" required>
                <textarea name="message"></textarea><br>
                <label for="message">Your Message</label>
            </div>
            <div class="portfolio_form_submit">
                <input type="submit" id="form_submit" name="form_submit" value="Send" class="btn">  
            </div>
        </form>
    </div>
</div>

<!--footer require-->    
<?php require('inc/footer.php'); ?> 