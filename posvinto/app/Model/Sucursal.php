<?php
    class Sucursal extends AppModel{
        public $name = 'Sucursal';
        public $useTable = 'sucursales';
        
   var $belongsTo = array('Departamento' => 
                            array('className' => 'Departamento', 
                            'foreignKey' => 'departamento_id'),
        
        );    
    }
?>