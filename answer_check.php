<?php
    session_start();
    require('db.php');

    $answer = $_POST['answer'];
    $id = $_SESSION['id'];
    $check = 0;

    /*$check="SELECT * FROM user_info WHERE id='$id'";
    $result=$mysqli->query($check);

    if($result->num_rows==1)
    {
        $row=$result->fetch_array(MYSQLI_ASSOC);
    }*/

    if($_SESSION['prob_num']==1)
    {
        if($answer==24)
            $check = 1;
    }
    else if($_SESSION['prob_num']==2)
    {
    
    }
    else if($_SESSION['prob_num']==3)
    {

    }

    if($check==1)
    {
        $_SESSION['correct'] = $_SESSION['correct'] + 1;
        $_SESSION['total'] = $_SESSION['total'] + 1;
        $cor = $_SESSION['correct'];
        $tot = $_SESSION['total'];
        $sql = "UPDATE user_info SET correct = '$cor', total = '$tot' WHERE id = '$id'";
        if ($mysqli->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $mysqli->error;
        }

        ?>
        <!--<script type="text/javascript">
            alert('맞았습니다!');
            window.location = 'problem_list.php';
        </script>-->
        <?php
    }
    /*else
    {
        $_SESSION['total'] = $_SESSION['total'] + 1;
        $sql = "UPDATE user_info SET total = $_SESSION['total'] WHERE id = '$id'";
        if ($mysqli->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $mysqli->error;
        }

        ?>
        <!--<script type="text/javascript">
            alert('틀렸습니다!');
            window.location = 'problem_list.php';
        </script>-->
        <?php
    }*/
?>