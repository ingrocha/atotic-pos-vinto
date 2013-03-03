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
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Descuentos </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Configuraciones', 'action'=>'descuentos')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Descuento</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Configuraciones', 'action'=>'nuevodescuento')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Nuevo Descuento</span> </a> </li>
            </ul>
        </li>
        <li class="accordion-group active">
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Facturas </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'parametrosfacturas', 'action'=>'index')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Config.Factura</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'parametrosfacturas', 'action'=>'nuevo')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Nueva configuraci&oacute;n</span> </a> </li>
            </ul>
        </li>
        <!-- // item accordionMenu Dashboard -->
       
    </ul>
    

    <!-- // sidebar menu -->

    <div class="sidebar-item"></div>
    <!-- // sidebar item --> 
</div>
