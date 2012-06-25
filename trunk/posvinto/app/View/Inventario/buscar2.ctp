<script type="text/javascript">
            jQuery(document).ready(function(){
                // binds form submission and fields to the validation engine
                jQuery("#BuscaIndexForm").validationEngine();
            });
        </script>
        
<?php  echo $this->Form->create(null, array("name"=>"buscar","controller"=>'Inventario', "action"=>"informeclientes"));?>
<div class="centered">
   <div class="grid-3">
       <div class="title-grid"> <span>Diario de movimientos</span></div>
            <div class="content-gird">
               <div class="elem">
                  <label>Seleccione distribuidor:</label>
                  <div class="right">
                     <?php echo $this->Form->select('id', $usuarios,array('class'=>"validate[required] text-input"));?>
                  </div>
               </div>
               <div class="elem">
                  <label>Ingrese fecha:</label>
                  <div class="right">
                     <?php echo $this->Form->text('fecha', array('id'=>'fechaj', 'class'=>"validate[required]"));?>
                     <?php //echo $this->Form->dateTime('fecha', $dateFormat = 'YMD', $selected = null, $attributes = array("empty" => false));
                     //dateTime($fieldName, $dateFormat = 'DMY', $timeFormat = '12', $selected = null, $attributes = array())
                     ?>
                  </div>
                  
               </div>
             
              <div class="elem">
                  <?php $opt = array('Value'=>'buscar', 'class'=>'button-input blue');?>
                     <?php echo $this->Form->end($opt);?>
               </div>
            </div>
   </div>
</div>
<script type="text/javascript">
		jQuery(document).ready(function(){
    		var opts={
    		changeMonth:true,
    		changeYear:true,
    		dateFormat: "yy-m-d",
           
    		};
            //alert('demo');
            jQuery("#fechaj").datepicker(opts);	
        });
</script>