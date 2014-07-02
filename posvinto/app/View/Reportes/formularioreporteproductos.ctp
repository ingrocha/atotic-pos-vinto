<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/reportes'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">  
                <div class="span12 well well-nice">
                    <?php echo $this->Form->create('Reportes', array('action' => 'reporteproducto')); ?>
                    <div class="page-header">
                        <h3><i class="fontello-icon-article-alt opaci35"></i>Reporte de Ventas por Producto</h3>
                    </div>

                    <?php echo $this->Form->create('Reportes', array('action' => 'reportepedidos', 'class' => "form-horizontal well well-nice well-small small-labels")); ?>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="span4">
                                <h5>Desde</h5>
                                <?php echo $this->Form->date('fechaini', array('required', 'class' => 'span12')); ?>
                            </div>
                            <div class="span4">
                                <h5>Hasta</h5>
                                <?php echo $this->Form->date('fechafin', array('required', 'class' => 'span12')); ?>
                            </div>
                            <div class="span4">
                                <h5>Producto</h5>
                                <?php $productos[0] = 'TODOS'; ?>
                                <?php //debug($meseros);exit;?>
                                <?php echo $this->Form->select('producto', $productos, array('class' => 'span12', 'value' => 0)); ?>
                            </div>
                        </div>
                    </div>
                    <?php echo $this->Form->end(array('Value' => 'Generar reporte', 'class' => "btn btn-green span12")) ?>
                </div>              

            </div>
        </section>
        <section>            
            <div class="row-fluid">  
                <div class="span12 well well-nice">
                    <?php echo $this->Form->create('Reportes', array('action' => 'reportepedidos')); ?>
                    <div class="page-header">
                        <h3><i class="fontello-icon-article-alt opaci35"></i>Reporte por Atencion</h3>
                    </div>

                    <?php echo $this->Form->create('Reportes', array('action' => 'reportepedidos', 'class' => "form-horizontal well well-nice well-small small-labels")); ?>
                    <div class="row-fluid">
                        <div class="span12">
                            <!--<div class="span4">
                                <h5>Desde</h5>
                            <?php //echo $this->Form->date('fechaini', array('required', 'class' => 'span12')); ?>
                            </div>-->
                            <div class="span4">
                                <h5>Fecha</h5>
                                <?php echo $this->Form->date('fechafin', array('required', 'class' => 'span12')); ?>
                            </div>
                            <div class="span4">
                                <h5>Usuario</h5>
                                <?php $usuarios[0] = 'TODOS'; ?>
                                <?php //debug($meseros);exit;?>
                                <?php echo $this->Form->select('mesero', $usuarios, array('class' => 'span12', 'value' => 0)); ?>
                            </div>
                        </div>
                    </div>
                    <?php echo $this->Form->end(array('Value' => 'Generar reporte', 'class' => "btn btn-green span12")) ?>
                </div>              

            </div>
        </section>
        <!--<section>            
            <div class="row-fluid">  
            <div class="span12 well well-nice">
        <?php echo $this->Form->create('Reportes', array('action' => 'reportepedidos')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i>Reportes de Ventas por Moso</h3>
                </div>
                
        <?php echo $this->Form->create('Reportes', array('action' => 'reportepedidos', 'class' => "form-horizontal well well-nice well-small small-labels")); ?>
                <div class="row-fluid">
                <div class="span12">
                <div class="span4">
                <h5>Desde</h5>
        <?php echo $this->Form->date('fechaini', array('required', 'class' => 'span12')); ?>
                </div>
                <div class="span4">
                <h5>Hasta</h5>
        <?php echo $this->Form->date('fechafin', array('required', 'class' => 'span12')); ?>
                </div>
                <div class="span4">
                <h5>Usuario</h5>
        <?php echo $this->Form->select('usuario', $usuarios, array('class' => 'span12')); ?>
                </div>
                </div>
                </div>
        <?php echo $this->Form->end(array('Value' => 'Generar reporte', 'class' => "btn btn-green span12")) ?>
            </div>              
                
            </div>
        </section> -->
        <section>            
            <div class="row-fluid">  
                <div class="span12 well well-nice">
                    <?php echo $this->Form->create('Reportes', array('action' => 'reporteinventarios')); ?>
                    <div class="page-header">
                        <h3><i class="fontello-icon-article-alt opaci35"></i>Reportes de Inventarios</h3>
                    </div>

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="span3">
                                <h5>Desde</h5>
                                <?php echo $this->Form->date('fechaini', array('required', 'class' => 'span12')); ?>
                            </div>
                            <div class="span3">
                                <h5>Hasta</h5>
                                <?php echo $this->Form->date('fechafin', array('required', 'class' => 'span12')); ?>
                            </div>
                            <div class="span3">
                                <h5>Insumo</h5>
                                <?php $insumos[0] = 'TODOS'; ?>
                                <?php echo $this->Form->select('insumo', $insumos, array('class' => 'span12', 'value' => 0)); ?>
                            </div>
                            <div class="span3">
                                <h5>Lugar</h5>
                                <?php echo $this->Form->select('lugar', $lugares, array('class' => 'span12', 'required')); ?>
                            </div>
                        </div>
                    </div>
                    <?php echo $this->Form->end(array('Value' => 'Generar reporte', 'class' => "btn btn-green span12")) ?>
                </div>              

            </div>
        </section>
        <section>            
            <div class="row-fluid">  
                <div class="span12 well well-nice">
                    <?php echo $this->Form->create('Reportes', array('action' => 'reportefacturas')); ?>
                    <div class="page-header">
                        <h3><i class="fontello-icon-article-alt opaci35"></i>Reportes de Facturas</h3>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="span4">
                                <h5>Desde</h5>
                                <?php echo $this->Form->date('fechaini', array('required', 'class' => 'span12')); ?>
                            </div>
                            <div class="span4">
                                <h5>Hasta</h5>
                                <?php echo $this->Form->date('fechafin', array('required', 'class' => 'span12')); ?>
                            </div>

                        </div>
                    </div>
                    <?php echo $this->Form->end(array('Value' => 'Generar reporte', 'class' => "btn btn-green span12")) ?>
                </div>              

            </div>
        </section>
    </div>  
</div> 
<script>
    $("#reportdate").click(function() {

        //console.log("cambia fecha".this.val);
    });
</script>