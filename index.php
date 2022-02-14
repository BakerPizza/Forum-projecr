<link rel="stylesheet" href="css/style.css">
<?php require_once("header.php");?>
<body>
<center>
<div class="post_close">
        <div class="link">
                <a class = "link open_popup_post" href="">Добавить обсуждение</a><br><br>
        </div>
        <div class="post_add">
                <img class="popup_img open_popup_post_close" src="img/cross.png" alt="">
                <form id="post_add_form" action = "cod/post_add.php" method = "post" enctype="multipart/form-data">
                        <input name="title" class="title_post" id="title_post" type = "text" name ="title" placeholder="Заголовок">
                        <textarea name="text" class="text_area" id="text_post" placeholder="Текст обсуждения" id="" cols="100" rows="12"></textarea>
                        <input name="img" class="img_upload" type="file" id="file_post" name = "img_upload">
                        <button name = "post_add">Создать обсуждение</button>
                        <?php 
                                session_start();
                                if(isset($_SESSION['message'])){
                                echo '    <p class="msg"> ' . $_SESSION['message'] . '</p>';
                                }
                                unset($_SESSION['message']);
                        ?>
                </form>
        </div>
</div>
<?php
        require_once('cod/connections.php');
        $sql = mysqli_query($connect, "SELECT * FROM `post`");
        while($row = mysqli_fetch_array( $sql )) {
        $id_userr=$row['id_user'];
        $show_img = base64_encode($row['img']);
        $sql2 = mysqli_query($connect, "SELECT 	`nickname` FROM `users` WHERE `id_user` =  $id_userr");
        while($row2 = mysqli_fetch_array( $sql2)) {
        $sql3 = mysqli_query($connect, "SELECT 	`avatar` FROM `users` WHERE `id_user` =  $id_userr");
        while($row3 = mysqli_fetch_array( $sql3)) {
        $show_avatar = base64_encode($row3['avatar']);

?>
<div class="main_container">
        <img class="ava" src="data:image/jpeg;base64, <?php echo  $show_avatar;?>" alt=""> 
        <?php
        } 
        ?>
        <a class = "user_name"><?=  $row2['nickname'] ?></a>
        <?php
        } 
        ?>
        <a class = "user_name"><?= $row['time'] ?></a>
        <br>
        <br>
        <div class="post_text">
                <a class = "post_name"><?= $row['title'] ?></a>
                <br>
                <br>
                <a class = "post_subtext"><?= $row['text'] ?></a>
        </div>
        <img class="post_img" src="data:image/jpeg;base64, <?php echo $show_img;?>" alt=""> 
        <br>
        <img class = "like" src = "img/like.png" alt= "">  
</div>
<?php
        } 
?>
</center>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script src="script.js"></script>