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
            ?>

                <?php
                    //$i = 0;
                    while($row = mysqli_fetch_array($res)){
                        //$i = $i + 1; ?>
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <span class="card-title"><?php echo "$i. .$row['name']."; ?></span>
                                    <div class="card-action">
                                        <a href="problem.php"><?php 
                                       /* $_SESSION['prob_num'] = $i;
                                        $_SESSION['prob_name'] = $row['name'];
                                        $_SESSION['prob_content'] = $row['content'];
                                        $_SESSION['prob_answer'] = $row['answer'];*/
                                        ?>Click!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                ?>

            <!--<div class="row">
                <div class="card">
                    <span class="card-title">1. 계단 오르기</span>
                    <div class="card-action">
                        <a href="problem1.php">Click!</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <span class="card-title">2. 원 문제</span>
                    <div class="card-action">
                        <a href="problem2.php">Click!</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <span class="card-title">3. 속력 문제</span>
                    <div class="card-action">
                        <a href="problem3.php">Click!</a>
                    </div>
                </div>
            </div>-->
        </div>
        <!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>