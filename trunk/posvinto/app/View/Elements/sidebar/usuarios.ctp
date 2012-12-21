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
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Usuarios </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Usuarios', 'action'=>'index')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Lista usuario</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Usuarios', 'action'=>'nuevo')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Nuevo usuario</span> </a> </li>
            </ul>
        </li>
        <!-- // item accordionMenu Dashboard -->
        <li class="accordion-group active">
            <div class="accordion-heading"> <a href="#accForms" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon aweso-icon-list-alt"></span><i class="chevron fontello-icon-right-open-3"></i> Asistencias </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accForms">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Controlingresosalidas', 'action'=>'formbuscar')); ?>"> <i class="fontello-icon-right-dir"></i> Control Asistencias </a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Controlingresosalidas', 'action'=>'index')); ?>"> <i class="fontello-icon-right-dir"></i> Lista asistencias </a></li>               
            </ul>
        </li> 
        <!-- // item accordionMenu Dashboard -->
        <li class="accordion-group active">
            <div class="accordion-heading"> <a href="#accForms" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon aweso-icon-list-alt"></span><i class="chevron fontello-icon-right-open-3"></i> Multas </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accForms">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'ConfMultas', 'action'=>'index')); ?>"> <i class="fontello-icon-right-dir"></i> Lista multas </a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'ConfMultas', 'action'=>'nuevo')); ?>"> <i class="fontello-icon-right-dir"></i> Nueva multa </a></li>               
            </ul>
        </li>        
    </ul>
    <!-- // sidebar menu -->

    <div class="sidebar-item"></div>
    <!-- // sidebar item --> 
</div>
