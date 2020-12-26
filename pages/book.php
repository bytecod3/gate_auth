<?php

// include core functions
require "../core/core.php";
session_start();

// get link id
if(isset($_GET['id'])){
    $book_page_id = $_GET['id'];
}else{
    $book_page_id = 0;
}


if (isset($_SESSION['logged_in'])){
    // allow user to access this page if logged in
    display_content();
}else{
    // user must log in first
    header("location: login.php?id=$book_page_id");
}

function display_content(){
    /*
     Display the rest of the if user logged in
     */
    echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Booking page</title>
                <link rel="stylesheet" href="../styles/styles.css">
            </head>
            <body>
            
            <!--Simulates an arbitrary service page-->
            <p class="booking">
                Book service here
                </p>
            </body>
            </html>
';

}


?>