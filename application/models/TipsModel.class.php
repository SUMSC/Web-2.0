<?php

class TipsModel extends Model {

	public function tipsSelect(){
        $sql = sprintf("select * from `%s` ", $this->_table);
        $sth = $this->_dbHandle->prepare($sql);
        if ( $sth->execute() )
            return $sth->fetchAll();
        return 0;
	}

    public function tipsInsert( $data ){
 
        $sql = sprintf( "insert into `%s` %s", $this->_table, $this->formatInsert($data) );
 
        $result = $this->query($sql);
    	return $result;
    }

    public function tipsDelete( $data ){
 
        $sql = sprintf( "delete from `%s` where %s", $this->_table, $this->formatWhere($data) );
        $result = $this->query($sql);
    	return $result;
    }

    public function tipsUpdate($set,$where){
 
        $sql = sprintf( "update `%s`set %s where %s", $this->_table, $this->formatUpdate($set) ,$this->formatWhere($where) );
        $result = $this->query($sql);
        return $result;
    }

}
