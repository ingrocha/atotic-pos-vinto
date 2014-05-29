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
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Reporte Almacen </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Graficos', 'action'=>'almacenhoy')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">General</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Graficos', 'action'=>'formalmacen')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Por Fechas</span> </a> </li>
            </ul>
        </li>
        <!-- // item accordionMenu Dashboard -->
        <li class="accordion-group active">
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Reportes Bodega </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Graficos', 'action'=>'insumoshoy')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">General</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Graficos', 'action'=>'forminsumos')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Por Fechas</span> </a> </li>
            </ul>
        </li>
        <li class="accordion-group active">
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Reportes Ventas </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Graficos', 'action'=>'ventashoy')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Diario</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Graficos', 'action'=>'formreporte')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Por Fechas</span> </a> </li>
            </ul>
        </li>
        <li class="accordion-group active">
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Reportes Personal </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Reportes', 'action'=>'reporteasistencias')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Listado de Asistencias</span></a> </li>
            </ul>
        </li>
        
    </ul>

    <!-- // sidebar menu -->

    <div class="sidebar-item"></div>
    <!-- // sidebar item --> 
</div>
