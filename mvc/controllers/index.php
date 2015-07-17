<?php
  class Index extends Controller {
      public function __construct() {
          parent::__construct();
          echo "Мы в контроллере INDEX";
          $this->view->msg = "INDEX!!";
          $this->view->render('index/index');
      }
  }
