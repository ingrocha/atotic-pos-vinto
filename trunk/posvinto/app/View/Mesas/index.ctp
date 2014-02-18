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
    
  <?php foreach($mesas as $obj):?>
  $("#draggable<?php echo $obj['Mesa']['id'];?>").draggable({
   drag: function(event, ui){
      $("#posx<?php echo $obj['Mesa']['id'];?>").val(ui.offset.left);
      $("#posy<?php echo $obj['Mesa']['id'];?>").val(ui.offset.top);
      $("#posx2<?php echo $obj['Mesa']['id'];?>").val(ui.position.left);
      $("#posy2<?php echo $obj['Mesa']['id'];?>").val(ui.position.top);
      $(this).addClass("divabsoluto");
      //ui.helper.html(ui.position.left+"x"+ui.position.top);
      //ui.helper.html(ui.offset.left+"x"+ui.offset.top);
   },
   containment: 'parent'
   ,iframeFix: true
})
//$("#draggable<?php echo $obj['Mesa']['id'];?>").resizable();
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
    width: 80px; 
    height: 80px; 
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
<div style="margin-left: 25px; margin-top: -10;">

<div  id="resizable" class="contenidomesas" style="background-image: url(<?php echo $this->Html->webroot('/files/'.$ambiente['Ambiente']['imagen']);?>);width: 1000px; height: 500px; background-size: cover;">
<?php foreach($mesas as $obj):?>
<div id="draggable<?php echo $obj['Mesa']['id'];?>" align="center">
<h1><?php echo $obj['Mesa']['nombre'];?></h1>

</div>
<?php endforeach;?>
</div>
</div>

<?php foreach($mesas as $obj):?>
<div id="minimenu<?php echo $obj['Mesa']['id'];?>" class="minimenu">
      <ul class="minimenu">
            <li id="eliminar" class="minimenu"><?php echo $this->Html->link('Eliminar',array('action' => 'eliminar',$obj['Mesa']['id'],$ambiente['Ambiente']['id']),array('onclick' => 'alert("Esta seguro de eliminar la mesa!")'));?></li>
            <li id="ocupar" class="minimenu"><?php echo $this->Html->link('Ocupar',array('action' => 'ocupar',$obj['Mesa']['id'],$ambiente['Ambiente']['id']));?></li>
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
<?php echo $this->Form->hidden("Mesa.$i.posix2",array('id' => 'posx2'.$obj['Mesa']['id'],'value' => $obj['Mesa']['posix2']));?>
<?php echo $this->Form->hidden("Mesa.$i.posiy2",array('id' => 'posy2'.$obj['Mesa']['id'],'value' => $obj['Mesa']['posiy2']));?>
<?php echo $this->Form->hidden("Mesa.ambiente",array('id' => 'ambiente'.$obj['Mesa']['id'],'value' => $ambiente['Ambiente']['id']));?>
<?php endforeach;?>
<?php echo $this->Form->submit('Guardar Posicion');?>
<?php echo $this->Form->end();?>
<?php echo $this->Html->link('ADICIONAR MESA','#adimesa',array('class' => 'btn btn-green','data-toggle' => 'modal'));?> 
<?php echo $this->Html->link('CAMIAR IMAGEN','#defaultModal2',array('class' => 'btn btn-info','data-toggle' => 'modal'));?> 
<?php echo $this->Html->link('ADICIONAR AMBIENTE','#defaultModal',array('class' => 'btn btn-green','data-toggle' => 'modal'));?> 
<?php //echo $this->Html->link('ADICIONAR AMBIENTE',array('action' => 'addambiente'),array('class' => 'btn btn-green'));?>  
<?php echo $this->Html->link('ELIMINAR AMBIENTE',array('action' => 'deleteambiente',$ambiente['Ambiente']['id']),array('class' => 'btn btn-danger'));?>



<div id="adimesa" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 id="myModalLabel"><i class="fontello-icon-popup"></i> ADICIONAR MESA</h4>
    </div>
    <?php echo $this->Form->create('Mesa',array('action' => 'add'));?>
    <div class="modal-body">
        
                                    <h4 class="simple-header"> Nombre <small>de la mesa</small> </h4>
                                    <?php echo $this->Form->text('nombre');?>
                                    <?php echo $this->Form->hidden('ambiente_id',array('value' => $ambiente['Ambiente']['id']));?>
    </div>
    <div class="modal-footer">
        <button class="btn btn-red" data-dismiss="modal">Close</button>
        <button class="btn btn-green"  type="submit">CREAR MESA</button>
        <?php echo $this->Form->end()?>
    </div>
</div>
<div id="defaultModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 id="myModalLabel"><i class="fontello-icon-popup"></i> ADICIONAR AMBIENTE</h4>
    </div>
    <?php echo $this->Form->create('Mesa',array('action' => 'addambiente', 'enctype' => 'multipart/form-data'),array('type' => 'file'));?>
    <div class="modal-body">
        
                                    <h4 class="simple-header"> SUBIR IMAGEN <small>Para el fondo de ambiente</small> </h4>
                                    <div class="well well-black inline">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 120px;"> <img src="http://www.placehold.it/200x120/EFEFEF/AAAAAA&amp;text=no+image" /> </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div> <span class="btn btn-file"> <span class="fileupload-new">Seleccione una imagen de tipo "jpg"</span> <span class="fileupload-exists">Cambiar</span>
                                                
                                                <?php echo $this->Form->file('imagen');?>
                                                </span> <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a> </div>
                                        </div>
                                        <!-- // image upload --> 
                                    </div>
        
    </div>
    <div class="modal-footer">
        <button class="btn btn-red" data-dismiss="modal">Close</button>
        <button class="btn btn-green"  type="submit">CREAR AMBIENTE</button>
        <?php //echo $this->Form->submit('CREAR AMBIENTE',array('class' => 'btn btn-green'));?>
        <?php echo $this->Form->end()?>
    </div>
</div>
<div id="defaultModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 id="myModalLabel"><i class="fontello-icon-popup"></i> CAMBIAR IMAGEN DE FONDO</h4>
    </div>
    <?php echo $this->Form->create('Mesa',array('action' => 'cambiaimagen/'.$ambiente['Ambiente']['id'], 'enctype' => 'multipart/form-data'),array('type' => 'file'));?>
    <div class="modal-body">
        
                                    <h4 class="simple-header"> SUBIR IMAGEN <small>Para el fondo de ambiente</small> </h4>
                                    <div class="well well-black inline">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 120px;"> <img src="http://www.placehold.it/200x120/EFEFEF/AAAAAA&amp;text=no+image" /> </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div> <span class="btn btn-file"> <span class="fileupload-new">Seleccione una imagen de tipo "jpg"</span> <span class="fileupload-exists">Cambiar</span>
                                                
                                                <?php echo $this->Form->file('imagen');?>
                                                </span> <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a> </div>
                                        </div>
                                        <!-- // image upload --> 
                                    </div>
        
    </div>
    <div class="modal-footer">
        <button class="btn btn-red" data-dismiss="modal">Close</button>
        <button class="btn btn-green"  type="submit">CAMBIAR AMBIENTE</button>
        <?php //echo $this->Form->submit('CREAR AMBIENTE',array('class' => 'btn btn-green'));?>
        <?php echo $this->Form->end()?>
    </div>
</div>