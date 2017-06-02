<?php

class GT_IndexModel extends Model {

    public function select( $keyword)
    {
        //echo "aaaa<br>";
    	//echo $keyword["type"];
    	//echo "<br>";
    	//echo $this->formatInsert($keyword);
    	//echo "<br>";
    	//echo $this->formatUpdate($keyword);
    	//echo $this->formatWhere($keyword);
    	
    	$sql = sprintf("select * from `%s` where %s", $this->_table,$this->formatWhere($keyword));
    	
    	return  $this->selectSQL($sql);
    }
	
}
