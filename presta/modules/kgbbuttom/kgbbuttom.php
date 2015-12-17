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
			!Db::getInstance()->execute('DROP TABLE ps_mymod'))
			return false;
		return true;
	}

	public function hookDisplayProductTabContent($params) {
		return '<b>Display me on product page</b>';
	}

	public function processConfiguration() {
		if (Tools::isSubmit('mymod_pc_form')) {
			$enable_grades = Tools::getValue('enable_grades');
			$enable_comments = Tools::getValue('enable_comments');
			Configuration::updateValue('MYMOD_GRADES', $enable_grades);
			Configuration::updateValue('MYMOD_COMMENTS', $enable_comments);
			$this->context->smarty->assign('confirmation', 'ok');
		}
	}

	public function assignConfiguration()
	{
		$enable_grades = Configuration::get('MYMOD_GRADES');
		$enable_comments = Configuration::get('MYMOD_COMMENTS');
		$this->context->smarty->assign('enable_grades', $enable_grades);
		$this->context->smarty->assign('enable_comments', $enable_comments);
	}

	public function getContent() {
		$this->processConfiguration();
		$this->assignConfiguration();
		return $this->display(__FILE__, 'getContent.tpl');
	}




}