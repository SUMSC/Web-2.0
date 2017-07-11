<?php

class PfRepairmenModel extends Model {

    public function qIDSelect($id){
        $sql = sprintf("select qq from %s where rid = %d", $this->_table ,$id );
        $sth = $this->_dbHandle->prepare($sql);
        if ( $sth->execute() )
            return $sth->fetchAll();
        return 0;
    }  

    public function nameSelect($id){
        $sql = sprintf("select name from %s where rid = %d", $this->_table ,$id );
        $sth = $this->_dbHandle->prepare($sql);
        if ( $sth->execute() )
            return $sth->fetchAll();
        return 0;
    }  

	public function PfRepairmenSelect(){
        $sql = sprintf("select * from `%s` ", $this->_table);
        $sth = $this->_dbHandle->prepare($sql);
        if ( $sth->execute() )
            return $sth->fetchAll();
        return 0;
	}  

    public function PfRepairmenInsert( $data ){
 
        $sql = sprintf( "insert into `%s` %s", $this->_table, $this->formatInsert($data) );
 
        $result = $this->query($sql);
    	return $result;
    }

    public function PfRepairmenDelete( $data ){
 
        $sql = sprintf( "delete from `%s` where %s", $this->_table, $this->formatWhere($data) );
        $result = $this->query($sql);
    	return $result;
    }

    public function PfRepairmenUpdate($set,$where){
 
        $sql = sprintf( "update `%s`set %s where %s", $this->_table, $this->formatUpdate($set) ,$this->formatWhere($where) );
        $result = $this->query($sql);
        return $result;
    }

}