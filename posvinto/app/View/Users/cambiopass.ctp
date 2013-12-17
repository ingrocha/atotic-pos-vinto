
<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/insumos'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('User', array('id' => 'formA', 'class' => 'span12')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i>Cambio de contrase&ntilde;a de <small>Usuario</small></h3>
                </div>
                <div class="span10 well well-nice">
                    <fieldset>
                        <legend>Formulario <small>Cambio de Contrase&ntilde;a</small></legend>
                        <label>Inserte el nuevo password<span class="f_req">*</span></label>
                        <?php echo $this->Form->password('password', array('placeholder'=>'Inserte una contrasena', 'value'=>"" ,'class'=>'span4','required'));?>
                        <!-- // form item -->
                        <button class="btn btn-green" type="submit">Cambiar contrase&ntilde;a</button>
                        </form>
                    </fieldset>
                    <!-- // fieldset Input Grid Sizig --> 
                </div>
            </div>
        </section>
    </div>  
</div> 