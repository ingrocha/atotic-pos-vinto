<?php  
class Contrato extends AppModel{
    public $belongsTo = array(
       'Usuario'=>array(
          'className'=>'User', 
          'foreignKey'=>'user_id'
       )
    );
}