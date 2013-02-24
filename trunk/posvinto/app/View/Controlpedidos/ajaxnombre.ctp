<?php
echo $this->Form->hidden('Controlpedidos.existe', array('value'=>$existe));
 
if($existe){
   echo $this->Form->text('Controlpedidos.nombre', array('value'=>$nombre,'class'=>'input-block-level'));   
}else{
    echo $this->Form->text('Controlpedidos.nombre', array('class'=>'input-block-level', 'placeholder'=>'Ingrese el nombre'));
}
 
?>
                            