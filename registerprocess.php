<?php
include ('connect.php');

$name = $_POST['uname'];
$email = $_POST['uemail'];
$phone = $_POST['uphone'];
$pass = $_POST['upass'];

$sql = mysqli_query($conn , "SELECT * FROM USERS WHERE userEmail = '$email' " );
$row = mysqli_num_rows($sql);


if ( $row == 1){
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Email has been used.');
    window.location.href='registersuccess.html';
    </script>");
}else{
	$sql = mysqli_query($conn , "INSERT INTO USERS VALUES ( '' , '$name' , '$email' , '$phone' , '$pass' )" );
}



/*

*/






?>