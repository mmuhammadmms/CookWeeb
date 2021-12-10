<?php
include ('connect.php');

$email = $_POST['uemail'];
$pass = $_POST['upass'];



$sql = mysqli_query($conn , "SELECT * FROM USERS WHERE userEmail = '$email' AND userPassword = '$pass' " );
$row = mysqli_num_rows($sql);


if ( $row == 1 ){
	session_start();
	$_SESSION['uid'] = $email;
	
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Welcome');
    window.location.href='main.php';
    </script>");
}else{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Wrong email or password');
    window.location.href='register.html';
    </script>");
}






?>