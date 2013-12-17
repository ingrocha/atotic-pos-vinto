<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/clases'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Clase'); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i> Nueva<small>Categoria del Men&uacute;</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <label for="formA04">Nombre del Elemento Men&uacute;:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('nombre', array('class' => 'span4', 'placeholder' => 'Ingrese el Nombre Ej. Refresco', 'required')); ?>
                        </div>

                        <label for="formA04">Descripcion:</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('descripcion', array('class' => 'span5', 'placeholder' => 'Ingrese una Descripcion Ej. Bebidas dieteticas')); ?>
                        </div>
                        
                        <label for="formA04">Seleccione el Color del menu :</label>
                        <div class="controls controls-row"> 
                            <!--<input class="input-medium colorpicker margin-00" type="text" value="#8fff00" >-->
                            <?php echo $this->Form->text('color', array('class' => 'input-medium colorpicker margin-00', 'required')); ?>                            
                        </div>
                        
                        <label for="formA04">Orden de la Categoria del Menu :</label>
                        <div class="controls controls-row">                                                               
                            <?php echo $this->Form->text('orden', array('class' => 'span4', 'placeholder' => 'Ingrese el Orden del Menu Ej. 5')); ?>
                        </div>                                                

                        <button class="btn btn-green" type="submit">Guardar Insumo</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
  </div> 