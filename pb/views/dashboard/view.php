<?php
    foreach($this->userCvv as $key => $value) {
?>
<div class="main">
<h2><?php echo ucfirst($value['name']) . ' ' . ucfirst($value['surname'])?></h2>
    <hr>
    <iframe style="float: left; margin-right: 70px;" width="420" height="315"
            src="https://www.youtube.com/embed/Et-mM92HPxQ" frameborder="0" allowfullscreen></iframe>
    <ol>
    <?php
        echo '<li>'.$value['name'].'</li>';
        echo '<li>'.$value['surname'].'</li>';
        echo '<li>'.$value['phone'].'</li>';
        echo '<li>'.$value['email'].'</li>';
        echo '<li><a href="'.$value['video'].'">Видео</a></li>';
        echo '<li>'.$value['role'].'</li>';
        echo '<li>'.$value['cvv'].'</li>';
        echo '<li>'.$value['date'].'</li>';
        echo '<li>'.$value['workt'].'</li>';
    }
    ?>
    </ol>
</div>