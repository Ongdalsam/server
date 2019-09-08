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
<style>
body, html { 
    margin: 0;
    padding: 0;
    height: 100%;
}
.bgimg {
    border: 0;
    padding: 0; 
    background-image: url('http://www.v3wall.com/wallpaper/1920_1080/1208/1920_1080_20120820012056835903.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
	<script>
	function printClock() {
    
    var clock = document.getElementById("clock");            // 출력할 장소 선택
    var currentDate = new Date();                                     // 현재시간
    var calendar = currentDate.getFullYear() + "-" + (currentDate.getMonth()+1) + "-" + currentDate.getDate() // 현재 날짜
    var amPm = 'AM'; // 초기값 AM
    var currentHours = addZeros(currentDate.getHours(),2); 
    var currentMinute = addZeros(currentDate.getMinutes() ,2);
    var currentSeconds =  addZeros(currentDate.getSeconds(),2);
    
    if(currentHours >= 12){ // 시간이 12보다 클 때 PM으로 세팅, 12를 빼줌
    	amPm = 'PM';
    	currentHours = addZeros(currentHours - 12,2);
    }

    if(currentSeconds >= 50){// 50초 이상일 때 색을 변환해 준다.
       currentSeconds = '<span style="color:#de1951;">'+currentSeconds+'</span>'
    }
    clock.innerHTML = currentHours+":"+currentMinute+":"+currentSeconds +" <span style='font-size:50px;'>"+ amPm+"</span>"; //날짜를 출력해 줌
    
    setTimeout("printClock()",1000);         // 1초마다 printClock() 함수 호출
	}

	function addZeros(num, digit) { // 자릿수 맞춰주기
	  var zero = '';
	  num = num.toString();
	  if (num.length < digit) {
	    for (i = 0; i < digit - num.length; i++) {
	      zero += '0';
	    }
	  }
	  return zero + num;
	}

	</script>

    </head>

    <body>
	<div class="bgimg">
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
				<?php echo "<h3>안녕하세요, $name 님!</h3>"; ?>
				<br>
				<br>
				<!--
				<div class="row">
					<div class="col s6 offset-s3">
						<h4>About</h4>
					</div>
				</div>
				-->
				<div class="row">
					<div class="col s7">
						<body onload="printClock()">
						<div style="border:1px solid #dedede; width:600px; height:250px; line-height:250px; color:#666;font-size:100px; text-align:center;" id="clock">
						</div>
					</div>
					<div class="col s5">
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
	</div>
    </body>

</html> 