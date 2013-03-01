<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/insumos'); ?>               
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
                                        <input id="reportView" type="text" name="dato" value="08-10-2012 - 29-10-2012">
                                        <button id="reportSelect" class="btn" name="reportSelect">Select a un per&iacute;odo de tiempo <span class="caret"></span></button>
                                    </div>
                                </fieldset>
                            <?php echo $this->Form->end(array('Value'=>'Enviar', 'class'=>"btn btn-green")) ?>
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