<?php
// UTILITY FUNCTIONS

// check logins
function login($username, $password, $redirect_id){

    /*
    Implement your own database-details-fetching function here
    */

    if ($username == 'admin' && $password == '12345'){
        // correct credentials
        $_SESSION['logged_in'] = 'logged in';

        redirect($redirect_id);
    }else{
        // incorrect credentials
        // implement your own error-display mechanism
        echo "<div class='failed'>Failed login!</div>";
        return false;
    }

}

function redirect($URL_ID){
    /*
    Handle URL redirections
    Every link to a service page has a redirection ID that is used to redirect
    the user to that page if they log in successfully
    */

    switch ($URL_ID){
        case 0:
            header("location: members.php");
            break;
        case 1:
            header("location: book.php");
            break;
        case 2:
            header("location: post_article.php");
            break;
        //      ...
        case 10:
            header("location: login_success.php");
            break;
    }

}
