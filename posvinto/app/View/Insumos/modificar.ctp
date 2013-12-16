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
                            <div class="span4">
                            
                            <?php echo $this->Form->text('preciocompra', array('class' => 'span3', 'placeholder' => 'Precio de compra Ej: 12.50', 'required', 'pattern'=>"^(\d|-)?(\d|,)*\.?\d*$")); ?>
                            <span>Precio de compra</span>
                            </div>
                            <div class="span4">
                            <?php echo $this->Form->text('precioventa', array('class' => 'span3', 'placeholder' => 'Precio de venta Ej: 60', 'required', 'pattern'=>"^(\d|-)?(\d|,)*\.?\d*$")); ?>                                
                            <span>Precio de venta</span>
                            </div>
                                                                                     
                        </div>
                        <!-- // form item -->

                        <label for="accountAddressState" class="control-label">Categoria <span class="required">*</span></label>
                        <div class="controls">
                            <?php echo $this->Form->select('tipo_id', $dct, array('class'=>'span6')); ?>                            
                        </div>
                        <label>
                        Tipo <span class="required">*(para reporte de stock)</span>
                        </label>
                        <div class="controls">
                            <select id="accountAddressState" class="span6" name="data[Insumo][tipo]" required>
                                <option value="" selected="selected">Selecione el tipo</option>
                                <option value="comida">COMIDAS/PLATOS</option>
                                <option value="bebida">AGUAS/REFRESCOS/JUGOS/GASEOSAS</option>
                                <option value="tragos">TRAGOS/BEBIDAS ALCOHOLICAS</option>
                                <option value="postres">POSTRES</option>
                            </select>
                        </div><!-- // form item -->

                        <label for="formA06">Observaciones:</label>
                        <textarea id="formA06" class="input-block-level" rows="3" placeholder="Escriba las Observaciones", name="data[Insumo][observaciones]"></textarea>
                        <!-- // form item -->

                        <button class="btn btn-green" type="submit">Guardar Insumo</button>
                        </form>
                        <td class="low-padding align-center">
                            <?php echo $this->Html->link('Atras',array('action'=>'index'),array('class'=>'btn btn-green'));?>
                        </td> 
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
  </div> 