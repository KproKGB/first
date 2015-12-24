<?php
include_once(PS_ADMIN_DIR . '/../classes/AdminTab.php');

class MysteryButtom extends AdminTab {

	public $table = <<<TABLE
<table style="text-align: center;" border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>id</th>
	<th>Дата и время нажатия</th>
	<th>IP-адрес нажавшего</th>
</tr>
TABLE;
	public $row = array();
	/*public $minlimit = 0;
	public $col_rows = 30;*/


	public function getTable(){
		//$sql = "SELECT id, ip, date FROM ps_mymod LIMIT $this->minlimit, $this->col_rows";
		$sql = "SELECT id, ip, date FROM ps_mymod";
		$this->row = Db::getInstance()->executeS($sql);
		for($i=0; $i<count($this->row); $i++) {
			$this->table .= '<tr>';
			$this->table .= '<td>'.$this->row[$i]['id'].'</td>';
			$this->table .= '<td>'.$this->row[$i]['date'].'</td>';
			$this->table .= '<td>'.$this->row[$i]['ip'].'</td>';
			$this->table .= '</tr>';
		}
		$this->table .= "</table>";
	}

	public function display() {
		$this->getTable();
		echo $this->table;
	}


}
