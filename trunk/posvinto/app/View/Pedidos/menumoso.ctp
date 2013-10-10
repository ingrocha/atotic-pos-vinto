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
  *background-color: #003bb3;
}
    
</style>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <div class="hero-unit">                
                <h2>MOSO: <?php echo $datosMoso['User']['nombre']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo $this->Html->url(array('action' => 'verificamoso', $datosMoso['User']['id'])); ?>" class="btn btn-success btn-large" style="margin-top: 10px;">NUEVA MESA</a><a data-toggle="modal" href="#myModal"  class="btn btn-success btn-large" style="margin-top: 10px;" >NUEVA MESA</a><?php echo $this->Js->link('NUEVA MESAS', array('action' => '#'), array('update' => '#content','class' => 'btn btn-success btn-large','style' => 'margin-top: 10px;'));?> </h2>                                             
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
                            "MESA : $mesa".$this->Html->image('iconos/mesa.png', array('style'=>"padding-top: 10px;")), array(
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
            <a href="<?php echo $this->Html->url(array('action' => 'verificamoso', $datosMoso['User']['id'])); ?>" class="btn btn-success btn-large" style="margin-top: 10px;">NUEVA MESA &raquo;</a> 
             
            <a href="<?php echo $this->Html->url(array('action' => 'validamoso')); ?>" class="btn btn-large">CERRAR</a>
        </div>
    </div>
    <hr/>

    <div id="footer">
        <div class="container">
            LabWare
        </div>
    </div>    
<div id="prueba">

</div>
<script>
        $('#prueba').load(<?php echo $this->Html->url(array('action' => 'ajaxmesas'));?>);
        </script>
</div><!--/.fluid-container-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
        <div id="listamesas">
        </div>
        <script>
        $('#listamesas').load(<?php echo $this->Html->url('Pedidos/ajaxmesas');?>);
        </script>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php echo $this->Js->writeBuffer(); ?>