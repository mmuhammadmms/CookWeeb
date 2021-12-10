        <?php
		include_once("connect.php"); 
		?>
		<div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="main.php">HOME</a></li>                              
            <li><a href="menu.php">MENU</a></li> 
            <li><a class="dropdown-toggle" data-toggle="dropdown" style="cursor:pointer;"><?php echo strtoupper($objResult["userName"]); ?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="main.php">Dashboard</a></li>
					<li><a href="myprofile.php">My Profile</a></li>
					<li><a href="mymenu.php">My Menu</a></li>
					<li><a href="savedrecipe.php">Saved Recipe</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
		   </li> 
          </ul>                            
        </div>