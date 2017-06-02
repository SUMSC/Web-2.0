<?php

class UserModel extends Model {

    

    public function select($data){

        $sql = sprintf("select * from `%s` where %s", $this->_table, $this->formatWhere($data));

        return $this->selectSQL($sql);
    }

}
