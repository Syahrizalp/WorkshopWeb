<form action="welcome_get.php" method="get">
    name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>
Welcome <?php echo $_GET["name"]; ?> <br>
Your Email Addres is:<?php echo $_GET["email"];?>
