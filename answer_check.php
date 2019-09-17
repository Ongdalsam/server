<?php
    session_start();
    require('db.php');

    $answer = $_POST['answer'];
    $id = $_SESSION['id'];
    $check = 0;

    if($answer == $_SESSION['prob_answer'])
    {
        $check = 1;
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
        <script type="text/javascript">
            alert('맞았습니다!');
            window.location = 'problem_list.php';
        </script>
        <?php
    }
    else
    {
        $_SESSION['total'] = $_SESSION['total'] + 1;
        $tot = $_SESSION['total'];
        $sql = "UPDATE user_info SET total = '$tot' WHERE id = '$id'";
        if ($mysqli->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $mysqli->error;
        }

        ?>
        <script type="text/javascript">
            alert('틀렸습니다!');
            window.location = 'problem_list.php';
        </script>
        <?php
    }
?>