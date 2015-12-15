<?php
foreach($this->userList as $key => $value)
?>
<div class="dash">
	<hr>
	<ol>
		<?php
		{
		echo '<img src="'. URL . $value['photo'] . '">';
		echo '<li>'.$value['login'].'</li>';
		echo '<li>'.$value['name'].'</li>';
		echo '<li>'.$value['phone'].'</li>';
		echo '<li>'.$value['email'].'</li>';
		}
		?>
	</ol>
	<hr>
</div>
