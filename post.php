<?php
    #Get DB info
        require('config/db.php');
    #GET POST
        //get id
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        //create a query for posts
        $query = 'SELECT * FROM portfolio_posts WHERE id = '.$id;
        //get the results
        $result = mysqli_query($conn, $query);
        //fetch data
        $post = mysqli_fetch_assoc($result);
        //free the result
        mysqli_free_result($result);
        //close connection 
        mysqli_close($conn);

    $this_page = $post['projectname'];
    $page_type = 'portfolio';
    require('inc/header.php');
?>

<div class="portfolio_page_wrapper">
    <div class="portfolio_title_block">
        / <a class="pulse_on_hover" href="index.php">[Home]</a> / <a class="pulse_on_hover" href="portfolio.php">[Portfolio]</a> / <?php echo $post['projectname']?><br><br>
        <h3><?php echo $post['headline'];?></h3>
        <h1>[<?php echo $post['projectname'];?>]</h1>
        <p><?php echo $post['description'];?></p>
        <p><small><?php echo $post['publishdate'];?> by <?php echo $post['projectcreator'];?></small></p>
    </div>
    <div class="portfolio_image_block">
        <img src="<?php echo $post['imageurl'];?>" alt="">
        <div class="portfolio_under_image">
            <a href="<?php echo $post['projectlink'];?>" target="_blank"><button class="btn pulse_on_hover">Go to: <?php echo $post['projectname'];?></button></a>
            <h3>Initial Release: <?php echo $post['projectdate'];?></h3>
        </div>
    </div>
    <div class="portfolio_description_block">
        <h2>About this project:</h2>
        <?php echo $post['projectabout'];?>
    </div>
    <div class="portfolio_technical_sheet">
        <h2>Technical Sheet:</h2>
        <p>Code and concepts utilised in completing this project:</p>
        <ul>
            <?php echo $post['projecttech'];?>
        </ul>
    </div>
    <div class="portfolio_resources">
        <h2>Resources and Tools:</h2>
        <p>Resources and tools used in completing this project:</p>
        <ul>
            <?php echo $post['projecttools'];?>
        </ul>
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
                <input type="submit" id="form_submit" name="form_submit" value="Send" class="btn pulse_on_hover">  
            </div>
        </form>
    </div>
    <a class="pulse_on_hover" href="portfolio.php"><< [Back to Portfolio]</a><br><br>
</div>

<!--footer require-->    
<?php require('inc/footer.php'); ?> 