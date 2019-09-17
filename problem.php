<?php
    session_start();
?>
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
            $num = $_SESSION['prob_num'];
            $name = $_SESSION['prob_name'];
            $content = $_SESSION['prob_content'];
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

        <div class="container">

            <h3><?php echo "$num. $name"; ?></h3>
            <div class="row">
                <div class="card">
                    <br>
                    <p><?php echo "$content"; ?></p>
                    <br>
                </div>
            </div>
            <form action = "answer_check.php" method="POST">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="last_name" type="number" class="validate" name="answer">
                        <label for="last_name">Answer</label>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>

        <!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>