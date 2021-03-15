<?php
    //create connection (host, user, pw, db)
    $conn = mysqli_connect('localhost', DB_USER, DB_PASS, DB_NAME);

    //check connection
    if(mysqli_connect_errno()){
        // Connection failed
        echo 'failed to connect to MySQL '.mysqli_connect_errno();
    }
?>