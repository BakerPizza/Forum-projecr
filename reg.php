
<?php require_once("header.php");?>s
<a>Вход</a>
<center>
<div class="main_container">
    <form action="cod/user_reg.php" method="post" id="reg-form">
        <br>
        <a>Регистрация</a>
        <br>
        <label for="" id="errorlogin"></label>
        <br>
        <input type="text" name="nick" id="nick-reg" placeholder="Никнейм" required>
        <br>
        <input type="text" name="log" id="login-reg" placeholder="Логин" required>
        <br>
        <input type="password" name="par" id="pass-reg" placeholder="Пароль" required>
        <label for="" id="errorpass"></label><br>
        <input type="password" name="" id="pass-reg2" placeholder="Повторите пароль" required>
        <br>
        <input type="email" name="email" id="mail-reg" placeholder="e-mail" required>
        <br>
        <input type="checkbox" id="agree-reg" required> <h1>Согласие на обработку данных</h1>
        <button name ="entance">Войти</button>
        <br>
        <br>       
    </form>
</div>
</center>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="script.js"></script>
<?php require_once("footer.php");?>