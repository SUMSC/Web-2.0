<?php

class GT_IndexModel extends Model {

    public function select($action )
    {
    	$sql = sprintf("select * from `%s` ", $action);
    	
    	return  $this->selectSQL($sql);
    }
	
}
