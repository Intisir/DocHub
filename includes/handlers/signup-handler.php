<?php
    require("../config/connect.php");
    if(isset( $_POST['semail']) && isset($_POST['sname']) && isset($_POST['spass']) && isset($_POST['seducation']) && isset($_POST['sdesignation'])){
        $name = $_POST['sname'];
        $email = $_POST['semail'];
        $password = $_POST['spass'];
        $password2 = $_POST['sconfirmpass'];
        $education = $_POST['seducation'];
        $designation = $_POST['sdesignation'];

        $sql = "INSERT INTO users (id,name,email,education,designation, password , status)
    VALUES ('','".$name."','".$email."','".$education."','".$designation."','".$password."', 0)";

        if ($con->query($sql) === TRUE) {
            $last_id = $con->insert_id;
            $_SESSION['user'] = array($last_id,$name,0);
            header("Location: ../../index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } 


?>