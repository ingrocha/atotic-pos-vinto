<br />
<br />
<br />
<script>
  /*$(function() {
    $("#draggable").draggable();
    
  });*/
  
  $(function() {
    $("#resizable").resizable();
  <?php foreach($mesas as $obj):?>
  $("#draggable<?php echo $obj['Mesa']['id'];?>").draggable({
   drag: function(event, ui){
      $("#posx<?php echo $obj['Mesa']['id'];?>").val(ui.position.left);
      $("#posy<?php echo $obj['Mesa']['id'];?>").val(ui.position.top);
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
<style>
<?php foreach($mesas as $obj):?>
  #draggable<?php echo $obj['Mesa']['id'];?> {
    left: <?php echo $obj['Mesa']['posix'].'px';?>;
    top: <?php echo $obj['Mesa']['posiy'].'px';?>;
    }
<?php endforeach;?>
.ui-draggable{
    width: 150px; 
    height: 150px; 
    padding: 0.5em;
   background: #80FF00;
}

/*
.ui-draggable-dragging{
    background: yellow;
}*/
</style>
<div style="background: #E5E5E5;width: 1000px; height: 500px;" id="resizable" class="ui-widget-content">
<?php foreach($mesas as $obj):?>
<div id="draggable<?php echo $obj['Mesa']['id'];?>" class="ui-widget-content">
<h1><?php echo $obj['Mesa']['id'];?></h1>
</div>
<?php endforeach;?>
</div>

<?php echo $this->Form->create('Mesa');?>
<?php $i = 0;?>
<?php foreach($mesas as $obj):?>
<?php $i++;?>
<?php echo $this->Form->hidden("Mesa.$i.posix",array('id' => 'posx'.$obj['Mesa']['id'],'value' => $obj['Mesa']['posix']));?>
<?php echo $this->Form->hidden("Mesa.$i.posiy",array('id' => 'posy'.$obj['Mesa']['id'],'value' => $obj['Mesa']['posiy']));?>
<?php endforeach;?>
<?php echo $this->Form->submit('Guardar Posicion');?>
<?php echo $this->Form->end();?>
