<?php
include_once(PS_ADMIN_DIR . '/../classes/AdminTab.php');

class MysteryButtom extends AdminTab {

	public $table = <<<TABLE
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>id</th>
	<th>IP-address</th>
	<th>Date</th>
</tr>
TABLE;
	public $row = array();
	public $limit = "LIMIT 0, 25";


	public function getTable(){
		$sql = "SELECT id, ip, date FROM ps_mymod $this->limit";
		$this->row = Db::getInstance()->executeS($sql);
		print_r($this->row);
		$this->table .= "</table>";
	}

	public function display() {
		$this->getTable();
		echo $this->table;
	}
}
