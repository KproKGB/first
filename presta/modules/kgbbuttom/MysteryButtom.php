<?php
include_once(PS_ADMIN_DIR . '/../classes/AdminTab.php');

class MysteryButtom extends AdminTab {

	public $table = <<<TABLE
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>id</th>
	<th>Дата и время нажатия</th>
	<th>IP-адрес нажавшего</th>
</tr>
TABLE;
	public $row = array();
	public $minlimit = 0;
	public $col_rows = 30;
	public $maxpage = 1;


	public function getTable(){
		$sql = "SELECT id, ip, date FROM ps_mymod LIMIT $this->minlimit, $this->col_rows";
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

	public function changeNextPage() {
		$this->col_rows = $this->minlimit + 30;
	}

	public function showNextPage() {
		$sql = 'SELECT COUNT(id) FROM ps_mymod';
		$num = Db::getInstance()->getValue($sql);
		$this->maxpage = $num / $this->col_rows;
		if ($num%$this->col_rows) {
			$this->maxpage = (int)$this->maxpage + 1;
		}
		print_r($this->maxpage);
	}

	public function display() {
		$this->changeNextPage();
		$this->getTable();
		echo $this->table;
		$this->showNextPage();
	}


}
