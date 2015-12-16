<div class="reg">
	<form method="post" enctype = "multipart/form-data" action="<?php echo URL;?>registred/addUser"><br><br>
		<label><?= $array['LABELLOGIN']?> *</label>
		<input type="text" name="login" required placeholder="<?= $array['REGLOGIN']?>" pattern="(^[a-zA-Z0-9_]{1,15}$)"><br>
		<label><?= $array['LABELPASS']?> *</label>
		<input type="password" name="pass" required placeholder="<?= $array['REGPASS']?>"><br>
		<label><?= $array['LABELPASS2']?> *</label>
		<input type="password" name="pass2" required placeholder="<?= $array['REGPASS2']?>"><br>
		<label><?= $array['LABELEMAIL']?> *</label>
		<input type="email" name="email" required placeholder="<?= $array['REGEMAIL']?>"><br>
		<label><?= $array['LABELNAME']?></label>
		<input type="text" name="name" placeholder="<?= $array['REGNAME']?>" pattern="(^[а-яА-Яa-zA-Z]{1,15}$)"><br>
		<label><?= $array['LABELPHONE']?></label>
		<input id="phone" type="text" name="phone" placeholder="+38 (___) ___-____"><br>
		<label><?= $array['LABELPHOTO']?></label>
		<input type="file" name="photo" required><br><br>
		<span>* <?= $array['REGSPAN']?></span><br><br>
		<input type="submit" value="<?= $array['REGSUBMIT']?>">
	</form>
</div>