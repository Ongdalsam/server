<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    $mysqli=mysqli_connect($server, $username, $password, $db);

    $pw = $_POST['pw'];
    $name = $_POST['name'];
    $id = $_POST['id'];

    $q = mysqli_query($mysqli,"INSERT INTO user_info(id,name,pw) VALUES('$id', '$name', '$pw')");

?>