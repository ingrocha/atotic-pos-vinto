<script type="text/javascript">
    $(function(){
        var pickerOpts = {        
        dateFormat: "Y-m-d",
        changeMonth: true,
        changeYear: true,
        defaultDate: "+5",
        yearRange: "-1:+2"        
    };    
        $("#date").datepicker(pickerOpts);
        $("#date1").datepicker(pickerOpts);
        $("#date2").datepicker(pickerOpts);
    });
</script>
<div id="main-content" class="main-content container-fluid">
   <?php echo $this->element('sidebar/usuarios'); ?>
   
   <div id="page-content" class="page-content">
      <section>
         <div class="row-fluid">
         <?php echo $this->Form->create(null, array(
                            'url' => array('controller'=>'Controlingresosalidas', 'action' => 'ingresosfechas')
                            ));
                    ?>
            <div class="page-header">
            <h3>
            <i class="fontello-icon-article-alt opaci35"></i>B&uacute;squeda<small>asistencias</small></h3>
            </div>
            <div class="span10 well well-nice">
               <fieldset>
               <legend>Formulario<small>busca asistencia</small></legend>
               <label for="formA04">Seleccione el mozo:</label>
               <?php echo $this->Form->select('mozo', $mozos) ?>
               <label for="formA04">para int&eacute;rvalos de fechas:</label>
               <div class="controls controls-row">
               <?php echo $this->Form->date('fecha_desde', array('placeholder'=>'desde','size'=>10, 'id'=>'date1'));?>
               <?php echo $this->Form->date('fecha_hasta', array('placeholder'=>'hasta', 'size'=>10, 'id'=>'date2'));?>
               </div>
               <button class="btn btn-green" type="submit">Enviar</button>
               </form>
               </fieldset>
            </div>
         </div>
      </section>
   </div>
</div>
