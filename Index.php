<?php
require 'includes/DB_Connection.php';
require 'includes/FormLogin.php';
?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connexion utilisateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
    <div>
        <form action="Index.php"method="POST">
        <input type="text" name="log_name" placeholder="Account Name" value ="<?php
        if(isset($_SESSION['log_name'])){
            echo $_SESSION['log_name'];
        }
        ?>"required>
        <br>
        <input type="password" name="log_password" placeholder="Password" required>
        <br>
        <?php if(in_array("Account Name or Password was incorrect<br>",$error_array)) echo "Account Name or Password was incorrect<br>";?>
        <input type="submit" name="login_button" value="Login">
        <br>
        </form>
    </div>
</body>
</html>