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
        $id = $_SESSION['id'];
        $name = $_SESSION['name'];
        $correct = $_SESSION['correct'];
	    $total = $_SESSION['total'];
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
            <h3>Check your profile</h3>
            <br>
            <div class="row">
                <div class="card">
                    <span class = "card-title">당신의 이름은 :</span>
                    <p>
                    <?php echo "$name 입니다"; ?>
                    </p>
                </div>
            </div>  
            <div class="row">
                <div class="card">
                    <span class = "card-title">당신의 아이디는 :</span>
                    <p>
                    <?php echo "$id 입니다"; ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <span class = "card-title">당신의 맞은 횟수는 :</span>
                    <p>
                    <?php echo "$correct 입니다"; ?>
                    </p>
                </div>
            </div>  
            <div class="row">
                <div class="card">
                    <span class = "card-title">당신의 총 시도 횟수는 :</span>
                    <p>
                    <?php echo "$total 번 입니다"; ?>
                    </p>
                </div>
            </div>  
            <div class="row">
                <div class="card">
                    <span class = "card-title">당신의 정답률은 :</span>
                    <p>
                    <?php echo $correct / $total * 100;
                          echo "% 번 입니다";
                    ?>
                    </p>
                </div>
            </div>
            <br>
        </div>

        <!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html> 