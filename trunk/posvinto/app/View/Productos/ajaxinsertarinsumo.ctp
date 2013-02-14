<div class="widget widget-simple">
    <div class="widget-header">
        <h4>
            <i class="fontello-icon-user">
            </i>
            Insertar insumo plato:
            <small>
                <?php echo $producto['Producto']['nombre'] ?>
            </small>
        </h4>
    </div>
    <div class="widget-content">
        <div class="widget-body">
            <?php echo $this->Form->create('Productos', array('id' => "accounForm", 'class' => 'form-horizontal'))
            ?>
            <div class="row-fluid">
                <div class="span12 form-dark">
                    <fieldset>
                        <ul class="form-list label-left list-bordered dotted">
                            <!-- // section form divider -->
                            <li class="control-group">
                                <label for="accountPrefix" class="control-label">
                                    Insumo
                                </label>
                                <div class="controls">
                                    <select id="accountAddressState" class="span6" name="data[Porcione][insumo_id]">
                                        <option value="" selected="selected">
                                            Seleccione un insumo
                                        </option>
                                        <?php foreach ($insumos as $insumo): ?>
                                            <option value="<?php echo $insumo['Insumo']['id'] ?>">
                                                <?php echo h($insumo['Insumo']['nombre']) ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </li>
                            <!-- // form item -->
                            <li class="control-group">
                                <label for="accountPrefix" class="control-label">
                                    Cantidad
                                </label>
                                <div class="controls">
                                    <?php
                                        echo $this->Form->hidden('Porcione.producto_id', array('value' => $producto['Producto']['id']));
                                    ?>
                                    <?php
                                        echo $this->Form->text('Porcione.cantidad', array('placeholder' => 'Cantidad numeral Ej.: 200'));
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
