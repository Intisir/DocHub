<?php include("includes/body.php") ?>
<?php include("includes/admin-header.php") ?>
    <div class="adminContainer">
    <?php include("includes/admin-sidebar.php") ?>
        <h3>Doctors</h3>
        <div class="adminPosts adminDoc" style="margin-top: 1rem">         <!-- ?? -->
        <?php
            // print_r($_SESSION);
            $col = ['#e53935' , "#3949ab" , 'rgb(100, 92, 255)' ,  '#43a047' , '#5D21D2' , '#999'] ;
            $sql = "SELECT * FROM users ORDER BY name";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $posts = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($posts as &$value) {
                $num = rand(0,2);
                echo "<a href='post.php?id=".$value['id']."'> <div class='post postadmin'>
                <div style='display:flex; align-items: center'>
                <span class='profileImg'><span>".substr($value['name'], 0, 1)."</span></span>
                <h4 style='margin-left: 1rem'>" . $value['name'].  "</h4>
                </div>
                <i class='material-icons' style='display: flex; align-items: center'>delete</i>
            </div> </a>";
            }
        ?>
        </div>
    </div>
<?php include("includes/footer.php") ?>
