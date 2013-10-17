<div id="resizable" >
    
    
<br />
<br />
<br />
<style>
<?php foreach($mesas2 as $obj):?>
  #draggable<?php echo $obj['Mesa']['id'];?> {
    <?php if($obj['Mesa']['pedido_id'] != null):?>
    background-image: url(<?php echo $this->Html->webroot('/img/mesa4.png');?>);
    <?php else:?>
    background-image: url(<?php echo $this->Html->webroot('/img/mesa3.png');?>);
    <?php endif;?>
    background-repeat:no-repeat;
   background-size: cover;
    /*left: <?php echo $obj['Mesa']['posix'].'px';?>;
    top: <?php echo $obj['Mesa']['posiy'].'px';?>;*/
    }
<?php endforeach;?>
.ui-draggable{
    width: 100px; 
    height: 100px; 
    padding: 0.5em;
   text-align:center
   
}

/*
.ui-draggable-dragging{
    background: yellow;
}*/
</style>
<script>
  /*$(function() {
    $("#draggable").draggable();
    
  });*/
  
  $(function() {
    //$("#resizable").resizable();
  <?php foreach($mesas2 as $obj):?>
  $("#draggable<?php echo $obj['Mesa']['id'];?>").draggable({
   drag: function(event, ui){
      $("#posx<?php echo $obj['Mesa']['id'];?>").val(ui.offset.left);
      $("#posy<?php echo $obj['Mesa']['id'];?>").val(ui.offset.top);
      $(this).addClass("divabsoluto");
      //ui.helper.html(ui.position.left+"x"+ui.position.top);
      //ui.helper.html(ui.offset.left+"x"+ui.offset.top);
   },
   containment: 'parent'
   ,iframeFix: true
})

$("#draggable<?php echo $obj['Mesa']['id'];?>").droppable({
      revert: "valid"
      
});
<?php endforeach;?>

  });

    
  
</script>
<br />
<div class="hero-unit" style="width: 1000px; height: 500px; background-image: url(<?php echo $this->Html->webroot('/img/piso.jpg');?>);">
<?php foreach($mesas2 as $obj):?>
<div id="draggable<?php echo $obj['Mesa']['id'];?>" class="ui-draggable" >

<h1><?php echo $obj['Mesa']['numero'];?></h1>
</div>
<?php endforeach;?>
</div>
<?php echo $this->Form->create('Pedido',array('action' => 'menumoso/'.$idMoso));?>
<?php $i = 0;?>
<?php foreach($mesas2 as $obj):?>
<?php $i++;?>
<?php echo $this->Form->hidden("Mesa.$i.posix",array('id' => 'posx'.$obj['Mesa']['id'],'value' => $obj['Mesa']['posix']));?>
<?php echo $this->Form->hidden("Mesa.$i.posiy",array('id' => 'posy'.$obj['Mesa']['id'],'value' => $obj['Mesa']['posiy']));?>
<?php echo $this->Form->hidden("Mesa.idMoso",array('value' => $idMoso));?>
<?php endforeach;?>
<?php echo $this->Form->submit('Guardar Posicion');?>
<?php echo $this->Form->end();?>
</div>
<script>
$(document).ready(function(){
    
             <?php foreach($mesas2 as $obj):?>
             $('#draggable<?php echo $obj['Mesa']['id'];?>').offset({ top: <?php echo $obj['Mesa']['posiy'];?>, left: <?php echo $obj['Mesa']['posix'];?> });
            
          <?php endforeach;?>   
                         
      }); 
</script>