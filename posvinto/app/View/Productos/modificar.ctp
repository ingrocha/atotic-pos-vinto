<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/productos'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Producto', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i>Edici&oacute;n<small>Insumo</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>EDITAR PRODUCTO</small></legend>
                        <label for="formA04">Nombre:</label>                            
                        <?php echo $this->Form->text('nombre', array('id' => 'formA04', 'class' => 'input-block-level', 'placeholder' => 'Ingrese en nombre Ej: Cerveza', 'required', 'title'=>'Este campo Necesario')); ?>
                        <!-- // form item -->
                        
                        <label for="formA04">Precios y cantidad o peso neto unitario:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('preciocompra', array('class' => 'span3', 'placeholder' => 'Precio de compra Ej: 12.50', 'required', 'pattern'=>"^(\d|-)?(\d|,)*\.?\d*$")); ?>
                            <?php echo $this->Form->text('precioventa', array('class' => 'span3', 'placeholder' => 'Precio de venta Ej: 60', 'required', 'pattern'=>"^(\d|-)?(\d|,)*\.?\d*$")); ?>                                
                            <?php echo $this->Form->text('cantidadtotal', array('class' => 'span3', 'placeholder' => 'Peso Neto Ej: 24', 'required', 'pattern'=>"^(\d|-)?(\d|,)*\.?\d*$")); ?>                                                                
                            
                        </div>
                        <label for="formA04">Unidad de medida y peso:</label>
                        <div class="controls controls-row">
                        <select class="span3" name="data[Insumo][unidade_id]">
                               <option value="">
                               Seleccione unidad...
                               </option>
                               <?php foreach($unidades as $unidad): ?>
                               <?php if($unidad['Unidade']['id'] == $this->request->data['Insumo']['unidade_id']): ?>
                                  <option value="<?php echo $unidad['Unidade']['id'] ?>" selected="selected">
                                  <?php echo $unidad['Unidade']['nombre'] ?>
                                  </option>
                               <?php else: ?>
                                  <option value="<?php echo $unidad['Unidade']['id'] ?>">
                                  <?php echo $unidad['Unidade']['nombre'] ?>
                                  </option>
                               <?php endif; ?>
                                  
                               <?php endforeach; ?>
                            </select>
                            <select class="span3" name="data[Insumo][medida_id]">
                               <option value="">
                               Seleccione medida en...
                               </option>
                               <?php foreach($medidas as $medida): ?>
                               <?php if($medida['Medida']['id'] == $this->request->data['Insumo']['medida_id']): ?>
                                  <option value="<?php echo $medida['Medida']['id'] ?>" selected="selected">
                                  <?php echo $medida['Medida']['nombre'] ?>
                                  </option>
                               <?php else: ?>
                                  <option value="<?php echo $medida['Medida']['id'] ?>">
                                  <?php echo $medida['Medida']['nombre'] ?>
                                  </option>
                               <?php endif; ?>
                               <?php endforeach; ?>
                            </select>
                            </div>
                        <!-- // form item -->

                        <label for="accountAddressState" class="control-label">Categoria <span class="required">*</span></label>
                        <div class="controls">
                            <select id="accountAddressState" class="span6" name="data[Insumo][categoria_id]" required>
                                <option value="" selected="selected">Seleccione Categoria</option>
                                <?php foreach ($dcc as $dc): ?>                                    
                                    <option value="<?php echo $dc['Categoria']['id']; ?>"><?php echo $dc['Categoria']['nombre']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- // form item -->
                        
                        <label for="accountAddressState" class="control-label">Lugar <span class="required">*</span></label>
                        <div class="controls">
                            <select id="accountAddressState" class="span6" name="data[Insumo][lugare_id]" required>
                                <option value="" selected="selected">Selecione lugar</option>
                                <?php foreach ($dcl as $dl): ?>  
                                   <?php if($dl['Lugare']['id'] == $this->request->data['Insumo']['lugare_id']): ?>
                                   <option value="<?php echo $dl['Lugare']['id']; ?>" selected="selected">
                                   <?php echo $dl['Lugare']['nombre']; ?>
                                   </option>
                                   <?php else: ?>                                  
                                    <option value="<?php echo $dl['Lugare']['id']; ?>"><?php echo $dl['Lugare']['nombre']; ?></option>
                                   <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- // form item -->

                        <label for="formA06">Observaciones:</label>
                        <textarea id="formA06" class="input-block-level" rows="3" placeholder="Escriba las Observaciones", name="data[Insumo][observaciones]"></textarea>
                        <!-- // form item -->

                        <button class="btn btn-green" type="submit">Editar Insumo</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
  </div> 