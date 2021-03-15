<?php
    #GLOBAL VARIABLES / SESSION
        require('config/config.php');
        require('config/db.php');
        session_start(); //start the session

    #CHECK CURRENT PAGE 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta tags--> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true">
    <!-- builds page title based on $this_page variable above -->
        <title>IN_TRANSIT | <?php echo $this_page;?></title>
    <!--fontawesome for icons-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" crossorigin="anonymous">
    <!--favicon-->
        <link rel="icon" type="image/png" href="img/logo.png"/>
    <!-- local stylesheets -->
        <link rel="stylesheet" href="css\style.min.css">
        <!--<link rel="stylesheet" href="css\modal.css">-->

</head>
<body class="<?php if ($this_page == 'Freelance') {echo 'bandw';}; ?>" id="body">
    <div <?php if ($page_type == 'landing') {echo 'id="page_wrapper_l"';} else {echo 'id="page_wrapper"';};?>>
    <!--nav bar-->
        <nav>
            <a id="logo" href="index.php"><i style="color:#2a9fd6;" class="fas fa-<?php if ($this_page == 'Freelance') {echo 'history';} /*else {echo 'home';}*/; ?> fa-2x"></i></i><?php //if ($page_type != 'landing') {echo ' [freelance.intransit.site]';};?></a>
            <ul class="menu">
                <li><a href="index.php">[Home]</a></li>
                <li><a href="portfolio.php">[Portfolio]</a></li>
                <li><a href="contact.php">[Contact]</a></li>
            </ul>
        </nav>