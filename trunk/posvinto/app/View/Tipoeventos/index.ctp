<!-- Container -->
<div id="container">
	<div class="shell">		
		<!-- Small Nav -->
		<div class="small-nav">
			Lista de tipos de eventos
		</div>
		<!-- End Small Nav -->		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>			
			<!-- Content -->
			<div id="content">				
				<!-- Box -->
				<div class="boxa">	
					<!-- Table -->
	<div class="table">
	<table cellspacing="0" cellpadding="1" width="740" id="grid">
    <thead>
     <tr>
        <th style="width: 280px;">Nombre</th>
        <th style="width: 90px;">Descripcion</th>        
        <th>Acciones</th>     
    </tr>
    </thead>
   <tbody>
    <?php $c=1; ?>
    <?php foreach ($tipoeventos as $t): ?>
    <tr <?php echo fmod($c,2)?"class='mifila'":""; ?>>
        <td style="width: 280px;">
            <?php $id = $t['Tipoevento']['id']; ?>            
            <?php echo $t['Tipoevento']['nombre']; ?>
        </td>
        <td style="width: 92px;">
            <?php echo $t['Tipoevento']['descripcion']; ?>
        </td>     
        <td>  
         <?php 
                echo $this->Html->image("edit.png", array(
                    "title" => "Salida Almacen",
                    'url' => array('action' => 'edit', $id)
                ));
            ?>      
            <?php 
                echo $this->Html->image("elim.png", array(
                    "title" => "Salida Almacen",
                    'url' => array('action' => 'delete', $id)
                ));
            ?>                           
        </td>
    </tr>
<?php $c++; ?>
<?php endforeach; ?>

</tbody>

</table>

											
</div>
<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				
			</div>
			<!-- End Content -->			
			<?php echo $this->element('menureservas') ?>
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
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