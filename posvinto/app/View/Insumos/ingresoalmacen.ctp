<!-- // contenido pricipal -->                                 
    <div id="page-content" class="span10">
        <?php $id=$insumo['Insumo']['id']; ?>
        <?php $pc=$insumo['Insumo']['preciocompra']; ?>
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Movimiento', array('id' => 'formA', 'class' => 'span10')); ?>
                <br />
                <div class="span6 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>Ingreso <?php echo $insumo['Insumo']['nombre']; ?></small></legend>
                        
                        <label for="accountAddressState" class="control-label">Cantidad<span class="required">*</span></label>
                        <div class="controls">
                            <?php echo $this->Form->text('entrada', array('size'=>5, 'required')); ?> Unidades
                            <?php echo $this->Form->hidden('id_insumo', array('value'=>$id)); ?>
                            <?php echo $this->Form->hidden('pc', array('value'=>$pc)); ?>
                        </div>
                        <!-- // form item -->
                                       
                        <button class="btn btn-green" type="submit">Guardar</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
