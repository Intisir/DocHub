<?php include("includes/body.php");
include("includes/header.php") 
?>
    <?php if(!isset($_SESSION['user'])){
        header("Location: login.php");
    }?>
    <div class="createPostcontainer">
    <form action="./includes/handlers/addpost.php" method="POST">
    <div class="createpostleft">
        <input type="text" name="title" placeholder="Title" required>
        <textarea type="text" name="description"  placeholder="Short Description" required></textarea>
        <button class="bt" type="submit" name="submit">Post</button>
        <img src="./assets/images/createpost.svg" alt="">
    </div>
    <textarea name="editor1"></textarea>
    </form>
    <script>
        CKEDITOR.replace( 'editor1' , {
            height: '70vh',
            resize_enabled : false,
            fontFamily: {
            options: [
                'default',
                'Ubuntu, Arial, sans-serif',
                'Ubuntu Mono, Courier New, Courier, monospace'
            ]
        }
        } );
    </script>
    </div>