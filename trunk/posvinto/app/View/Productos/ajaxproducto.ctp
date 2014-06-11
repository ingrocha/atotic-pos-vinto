<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Formulario del Producto</h4>
    </div>
    <?php echo $this->Form->create('Producto',array('action'=>'guardaproducto'));?>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="span12 form-dark">
            <div class="row-fluid">
            <div class="span12">
            <div class="span4">
            <label>Nombre del Producto</label>
            </div>
            <div class="span8">
            <?php echo $this->Form->text('Producto.nombre',array('class' => 'span12','required'));?>
            <?php echo $this->Form->hidden('Producto.id');?>
            <?php echo $this->Form->hidden('Producto.categoria_id');?>
            </div>
            </div>
            </div>
            <div class="row-fluid">
            <div class="span12">
            <div class="span4">
            <label>Descripcion del Producto</label>
            </div>
            <div class="span8">
            <?php echo $this->Form->text('Producto.descripcion',array('class' => 'span12','required'));?>
            </div>
            </div>
            </div>
            <div class="row-fluid">
            <div class="span12">
            <div class="span6">
            <label>Precio</label>
            <?php echo $this->Form->text('Producto.precio',array('class' => 'span12','required'));?>
            </div>
            <div class="span6">
            <label>Estado</label>
            <?php echo $this->Form->select('Producto.estado',array(1=>'Activado',0=>'Desactivado',2=>'Eliminar'),array('class' => 'span12','required','value' => 1));?>
            </div>
            </div>
            </div>
            <?php if(!empty($this->request->data['Producto']['id'])):?>
            <div class="row-fluid">
            <div class="span12">
            <a onclick="$('#ajax-modal').modal('hide');cargarmodal('<?php echo $this->Html->url(array('action' => 'ajaxinsumos',$this->request->data['Producto']['categoria_id'],$this->request->data['Producto']['id']));?>');" class="btn btn-inverse span12">INSUMOS</a> 
            </div>
            </div>
            <?php endif;?>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <?php echo $this->Form->submit('Guardar',array('class' => 'btn btn-green'));?>
        
    </div>
    <?php echo $this->Form->end();?>