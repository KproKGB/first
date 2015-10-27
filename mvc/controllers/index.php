<?php
class Index extends Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->view->msg = 'Главная Страница!';
/*      $count = $this->model->getGoodsCount();
        $this->view->goods_count = $count;*/
        $this->view->render('index/index');
    }
}