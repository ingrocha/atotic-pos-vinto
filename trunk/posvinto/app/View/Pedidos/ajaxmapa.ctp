<div id="resizable" >
    
    

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
   
   /*
    left: <?php echo $obj['Mesa']['posix2'].'px';?>;
    top: <?php echo $obj['Mesa']['posiy2'].'px';?>;*/
    }
<?php endforeach;?>
.ui-draggable{
    width: 80px; 
    height: 80px; 
    padding: 0.5em;
   text-align:center  
   
}

/*
.ui-draggable-dragging{
    background: yellow;
}*/
</style>

<br />
<div class="hero-unit" style="width: 1000px; height: 500px; background-image: url(<?php echo $this->Html->webroot('/files/'.$ambiente['Ambiente']['imagen']);?>);width: 1000px; height: 500px; background-size: cover;">
<?php foreach($mesas2 as $obj):?>
<?php if($obj['Mesa']['pedido_id'] == null):?>
<div id="draggable<?php echo $obj['Mesa']['id'];?>" class="ui-draggable" onclick=" location = '<?php echo $this->Html->url(array('action' => 'verificamoso',$idMoso,$obj['Mesa']['id']));?>'">

<h1><?php echo $obj['Mesa']['nombre'];?></h1>
</div>
<?php else:?>
<div id="draggable<?php echo $obj['Mesa']['id'];?>" class="ui-draggable" >
<a data-toggle="modal" href="#myModal" onclick="$('#cargaPedidos').load('<?php echo $this->Html->url(array('action' => 'detallemesa',$obj['Mesa']['pedido_id']));?>');" >
<h1><?php echo $obj['Mesa']['nombre'];?></h1>
</a>
</div>
<?php endif;?>

<?php endforeach;?>
</div>

</div>
<script>
$(document).ready(function(){
    
             <?php foreach($mesas2 as $obj):?>
             $('#draggable<?php echo $obj['Mesa']['id'];?>').offset({ top: <?php echo $obj['Mesa']['posiy'];?>, left: <?php echo $obj['Mesa']['posix'];?> });
            //$("#draggable<?php echo $obj['Mesa']['id'];?>").css({ top: '<?php echo $obj['Mesa']['posiy2'].'px';?>', left: '<?php echo $obj['Mesa']['posix2'].'px';?>'});
          <?php endforeach;?>   
                         
      }); 
</script>