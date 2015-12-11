<div id="ru" class="reg">
	<form method="post" enctype = "multipart/form-data" action="<?php echo URL;?>registred/addUser"><br><br>
		<label>Логин *</label>
		<input type="text" name="login" required placeholder="Ваш логин" pattern="(^[а-яА-Яa-zA-Z0-9]{1,15}$)"><br>
		<label>Пароль *</label>
		<input type="password" name="pass" required placeholder="Ваш пароль"><br>
		<label>Повторить пароль *</label>
		<input type="password" name="pass2" required placeholder="Повторно введите Ваш пароль"><br>
		<label>E-mail *</label>
		<input type="email" name="email" required placeholder="example@e-mail.com"><br>
		<label>Имя</label>
		<input type="text" name="name" placeholder="Ваше имя" pattern="(^[а-яА-Яa-zA-Z]{1,15}$)"><br>
		<label>Телефон</label>
		<input id="phone" type="text" name="phone" placeholder="+38 (___) ___-____"><br>
		<label>Прикрепить фото</label>
		<input type="file" name="photo" required><br><br>
		<span>* Поля обязательные к заполнению</span><br><br>
		<input type="submit" value="Регистрация">
	</form>
</div>

<div id="en" class="reg">
	<form method="post" enctype = "multipart/form-data" action="<?php echo URL;?>registred/addUser"><br><br>
		<label>Login *</label>
		<input type="text" name="login" required placeholder="Your login" pattern="(^[а-яА-Яa-zA-Z0-9]{1,15}$)"><br>
		<label>Password *</label>
		<input type="password" name="pass" required placeholder="Your password"><br>
		<label>Re-enter password *</label>
		<input type="password" name="pass2" required placeholder="Re-enter your password"><br>
		<label>E-mail *</label>
		<input type="email" name="email" required placeholder="example@e-mail.com"><br>
		<label>Name</label>
		<input type="text" name="name" placeholder="Your name" pattern="(^[а-яА-Яa-zA-Z]{1,15}$)"><br>
		<label>Phone</label>
		<input id="phone" type="text" name="phone" placeholder="+38 (___) ___-____"><br>
		<label>Add photo</label>
		<input type="file" name="photo" required><br><br>
		<span>* Required Fields</span><br><br>
		<input type="submit" value="Submit">
	</form>
</div>