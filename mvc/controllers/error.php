<?php
class Error extends Controller {
    public function __construct() {
        parent::__construct();
        echo "Контроллер обработки ошибок<br/>";
        $this->view->msg = "Страницы не существует!<br/>";
        $this->view->render('error/index');
    }
}