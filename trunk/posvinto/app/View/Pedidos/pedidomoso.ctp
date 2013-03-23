<style type="text/css">
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
    /*personalizamos el menu*/
    /*los botones*/
    .hero-unit a.btn-warning{
        text-transform: uppercase;   
        font-weight: bold;
        font-size: 14pt;
        padding-bottom: 10px;
        padding-top: 10px;
        width: 120px;              
        margin-bottom: 6px;
        margin-right: 6px;    
        line-height: 25pt;   
    }
    /*letras de los botones*/
    .btn-mini{
        background-color: #006DC;
        background-image: linear-gradient(to bottom, #AA002A, #55002B);
        background-repeat: repeat-x;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        color: #FFFFFF;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }

    /* Set the fixed height of the footer here */
    #push,
    #footer {
        height: 60px;
    }
    #footer {
        background-color: #f5f5f5;
    }

</style>
<?php $id_moso = $datosMoso['User']['id']; ?>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="span8">
            <div class="hero-unit">
                <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs" id="myTab">
                        <?php $i = 1; ?>
                        <?php foreach ($categorias as $c): ?>                                        	
                            <?php if ($i == 1): ?>
                                <li class="active">
                                    <a href="#<?php echo $c['Categoria']['id']; ?>"><?php echo $c['Categoria']['nombre']; ?></a>
                                </li>	
                            <?php else: ?>
                                <li>
                                    <a href="#<?php echo $c['Categoria']['id']; ?>"><?php echo $c['Categoria']['nombre']; ?></a>
                                </li>
                            <?php endif; ?>
                            <?php $i++; ?>				
                        <?php endforeach; ?>
                    </ul>

                    <div class="tab-content">              
                        <?php
                        //$idMoso = $this->Session->read('Auth.User.id'); 
                        ?>
                        <?php $j = 1; ?>  
                        <?php foreach ($categorias as $c): ?>
                            <?php $clase = $c['Categoria']['id']; ?>
                            <?php if ($j == 1): ?>                                                            
                                <div class="tab-pane active" id="<?php echo $c['Categoria']['id']; ?>">
                                <?php else: ?>
                                    <div class="tab-pane" id="<?php echo $c['Categoria']['id']; ?>">
                                    <?php endif; ?>
                                    <?php foreach ($productos as $p): ?>
                                        <?php $nombreProducto = $p['Producto']['nombre']; ?>
                                        <?php $idProducto = $p['Producto']['id']; ?>
                                        <?php if ($p['Producto']['categoria_id'] == $c['Categoria']['id']): ?>
                                            <?php if ($p['Producto']['estado'] == 0): ?>
                                                <a href="#" class="btn btn-mini <?php echo ($p['Producto']['estado'] == 1) ? 'btn-warning' : 'btn-danger' ?>">
                                                    <?php //echo $this->Html->image('mesa.png'); ?>
                                                    <?php echo $p['Producto']['nombre']; ?>
                                                </a>
                                            <?php else: ?>
                                                <?php
                                                echo $this->Ajax->link(
                                                    "$nombreProducto ".$this->Html->image('iconos/mesa.png', array('style'=>"padding-top: 10px;")), 
                                                    array(
                                                    'controller' => 'Pedidos',
                                                    'action' => 'ajaxlistado',
                                                    $id_moso,
                                                    $idProducto,
                                                    $pedido,
                                                    $mesa,
                                                    $anadido
                                                        ), array(
                                                    'update' => 'cargaPedidos',
                                                    'escape' => false,
                                                    'class' => "btn btn-mini btn-warning"
                                                    )
                                                );
                                                ?>
                                                <!--<a href="<?php //echo $this->Html->url(array('controller' => 'Pedidos', 'action' => 'moso', $p['Producto']['id']));              ?>" class="btn btn-mini <?php //echo ($p['Producto']['estado'] == 1) ? 'btn-warning' : 'btn-danger'              ?>">
                                                <?php //echo $this->Html->image('mesa.png'); ?>
                                                    <h3><?php //echo $p['Producto']['nombre'];                ?></h3>
                                                </a>-->
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>					
                                <?php $j++; ?>
                            <?php endforeach; ?>
                        </div>

                        <script>
                            $('#myTab a').click(function(e) {
                                e.preventDefault();
                                $(this).tab('show');
                            })
                        </script>
                    </div>

                </div>
            </div>

            <div class="span4">
                <div id="cargaPedidos">  
                      
                <h3>Mesa:&nbsp;<span style="font-size: 60px; font-weight: bold;" ><?php echo $mesa ?></span></h3>
<h3>Cantidad Total: <?php echo $cant_platos['0']['0']['cantidad']; ?></h3>
<div class="well sidebar-nav">
    <table class="table table-striped">
        <thead>
            <tr>              
                <th>Producto</th>
                <th>Cant.</th>                 
                <th>Quitar</th>                 
            </tr>
        </thead>
        <tbody>
            <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
            </tr>                 
        </tbody>
    </table>    
</div>        
<?php /*echo $this->Html->link('Cancelarpedido', array(
'controller' => 'Pedidos', 'action' => 'cancelapedido', $idPedido, $idMesa), 
array('class' => 'btn btn-block'),'Esta seguro de cancelar el pedido?, se eliminara todo el pedido y numero de mesa')*/ ?>
                </div>
            </div>

        </div>


    </div><!--/row-->

    <hr>

    <div id="footer">
        <div class="container">
            LabWare
        </div>
    </div>    

</div><!--/.fluid-container-->



<script>
    $(function() {
        $("#tabs").tabs();
    });
</script>
