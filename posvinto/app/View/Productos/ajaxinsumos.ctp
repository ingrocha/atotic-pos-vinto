<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Insumos de <?php echo $producto['Producto']['nombre'];?></h4>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
        <div class="span12">
        <?php echo $this->Form->create('Producto');?>
        <div class="span5">
        <label>Insumo</label>
        <?php echo $this->Form->select('Porcione.insumo_id',$listinsumos,array('class' => 'span12','required'));?>
        <?php echo $this->Form->hidden('Porcione.producto_id',array('value' => $idProducto));?>
        </div>
        <div class="span2">
        <label>Cantidad</label>
        <?php echo $this->Form->cantidad('Porcione.cantidad',array('class' => 'span12','required'));?>
        </div>
        <div class="span3">
        <label>|</label>
        <?php 
                    echo $this->Js->submit('Guardar', array(
                        'url' => array(
                            'action' => 'guardaporcion',$idCategoria,$idProducto
                        ),
                        'before' => "$('#ajax-modal').modal('hide');",
                        //'update' => '#examenes',
                        'success' => "cargarmodal('".$this->Html->url(array('action' => 'ajaxinsumos',$idCategoria,$idProducto))."');",
                        'class' => 'btn btn-success span12'
                    )
                );
                    ?>
        </div>
        <?php echo $this->Form->end();?>
        </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
            <table class="table table-bordered table-striped table-condensed">
            <thead>
            <tr>
            <th>Insumo</th>
            <th>Cantidad</th>
            <th>Accion</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($insumos as $in):?>
            <tr>
            <td><?php echo $in['Insumo']['nombre'];?></td>
            <td><?php echo $in['Porcione']['cantidad'];?></td>
            <td><a class="label label-important" href="javascript:" onclick="if(confirm('Esta seguro de aliminar??')){$('#ajax-modal').modal('hide');cargarmodal('<?php echo $this->Html->url(array('action' => 'ajaxeliminainsumo',$idCategoria,$idProducto,$in['Porcione']['id']));?>');}">Eliminar</a></td>
            </tr>
            <?php endforeach;?>
            </tbody>
            </table>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
            <a onclick="$('#ajax-modal').modal('hide');cargarmodal('<?php echo $this->Html->url(array('action' => 'ajaxproducto',$idCategoria,$idProducto));?>');" class="btn btn-inverse span12">EDITAR PRODUCTO</a> 
            </div>
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-boo">Close</button>
    </div>