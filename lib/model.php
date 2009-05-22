<?php

require(LIB_ROOT . 'autoload_models.php');

class Model {
    private $table_name;
    
    function __construct() {
        $this->reflection = new ReflectionObject($this);
        $this->table_name = getTableName();
    }
    
    protected function getTableName() {
        Inflector::underscore($this->reflection->getName());
    }
    
    public function getAll() {
        # do db magic...
    }
}

?>