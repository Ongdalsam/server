<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>Messy Math</title>
		
		 <!-- Compiled and minified CSS -->
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
            <?php
				session_start();

				if(!isset($_SESSION['id']) || !isset($_SESSION['name']))
				{
					echo "<meta http-equiv='refresh' content='0;url=login.html'>";
					exit;
				}
				$id = $_SESSION['id'];
				$name = $_SESSION['name'];
			?>
				<nav>
                    <div class="nav-wrapper"> 
                       <a href="https://ongdalsam.herokuapp.com/index.php" class="brand-logo" style="padding-left: 20px;">Messy Math</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
								 <li><a href="problem_list.php">Problems</a></li>
								 <li><a href="profile.php">Profile</a></li>
								 <li><a href="logout.php">Logout</a></li>
                        </ul>
                  </div>
				</nav>
				<br>

			<div class="container">
				<?php echo "<h3>안녕하세요. $name($id)님</h3>"; ?>
				<br>
				<br>
				<div class="row">
					<div class="col s6 offset-s3">
						<h4>About</h4>
					</div>
				</div>
				
				<div class="row">
				<div class="col s6 offset-s3">
				<div class="card blue-grey darken-1">
        		<div class="card-content white-text">
					<span class="card-title">Messy Math</span>
					<p>
						A math problem bank to help you get an A on math exams
					</p>
				</div>
				</div>
				</div>
				</div>
			</div>
				
		
		<!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="js/materialize.min.js"></script>
    </body>

</html> 