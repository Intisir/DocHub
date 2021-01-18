<?php include("includes/body.php");
    include("includes/config/connect.php");
    if(isset($_SESSION['user'])){
        header("Location: index.php");
    }
?>

    <div class="loginContainer">
    <div class="login" style="padding: 1rem 2rem 2rem 2rem; height: 85%">
    <div>
        <img src="./assets/images/login.svg" alt="">
        </div>
        <form class="loginForm" action="./includes/handlers/signup-handler.php" method="POST">
            <h2>Sign Up</h2>
            <input type="text" name="sname" id="" placeholder="Name" required>
            <input type="email" name="semail" id="" placeholder="Email" required>
            <input type="text" name="seducation" id="" placeholder="Education" required>
            <input type="text" name="sdesignation" id="" placeholder="Designation" required>
            <input type="password" name="spass" id="" placeholder="Password" required>
            <input type="password" name="sconfirmpass" id="" placeholder="Confirm Password" required>
            <div>
                <button type="submit">Signup</button>
            </div>
            <div>
                <span style="font-size: 14px; margin-bottom: 0.125rem">Already Have an account ? </span>
                <a href="login.php" style="font-size: 14px">Signin now</a>
            </div>
        </form>
    </div>
    </div>
<?php include("includes/footer.php") ?>
    