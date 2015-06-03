<?php
define('DB_HOST', 'localhost');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', '1811');
define('DB_NAME', 'gbook');

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die("Error in the consult. " . mysqli_connect_errno($link));

function clearStr ($data){
    global $link;
    return mysqli_real_escape_string($link, trim(strip_tags(htmlspecialchars($data))));
}
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = clearStr($_POST['name']);
        $email = clearStr($_POST['email']);
        $msg = clearStr($_POST['msg']);
        $query = "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')";
        mysqli_query($link, $query) or die (mysqli_error($link));
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }

    if(isset($_GET['del'])){
        $del = abs((int)$_GET['del']);
        if($del){
            $query3 = "DELETE FROM msgs WHERE id=$del";
            mysqli_query($link, $query3) or die (mysqli_error($link));
            header('Location: ' . $_SERVER['SCRIPT_NAME'].'?id=gbook');
            exit;
        }
    }
?>

<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="POST" action="<?= $_SERVER['REQUEST_URI']?>">
    Имя: <br><input type="text" name="name" /><br>
    Email: <br><input type="text" name="email" /><br>
    Сообщение: <br><textarea cols="50" rows="10" name="msg"></textarea><br>
    <br>
    <input type="submit" value="Отправить">
</form>

<?php
$query2 = "SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM msgs ORDER BY id DESC";
$res = mysqli_query($link, $query2)or die (mysqli_error($link));
mysqli_close($link);
while($row = mysqli_fetch_assoc($res)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $dt = date('d-m-Y H:i:s', $row['dt']);
    $msg = $row['msg'];
    echo <<< HTML
<hr>
    <p>
        <a href="mailto:$email">$name</a> @ $dt
        <br> $msg
    </p>

    <p align="right">
        <a href="{$_SERVER['REQUEST_URI']}&del=$id">Удалить</a>
    </p>
</hr>
HTML;
}
?>