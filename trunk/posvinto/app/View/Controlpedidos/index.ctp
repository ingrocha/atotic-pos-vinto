<!-- Container -->
<div id="container">
	<div class="shell">			
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>			
			<!-- Content -->
			<div id="content">				
				<!-- Box -->
				<div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">LISTADO DE PEDIDOS</h2>						
					</div>
					<!-- End Box Head -->	
					<!-- Table -->
					<div class="table">
                    <?php //echo $this->element('tablagrid'); ?>                     
						<table id="grid" style="width: 740px;">
                        <thead>
							<tr>
								<!--<th width="13"><input type="checkbox" class="checkbox" /></th>-->                                
								<th>Mesa</th>
                                <th>Mozo</th>
                                <th style="width: 60px;">total</th>
                                <th>Hora</th>
                                <th>Acciones</th>								
							</tr>
                            </thead>
                            <tbody>
                            <?php $i=0;?>
                            
                            <?php foreach($data as $data):?>   
                            <?php $id=$data['Pedido']['id']; ?>                            
    							<tr>
							   	 	
                                    <td class="tituloh1"><?php echo $data['Pedido']['mesa'];?></td>
    								<td><?php echo $data['Usuario']['nombre'];?></td>
    								<td><?php echo $data['Pedido']['total'];?></td>
                                    <?php
                                    $hora = split(' ', $data['Pedido']['fecha']);
                                    ?>
                                    <td><?php echo $hora[1];?></td>
    								<td>
                                       <?php 
                                            echo $this->Html->image("facturar.png", array(
                                                "title" => "Facturar Pedido",
                                                'url' => array('action' => 'facturar1', $id)
                                            ));
                                        ?>
                                        <?php 
                                            echo $this->Html->image("recibo.png", array(
                                                "title" => "Imprimir recibo",
                                                'url' => array('action' => 'imprecibo', $id)
                                            ));
                                        ?>
                                       <?php //echo $this->Html->link('',array('controller' => 'controlpedidos', 'action' => 'facturar1', $data['Pedido']['id']), array('class' => 'ico edit')); ?>
                                       <?php //echo $this->Html->link('',array('controller' => 'controlpedidos', 'action' => 'Recibo', $data['Pedido']['id']), array('class' => 'ico edit')); ?>
                                    </td>
    							</tr>
							<?php endforeach;?>
                            </tbody>
                            <tfoot>
                        		<tr>
                        			<th><input type="text" name="search_engine" value="Buscar por Mesa" class="search_init" /></th>
                        			<th><input type="text" name="search_browser" value="Buscar por Moso" class="search_init" /></th>                        			
                        		</tr>
                        	</tfoot>
						</table>
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
                                        "sLast":     "�ltimo",
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
						<!-- Pagging -->						
						<!-- End Pagging -->	                       					
					</div>
                    <div class="cl">&nbsp;</div>
                    <div class="ayuda">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo $this->Html->image('facturar.png'); ?> Factura el Pedido&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo $this->Html->image('recibo.png'); ?> Imprime recibo del Pedido
                    </div>
                    <div class="cl">&nbsp;</div>
					<!-- Table -->					
				</div>
				<!-- End Box -->								
			</div>
			<!-- End Content -->
			
			<?php echo $this->element('menupedidos') ?>
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>

