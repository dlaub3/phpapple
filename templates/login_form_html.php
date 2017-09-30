
<form action="form_processing.php" method="post" />
    Username: <input type="text" name="username" value="<?php htmlspecialchars($username); ?>"><br />
    Password: <input type="password" name="password" value="" /><br />
    <br />
    <input type="submit" name="submit" value="submit" />
</form>
