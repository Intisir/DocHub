<?php include("includes/body.php");
    include("includes/config/connect.php");
    if(isset($_SESSION['user'])){
        header("Location: index.php");
    }
?>

    <div class="loginContainer">
    <div class="login">
    <div>
        <img src="./assets/images/login.svg" alt="">
        </div>
        <form class="loginForm" action="./includes/handlers/login-handler.php" method="POST">
        <h2>Signin</h2>
        <input type="email" name="lemail" id="" placeholder="Email" required>
        <input type="password" name="lpass" id="" placeholder="Password" required>
        <div>
        <button type="submit">Signin</button>
        </div>
        <div>
        <span style="font-size: 14px; margin-bottom: 0.125rem">Don't Have an account ? </span>
        <a href="signup.php" style="font-size: 14px">Signup now</a>
        </div>
        </form>
    </div>
    </div>
<?php include("includes/footer.php") ?>
    