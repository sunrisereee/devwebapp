<php>
    <form action="scripts/login.php" method="post" class="login_window">
        <h2>Вход</h2>
        <h3>Логин</h3>
        <input type="text" name="l_login" placeholder="Логин">
        <h3>Пароль</h3>
        <input type="text" name="l_pass" placeholder="Пароль">
        <button type="submit">Войти</button>
    </form>

    <form action="scripts/register.php" method="post" class="register_window">
        <h2>Регистрация</h2>
        <h3>Логин</h3>  
        <input type="text" name="r_login" placeholder="Логин">
        <h3>Пароль</h3>  
        <input type="text" name="r_pass" placeholder="Пароль">
        <h3>Повторите пароль</h3>  
        <input type="text" name="r_pass_repeat" placeholder="Повтор пароля">
        <button type="submit">Зарегистрироваться</button>
    </form>
</php>