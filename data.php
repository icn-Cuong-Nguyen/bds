<?php

include './config.php';

class data{
    
    private $conn;
            
    
    function __construct() {
       $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
       mysqli_set_charset($this->con,"utf8");
    }
    
    public function _getprovinces(){
        $qery = 'select * from provinces '.$this->_orderbyDESC('idp');
        $datas = mysqli_query($this->conn, $qery);
        return $datas;
    }
    
    private function _orderbyDESC($fill){
        return 'order by '.$fill.' '.'DESC';
    }
    
     private function _orderbyASC($fill){
        return 'order by '.$fill.' '.'ASC';
    }
    
}

