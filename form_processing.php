<?php

require_once('templates/header_php_includes.php');

if (isset($_POST['submit'])) {
    //form submitted
    $username = $_POST["username"];
    $password = $_POST["password"];
    $message = "There was a problem logging in.";

    if($username == "Dan" && $password == "pas"){
        redirect_to("home.php");
    }
} else {
    $username = "";
    $message = "Please login:";    
}

require_once('templates/header_html.php');
?>

<h1> This is the form Page </h1>

<?php echo "<div> $message </div>"; ?>

<form action="form_processing.php" method="post" />
    Username: <input type="text" name="username" value="<?php htmlspecialchars($username); ?>"><br />
    Password: <input type="password" name="password" value="" /><br />
    <br />
    <input type="submit" name="submit" value="submit" />
</form>

<?php
require_once('templates/footer_html.php');
?>
