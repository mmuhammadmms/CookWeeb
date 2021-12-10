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
<!--/.nav-collapse -->
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
              <h2>MY MENU</h2>
            </div>
            <div class="mu-restaurant-menu-content">

				<a href="addmenu.php" style="float:right;"><button  type="button" class="btn btn-primary">ADD MENU</button></a>
				<br><br>
				<hr>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">

				<?php

				$uid = $_SESSION['uid'];
				$sql = mysqli_query($conn , "select * from recipe where userID =  '$uid'");

					while ( $row = mysqli_fetch_assoc($sql)){

						$rid = $row['recipeID'];
						$mname = $row['recipeName'];
						$desc = $row['recipeDescription'];
						$sql2 = mysqli_query($conn , "select * from recipe_image where recipeID = '$rid' ");
						$row2 = mysqli_fetch_assoc($sql2);

				?>


					<div class="col-md-6" style="margin-top:20px">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">

									<img class="media-object" src="data:image/jpeg;base64,<?php echo base64_encode( $row2['imageName'] );?>"/>
									<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row2['imageName'] ).'"/>'; ?>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="viewRecipe.php?rid=<?php echo $rid;?>"><?php echo $mname;?></a></h4>
                                  <p><?php echo mb_strimwidth(nl2br($desc),0, 20, "...");?></p>
                                <a href="editmenu.php?rid=<?php echo $rid;?>"><button type="button" class="btn btn-warning">Edit</button></a>
								<a href="deletemenu.php?rid=<?php echo $rid;?>"><button type="button" class="btn btn-danger">Delete</button></a>
								</div>
                              </div>
                            </li>

                          </ul>
                       </div>
                     </div>

					<?php
					}
					?>

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
