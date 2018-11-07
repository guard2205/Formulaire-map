<?php
$error_array=array();
$con = mysqli_connect("localhost", "root", "", "bd_projet_reseau"); //Connection variable
if(mysqli_connect_errno())
{
    echo "Failed to connect: " . mysqli_connect_errno();
}
else 
	echo "Connection BD <br>" ;
?>