<style>
body {
        padding-top: 60px;
        padding-bottom: 40px;
    }
    .sidebar-nav {
        padding: 9px 0;
    }

    @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
            float: none;
            padding-left: 5px;
            padding-right: 5px;
        }
    }

    .hero-unit h3.nombre{
        color: #4D0F04;        
    }

    /* Set the fixed height of the footer here */
    #push,
    #footer {
        height: 60px;
    }
    #footer {
        background-color: #f5f5f5;
    }
    /*botones principales de las mesas*/
    .btn-primary {
        background-color: #006DC;
        background-image: linear-gradient(to bottom, #FFD47F, #FFD47F);
        background-repeat: repeat-x;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        color: #000;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }
    /*letras de los botones*/
    .hero-unit a.btn-primary{
        text-transform: uppercase;   
        font-weight: bold;
        font-size: 22pt;
        padding-bottom: 20px;
        padding-top: 25px;
        width: 150px;        
        margin-bottom: 10px;
        margin-right: 10px;       
    }   
    
    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .btn-primary.disabled,
    .btn-primary[disabled] {
  color: #000;
  background-color: #FFD47F;
  background-color: #003bb3;
}
    
</style>
<div class="container-fluid">
<div class="row-fluid">
<div class="span7" >
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
<?php echo $this->Form->create('Pedido',array('action' => 'menumoso/'.$datosMoso['User']['id']));?>
<?php $i = 0;?>
<?php foreach($mesas2 as $obj):?>
<?php $i++;?>
<?php echo $this->Form->hidden("Mesa.$i.posix",array('id' => 'posx'.$obj['Mesa']['id'],'value' => $obj['Mesa']['posix']));?>
<?php echo $this->Form->hidden("Mesa.$i.posiy",array('id' => 'posy'.$obj['Mesa']['id'],'value' => $obj['Mesa']['posiy']));?>
<?php echo $this->Form->hidden("Mesa.idMoso",array('value' => $datosMoso['User']['id']));?>
<?php endforeach;?>
<?php echo $this->Form->submit('Guardar Posicion');?>
<?php echo $this->Form->end();?>
</div>
</div>

</div>


<script>
$(document).ready(function(){
    
             <?php foreach($mesas2 as $obj):?>
             $('#draggable<?php echo $obj['Mesa']['id'];?>').offset({ top: <?php echo $obj['Mesa']['posiy'];?>, left: <?php echo $obj['Mesa']['posix'];?> });
            
          <?php endforeach;?>   
                         
      }); 
</script>

<script>
$(document).ready(function(){
    
             <?php foreach($mesas2 as $obj):?>
             $('#draggable<?php echo $obj['Mesa']['id'];?>').offset({ top: <?php echo $obj['Mesa']['posiy'];?>, left: <?php echo $obj['Mesa']['posix'];?> });
           
          <?php endforeach;?>   
       $('#resizable').toggle();             
      }); 
</script>


    <div class="row-fluid">
        <div class="span9">
            <div class="hero-unit"> 
                         
                <h2>MOSO: <?php echo $datosMoso['User']['nombre']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h2>
                <p>
                <a data-toggle="modal" href="#myModal" class="btn btn-success btn-large" >NUEVA MESA</a> 
                 
                <a class="btn btn-success btn-large" onclick="$('#resizable').toggle(200); $('#resizable').load('<?php echo $this->Html->url("ajaxmapa/".$datosMoso['User']['id']);?>');" href="#" >VER MAPA</a>                                            
                
                </p>
                <?php 
                /*$this->Js->get('#llamaajaxmesas')->event('click', 
                ''
                );*/
                ?>
                <?php foreach ($mesas as $m): ?>
                    <?php $id_pedido = $m['Pedido']['id']; ?>
                    <?php $id_moso = $m['Pedido']['user_id']; ?> 
                    <?php //$idMesa = $m['Pedido']['user_id']; ?>  
                    <?php $mesa = $m['Pedido']['mesa']; ?>                    
                    <?php //echo $this->Html->link('');?>
                                    <!--<button class="btn btn-large btn-danger" type="button">Mesa <?php //echo $m['Pedido']['mesa'];        ?></button>-->   
                    <?php
                    if ($datosMoso['User']['role'] == "Jefe")
                    {
                        echo $this->Ajax->link(
                            $this->Html->image('mesa.png')."MESA : $mesa", array(
                            'controller' => 'Pedidos',
                            'action' => 'detallemesajefe',
                            $id_pedido, $datosMoso['User']['id']
                                ), array(
                            'update' => 'cargaPedidos',
                            'escape' => false,
                            'class' => "btn btn-large btn-primary",
                            'style' => 'width: 150px')
                        );
                    } else
                    {
                        echo $this->Ajax->link(
                            "PEDIDO: $mesa".$this->Html->image('iconos/mesa.png', array('style'=>"padding-top: 10px;")), array(
                            'controller' => 'Pedidos',
                            'action' => 'detallemesa',
                            $id_pedido,
                                ), array(
                            'update' => 'cargaPedidos',
                            'escape' => false,
                            'class' => "btn btn-large btn-primary"                            )
                        );
                    }
                    ?>                                        
                <?php endforeach; ?>

            </div>                    
        </div><!--/span-->

        <div class="span3">
            <div id="cargaPedidos">
                <h2>Selecciona una Mesa</h2>  
                <?php //echo $this->Html->link('Cancelarpedido', array('controller' => 'Pedidos', 'action' => 'cancelapedido', $idPedido, $idMesa), array('class' => 'btn btn-block'))  ?>  
            </div>
        </div><!--/span-->
    </div><!--/row-->
    <div class="row-fluid">
        <div class="span10">            
             
             
            <a href="<?php echo $this->Html->url(array('action' => 'validamoso')); ?>" class="btn btn-large">CERRAR</a>
        </div>
    </div>
    
    
    <hr/>
    <div id="footer">
        <div class="container">
            LabWare
        </div>
    </div>    

</div><!--/.fluid-container-->
<!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          <?php echo $this->Form->create('Pedido',array('action' => 'verificamoso/'.$datosMoso['User']['id']));
    $i = 0;
    ?>
    <?php foreach($mesas2 as $m):?>
    
    <?php if($m['Mesa']['pedido_id'] == null):?>
    Mesa <?php echo $m['Mesa']['numero'];?>: 
    <?php echo $this->Form->checkbox("Mesa.$i.pedido");
    echo $this->Form->hidden("Mesa.$i.id",array('value' => $m['Mesa']['id']));
    $i++;
    ?>
    <br />
    <?php endif;?>
    <?php endforeach;?>
    <?php echo $this->Form->hidden('Mesa.cantidad',array('value' => $i));?>
    
        </div>
        <div class="modal-footer">
          <?php echo $this->Form->submit('OCUPAR',array());?>
            <?php echo $this->Form->end();?>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<?php echo $this->Js->writeBuffer(); ?>