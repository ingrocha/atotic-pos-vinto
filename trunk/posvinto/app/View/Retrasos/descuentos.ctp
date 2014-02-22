
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
                    Descuentos de Sueldos
                    
                </h3>             
            </div>
            <div class="row-fluid">
                <div class="span6 grider">
                    <div class="widget widget-simple widget-table">                        
                        <?php if (!empty($descuentos)): ?>
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
                                        <th>Minutos</th>
                                        <th>Valor</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>                                    
                                    <?php $c = 0; ?>
                                    <?php foreach ($descuentos as $des): ?>                                       
                                        <tr id="DataRow<?php echo $c; $c++; ?>">
                                            <td class="bold">                                                
                                                <?php echo $des['ConfMulta']['minutos'];?>
                                            </td>
                                            <td><?php echo $des['ConfMulta']['valor'];?></td>
                                            <td>
                                            <a href="javascript:" onclick="$('#cargdatos').load('<?php echo $this->Html->url(array('action' => 'ajaxdescuento',$des['ConfMulta']['id']));?>');">EDITAR</a>
                                            <?php //echo $this->Html->link('Eliminar',array('action' => 'eliminaobservacion',$obs['Productosobservacione']['id']));?>
                                        
                                            <?php //echo $this->Html->image("iconos/edit.png", array("title" => "Editar", 'url' => array('action' => 'editar', $clas['Clase']['id']))); ?>
                                            <?php echo $this->Html->image("iconos/elim.png", array("title" => "Eliminar", 'url' => array('action' => 'eliminadescuento', $des['ConfMulta']['id']))); ?>
                                        
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
                            <?php echo $this->Html->link('Atras',array('controller'=>'Retrasos','action'=>'index'),array('class'=>'btn btn-green'));?>
                        </td> 
                </div>
                <!-- // Column -->
                <div class="span6 grider" id="cargdatos">
                <div class="widget widget-simple widget-notes">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-edit"></i> Nueva Descuento</h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <?php echo $this->Form->create('Retraso',array('action' => 'guardadescuento'));?>
                                        <div id="formNotes" class="form-dark">
                                            <fieldset>
                                            <div class="row-fluid">
                                            <div class="span12">
                                            <div class="span6">
                                            <label for="accountTaxVat" class="control-label">Minutos</label>
                                            <?php echo $this->Form->number('ConfMulta.minutos',array('class' => 'input-block-level'));?>
                                            </div>
                                            <div class="span6">
                                            <label class="control-label">Valor</label>
                                            <?php echo $this->Form->number('ConfMulta.valor',array('class' => 'input-block-level','step' => 0.01,'min' => 0.00));?>
                                            </div>
                                            </div>
                                            </div>
                                            <label class="control-label">Observacion</label>
                                            <?php echo $this->Form->text('ConfMulta.observacion',array('class' => 'input-block-level'));?>
                                                
                                                
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
