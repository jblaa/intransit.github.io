<?php
    require('inc/config.php');
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

    <!-- local stylesheet -->
        <link rel="stylesheet" href="css\style.min.css">

</head>
<body class="bandw" id="body">
    <div id="page_wrapper">
    <!--nav bar-->
        <nav>
            <a id="logo" href="index.php"><img src="img\logo.png" alt=""></a>
            <ul class="menu">
                <li><a href="contact.php">[Contact Me]</a></li>
                <li><a href="https://intransit.site" target="_blank">[My Personal Site]</a></li>
            </ul>
        </nav>