<script type="text/javascript">
            jQuery(document).ready(function(){
                // binds form submission and fields to the validation engine
                jQuery("#UsuarioInventariotiendaForm").validationEngine();
                jQuery('#UsuarioImensualtForm').validationEngine();
            });
        </script>
<div class="centered">
<div  class="grid-1">
   <div class="title-grid">
       <span>Reportes Inventarios tiendas</span>
   </div>
</div>
   
   <div class="grid-2">
      <div class="title-grid"> <span>Diario</span></div>
      <div class="content-gird">
      <?php echo $this->Form->create(null, array('action'=>'inventariotienda'));?>
         <div class="elem">
                  <label>Seleccione usuario:</label>
                  <div class="right">
                     <?php echo $this->Form->select(null,$usuarios,array('name'=>'id','class'=>"validate[required] text-input"));?>
                  </div>
         </div>
         <div class="elem">
                  <label>Fecha:</label>
                  <div class="right">
                     <?php //echo $this->Form->dateTime('fecha', $dateFormat = 'YMD', $selected = null, $attributes = array("empty" => false), array('class'=>"validate[required] text-input"));?>
                     <?php echo $this->Form->text(null, array('name'=>'fecha', 'id'=>'fechaj','class'=>'validate[required]'));?>
                  </div>
         </div>
        
         <?php $opt = array('Value'=>'buscar', 'class'=>'button-input blue');?>
         <?php echo $this->Form->end($opt);?>

      </div>
   </div>
   <div class="grid-2">
       <div class="title-grid"><span>Mensual</span></div>
       <div class="content-gird">
       <?php echo $this->Form->create(null, array('action'=>'imensualt'))?>
         <div class="elem">
                  <label>Seleccione usuario:</label>
                  <div class="right">
                     <?php echo $this->Form->select(null,$usuarios2,array("name"=>"id",'class'=>"validate[required] text-input"));?>
                  </div>
         </div>
         <div>
             
         </div>
         <div class="elem">
                  <label>Fecha inicio:</label>
                  <div class="right">
                     <?php //echo $this->Form->dateTime('fecha3', $dateFormat = 'YMD', $selected = null, $attributes = array("empty" => false), array('class'=>"validate[required] text-input"));?>
                     <?php echo $this->Form->text(null, array('name'=>'fecha3', 'id'=>'fecha1','class'=>'validate[required]'));?>
                  </div>
         </div>
          
          <div class="elem">
                  <label>Fecha fin:</label>
                  <div class="right">
                     <?php //echo $this->Form->dateTime('fecha4', $dateFormat = 'YMD', $selected = null, $attributes = array("empty" => false), array('class'=>"validate[required] text-input"));?>
                     <?php echo $this->Form->text(null, array('name'=>'fecha4', 'id'=>'fecha2','class'=>'validate[required]'));?>
                  </div>
          
          
          
       </div>
       <div class="elem">
                  <label>Producto:</label>
                  <div class="right">
                     
                     <?php echo $this->Form->select(null,array("TARJETA"=>"TARJETA", "CHIPS"=>"CHIP","ACCESORIOS"=>"ACCESORIO", "OTROS"=>"OTROS"), array('name'=>'tipo','class'=>'validate[required]'));?>
                  </div>
          
          
          <?php $opt = array('Value'=>'buscar', 'class'=>'button-input blue');?>
          <?php echo $this->Form->end($opt);?>
       </div>
   </div>
</div>
<script type="text/javascript">
		jQuery(document).ready(function(){
    		var opts={
    		changeMonth:true,
    		changeYear:true,
    		dateFormat: "yy-mm-dd",
           
    		};
            //alert('demo');
            jQuery("#fechaj").datepicker(opts);
            jQuery("#fecha1").datepicker(opts);
            jQuery("#fecha2").datepicker(opts);	
        });
</script>