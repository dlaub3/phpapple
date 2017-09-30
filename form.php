<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PHP Apple Home</title>
	<link rel="stylesheet" href="assets/styles/style.css">
    
</head>
<body>

<main class="main main-bg">
<h1> This is the form Page </h1>
<?php
ini_set('display_errors', 'on');



?>

<form action="form_processing.php" method="post" />
    Username: <input type="text" name="username" value=""><br />
    Password: <input type="password" name="password" value="" /><br />
    <br />
    <input type="submit" name="submit" value="submit" />
</form>


</main>
<footer>
<script src="assets/scripts/main.js" >
</script>
</footer>
</body>
</html>
