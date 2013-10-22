<br />
<br />

<br />

<div id="tituloambiente" style="position: absolute;">
    <h3>Ambiente <?php echo $ambiente['Ambiente']['numero']?></h3> 
</div>
<script>
  /*$(function() {
    $("#draggable").draggable();
    
  });*/
  
  $(function() {
    $("#resizable").resizable();
  <?php foreach($mesas as $obj):?>
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
<style>
<?php foreach($mesas as $obj):?>
  #draggable<?php echo $obj['Mesa']['id'];?> {
    /*left: <?php echo $obj['Mesa']['posix'].'px';?>;
    top: <?php echo $obj['Mesa']['posiy'].'px';?>;*/
    <?php if($obj['Mesa']['pedido_id'] != null):?>
    background-image: url(<?php echo $this->Html->webroot('/img/mesa4.png');?>);
    <?php else:?>
    background-image: url(<?php echo $this->Html->webroot('/img/mesa3.png');?>);
    <?php endif;?>
    }
<?php endforeach;?>
.ui-draggable{
    width: 100px; 
    height: 100px; 
    padding: 0.5em;
   background-repeat:no-repeat;
   background-size: cover;
   
}
.contenidomesas2{
    
    background-color: #EEEEEE;
    border-radius: 6px 6px 6px 6px;
    color: inherit;
    font-size: 18px;
    font-weight: 200;
    line-height: 30px;
    margin-bottom: 30px;
    padding: 20px;
}

/*
.ui-draggable-dragging{
    background: yellow;
}*/
</style>
<div style="margin-left: 45px; margin-top: -10;">

<div  id="resizable" class="contenidomesas" style="background-image: url(<?php echo $this->Html->webroot('/img/piso.jpg');?>);width: 1000px; height: 500px;">
<?php foreach($mesas as $obj):?>
<div id="draggable<?php echo $obj['Mesa']['id'];?>" align="center">
<h1><?php echo $obj['Mesa']['numero'];?></h1>
</div>
<?php endforeach;?>
</div>
</div>

<?php foreach($mesas as $obj):?>
<div id="minimenu<?php echo $obj['Mesa']['id'];?>" class="minimenu">
      <ul class="minimenu">
            <li id="eliminar" class="minimenu"><?php echo $this->Html->link('Eliminar',array('action' => 'eliminar',$obj['Mesa']['id'],$ambiente['Ambiente']['id']),array('onclick' => 'alert("Esta seguro de eliminar la mesa!")'));?></li>
        </ul>
      <ul class="minimenu">
            <li id="ocupar" class="minimenu"><?php echo $this->Html->link('Ocupar',array('action' => 'ocupar',$obj['Mesa']['id'],$ambiente['Ambiente']['id']));?></li>
        </ul>
      <ul class="minimenu">
            <li id="desocupar" class="minimenu"><?php echo $this->Html->link('Desocupar',array('action' => 'desocupar',$obj['Mesa']['id'],$ambiente['Ambiente']['id']));?></li>
        </ul>
</div>
<?php endforeach;?>
<style>
ul.minimenu{
      list-style: none;
      list-style-type: none;
      list-style-position: outside;
}
 
li.minimenu{
      line-height: 30px;
      font-size: 16px;
      cursor:pointer;
}
 
div.minimenu{
      width:250px;
      position:absolute;      
      border:1px solid black;
      background: white;
      -moz-box-shadow: 0 0 5px #888;
      -webkit-box-shadow: 0 0 5px#888;
      box-shadow: 0 0 5px #888;
}
</style>
<script>
$(document).ready(function(){
    $('#tituloambiente').offset({ top: 80, left: 450});
             <?php foreach($mesas as $obj):?>
             $('#draggable<?php echo $obj['Mesa']['id'];?>').offset({ top: <?php echo $obj['Mesa']['posiy'];?>, left: <?php echo $obj['Mesa']['posix'];?> });
            //Ocultamos el menú al cargar la página
            
            $("#minimenu<?php echo $obj['Mesa']['id'];?>").hide();
             
            /* mostramos el menú si hacemos click derecho
            con el ratón */
            
            $('#draggable<?php echo $obj['Mesa']['id'];?>').bind("contextmenu", function(e){
                $('div.minimenu').hide();
                  $("#minimenu<?php echo $obj['Mesa']['id'];?>").css({'display':'block', 'left':e.pageX, 'top':e.pageY});
                  return false;
            });
            
             
            //cuando hagamos click, el menú desaparecerá
            $(document).click(function(e){
                  if(e.button == 0){
                        $("#minimenu<?php echo $obj['Mesa']['id'];?>").css("display", "none");
                  }
            });
             
            //si pulsamos escape, el menú desaparecerá
            $(document).keydown(function(e){
                  if(e.keyCode == 27){
                        $("#minimenu<?php echo $obj['Mesa']['id'];?>").css("display", "none");
                  }
            });
             
          <?php endforeach;?>   
                         
      }); 
</script>
<?php echo $this->Form->create('Mesa');?>
<?php $i = 0;?>
<?php foreach($mesas as $obj):?>
<?php $i++;?>
<?php echo $this->Form->hidden("Mesa.$i.posix",array('id' => 'posx'.$obj['Mesa']['id'],'value' => $obj['Mesa']['posix']));?>
<?php echo $this->Form->hidden("Mesa.$i.posiy",array('id' => 'posy'.$obj['Mesa']['id'],'value' => $obj['Mesa']['posiy']));?>
<?php echo $this->Form->hidden("Mesa.ambiente",array('id' => 'ambiente'.$obj['Mesa']['id'],'value' => $ambiente['Ambiente']['id']));?>
<?php endforeach;?>
<?php echo $this->Form->submit('Guardar Posicion');?>
<?php echo $this->Form->end();?>
<?php echo $this->Html->link('ADICIONAR MESA',array('action' => 'add',$ambiente['Ambiente']['id']),array('class' => 'btn btn-green'));?> 
<?php echo $this->Html->link('ADICIONAR AMBIENTE',array('action' => 'addambiente'),array('class' => 'btn btn-green'));?> 
<?php echo $this->Html->link('ELIMINAR AMBIENTE',array('action' => 'deleteambiente',$ambiente['Ambiente']['id']),array('class' => 'btn btn-danger'));?>