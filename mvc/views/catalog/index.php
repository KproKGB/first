<p>Товаров в <a href="<?= URL?>/basket">корзине</a>: <?= Cart::$count?> (Потом удалить эту строчку)</p>
<table border="1" cellpadding="5" cellspacing="0" width="79%">
    <tr>
        <th>Название</th>
        <th>Автор</th>
        <th>Год издания</th>
        <th>Цена, грн.</th>
        <th>В корзину</th>
    </tr>
    <?php
    foreach ($this->selectAllItems as $value) {
        ?>
        <tr>
            <td><?= $value['title'] ?></td>
            <td><?= $value['author'] ?></td>
            <td><?= $value['pubyear'] ?></td>
            <td><?= $value['price'] ?></td>
            <td><a href="<?= URL?>/basket/add2Basket/<?= $value['id']?>">В корзину</a></td>
        </tr>
        <?php
    }
    ?>
</table>