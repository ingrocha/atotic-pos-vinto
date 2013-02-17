<!-- Container -->
<div id="main-content" class="main-content container-fluid">
	<!-- // sidebar -->
	<?php echo $this->element('sidebar/configuraciones'); ?>
		<!-- // fin sidebar -->
	<div id="page-content" class="page-content">
			<section>
				<div class="page-header">
					<h3>
						<i class="aweso-icon-table opaci35">
						</i>
						Listado de Usuarios del 
						<small>
					    Sistema
						</small>
					</h3>
					<p>
						Despliega la lista de todos los Clientes registrados en el Sistema
					</p>
				</div>
                <div class="row-fluid">
					<div class="span12">
						<!--contenedor de la tabla-->
						<div class="widget widget-simple widget-table">
							<table id="exampleDTB-2" class="table boo-table table-striped table-content table-hover">
								<caption>
									Listado
									<span>
									</span>
								</caption>
								<thead>


    <tr>
        <th>Nro.</th>
        <th>Descuento</th>
        <th>Aciones</th>
    </tr>
</thead>
<tbody>
<?php $i = 1; ?>
<?php foreach($descuentos as $descuento): ?>
     <?php $id = $descuento['Descuento']['id'] ?>
    <tr>
       <td><?php echo $i; $i++; ?></td>
        <td>
        <?php echo $descuento['Descuento']['observacion']; ?>
        </td>
        <td>
            <?php 
                echo $this->Html->image("edit.png", array(
                    "title" => "Editar",
                    'url' => array('action' => 'editadescuento', $id)
                ));
            ?>
            
            <?php echo $this->Html->link($this->Html->image("elim.png"), array('controller' => 'configuraciones', 'action' => 'eliminardescuento', $id), array('escape' => false), "Esta seguro de eliminar el descuento?");?>
            
            
            <?php 
               // echo $this->Html->image("elim.png", array(
               //     "title" => "Editar",
               //     'url' => array('action' => 'eliminardescuento', $id)
               // ),
               // 'Esta seguro que desea eliminar?');
            ?>
           
            <?php //echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>    
            <?php //echo $this->Html->link('Eliminar',array('action'=>'eliminar',$id),null,('Desea aliminar a este usuario?')); ?>       
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</section>
</div>
</div>