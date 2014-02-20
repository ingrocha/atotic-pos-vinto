<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/pedidos'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>            
            <div class="row-fluid">                
                <?php echo $this->Form->create('Reportes', array('action'=>'reportepedidos')); ?>
                <div class="page-header">
                    <h3><i class="fontello-icon-article-alt opaci35"></i>Reportes por rango de fechas</h3>
                </div>
                <div class="span7">
                <!-- // datarangepicker -->
                            
                            <p>Reporte por fechas</p>
                            <?php echo $this->Form->create('Reportes', array('action'=>'reportepedidos',  'class'=>"form-horizontal well well-nice well-small small-labels")); ?>
                            
                                <fieldset>
                                    <div class="input-append">
                                        Desde <?php echo $this->Form->date('fechaini',array('required'));?> hasta <?php echo $this->Form->date('fechafin',array('required'));?> <?php echo $this->Form->select('mesero',$meseros);?>
                                    </div>
                                    
                                </fieldset>
                            <?php echo $this->Form->end(array('Value'=>'Generar reporte', 'class'=>"btn btn-green")) ?>
                <!-- // datarangepicker -->
                </div><!-- fin span 7 -->
            </div>
        </section>
    </div>  
</div> 
<script>
$("#reportdate").click(function(){
    
    //console.log("cambia fecha".this.val);
});
</script>