<?php
    session_start();
    require('db.php');
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
            <h3>Problems</h3>
            <br>

            <?php
                $sql = "SELECT * FROM question_info";
                $res = mysqli_query($mysqli, $sql); 
           
                    $i = 0;
                    while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                        echo "<form method=\"POST\" action=\"problem.php\">";
                        $i = $i + 1;
                        echo "<div class=\"row\">";
                            echo "<div class=\"col s12\">";
                                echo "<div class=\"card\">";
                                    echo "<span class=\"card-title\"> $i. " .$row['name']. "</span>";
                                    echo "<div class=\"card-content\">";
                                        echo "<p>  Click!을 눌러주세요: </p>";
                                        echo "<input type=\"number\" name=\"id\" value=\"$i\">";
                                        echo "<p>      </p>";
                                        echo "<button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Click!
                                            <i class=\"material-icons right\">send</i>
                                            </button>";
                                    echo "</div></div></div></div></form>";
                    }
            ?>
        </div>
        <!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>