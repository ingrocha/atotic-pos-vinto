<?php  
class Contrato extends AppModel{
    public $belongsTo = array(
       'Usuario'=>array(
          'className'=>'Usuario', 
          'foreignKey'=>'usuario_id'
       )
    );
}