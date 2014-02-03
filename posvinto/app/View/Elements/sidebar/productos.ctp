<div id="main-sidebar" class="sidebar sidebar-inverse">
    <div class="sidebar-item">
        <div class="media profile">
            <div class="media-thumb media-left thumb-bordereb"> <a class="img-shadow" href="javascript:void(0);"><?php echo $this->Html->image('demo-avatar.jpg') ?></a> </div>
            <div class="media-body">
                <h5 class="media-heading">Nombre <small>as Administrador</small></h5>
                <p class="data">Last Access: 16 May 15:30</p>
            </div>
        </div>
    </div>
    <!-- // sidebar item - profile -->

    <ul id="mainSideMenu" class="nav nav-list nav-side">
        <li class="accordion-group active">
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Productos </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Productos', 'action'=>'index')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Listado de Productos</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Productos', 'action'=>'nuevo')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Nuevo Producto</span> </a> </li>
            </ul>
        </li>
        <!-- // item accordionMenu Dashboard -->
        <li class="accordion-group active">
            <div class="accordion-heading"> <a href="#accForms" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon aweso-icon-list-alt"></span><i class="chevron fontello-icon-right-open-3"></i> Categorias </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accForms">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Insumos', 'action'=>'nuevo')); ?>"> <i class="fontello-icon-right-dir"></i> Nuevo Insumo </a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Insumos', 'action'=>'categoriasalmacen')); ?>"> <i class="fontello-icon-right-dir"></i> Listado Categorias </a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Insumos', 'action'=>'nuevacategoria')); ?>"> <i class="fontello-icon-right-dir"></i> Nueva Categoria </a> </li>                
            </ul>
        </li>         
    </ul>
    <!-- // sidebar menu -->

    <div class="sidebar-item"></div>
    <!-- // sidebar item --> 

</div>