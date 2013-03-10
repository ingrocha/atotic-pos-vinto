<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Reasignar mesa</h3>
</div>
 <?php echo $this->Form->create('controlpedidos', array('action'=>'reasignamesero')) ?>
   
   <?php echo $this->Form->hidden('pedido', array('value'=>$idPedido)) ?>
   
<div class="modal-body">
    <fieldset>
        <legend>Reasigna <small> mozo</small></legend>
        <label for="accountAddressState" class="control-label">Meseros <span class="required">*</span></label>
        <div class="controls">
            <select id="accountAddressState" class="span3" name="data[controlpedidos][mesero]" required>
                <option value="" selected="selected">Selecione el mesero</option>
                <?php foreach ($mosos as $moso): ?>                                    
                    <option value="<?php echo $moso['User']['id']; ?>"><?php echo $moso['User']['nombre']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <!-- // form item -->
        <label for="formA05">Observaciones</label>
        <?php echo $this->Form->textarea('observaciones') ?>
    </fieldset>	
</div>

<div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-boo">Cerrar</button>
    <button type="submit" class="btn btn-blue">Ok</button>
 </div>                       