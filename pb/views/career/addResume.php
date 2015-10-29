<div class="main">
<form method="post" action="<?php echo URL;?>career/CVV">
    <label>Имя</label><input type="text" name="name"><br>
    <label>Фамилия</label><input type="text" name="name"><br>
    <label>Email</label><input type="email" name="email"><br>
    <label>Должность</label>
    <select name="role">
        <option value="default">Default</option>
        <option value="owner">Owner</option>
        <option value="admin">Admin</option>
    </select><br>
    <label>Сопроводительный текст</label><br>
    <textarea name="text"></textarea><br>
    <label> </label><input type="submit">
</form>
</div>