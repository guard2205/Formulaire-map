<?php
if (isset($_POST['login_button'])){

    $name = $_POST['log_name']; // on enregistre le champs nom dans une variable
    $_SESSION['log_name'] = $name;
    $password = $_POST['log_password'] ; 

	$check_database_T_user_query = mysqli_query($con, "SELECT * FROM users WHERE u_nom='$name'AND u_motpasse='$password'");
	$check_login_T_User_query = mysqli_num_rows($check_database_query);

    
	if($check_login_query == 1) {
		$row = mysqli_fetch_array($check_database_query);
        $username = $row['username'];
        
		$_SESSION['username'] = $username;
		header("Location: register.php");
		exit();
	}
	else {
		array_push($error_array, "Account Name or Password was incorrect<br>");
	}

}
?>