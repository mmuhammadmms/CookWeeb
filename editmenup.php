<?php

include ('connect.php');
session_start();
$sid = $_SESSION['uid'];


$in = $_POST["ingredient"];
$q  = $_POST["quantity"];
$name = $_POST["mname"];
$rimage = $_FILES["myimage"];
$rvideo = $_FILES["myvideo"];
$desc = $_POST["mdesc"];
$rid = $_POST['rid'];

$sql7 = mysqli_query($conn , "delete from recipe_image where recipeID = '$rid';");
$sql8 = mysqli_query($conn , "delete from recipe_video where recipeID = '$rid'");
$sql9 = mysqli_query($conn , "delete from ingredient where recipeID = '$rid';");




$sql = mysqli_query($conn , "update recipe set recipeName = '$name' , recipeDescription = '$desc' where recipeID = '$rid'");




		$i=0;
		while($i < sizeof($in)) {
		$sql3 = mysqli_query($conn , "INSERT INTO ingredient VALUES ( '$rid' , '$in[$i]' , '$q[$i]' )" );
		$i++;
    }




		foreach ($_FILES['myimage']['tmp_name'] as $filename) {
			$image = addslashes(file_get_contents($filename));
			$sql4 = mysqli_query($conn , "INSERT INTO recipe_image VALUES ( '' , '$rid' , '$image' )" );
		}


		$i= 0;
			foreach ($_FILES['myvideo']['tmp_name'] as $filename) {
				$path  = $filename;
				$pathname =  $_FILES['myvideo']['name'][$i];
				move_uploaded_file($path,"video/$pathname");
				$i++;
				$sql4 = mysqli_query($conn , "INSERT INTO recipe_video VALUES ( '' , '$rid' , '$pathname' )" );
			}




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



  echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Menu edited.')
  window.location.href='mymenu.php';
  </SCRIPT>");



echo json_encode($_FILES);
*/
?>
