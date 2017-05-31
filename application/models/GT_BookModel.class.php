<?php

class GT_BookModel extends Model {

    public function select( )
    {
    	$sql = sprintf("select * from `%s` ", $this->_table);
    	
    	return  $this->selectSQL($sql);
    }
	
}
