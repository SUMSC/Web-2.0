<?php

class PfFaqModel extends Model {


	public function faqSelect(){
        $sql = sprintf("select * from `%s` ", $this->_table);
        $sth = $this->_dbHandle->prepare($sql);
        if ( $sth->execute() )
            return $sth->fetchAll();
        return 0;
	}

    public function faqInsert( $data ){
 
        $sql = sprintf( "insert into `%s` %s", $this->_table, $this->formatInsert($data) );
 
        $result = $this->query($sql);
    	return $result;
    }

    public function faqDelete( $data ){
 
        $sql = sprintf( "delete from `%s` where %s", $this->_table, $this->formatWhere($data) );
        $result = $this->query($sql);
    	return $result;
    }

    public function faqUpdate($set,$where){
 
        $sql = sprintf( "update `%s`set %s where %s", $this->_table, $this->formatUpdate($set) ,$this->formatWhere($where) );
        $result = $this->query($sql);
        return $result;
    }

}