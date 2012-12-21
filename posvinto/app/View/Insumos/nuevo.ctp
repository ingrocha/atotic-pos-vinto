<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/insumos'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Insumo', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i> Nuevo <small>Insumo</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>NUEVO INSUMO</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese en nombre Ej: Cerveza', 'required', 'title'=>'Este campo Necesario')); ?>
                        <!-- // form item -->
                        <label for="formA04">Precios y cantidad:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('preciocompra', array('class' => 'span3', 'placeholder' => 'Precio de compra Ej: 12.50', 'required', 'pattern'=>"^(\d|-)?(\d|,)*\.?\d*$")); ?>
                            <?php echo $this->Form->text('precioventa', array('class' => 'span3', 'placeholder' => 'Precio de venta Ej: 60', 'required', 'pattern'=>"^(\d|-)?(\d|,)*\.?\d*$")); ?>                                
                            <?php echo $this->Form->text('total', array('class' => 'span3', 'placeholder' => 'Cantidad Ej: 8', 'required', 'pattern'=>"^(\d|-)?(\d|,)*\.?\d*$")); ?>                                                                
                        </div>
                        <!-- // form item -->

                        <label for="accountAddressState" class="control-label">Categoria <span class="required">*</span></label>
                        <div class="controls">
                            <select id="accountAddressState" class="span6" name="data[Insumo][tipo_id]" required>
                                <option value="" selected="selected">Selecione Categoria</option>
                                <?php foreach ($dct as $dt): ?>                                    
                                    <option value="<?php echo $dt['Tipo']['id']; ?>"><?php echo $dt['Tipo']['nombre']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- // form item -->

                        <label for="formA06">Observaciones:</label>
                        <textarea id="formA06" class="input-block-level" rows="3" placeholder="Escriba las Observaciones", name="data[Insumo][observaciones]"></textarea>
                        <!-- // form item -->

                        <button class="btn btn-green" type="submit">Guardar Insumo</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
  </div> 