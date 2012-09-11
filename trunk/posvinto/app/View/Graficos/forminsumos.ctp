<script type="text/javascript">
    $(function(){
        var pickerOpts = {        
        dateFormat: "yy-mm-dd",
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
<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			Filtro para ver insumos
		</div>
		<!-- End Small Nav -->
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				<!-- Box -->
                    <?php if(empty($pedidos)):?>
                    <div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Buscar por fechas</h2>
					</div>
					<!-- End Box Head -->
                    <!-- Form -->
                    <?php echo $this->Form->create(null, array(
                            'url' => array('controller' => 'graficos', 'action' => 'insumosfechas')
                            ));
                    ?>
					
             					
						
						<div class="form">
  
							<p class="inline-field">
                            <label>Para int&eacute;rvalos de fechas</label>
                            </p>
                            <p class="inline-field">
                                   <label>Fecha desde</label>
                                   <?php echo $this->Form->date('fecha_desde', array('size'=>10, 'class'=>'field size2', 'id'=>'date1'));?>
                            </p>
                            <p class="inline-field">
                                   <label>Fecha hasta</label>
                                   <?php echo $this->Form->date('fecha_hasta', array('size'=>10, 'class'=>'field size2', 'id'=>'date2'));?>
                                </p>
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							<!--<input type="button" class="button" value="preview" />-->
							<?php 
                            $options = array(
                            'label' => 'Enviar!',
                            'name' => 'Enviar',
                            'class' => 'button',
      
                            );
                            echo $this->Form->end($options);?>
						</div>
						<!-- End Form Buttons -->
					
                     
				</div>
				<!-- End Box -->
                <?php else:?>
                <div class="boxa">
                <div class="box-head">
					<h2>Listado pedidos</h2>
				</div>
                <!-- listado de pedidos -->
                <!-- Table -->
					<div class="table" >
						<table width="100%" border="0" cellspacing="0" cellpadding="0" id="grid">
                        <thead>
                        <tr>
								<!--<th width="13"><input type="checkbox" class="checkbox" /></th>-->
								<th>Ped.#</th>
								<th>Mesa</th>
								<th>Mozo</th>
                                <th>Fecha hora</th>
                                <th>Cuenta</th>
                                <th>Acciones</th>
							</tr>
                        </thead>
							<tbody>                            
                            <?php $i=0;?>
                            <?php foreach($pedidos as $data):?>
                                <?php if((fmod($i, 2) == 1)?$clase="odd":$clase="");?>
    							<tr class="<?php echo $clase;?>">
							   	 	<td><h3><?php echo $data['Pedido']['id'];?></h3></td>
    								<td><?php echo $data['Pedido']['mesa'];?></td>
    								<td><?php echo $data['Usuario']['nombre'];?></td></td>
                                    <td><?php echo $data['Pedido']['fecha'];?></td></td>
                                    <td><?php echo $data['Pedido']['total'];?></td></td>
    								<td>
                                    <a href="#" class="ico del">Borrar</a>
                                    <?php echo $this->Html->link('Ver detalle', array('action'=>'verdetallepedido', $data['Pedido']['id']), array('class'=>'ico edit'), array('escape'=>false)) ?>
                                    
                                    </td>
    							</tr>
							<?php endforeach;?>
                            </tbody>
                            <tfoot>
                        		<tr>
                                    <th><input type="text" name="search_engine" value="Buscar por pedido" class="search_init" /></th>
                        			<th><input type="text" name="search_engine" value="Buscar por Mesa" class="search_init" /></th>
                        			<th><input type="text" name="search_browser" value="Buscar por Mozo" class="search_init" /></th>                        			
                        		</tr>
                        	</tfoot>
						</table>
               
		              </div>
<script type="text/javascript" charset="utf-8">
                    var asInitVals = new Array();
            			$(document).ready(function() {
            				var oTable = $('#grid').dataTable(
                            {
                                "bJQueryUI": true,    
                                "oLanguage": {                                    
                                    "sEmptyTable":     "No data available in table",
                                    "sSearch":         "Busqueda por columnas:",
                                    "sInfo":           "Mostrando desde _START_ hasta _END_ de _TOTAL_ registros",
                                    "sInfoEmpty":      "Mostrando desde 0 hasta 0 de 0 registros",
                                    "sInfoFiltered":   "(filtrado de _MAX_ registros en total)",
                                    "sInfoPostFix":    "",
                                    "sInfoThousands":  ",",
                                    "sLengthMenu":     "Mostrar _MENU_ registros",
                                    "sLoadingRecords": "Cargando...",
                                    "sProcessing":     "Procesando...",
                                    "sSearch":         "Buscar:",
                                    "sZeroRecords":    "No se encontraron resultados",
                                    "oPaginate": {
                                        "sFirst":    "Primero",
                                        "sLast":     "Último",
                                        "sNext":     "Siguiente",
                                        "sPrevious": "Anterior"
                                    },
                                    "oAria": {
                                        "sSortAscending":  ": activar para Ordenar Ascendentemente",
                                        "sSortDescending": ": activar para Ordendar Descendentemente"
                                    }
                                }    
                            });
                            
                            $("tfoot input").keyup( function () {
        /* Filter on the column (the index) of this element */
        oTable.fnFilter( this.value, $("tfoot input").index(this) );
    } );
     
     
     
    /*
     * Support functions to provide a little bit of 'user friendlyness' to the textboxes in 
     * the footer
     */
    $("tfoot input").each( function (i) {
        asInitVals[i] = this.value;
    } );
     
    $("tfoot input").focus( function () {
        if ( this.className == "search_init" )
        {
            this.className = "";
            this.value = "";
        }
    } );
     
    $("tfoot input").blur( function (i) {
        if ( this.value == "" )
        {
            this.className = "search_init";
            this.value = asInitVals[$("tfoot input").index(this)];
        }
    } );
            			});
</script>  
               <div class="cl">&nbsp;</div>
                    <div class="ayuda">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo $this->Html->image('del.png'); ?> Elimina el Pedido&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo $this->Html->image('edit.png'); ?> Detalle del Pedido
                    </div>
                    <div class="cl">&nbsp;</div>
                </div>
             <?php endif;?>
			<!-- End Content -->
			</div>
			<?php echo $this->element('menureportes') ?>
			
			<div class="cl">&nbsp;</div>			
		
		<!-- Main -->
	</div>


