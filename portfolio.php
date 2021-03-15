<?php

    #this page info and requires
        $this_page = 'Portfolio Home';
        $page_type = 'portfolio';
        require('inc/header.php');

    #GET POSTS
        //create a query for posts
        $query = 'SELECT * FROM portfolio_posts';
        //get the results
        $result = mysqli_query($conn, $query);
        //fetch data
        $posts = array_reverse(mysqli_fetch_all($result, MYSQLI_ASSOC));
        //free the result
        mysqli_free_result($result);
        //close connection 
        mysqli_close($conn);
?>

<div class="portfolio_page_wrapper">
    <!--portfolio page title block-->
        <div class="portfolio_title_block">
            / <a class="pulse_on_hover" href="index.php">[Home]</a> / PORTFOLIO<br><br>
            <h1>Portfolio Home</h1>
            <h3>Here's what I've been working on...</h3>
        </div>
    <!--portfolio cards-->
        <div class="port_filter">
        </div>
        <div class="port_card_area">
            <?php foreach ($posts as $post) : ?>
                <a href="post.php?id=<?php echo $post['id'];?>">
                    <div class="port_card" onmouseover="playBkg(<?php echo $post['id'];?>)" onmouseout="stopBkg(<?php echo $post['id'];?>)">
                        <img id="image_<?php echo $post['id'];?>" src="img/preview_<?php echo $post['id'];?>.png" alt="where is the image??">
                        <div class="port_card_text">
                            <p><?php echo $post['publishdate'];?> by <?php echo $post['projectcreator'];?></p>
                            <h1 style="word-wrap: break-word;"><?php echo $post['projectname'];?></h1>
                            <h3><?php echo $post['headline'];?></h3><br>
                            <p><small><?php echo $post['projectabout'];?></small></p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <a class="pulse_on_hover" href="index.php"><< [Back to Home]</a><br><br>
</div>

<!--footer require-->    
<?php require('inc/footer.php'); ?> 