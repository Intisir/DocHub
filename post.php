<?php include("includes/body.php") ?>
    <?php include("includes/header.php") ?>
    <?php
        if(isset($_GET['id'])){
            $postId = $_GET['id'];
        }
    ?>
    <div class="postDetailsContainer">
    <?php include("includes/sidebar.php") ?>
        <?php 
            $sql2 = "SELECT * FROM posts WHERE id ='" . $postId . "'";
            $stmt2 = $con->prepare($sql2);
            $stmt2->execute();
            $post = $stmt2->get_result()->fetch_all(MYSQLI_ASSOC);
        ?>

        <?php 
        $sql =  "SELECT name FROM users WHERE id ='" . $post[0]["posted_by"] . "'";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $name = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        ?>
        <div class="fullPost">
            <div class="postDetails">
            <div class="postHeader">
                <h2><?php echo $post[0]['title']?></h2>
                <a href="">
                <span style='font-size: 16px; font-weight: bold; display:block;'><?php echo "By  " . $name[0]['name'] ?></span>
                </a>
                <span style='font-size: 12px; font-weight: bold; color:grey' > <?php echo $post[0]['created_at']?> </span>
            </div>
            <div class="postContents">
                <?php echo $post[0]['content']?>
            </div>
            </div>
            <div class="postSuggestions"></div>

        </div>


    <?php include("includes/footer.php") ?>