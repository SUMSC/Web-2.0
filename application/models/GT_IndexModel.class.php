<?php

class GT_IndexModel extends Model {

    public function select($action )
    {
    	$sql = sprintf("select * from `%s` ", $action);
    	
    	$actiondata = $this->selectSQL();
    }
	
}
