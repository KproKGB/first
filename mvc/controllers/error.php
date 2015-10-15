<?php
class Error extends Controller {
    public function __construct(){
        parent::__construct();
        echo "Мы в контроллере ошибок!  ";
    }
}