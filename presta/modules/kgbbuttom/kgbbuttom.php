<?php
if (!defined('_PS_VERSION_')) {
	exit;
}

class kgbButtom extends Module {

	public $html = '';

	public function __construct() {
		$this->name = 'kgbbuttom';
		$this->tab = 'other';
		$this->version = '0.1';
		$this->author = 'Kpro_KGB';
		$this->need_instance = 0;
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = $this->l('Mystery Buttom');
		$this->description = $this->l('My Mystery Buttom');
	}

	public function install() {

		if (!parent::install() OR
			!Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS ps_mymod (
										`id` int(2) NOT NULL AUTO_INCREMENT,
 										`text` varchar(255),
										`date` TIMESTAMP NOT NULL,
										 PRIMARY KEY(`id`)) ENGINE='._MYSQL_ENGINE_.' default CHARSET=utf8')
		OR !$this->registerHook('displayProductTabContent')) {
			return false;
		}

		return true;
	}

	public function uninstall()
	{
		if (!parent::uninstall() ||
			!Db::getInstance()->execute('DROP TABLE ps_mymod') ||
		!Configuration::deleteByName('MYMOD_BUTTOM'))
			return false;
		return true;
	}

	public function hookDisplayProductTabContent($params) {
		return '<b>Display me on product page</b>';
	}

	public function processConfiguration() {
		if (Tools::isSubmit('mymod_pc_form')) {
			$enable_buttom = Tools::getValue('enable_buttom');
			Configuration::updateValue('MYMOD_BUTTOM', $enable_buttom);
			$this->context->smarty->assign('confirmation', 'ok');
		}
	}

	public function assignConfiguration()
	{
		$enable_buttom = Configuration::get('MYMOD_BUTTOM');;
		$this->context->smarty->assign('enable_buttom', $enable_buttom);
	}

	public function getContent() {
		$this->processConfiguration();
		$this->assignConfiguration();
		return $this->display(__FILE__, 'getContent.tpl');
	}




}