    <?php include("includes/body.php") ?>
    <?php include("includes/header.php") ?>
    <div class="container">
    <?php include("includes/sidebar.php") ?>
    <div class="postContainer" id="postContainer">
        <?php
            // print_r($_SESSION);
            $col = ['#e53935' , "#3949ab" , 'rgb(100, 92, 255)' ,  '#43a047' , '#5D21D2' , '#999'] ;
            $sql = "SELECT * FROM posts ORDER BY created_at DESC";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $posts = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($posts as &$value) {
                $sql2 = "SELECT name FROM users WHERE id ='" . $value["posted_by"] . "'";
                $stmt2 = $con->prepare($sql2);
                $stmt2->execute();
                $postedBy = $stmt2->get_result()->fetch_all(MYSQLI_ASSOC);
                $num = rand(0,2);

                $texthtml = $value['content'];
                preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $texthtml, $image);

                $imgHtml ='';
                if($image){
                    $imgHtml = "<img class='postThumb' src='".$image['src']. "'alt=''>";
                }

                echo "<a href='post.php?id=".$value['id']."'> <div class='post'>
                ".$imgHtml."
                <h5>" . $value['title'].  "</h5>
                <span class='postedby' style='font-size: 13px; font-weight: 600; color: ".$col[4]." '>" . $postedBy[0]['name'].  "</span>
                <span style='font-size: 12px; font-weight: 600; color: ".$col[5]." '>" . $value['created_at'].  "</span>
                <p>
                " . substr($value['description'], 0, 256)  .  "
                </p>
            </div> </a>";
            }
        ?>
    </div>
        
    </div>
    <?php include("includes/footer.php") ?>