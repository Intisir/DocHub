<?php
    require("../config/connect.php");
    $email = $_POST['lemail'];
    $password = $_POST['lpass'];
    
    if(isset( $_POST['lemail']) && isset($_POST['lemail'])){
        $sql = "SELECT * FROM users WHERE email='".$email."'AND password='".$password."'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1){
            $_SESSION['user'] = array($row['id'],$row['name'],$row['status']);
            header("Location: ../../index.php");
        }
    } 


?>