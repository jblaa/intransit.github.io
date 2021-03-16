<?php
    #this page info and requires
        $this_page = 'Portfolio';
        $page_type = 'portfolio';
        require('inc/header.php');
        
    #GET ID
        //get id
        $id = mysqli_real_escape_string($conn, $_GET['id']);

    #check for form submission
        if(filter_has_var(INPUT_POST, 'submit')){
            //get form data
                $id = $_POST['post_id'];
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);
            //check required fields
            if (!empty($name) && !empty($email) && !empty($message)) {
                #SEND AN EMAIL
                //recipient email
                $toEmail = 'info@intransit.site';
                //subject
                $subject = 'Contact Request from '.$name;
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>';
                //email headers{
                    $headers = "MIME-Version: 1.0" ."\r\n";
                    $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
                //addl headerss
                    $headers .= "From: " .$name. "<".$email.">". "\r\n";
                    if(mail($toEmail, $subject, $body, $headers)){
                        //email sent
                        $msg = 'Your message has been sent';
                        $msgClass = 'alert-success';
                    } else {
                        $msg = 'Your message has NOT been sent';
                        $msgClass = 'alert-danger';
                    };
            }
        } else {
            //Failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }

    #GET POST
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
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="portfolio_contact_form" onsubmit="alert('Your message has been sent.')">
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
                <input type="submit" id="submit" name="submit" value="Send" class="btn pulse_on_hover">  
            </div>
            <input type="hidden" id="post_id" name="post_id" value="<?php echo $id;?>">
        </form>
    </div>
    <a class="pulse_on_hover" href="portfolio.php"><< [Back to Portfolio]</a><br><br>
</div>

<!--footer require-->    
<?php require('inc/footer.php'); ?> 