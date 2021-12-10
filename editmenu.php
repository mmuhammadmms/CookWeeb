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
<script src="js/jquery.min.js"></script>
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
  <script>
$(document).ready(function() {
    var max_fields      = 10;
    var wrapper         = $(".container1");
    var add_button      = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e){
			e.preventDefault();
            $(wrapper).append('<div><input type="file" name="myimage[]"/></div>'); //add input box

    });

    $(wrapper).on("click",".delete", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});




$(document).ready(function() {
    var max_fields      = 10;
    var wrapper         = $(".container2");
    var add_button      = $(".add_form_field2");

    var x = 1;
    $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++;
            $(wrapper).append('<div><input type="file" name="myvideo[]"/></div>'); //add input box
        }
		else
		{
		alert('You Reached the limits')
		}
    });

    $(wrapper).on("click",".delete3", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});






$(document).ready(function() {

    var wrapper         = $(".container3");
	var wrapper2         = $(".container4");
    var add_button      = $(".add_form_field3");

    var x = 1;
    $(add_button).click(function(e){

		e.preventDefault();
            $(wrapper).append('<input type="text" class="form-control" id="ingredient[]" name="ingredient[]" placeholder="Ingredients" /><br>');
			$(wrapper2).append('<input type="text" class="form-control" id="quantity[]"  name="quantity[]" placeholder="Quantity" /><br>');//add input box

    });

    $(wrapper).on("click",".delete", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});



$(document).ready(function() {

    $("#aa").click(function(e){
   $("#list").append(

         // Removed repetitive ID and made prova an array
       '<input type="text" class="form-control" id="ingredient[]" name="ingredient[]" placeholder="Ingredients" /><br>'
   );

   $("#list1").append(

         // Removed repetitive ID and made prova an array
       '<input type="text" class="form-control  id="quantity[]" name="quantity[]" placeholder="Ingredients" /><br>'
   );
});

});







</script>
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
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="index.html">HOME</a></li>
            <li><a href="#mu-gallery">MENU</a></li>
            <li><a class="dropdown-toggle" data-toggle="dropdown" style="cursor:pointer;">MUHAMMAD<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">My Profile</a></li>
					<li><a href="#">My Menu</a></li>
					<li><a href="#">Saved Recipe</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
		   </li>
          </ul>
        </div><!--/.nav-collapse -->
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
                    <div class="row">






			<form name = "form" id="form" action="editmenup.php" method="POST" enctype="multipart/form-data">
        <?php
        include ('connect.php');

        $rid = $_GET['rid'];
        $sql = mysqli_query($conn , "select * from recipe where recipeID = '$rid'");
        $row = mysqli_fetch_assoc($sql);


        ?>
        <input type="hidden" name="rid" value="<?php echo $rid;?>">
				<div class="col-md-12">
				<div class="mu-contact-left">
					<div class="form-group">
                        <label for="name">Menu Name</label>
                        <input type="text" class="form-control"  name="mname" placeholder="Menu" value="<?php echo $row['recipeName'];?>" required> <br>
                      </div>
                      <div class="form-group">
                        <label for="email">Menu Image</label><button class="add_form_field btn btn-success">Add New Image &nbsp; </button>
                        <input type="file"  name="myimage[]" >
						<div class="container1">

						</div>
                      </div>
					  <div class="form-group">
                        <label for="email">Menu Video</label><button class="add_form_field2 btn btn-success">Add New Video &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>
                        <input type="file"  name="myvideo[]"  >
						<div class="container2">

						</div>
					   </div>
				</div>

						<div class="form-group col-md-6">
                        <label for="subject">Ingredients</label>
							<ul style="width:670px;padding:0px 0px 30px 0px" id="list">
              <?php
              $sql = mysqli_query($conn , "select * from ingredient where recipeID = '$rid'");
              while($row2 = mysqli_fetch_assoc($sql)){
              ?>
              <input type="text" class="form-control" id="ingredient[]" name="ingredient[]" placeholder="Ingredients" value="<?php echo $row2['item'];?>"/><br>
              <?php
              }
               ?>
							</ul>

						 </div>
					     <div class="form-group col-md-6">
                        <label for="subject">Quantity</label>
							<ul style="width:670px;padding:0px 0px 30px 0px" id="list1">
                <?php
                $sql = mysqli_query($conn , "select * from ingredient where recipeID = '$rid'");
                while($row3 = mysqli_fetch_assoc($sql)){
                ?>
                <input type="text" class="form-control" id="quantity[]" name="quantity[]" placeholder="Ingredients" value="<?php echo $row3['quantity'];?>"/><br>
                <?php
                }
                 ?>
							</ul>

						<input  id="aa" type="button" id="button" value="Add input">

                      </div>

					  <div class="form-group">
                        <label for="message">Description</label>
                        <textarea class="form-control" name="mdesc"  cols="30" rows="10" placeholder="Type Your Message" required><?php echo $row['recipeDescription'];?></textarea>
                      </div>
					  </div>

						<input type="submit" name="namabutton" id="submit" value="Submit">
			</form>




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
