<?php
    require("../config/connect.php");
    $title = $_POST['title'];
    $des = $_POST['description'];
    if(isset($_POST['editor1'])){
        $editor = $_POST['editor1'];
        $sql = "INSERT INTO posts (title, description, posted_by , content)
    VALUES ('".$title."','".$des."','1', '".$editor."')";
        if ($con->query($sql) === TRUE) {
            header("Location: ../../index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
?>