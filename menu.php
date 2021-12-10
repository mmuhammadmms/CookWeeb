
	<?php
		include_once("connect.php");
			session_start();
			$sessionID = $_SESSION['uid'];
	$strSQL = "SELECT * FROM users WHERE userID ='".$sessionID."'";
	$objQuery =mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);

		?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CookingWeeb | Menu</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">
     <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">


    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->

           <!--  Text based logo  -->
          <a class="navbar-brand" href="index.html">Cooking<span>Weeb</span></a>

		      <!--  Image based logo  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>  -->


        </div>
				<?php
		        include ('navbar.php');
		         ?>
      </div>
    </nav>
  </header>
  <!-- End header section -->

 <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">
	<br><br>
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>OUR MENU</h2>
            </div>

            <div class="mu-restaurant-menu-content">


              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">
                    <div class="row">
<!--------------------------------php-------------------------------------->

					<!-- pagination -->
	  <?php
			$strSQL = "SELECT * from recipe join users join recipe_image where recipe.recipeID = recipe_image.recipeID and users.userID=recipe.userID";
			$objQuery = mysqli_query($conn,$strSQL) or die ("Error Query [".$strSQL."]");
	$Num_Rows = mysqli_num_rows($objQuery);


	$Per_Page = 2;   // Per Page

	if(!isset($_GET["Page"]))
				{

					$Page=1;
				}
			else
				{

					$Page = $_GET["Page"];
				}

	$Prev_Page = $Page-1;
	$Next_Page = $Page+1;

	$Page_Start = (($Per_Page*$Page)-$Per_Page);
	if($Num_Rows<=$Per_Page)
	{
		$Num_Pages =1;
	}
	else if(($Num_Rows % $Per_Page)==0)
	{
		$Num_Pages =($Num_Rows/$Per_Page) ;
	}
	else
	{
		$Num_Pages =($Num_Rows/$Per_Page)+1;
		$Num_Pages = (int)$Num_Pages;
	}


	$strSQL .=" order  by recipe.recipeID ASC LIMIT $Page_Start , $Per_Page";
	$objQuery  = mysqli_query($conn,$strSQL);

	?>

	  <!-- end pagination -->
	  <?php

			while($objResult = mysqli_fetch_array($objQuery))
	{
		$desc = $objResult['recipeDescription'];
		$rid = $objResult['recipeID'];

		$sql7 = mysqli_query($conn , "select * from recipe_saved where recipeID = '$rid' ");
		$count = mysqli_num_rows($sql7);

	?>

<!-------------------------------php-------------------------------------->
                      <div class="col-md-6">
                          <ul class="mu-menu-item-nav">
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
									<img class="media-object" src="data:image/jpeg;base64,<?php echo base64_encode( $objResult['imageName'] );?>"/>
									<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $objResult['imageName'] ).'"/>'; ?>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="viewRecipe.php?rid=<?php echo $rid;?>"><?php echo $objResult["recipeName"]; ?></a></h4>
                                  <h6 class="mu-menu-price"><?php echo $objResult["userName"]; ?></h6>
                                  <p>
								  <?php
				echo mb_strimwidth("$desc", 0, 20, "...");
				// output: "Hello W..."
								?></p>
								<?php
									if ($count == 0){
									?>
										<a href="saverecipe.php?rid=<?php echo $rid;?>"><button type="button" class="btn btn-info" >Save Recipe </button>	</a>

									<?php
								}else{
								?>
								<button type="button" class="btn btn-success" >Saved</button>

								<?php
								}
									?>

								             </div>
                              </div>
                            </li>
                          </ul>
                      </div>
					  <?php
	}
	?>
	<div class="col-md-12">
	<hr>

<!------------------------------------------ looping ------------------------------------------------------------------------->
<?php
if($Prev_Page)
{

	echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
}

for($i=1; $i<=$Num_Pages; $i++){
	if($i != $Page)
	{

		echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
	}
	else
	{
		echo "<b> $i </b>";
	}
}
if($Page!=$Num_Pages)
{
	echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next >></a> ";
}

	mysqli_close($conn);


	?>
</div>
<!-------------------------------------------looping-------------------------------------------------------------------------->
                   </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Restaurant Menu -->

  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-google-plus"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="assets/js/app.js"></script>

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script>

  </body>
</html>
