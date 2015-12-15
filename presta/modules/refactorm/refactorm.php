<?php
if (!defined('_PS_VERSION_')) {
	exit;
}

class refactorM extends Module {
	public function __construct() {
		$this->name = 'refactorm';
		$this->displayName = 'refactorm';
		$this->version = '0.1';
		$this->need_instance = 0;
		$this->bootstrap = true;
		$this->tab = 'other';
		$this->author = 'Kpro_KGB';
		$this->description = 'refactorm';
		parent::__construct();
	}

	public function install() {
		parent::install();
		$this->registerHook('displayProductTabContent');
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