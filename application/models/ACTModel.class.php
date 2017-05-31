<?php


class ACTModel extends Model{
	
	
	public function Activityselect(){
 
        $sql = sprintf("select * from `%s ", $this->_table);
		$sth = $this->_dbHandle->prepare($sql);
		 if ( $sth->execute() )
            return $sth->fetchAll();
        return 0;
	}
 
   
    }
	
	 public function Activityinsert( $data ){
 
        $sql = sprintf( "insert into `%s` %s", $this->_table, $this->formatInsert($data) );
 
        return $this->querySQL($sql);
		return $result;
    }
	 
	 
	 public function  Activitydelet($rid)
	 {
		  $sql = sprintf( "delete from `%s` where %s", $this->_table, $this->formatWhere($data) );
        $result = $this->query($sql);
    	return $result;
	 }
}

public function ActivityUpdate($set,$where){
 
        $sql = sprintf( "update `%s`set %s where %s", $this->_table, $this->formatUpdate($set) ,$this->formatWhere($where) );
        $result = $this->query($sql);
        return $result;
    }
}

 public function Submitselect()
	 {
		 $sql = sprintf("select * from `%s ", $this->_table);
		$sth = $this->_dbHandle->prepare($sql);
		 if ( $sth->execute() )
            return $sth->fetchAll();
        return 0;
	 }

public function SubmitUpdate($set,$where){
 
        $sql = sprintf( "update `%s`set %s where %s", $this->_table, $this->formatUpdate($set) ,$this->formatWhere($where) );
        $result = $this->query($sql);
        return $result;
    }
}

public function Submitinsert( $data ){
 
        $sql = sprintf( "insert into `%s` %s", $this->_table, $this->formatInsert($data) );
 
        return $this->querySQL($sql);
		return $result;
    }

public function  Submitdelet($rid)
	 {
		  $sql = sprintf( "delete from `%s` where %s", $this->_table, $this->formatWhere($data) );
        $result = $this->query($sql);
    	return $result;
	 }
}

?>