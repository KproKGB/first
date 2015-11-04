<div class="main">
<h2><?= $this->msg?></h2>
    <hr>
    <ol>
    <?php
    foreach($this->userCvv as $key => $value) {
        echo '<li>'.$value['name'].'</li>';
        echo '<li>'.$value['surname'].'</li>';
        echo '<li>'.$value['phone'].'</li>';
        echo '<li>'.$value['email'].'</li>';
        echo '<li><a href="'.$value['video'].'">Видео</a></li>';
        echo '<li>'.$value['role'].'</li>';
        echo '<li>'.$value['cvv'].'</li>';
        echo '<li>'.$value['date'].'</li>';
        echo '<li>'.$value['text'].'</li>';
    }
    ?>
    </ol>
</div>