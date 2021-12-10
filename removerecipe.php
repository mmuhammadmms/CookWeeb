<?php

include ('connect.php');
session_start();
$sid = $_SESSION['uid'];


$rid = $_GET['rid'];

$sql7 = mysqli_query($conn , "delete from recipe_saved where recipeID = '$rid' AND userID = '$sid' ");





		//foreach ($_FILES['myvideo']['tmp_name'] as $filename) {
			//$image = addslashes(file_get_contents($filename));
			//$sql4 = mysqli_query($conn , "INSERT INTO recipe_video VALUES ( '' , '$rid' , '$image' )" );
		//}




		/*
		$i=0;
		while($i < sizeof($rvideo)) {
		$sql4 = mysqli_query($conn , "INSERT INTO recipe_video VALUES ( '' , '$rid' , '$rvideo[$i]' )" );
		$i++;
    }

*/

  echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Menu Remove.')
  window.location.href='savedrecipe.php';
  </SCRIPT>");


?>
