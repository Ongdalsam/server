<?php
    
    require('db.php');

    $id = $_POST['id'];
    $name = $_POST['name'];
    $content = $_POST['content'];
    $answer = $_POST['answer'];
    
    $check="SELECT *from question_info WHERE userid='$id'";
    $result=$mysqli->query($check);

    if($result->num_rows==1)
    {
        echo "중복된 문제입니다.";
        echo "<button onclick=\"location.href='problem_insert.html'\"> 돌아가기 </button>";
        exit();
    }

    $signup=mysqli_query($mysqli,"INSERT INTO question_info (id,name,content,answer) VALUES ('$id','$name','$content','$answer')");
    if($signup)
    {
        ?>
        <meta charset="utf-8" />
        <script type="text/javascript">alert('문제 기입이 완료되었습니다.');</script>
        <meta http-equiv="refresh" content="0 url=/">
        <?php
    }
    else
        echo "<button onclick=\"location.href='problem_insert.html'\"> 문제 기입 실패, 돌아가기 </button>";
?>