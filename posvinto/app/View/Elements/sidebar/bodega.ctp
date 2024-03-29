<div id="main-sidebar" class="sidebar">
    <div class="sidebar-item">
        <div class="media profile">
            <div class="media-thumb media-left thumb-bordereb"> <a class="img-shadow" href="javascript:void(0);"><?php echo $this->Html->image('demo-avatar.jpg') ?></a> </div>
            <div class="media-body">
            
            <h5 class="media-heading">Nombre <small>Administrador</small></h5>
                
            </div>
        </div>
    </div>
    <!-- // sidebar item - profile -->

    <ul id="mainSideMenu" class="nav nav-list nav-side">
        <li class="accordion-group active">
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Almacen </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Insumos', 'action'=>'index')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Listado de Insumos</span></a> </li>
            </ul>
        </li>
        <!-- // item accordionMenu Dashboard -->
       <li class="accordion-group active">
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Bodega </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
            <li> <a href="<?php echo $this->Html->url(array('controller'=>'Insumos', 'action'=>'bodega')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Listado de Insumos en Bodega</span> </a> </li>
            <li> <a href="<?php echo $this->Html->url(array('controller'=>'Lugares', 'action'=>'index')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Lugares</span> </a> </li>
            </ul>
        </li>
        <li class="accordion-group active">
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Categorias e Insumos </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
            <li> <a href="<?php echo $this->Html->url(array('controller'=>'Insumos', 'action'=>'nuevo')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Nuevo Insumo</span></a> </li>
            <li> <a href="<?php echo $this->Html->url(array('controller'=>'Insumos', 'action'=>'categoriasalmacen')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Categorias</span> </a> </li>
            <li> <a href="<?php echo $this->Html->url(array('controller'=>'Insumos', 'action'=>'nuevacategoria')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Nueva Categoria</span> </a> </li>
            </ul>
        </li>
    </ul>
    <!-- // sidebar menu -->

    <div class="sidebar-item"></div>
    <!-- // sidebar item --> 
</div>
