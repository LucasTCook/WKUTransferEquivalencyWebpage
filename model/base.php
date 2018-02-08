<?php

class base{
    
    public function __construct() {
        
    }
    
    public function Find($obj, $orderby = 'ID'){
            return DB('find',$obj, $orderby);
    }

    public function FindByParams($params=array(), $orderby ='ID'){
        return DB('FindByParams', $this, $params, $orderby);
    }
}
?>