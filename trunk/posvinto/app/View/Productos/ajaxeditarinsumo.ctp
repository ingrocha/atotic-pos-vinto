<div class="widget widget-simple">
    <div class="widget-header">
        <h4>
            <i class="fontello-icon-user"></i>
            <?php //debug($datosInsumoProducto); ?>                
            <small>
                Editar cantidad del Insumo al plato
            </small>
            <?php echo $producto['Producto']['nombre']; ?>
        </h4>
    </div>
    <div class="widget-content">
        <div class="widget-body">
            Cantidad actual <b> <?php echo $datosInsumoProducto['InsumosProducto']['cantidad']; ?></b>
            <?php
                echo $this->Form->create('Productos', array('id' => "accounForm", 'class' => 'form-horizontal'))
            ?>
            <div class="row-fluid">
                <div class="span12 form-dark">
                    <fieldset>
                        <ul class="form-list label-left list-bordered dotted">

                            <!-- // form item -->
                            <li class="control-group">
                                <label for="accountPrefix" class="control-label">
                                    Ingrese Nueva Cantidad
                                </label>
                                <div class="controls">
                                    <?php
                                    echo $this->
                                    Form->hidden('InsumosProducto.producto_id', array('value' => $producto['Producto']['id']))
                                    ?>
                                    <?php
                                    echo $this->
                                    Form->text('InsumosProducto.cantidad', array('placeholder' => 'Cantidad numeral Ej.: 200'))
                                    ?>
                                </div>
                            </li>
                            <!-- // form item -->
                        </ul>
                    </fieldset>
                    <!-- // fieldset Input -->
                    <div class="form-actions">
                        <button type="submit" class="btn btn-blue">
                            Guardar
                        </button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
