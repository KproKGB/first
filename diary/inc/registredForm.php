<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <label>Логин: </label><br>
    <input size="25" name="reg_login" placeholder="Логин" value="admin" required><br>
    <label>Еmail: </label><br>
    <input size="25" type='email' name="reg_email" placeholder="email" value="admin@admin.com" required><br>
    <label>Имя: </label><br>
    <input size="25" type='name' name="reg_name" placeholder="Имя" value="Kpro" required><br>
    <label>Фамилия: </label><br>
    <input size="25" type='surname' name="reg_surname" placeholder="Фамилия" value="KGB" required><br>
    <label>Пароль: </label><br>
    <input size="25" type='password' name="reg_pswd1" placeholder="Пароль" value="123321" required><br>
    <label>Повторите пароль: </label><br>
    <input size="25" type='password' name="reg_pswd2" placeholder="Повторите пароль"  value="123321" required><br><br>
    <select name="reg_class" required="required">
         <option selected  disabled>Выберите класс</option>
        <option  value="teachet">Учитель</option>
        <option value="1V">1-В класс</option>
        <option value="5A">5-А класс</option>
        <option value="7B">7-Б класс</option>
    </select>
    <br><br>
    <input size="25" type="submit" name="to_reg" value="Регистрация">
</form>