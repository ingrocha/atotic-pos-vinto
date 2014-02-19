
<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/platos'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h3>
                    <i class="aweso-icon-table opaci35">
                    </i>
                    Observaciones
                    <small>
                        <?php echo $plato['Producto']['nombre']; ?>
                    </small>
                </h3>             
            </div>
            <div class="row-fluid">
                <div class="span6 grider">
                    <div class="widget widget-simple widget-table">                        
                        <?php if (!empty($observaciones)): ?>
                            <table class="table boo-table table-striped table-condensed table-content bg-blue-light">
                                <colgroup>
                                    <col class="col20" />
                                    <col class="col20" />
                                    <col class="col45" />
                                </colgroup>
                                <caption>
                                    Listado de Observaciones                                   
                                </caption>
                                <thead>
                                    <tr>
                                        <th>Observacion</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>                                    
                                    <?php $c = 0; ?>
                                    <?php foreach ($observaciones as $obs): ?>                                       
                                        <tr id="DataRow<?php echo $c; $c++; ?>">
                                            <td class="bold">                                                
                                                <?php echo $obs['Productosobservacione']['observacion'];?>
                                            </td>
                                            <td>
                                            <a href="javascript:" onclick="$('#cargdatos').load('<?php echo $this->Html->url(array('action' => 'ajaxobservacion',$obs['Productosobservacione']['id']));?>');">EDITAR</a>
                                            <?php //echo $this->Html->link('Eliminar',array('action' => 'eliminaobservacion',$obs['Productosobservacione']['id']));?>
                                        
                                            <?php //echo $this->Html->image("iconos/edit.png", array("title" => "Editar", 'url' => array('action' => 'editar', $clas['Clase']['id']))); ?>
                                            <?php echo $this->Html->image("iconos/elim.png", array("title" => "Eliminar", 'url' => array('action' => 'eliminaobservacion', $obs['Productosobservacione']['id']))); ?>
                                        
                                            </td>
                                            
                                        </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- // BOO TABLE - DTB-2 -->
                <?php endif; ?>
                    </div>
                    <!-- // Widget -->
                    <div class="span4">
                        
                    </div>
                    <td class="low-padding align-center">
                            <?php echo $this->Html->link('Atras',array('controller'=>'Productos','action'=>'platos'),array('class'=>'btn btn-green'));?>
                        </td> 
                </div>
                <!-- // Column -->
                <div class="span6 grider" id="cargdatos">
                <div class="widget widget-simple widget-notes">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-edit"></i> Nueva Observacion</h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <?php echo $this->Form->create('Producto',array('action' => 'guardaobservacion'));?>
                                        <div id="formNotes" class="form-dark">
                                            <fieldset>
                                                <label for="accountTaxVat" class="control-label"> Observacion</label>
                                                <?php echo $this->Form->hidden('Productosobservacione.producto_id',array('value' => $idPlato));?>
                                                <?php echo $this->Form->text('Productosobservacione.observacion',array('class' => 'input-block-level'));?>
                                            </fieldset>
                                            <!-- // fieldset Input -->
                                            <?php echo $this->Form->submit('Guardar',array('class' => 'btn btn-yellow btn-block'));?>
                                            <?php echo $this->Form->end();?>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                </div>
                <!-- // Example row -->
            </div>
        </section>
        <!-- // fin contenido principal -->

    </div>
</div>
