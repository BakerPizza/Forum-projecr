<link rel="stylesheet" href="css/style.css">
<?php require_once("header_ent.php");?>
<body>
<center>
<div class="main_container">
    <a>Вход</a>
    <br>
    <br>
    <form action ="cod/user_ent.php" method = "post">
        <input name = "log" class = "input__reg" placeholder="Логин" required>
        <br>
        <input name = "par" class = "input__reg" type="password" placeholder="Пароль" required>
        <br>
        <button name ="entance">Войти</button>
        <br>
        <br>
        <?php
            session_start();
            if(isset($_SESSION['message'])){
            echo '    <p class="msg"> ' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
        ?>
        <br>
        <br>
        <div class="link">
            <a class = "reg__locatuion" href="reg.php">Регистрация</a>
        </div>
    </form>
</div>
</center>
</body>