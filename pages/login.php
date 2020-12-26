<?php
session_start();
include "../core/core.php";

/*
 Get the id of the page that requires user to be logged in
 */
$id = $_GET['id'];

if (isset($_POST['submit'])){
    // get the entered credentials
    $username = $_POST['username'];
    $password = $_POST['password'];

    // check validity of credentials
    login($username, $password, $id);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login page</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <div class="container form-container">
        <form method="post" action="<?php echo "login.php?id=".$id; ?>">

            <input type="text" name="username" placeholder="Username"><br>
            <input type="text" name="password" placeholder="Password"><br>

            <input type="submit" name="submit" value="Login"><br>
        </form>
    </div>
</body>

</html>
