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
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Contratos </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Contratos', 'action'=>'index')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Lista contratos</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Contratos', 'action'=>'nuevo')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Nuevo contratos</span> </a> </li>
            </ul>
        </li>
                
    </ul>
    <!-- // sidebar menu -->

    <div class="sidebar-item"></div>
    <!-- // sidebar item --> 
</div>
