<link rel="stylesheet" href="css/style.css">
<?php require_once("header.php");?>
<?php 
        if(!empty($_SESSION['login']))
        {
        header('Location: ../forum/entrance.php');
        }
?>
<body>
<center>
<?php
        require_once('cod/connections.php');
        session_start();
        $id_user = $_SESSION['id_user'];
        $sql = mysqli_query($connect, "SELECT * FROM `users` WHERE `id_user` = '$id_user'");
        while($row = mysqli_fetch_array( $sql )) {
        $show_img = base64_encode($row['avatar']);
?>
<div class="main_container_personal">
        <div class="avatar_main">
        <form id="post_add_form" action = "cod/avatar_change.php" method = "post" enctype="multipart/form-data">

                <img class="avatar" src="data:image/jpeg;base64, <?php echo $show_img;?>" alt=""> 
        </div>
        <div class="who">
                <a class="who_text">Ваш никнейм:
                <?php
                        echo  $_SESSION['nick']; 
                ?></a>
                <br>
                <br>
                <a class="who_text">Ваш Логин:
                <?php echo  $_SESSION['login']; ?></a>
        </div>
                <div class="popul_link_main">
                        <div class="link">
                                <a class = "link open_popup_ava" href="">Сменить аватарку</a><br><br>
                                <a class = "link open_popup_pass" href="">Сменить Пароль</a>
                        </div>
                </div>
                <div class="popup">
                        <img class="avatar_sw" src="data:image/jpeg;base64, <?php echo $show_img;?>" alt=""> 
                        <img class="popup_img close_popup" src="img/cross.png" alt="">
                        <input class="avatar_upload" type="file" name = "avatar_upload_change">
                        <BR>
                        <button class="change_button" name ="change">Сменить</button>

                </div>
                   <div class="popup2">
                        <img class="avatar_sw" src="data:image/jpeg;base64, <?php echo $show_img;?>" alt=""> 
                        <img class="popup_img close_popup" src="img/cross.png" alt="">
                        <input type="password" name="pass" id="pass-reg" placeholder="Новый пароль">
                        <BR>
                        <button class="change_button" name ="change_pass">Сменить</button>

                </div>
</form>
</div>
<?php
        } 
?>
</center>
</body>
<script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
         crossorigin="anonymous">
</script>
<script src="script.js"></script>