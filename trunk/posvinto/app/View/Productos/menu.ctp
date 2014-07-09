<?php
App::import('Model', 'Producto');
$modeloProducto = new Producto();

App::import('Model', 'Categoria');
$modeloCategoria = new Categoria();

App::import('Model', 'Productosobservacione');
$modeloproductosobservaciones = new Productosobservacione();
?>
<style>
    ul.tabs li{
        float:left; 
        list-style-type: none;
        padding: 0 0 5px 5px;
    }
    
    ul.productos li{
        list-style-type: none;
    }
    .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
        background-color: #EBEBEB;
        border-color: #ADADAD;
        color: #f00;
    }
    .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
        background-image: none;
        color: #f00;
    }
    
</style>
<div id="main-content" class="main-content container-fluid">
    <?php echo $this->element('sidebar/productosmenu'); ?>
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
            <h3><i class="aweso-icon-table opaci35"></i>CONFIGURACION DE MENU</h3>
            </div>
            <div class="row-fluid">
                <div class="span12 well well-nice">
                    
                    <div class="tabbable">
                      <ul class="nav nav-tabs" id="sortable">
                      <?php $i=0;?>
                      <?php foreach ($datosClases as $dc): ?>
                      <?php $i++;?>
                      <?php 
                      $activo = '';
                      if(!empty($datosClases[0]))
                      {
                        if($datosClases[0]['Clase']['id'] == $dc['Clase']['id'])
                        {
                            $activo = 'active';
                        }
                        else{
                            $activo = '';
                        }
                      }
                      ?>
                        
                        <li class="<?php echo $activo;?> dropdown" id="<?php echo $dc['Clase']['id'];?>">
                        
                        <a href="#tab<?php echo $dc['Clase']['id'];?>" data-toggle="tab" style="background: <?php echo $dc['Clase']['color'];?>; color: white;" ondblclick="$('.demenu').hide();$('#dropd<?php echo $dc['Clase']['id'];?>').show();"><?php echo $dc['Clase']['nombre']?></a>
                        <ul class="dropdown-menu demenu" id="dropd<?php echo $dc['Clase']['id'];?>">
                            <li><a href="javascript:" onclick="$('#tableft<?php echo $dc['Clase']['id'];?>').hide(200);$('#tabedit<?php echo $dc['Clase']['id'];?>').show(200);">Editar</a></li>
                            <li><?php echo $this->Html->link('Eliminar',array('action' => 'eliminaclase',$dc['Clase']['id']),array('confirm' => 'Esta seguro de eliminar!!!'));?></li>
                            
                        </ul>
                        </li>
                        
                      <?php endforeach; ?>
                      <li class="<?php echo $activo;?>" id="li0"><a href="#tab0" data-toggle="tab" style="color: green;">+ADD</a></li>
                      </ul>
                      <div class="tab-content">
                      <?php $i=0;?>                     
                      <?php foreach ($datosClases as $dc): ?>
                      <?php $i++;?>
                      <?php 
                      $activo = '';
                      if(!empty($datosClases[0]))
                      {
                        if($datosClases[0]['Clase']['id'] == $dc['Clase']['id'])
                        {
                            $activo = 'active';
                        }
                        else{
                            $activo = '';
                        }
                      }
                      ?>
                        <div class="tab-pane <?php echo $activo;?>" id="tab<?php echo $dc['Clase']['id'];?>">
                        <div class="row-fluid" style="display: none;" id="tabedit<?php echo $dc['Clase']['id'];?>">
                        <div class="span12 form-dark">
                        <fieldset>
                        <ul class="form-list label-left list-bordered dotted">
                        <li class="section-form">
                            <h4>Adicionar Nueva Clase</h4>
                        </li>
                        <?php echo $this->Form->create('Producto',array('action' => 'guardaclase'));?>
                        <li class="control-group">
                            <label for="accountPrefix" class="control-label">Nombre de la Clase</label>
                            <div class="controls">
                            <?php echo $this->Form->hidden('Clase.id',array('value' => $dc['Clase']['id']));?>
                            <?php echo $this->Form->text('Clase.nombre',array('class' => 'span6','value' => $dc['Clase']['nombre'],'required'));?>
                            </div>
                        </li>
                        <li class="control-group">
                            <label class="control-label">Descripcion</label>
                            <div class="controls">
                            <?php echo $this->Form->text('Clase.descripcion',array('class' => 'span6','value' => $dc['Clase']['descripcion']));?>
                            </div>
                        </li>
                        <li class="control-group">
                            <label for="accountPrefix" class="control-label">Color de la Clase</label>
                            <div class="controls">
                            <?php echo $this->Form->text('Clase.color',array('class' => 'input-medium colorpicker margin-00','value' => $dc['Clase']['color'],'required'))?>
                            </div>
                            
                        </li>
                        <li class="control-group">
                            <label for="accountPrefix" class="control-label">Estado</label>
                            <div class="controls">
                            <?php echo $this->Form->select('Clase.estado',array(1=>'Activo',0=>'Desactivo'),array('class' => 'apn12','value' => $dc['Clase']['estado'],'required'))?>
                            </div>
                            
                        </li>
                        <li class="control-group">
                            <div class="controls span3">
                            <?php echo $this->Form->submit('GUARDAR',array('class' => 'btn btn-success span12'));?>
                            
                            </div>
                            <div class="controls span3">
                            <a href="javascript:" class="btn btn-info span12" onclick="$('#tabedit<?php echo $dc['Clase']['id'];?>').hide(200);$('#tableft<?php echo $dc['Clase']['id'];?>').show(200);">CANCELAR</a>
                            <?php //echo $this->Html->link('SALIR',array('action' => 'menu'),array('class' => 'btn btn-success span6'));?>
                            </div>
                        </li>
                        <?php echo $this->Form->end();?>
                        </ul>
                        </fieldset>
                        </div>
                        </div>
                        <?php 
                        $categorias = $modeloCategoria->find('all',array('conditions' => array('Categoria.estado' => 1,'Categoria.clase_id' => $dc['Clase']['id']),'fields' => array('Categoria.nombre','Categoria.id','Categoria.descripcion','Categoria.tipo','Categoria.estado')));
                        ?>
                          <div class="tabbable tabs-left" id="tableft<?php echo $dc['Clase']['id'];?>">
                              <ul class="nav nav-tabs">
                              <?php foreach($categorias as $ca):?>
                              <?php 
                              $activo = '';
                              if(!empty($categorias[0]))
                              {
                                if($categorias[0]['Categoria']['id'] == $ca['Categoria']['id'])
                                {
                                    $activo = 'active';
                                }
                                else{
                                    $activo = '';
                                }
                              }
                              ?>
                                <li class="<?php echo $activo;?> dropdown">
                                <a href="#tabn<?php echo $ca['Categoria']['id']?>" data-toggle="tab" ondblclick="$('#dropmenu<?php echo $ca['Categoria']['id'];?>').show();" style="background: <?php echo $dc['Clase']['color'];?>; color: white;"><?php echo $ca['Categoria']['nombre']?></a>
                                
                                <ul class="dropdown-menu demenu" id="dropmenu<?php echo $ca['Categoria']['id'];?>">
                                    <li><a href="javascript:" onclick="$('#tableftdos<?php echo $ca['Categoria']['id'];?>').hide(200);$('#tabeditdos<?php echo $ca['Categoria']['id'];?>').show(200);">Editar</a></li>
                                    <li><?php echo $this->Html->link('Eliminar',array('action' => 'eliminacategoria2',$ca['Categoria']['id']),array('confirm' => 'Esta seguro de eliminar!!!'));?></li>
                                    
                                </ul>
                                
                                </li>
                                
                              <?php endforeach;?>
                              <li class=""><a href="#tabn<?php echo $dc['Clase']['id']?>nuevo" data-toggle="tab" style="color: green;">+Adicionar</a></li>
                              </ul>
                              <div class="tab-content">
                              <?php foreach($categorias as $ca):?>
                              <?php 
                              $activo = '';
                              if(!empty($categorias[0]))
                              {
                                if($categorias[0]['Categoria']['id'] == $ca['Categoria']['id'])
                                {
                                    $activo = 'active';
                                }
                                else{
                                    $activo = '';
                                }
                              }
                              ?>
                               <div class="tab-pane <?php echo $activo;?>" id="tabn<?php echo $ca['Categoria']['id']?>">
                               <div id="tableftdos<?php echo $ca['Categoria']['id'];?>">
                               <div class="row-fluid">
                               <?php $productos = $modeloProducto->find('all',array('recursive' => -1,'conditions' => array('Producto.estado' => 1,'Producto.categoria_id' => $ca['Categoria']['id'])));?>
                               <div class="span12">
                               <?php foreach($productos as $pro):?>
                               <div>
                               <a onclick="cargarmodal('<?php echo $this->Html->url(array('action' => 'ajaxproducto',$ca['Categoria']['id'],$pro['Producto']['id']));?>');" class="btn btn-large btn-block span4 padding-top20" href="javascript:" style="border-color: <?php echo $dc['Clase']['color'];?>; "><?php echo $pro['Producto']['nombre'];?></a>
                               </div>
                               <?php endforeach;?>
                               <a onclick="cargarmodal('<?php echo $this->Html->url(array('action' => 'ajaxproducto',$ca['Categoria']['id']));?>');" class="btn btn-large btn-block span4 padding-top20" style="color: green;">+ADICIONAR</a>
                               </div>
                               </div>
                               
                               </div>
                               <div id="tabeditdos<?php echo $ca['Categoria']['id'];?>" style="display: none;">
                               
                               <div class="row-fluid">
                                  <div class="span12 form-dark">
                        <fieldset>
                        <ul class="form-list label-left list-bordered dotted">
                        
                        <li class="section-form">
                            <h4>Edita Categoria</h4>
                        </li>
                        <?php echo $this->Form->create('Producto',array('action' => 'guardacategoria'));?>
                        <li class="control-group">
                            <label for="accountPrefix" class="control-label">Nombre de la Categoria</label>
                            <div class="controls">
                            <?php echo $this->Form->text('Categoria.nombre',array('class' => 'span6','required','value' => $ca['Categoria']['nombre']));?>
                            <?php echo $this->Form->hidden('Categoria.clase_id',array('value' => $dc['Clase']['id']));?>
                            <?php echo $this->Form->hidden('Categoria.id' ,array('value' => $ca['Categoria']['id']));?>
                            </div>
                        </li>
                        <li class="control-group">
                        
                            <label class="control-label">Descripcion</label>
                            <div class="controls">
                            <?php echo $this->Form->text('Categoria.descripcion',array('class' => 'span6','value' => $ca['Categoria']['descripcion']));?>
                            
                            </div>
                        </li>
                        <li class="control-group">
                        <div class="span3">
                        <label for="accountPrefix" class="control-label">Tipo de Categoria</label>
                            <div class="controls">
                            <?php echo $this->Form->select('Categoria.tipo',array('Comida' => 'Comida','Bebidas' => 'Bebiba'),array('class' => 'span6','required','value' => $ca['Categoria']['tipo']))?>
                            
                            </div>
                        </div>
                        <div class="span3">
                        <label for="accountPrefix" class="control-label">Estado</label>
                            <div class="controls">
                            <?php echo $this->Form->select('Categoria.estdo',array(1 => 'Activado',0 => 'Desactivado'),array('class' => 'span6','required','value' => $ca['Categoria']['estado']))?>
                            
                            </div>
                        </div>
                            
                        </li>
                        
                        <li class="control-group">
                            <div class="span12">
                            <div class="controls span3">
                            <?php echo $this->Form->submit('GUARDAR',array('class' => 'btn btn-success span12'));?>
                            
                            </div>
                            <div class="span3">
                            <a class="btn btn-info span12" href="javascript:" onclick="$('#tabeditdos<?php echo $ca['Categoria']['id'];?>').hide(200);$('#tableftdos<?php echo $ca['Categoria']['id'];?>').show(200);">CANCELAR</a>
                            </div>
                            </div>
                            
                        </li>
                        <?php echo $this->Form->end();?>
                        </ul>
                        </fieldset>
                        </div>
                                  </div>
                               
                               </div>
                                  
                                </div>
                               <?php endforeach;?>
                               <div class="tab-pane" id="tabn<?php echo $dc['Clase']['id']?>nuevo">
                                  <div class="row-fluid">
                                  <div class="span12 form-dark">
                        <fieldset>
                        <ul class="form-list label-left list-bordered dotted">
                        
                        <li class="section-form">
                            <h4>Adicionar Nueva Categoria</h4>
                        </li>
                        <?php echo $this->Form->create('Producto',array('action' => 'guardacategoria'));?>
                        <li class="control-group">
                            <label for="accountPrefix" class="control-label">Nombre de la Categoria</label>
                            <div class="controls">
                            <?php echo $this->Form->text('Categoria.nombre',array('class' => 'span6','required'));?>
                            <?php echo $this->Form->hidden('Categoria.clase_id',array('value' => $dc['Clase']['id']));?>
                            </div>
                        </li>
                        <li class="control-group">
                            <label class="control-label">Descripcion</label>
                            <div class="controls">
                            <?php echo $this->Form->text('Categoria.descripcion',array('class' => 'span6'));?>
                            <?php echo $this->Form->hidden('Categoria.estado' ,array('value' => 1));?>
                            </div>
                        </li>
                        <li class="control-group">
                            <label for="accountPrefix" class="control-label">Tipo de Categoria</label>
                            <div class="controls">
                            <?php echo $this->Form->select('Categoria.tipo',array('Comida' => 'Comida','Bebidas' => 'Bebiba'),array('class' => 'span6','required'))?>
                            
                            </div>
                        </li>
                        <li class="control-group">
                            <div class="controls span6">
                            <?php echo $this->Form->submit('ADICIONAR',array('class' => 'btn btn-success span12'));?>
                            </div>
                            
                        </li>
                        <?php echo $this->Form->end();?>
                        </ul>
                        </fieldset>
                        </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          
                        </div>
                        <?php endforeach;?>
                        <div class="tab-pane" id="tab0">
                        <div class="row-fluid">
                        <div class="span12 form-dark">
                        <fieldset>
                        <ul class="form-list label-left list-bordered dotted">
                        
                        <li class="section-form">
                            <h4>Adicionar Nueva Clase</h4>
                        </li>
                        <?php echo $this->Form->create('Producto',array('action' => 'adiclase'));?>
                        <li class="control-group">
                            <label for="accountPrefix" class="control-label">Nombre de la Clase</label>
                            <div class="controls">
                            <?php echo $this->Form->text('Clase.nombre',array('class' => 'span6','required'));?>
                            </div>
                        </li>
                        <li class="control-group">
                            <label class="control-label">Descripcion</label>
                            <div class="controls">
                            <?php echo $this->Form->text('Clase.descripcion',array('class' => 'span6'));?>
                            <?php echo $this->Form->hidden('Clase.estado' ,array('value' => 1));?>
                            </div>
                        </li>
                        <li class="control-group">
                            <label for="accountPrefix" class="control-label">Color de la Clase</label>
                            <div class="controls">
                            <?php echo $this->Form->text('Clase.color',array('class' => 'input-medium colorpicker margin-00','value' => '#8fff00','required'))?>
                            </div>
                        </li>
                        <li class="control-group">
                            <div class="controls">
                            <?php echo $this->Form->submit('ADICIONAR',array('class' => 'btn btn-success span6'));?>
                            </div>
                        </li>
                        <?php echo $this->Form->end();?>
                        </ul>
                        </fieldset>
                        </div>
                        </div>
                        </div>
                      </div>
                      
                    </div>
                    
                </div>
            </div>
            
            <div class="row-fluid">
            
            
              <script>
             
              
              $(document).ready(function(){
                $('#sortable').sortable({
                    
                    update: function() {
                        var stringDiv = "";
                        $("#sortable").children().each(function(i) {
                            var li = $(this);
                            stringDiv += " "+li.attr("id") + '=' + i + '&';
                        });
            
                        $.ajax({
                            type: "POST",
                            url: "<?php echo $this->Html->url(array('action' => 'guardaordenclase'));?>",
                            data: stringDiv
            
                        }); 
                    }
                }); 
                //$( "#sortable" ).disableSelection();
                $( "ul, li" ).disableSelection(); 
                //$('.sortable').sortable({ cancel: '.note' });
                $( "#li0" ).draggable({ revert: true });   
            });
              </script>
            
            </div>
            
        </section>
        
    </div>
</div>


