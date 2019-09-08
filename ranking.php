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
                             <li><a href="ranking.php">Ranking</a></li>
                    </ul>
              </div>
		</nav>
        <div class="container">
            <?php
            $sql1 = DBquery("
            SELECT DISTINCT t1.id, t1.correct, t1.total count(t1.id) AS ranking
            FROM user_info t1, user_info t2
            WHERE t1.correct/t1.total < t2.correct/t2.total
            OR t1.correct/t1.total = t2.correct/t2.total
            GROUP BY t1.id
            ORDER BY ranking
            ");
            for($i = 0; $row1=mysql_fetch_array($sql1); $i++) {
                echo $row1[ranking];
            }
            ?>
        </div>
        <!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html> 