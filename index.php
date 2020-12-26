<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main page</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
<div class="container">
    <?php

        if (isset($_SESSION['logged_in'])){
            // display logout button if user is logged in
            echo "<a href='./pages/logout.php'>Logout</a> <br>";
        }else{
            // if user is logged out, display login link
            echo "<a href='./pages/login.php?id=10'>Login</a><br>";
        }
    ?>

    <a href="./pages/book.php?id=1">Book service</a><br>
    <a href="./pages/post_article.php?id=2">Create article</a>
    <br>

</div>

</body>
</html>