<?php 
	class PfConsultModel extends Model{
		public function consultSelect(){
        $sql = sprintf("select * from `%s` ", $this->_table);
        $sth = $this->_dbHandle->prepare($sql);
        if ( $sth->execute() )
            return $sth->fetchAll();
        return 0;
	}

    public function consultInsert( $data ){
 
        $sql = sprintf( "insert into `%s` %s", $this->_table, $this->formatInsert($data) );
 
        $result = $this->querySQL($sql);
    	return $result;
    }

    public function consultDelete( $data ){
 
        $sql = sprintf( "delete from `%s` where %s", $this->_table, $this->formatWhere($data) );
        $result = $this->querySQL($sql);
    	return $result;
    }

    public function consultUpdate($set,$where){
 
        $sql = sprintf( "update `%s`set %s where %s", $this->_table, $this->formatUpdate($set) ,$this->formatWhere($where) );
        $result = $this->querySQL($sql);
        return $result;
    }					
}